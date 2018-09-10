<?php
namespace Zdeshniy89;

class Zar{
    
    public $var;
    
    public function __construct($var) {
        $this->var = $var;
    }
    
    public function printVar(){
        return $this->var;
    }
}

