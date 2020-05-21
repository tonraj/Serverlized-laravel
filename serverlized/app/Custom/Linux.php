<?php

class Ubuntu18x64{


}

class Linux {

    protected $os = "";
    protected $task = "";
    
    function __construct($os, $task, $ssh){

        $this -> task = $task;
        
        if($os = "Ubuntu18x64"){
            $this->os = new Ubuntu18x64($ssh);
        }

    }

    function run(){
    
        if($this->task == "Install"){
            $os->install();
        }
    }

}