<?php 

namespace OCFram;

/**
 * abstract class handling the cache system of OC Framework
 */
abstract class Cache 
{
    // variable storing the timestamp as a string
    protected $timestamp;
    protected $filename;

    /**
     * Saving to temporary file the different properties
     */
    abstract public function save();
    
    /**
     * Retrieving the data
     * @return Object
     */
    abstract public function retrieve();
}