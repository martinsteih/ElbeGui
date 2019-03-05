<?php

class Project implements JsonSerializable{
    private $projectName;
    private $projectDescription;

    public function __construct($name, $description){
        $this->projectName = $name;
        $this->projectDescription = $description;
    }

    public function getName(){
        return $this->projectName;
    }

    public function getDescription(){
        return $this->projectDescription;
    }

    public function setDescription(string $description){
        $this->projectDescription = $description;
    }

    public function jsonSerialize() {
		return get_object_vars( $this );
	}
}

?>