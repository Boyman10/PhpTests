<?php 
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
            $method = 'set'.ucfirst($attribut);
            
            if (is_callable([$this, $method]))
            {
                $this->$method($value);
            }
        }
    }
    
    
}