<?php  

class Produits{
	private $id;
	private $categorie;
	private $prix;
	private $quantite;
	
	function __construct($categorie,$prix,$quantite){

		$this->categorie=$categorie;
		$this->prix=$prix;
		$this->quantite=$quantite;
		
	}
	
	function getId(){
		return $this->id;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getPrix(){
		return $this->prix;
	}

	function getQuantite(){
		return $this->quantite;
	}

	function setCategorie($categorie){
		$this->$categorie;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	
}

























?>