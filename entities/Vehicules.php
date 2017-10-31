<?php

abstract class Vehicules{
  protected $_id;
  protected $_marque;
  protected $_color;


// CONSTANTS

// const MARQUE = ['renault','peugeot', 'volkswagen', 'audi'];
// const COLOR = ['bleu', 'rouge', 'noir', 'bleu', 'jaune'];

// CONSTRUCTOR
public function __construct($AllVehicules){
  $this->hydrate($AllVehicules);
}

//SETTER

public function setId($id){
  $this->_id=$id;
}

public function setMarque($marque){
    $this->_marque=$marque;
}

public function setColor($color){
    $this->_color=$color;
}

//GETTER
public function getId(){
  return $this->_id;
}

public function getMarque(){
  return $this->_marque;
}

public function getColor(){
  return $this->_color;
}

//HYDRATE
public function hydrate(array $AllVehicules){
  foreach($AllVehicules as $key => $value){
    $method='set'.ucfirst($key);
    if (method_exists($this, $method)){
      //$method = mon setter et je lui rajoute la sa valeur, value
    $this->$method($value);
    }
  }
}


}







?>
