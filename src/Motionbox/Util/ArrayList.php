<?php

namespace Motionbox\Util;

/**
* Class ArrayList
*/
class ArrayList
{
    private $collection;

    public function __construct(){
        $this->collection = array();
    }

    public function add(Object $item){
        $this->collection[] = $item;
    }

    public function size(){
        return count($this->collection);
    }

    public function toArray(){
        return $this->collection;
    }

    public function toJSON(){
        return json_encode($this->collection);
    }
}