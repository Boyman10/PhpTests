<?php 
namespace OCFram;

/**
 * EntityCache class to store an entity object within a temp file
 * @version 1.0.0
 * @author boy
 * @deprecated TO BE REMOVED
 */
class EntityCache extends Cache
{
    protected $entity;
    
    /**
     * Constructor passing an entity as a parameter
     * @param arg, filename
     */
    public function __construct(Entity $arg, $name)
    {
        if (!empty($arg))
        {
            $this->entity = $arg;
            $this->timestamp = new DateTime();
           
        }
        
        $this->filename = __DIR__.'/../../tmp/cache/datas/'.$name;
    }
    
    /**
     * Saving entity and timestamp in file
     */
    public function save() {
        
        if (isset($this->entity) && isset($this->filename) && isset($this->timestamp)) 
        {
            // we do serialize and store in file as an array :
            $my_array = array($this->timestamp,$this->entity);
            $data = serialize($my_array);
            
            $fh = fopen($this->filename,'a+'); // Open as read/write, creating it if not existing
            fwrite($fh,$data); // we write.
            fclose($fh); // We close.
            
        }
        else
            throw new \RuntimeException('Entity, timestamp and file name must be set !');
    }
    
    /**
     * Retrieving entity and timestamp from file
     */
    public function retrieve() {
        
        if (isset($this->filename))
        {

            $data = file_get_contents($this->filename);
            // we do unserialize and retrieve variables :
            $my_array = unserialize($data);
            
            // some type of control
            if ($my_array[0] instanceof DateTime && $my_array[1] instanceof Entity) 
            {
                
                $this->timestamp = $my_array[0];
                $this->entity = $my_array[1];
            }
            else 
                throw new \RuntimeException('Wrong values in file !');
            
        }
        else
            throw new \RuntimeException('File name must be set !');
    }
}
