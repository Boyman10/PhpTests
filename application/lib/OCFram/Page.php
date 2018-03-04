<?php
namespace OCFram;

require __DIR__.'/../lib/vendors/smarty-3.1.30/libs/Smarty.class.php';

/**
 * Handling page content here
 * Adding cache management
 * 
 * @version 1.0.12
 * @updated 03-03-2018
 * @author boy
 */
class Page extends ApplicationComponent
{

    protected $contentFile;

    // Added for providing cache temp files
    protected $cachePage;

    protected $vars = [];

    public function addVar($var, $value)
    {
        if (! is_string($var) || is_numeric($var) || empty($var)) {
            throw new \InvalidArgumentException('Le nom de la variable doit �tre une chaine de caract�res non nulle');
        }
        
        $this->vars[$var] = $value;
    }

    public function getGeneratedPage()
    {
        // Check if we are dealing with Smarty :
        if (substr($this->contentFile,-3) == 'tpl') {
            
            $smarty = new Smarty();
            return $smarty->display($this->contentFile);
            
            
            
        }
        
        
        // Check availability of cache page
        if (file_exists($this->cachePage)) {
            ob_start();
            require $this->cachePage;
            return ob_get_clean();
        }
        
        if (! file_exists($this->contentFile)) {
            throw new \RuntimeException('La vue sp�cifi�e n\'existe pas');
        }
        
        $user = $this->app->user();
        
        extract($this->vars);
        
        ob_start();
        require $this->contentFile;
        $content = ob_get_clean();
        
        ob_start();
        require __DIR__ . '/../../App/' . $this->app->name() . '/Templates/layout.php';
        $content = ob_get_clean();
        
        // Now write to cache if ready for that :
        if (! empty($this->cachePage) && is_string($this->cachePage)) {
            $result = file_put_contents($this->cachePage, $content . 'using cache...');
            
            if (! $result) {
                throw new FileWriteException("There was a problem writing cache file");
            }
        }
        return $content;
    }

    public function setContentFile($contentFile)
    {
        if (! is_string($contentFile) || empty($contentFile)) {
            throw new \InvalidArgumentException('La vue sp�cifi�e est invalide');
        }
        
        $this->contentFile = $contentFile;
    }

    /**
     * Setting the name of the cache page
     * @param cachepage
     */
    public function setCacheFile($cachePage)
    {
        if (! is_string($cachePage) || empty($cachePage)) {
            throw new \InvalidArgumentException('Invalid Cache page');
        }
        
        $this->cachePage = $cachePage;
    }
}