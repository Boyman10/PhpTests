<?php 
declare(strict_types = 1);

namespace OC\Model\Entity;

abstract class  Model
{
   
    /**
     * Class constructor assigning values from parameter to corresponding attributes
     * @param $valeurs array values to assign
     * @return void
     */
    public function __construct($values = [])
    {
        if (!empty($values)) // if there are values, then assign them !
        {
            $this->hydrate($values);
        }
    }
    
    /**
     * We do the Hydratation here :
     * @param $data array of data to assign
     * @return void
     */
    public function hydrate($data)
    {
        foreach ($data as $attribut => $value)
        {
            $attribut = $this->replaceUnderScores($attribut);
            
            $method = 'set'.$attribut;
            
            if (is_callable([$this, $method]))
            {
                $this->$method($value);
            } else {
                echo '<p>##'.$method.'</p>';
                
                print_r(get_class_methods ($this));
            }
        }
    }
    
    /**
     * Method called to match the method name using the mysql submitted parameter
     * @param String $str
     */
    private function replaceUnderScores($str) : string
    {
        $array = explode("_",$str);
        $array = array_map("ucfirst",$array);
        
        return implode($array);
        
    }
        
}