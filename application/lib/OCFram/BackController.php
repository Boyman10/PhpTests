<?php
namespace OCFram;

abstract class BackController extends ApplicationComponent
{

    protected $action = '';

    protected $module = '';

    protected $page = null;

    protected $view = '';

    protected $cache = '';

    protected $managers = null;

    public function __construct(Application $app, $module, $action)
    {
        parent::__construct($app);
        
        $this->managers = new Managers('PDO', PDOFactory::getMysqlConnexion());
        $this->page = new Page($app);
        
        $this->setModule($module);
        $this->setAction($action);
        $this->setView($action);
        
        // Adding cache handling
        $this->setCache($action);
    }

    public function execute()
    {
        if (!file_exists($this->cache)) {
            
            $method = 'execute' . ucfirst($this->action);
            
            if (! is_callable([
                $this,
                $method
            ])) {
                throw new \RuntimeException('L\'action "' . $this->action . '" n\'est pas d�finie sur ce module');
            }
            
            $this->$method($this->app->httpRequest());
        }
    }

    public function page()
    {
        return $this->page;
    }

    public function setModule($module)
    {
        if (! is_string($module) || empty($module)) {
            throw new \InvalidArgumentException('Le module doit �tre une chaine de caract�res valide');
        }
        
        $this->module = $module;
    }

    public function setAction($action)
    {
        if (! is_string($action) || empty($action)) {
            throw new \InvalidArgumentException('L\'action doit �tre une chaine de caract�res valide');
        }
        
        $this->action = $action;
    }

    public function setView($view)
    {
        if (! is_string($view) || empty($view)) {
            throw new \InvalidArgumentException('La vue doit �tre une chaine de caract�res valide');
        }
        
        $this->view = $view;
        
        $this->page->setContentFile(__DIR__ . '/../../App/' . $this->app->name() . '/Modules/' . $this->module . '/Views/' . $this->view . '.php');
    }

    /**
     * Method which sets the cache page matching the action requested
     * Compare here the date and update the name of the page
     */
    public function setCache($cache)
    {
        if (! is_string($cache) || empty($cache)) {
            throw new \InvalidArgumentException('Le cache doit �tre une chaine de caract�res valide');
        }
        
        $path = __DIR__ . '/../../tmp/cache/datas/' . $this->app->name() . '-' . $this->module . '-' . $cache;
        
        foreach (glob($path . "*.htm") as $filename) {
            $cachefile = $filename;
        }
        
        // There is a match
        if (empty($cachefile) || !is_string($cachefile)) {
            // Generate a new file from timestamp :
            $cachefile = $path . '-' . time() . '.htm';
        }
        
        $this->cache = $cachefile;
        $this->page->setCacheFile($cachefile);
    }
}