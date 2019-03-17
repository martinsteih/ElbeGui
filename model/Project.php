<?php



//ToDo: Typing should be implemented
//ToDo: Tests
class Project implements JsonSerializable{
    private $projectId;
    private $projectName;
    private $projectDescription;
    private $configId;

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

    public function getProjectId(){
        return $this->projectId;
    }

    public function getConfigId()
    {
        return $this->configId;
    }

    public function setDescription(string $description){
        $this->projectDescription = $description;
    }

    public function jsonSerialize() {
		return get_object_vars( $this );
    }
    
    public function writeToDb($con){
        $query = 'call sp_add_user('.$this->projectName.', '.$this->projectDescription.', null)';
        $stmt = $con->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}

?>