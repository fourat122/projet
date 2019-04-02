<?php  

class Recyclage{
	private $id;
	private $type;
	private $description;
	private $poids;
	
	function __construct($type,$description,$poids){

		$this->type=$type;
		$this->description=$description;
		$this->poids=$poids;
		
	}
	
	function getId(){
		return $this->id;
	}
	function getType(){
		return $this->type;
	}
	function getDescription(){
		return $this->description;
	}

	function getPoids(){
		return $this->poids;
	}

	function setType($type){
		$this->$type;
	}
	function setDescription($description){
		$this->description=$description;
	}
	
	function setPoids($poids){
		$this->poids=$poids;
	}
	
}

























