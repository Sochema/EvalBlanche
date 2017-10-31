<?php

class Motos extends Vehicules{

    protected $_type;

public function __construct($AllVehicules){
  parent::__construct($AllVehicules);
}


//GETTER
  public function getType(){
    return $this->_type;
  }

  //SETTER
  public function setType($type){
    $this->_type=$type;
  }

}
?>
