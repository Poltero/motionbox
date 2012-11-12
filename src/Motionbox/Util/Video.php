<?php

namespace Motionbox\Util;

/**
* Class Video
*/
class Video
{
    private $slug;

    public function __construct($slugArg){
        $this->slug = $slugArg;
    }

    public function setSlug(Slug $slug){
        $this->slug = $slug;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function parseURL(){
        $this->slug = str_replace("http://www.youtube.com/watch?v=", "http://youtu.be/", $this->slug);
        $this->slug = strstr ($this->string, "&", true);
        
        return $this->slug;
    }
}