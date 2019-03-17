<?php

class ElbeRfs implements JsonSerializable{
    private $initvm;
    private $project;
    private $target;

    public function __construct(){

    }

    public function get_initvm(){
        return $initvm;
    }

    public function get_project(){
        return $project;
    }

    public function get_target(){
        return $target;
    }

    public function jsonSerialize() {
		return get_object_vars( $this );
    }
}

?>