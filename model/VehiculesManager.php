<?php

class VehiculesManager {

  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=CarHandle;charset=utf8', 'root', 'root');
      return $bdd;
  }


//FUNCTION TO ADD VEHICULES TO DATA BASE
  public function addVehicules($theVehicule){
      $requete=$this->getBdd()->prepare('INSERT INTO vehicules(type, marque, color) VALUES (:type, :marque, :color)');

      $requete->execute(array(
        'type' => $theVehicule->getType(),
        'marque' => $theVehicule->getMarque(),
        'color' => $theVehicule->getColor()
      ));
  }

//FUNCTION TO GET VEHICULES FROM DATA BASE

public function getVehicules(){
  $requete=$this->getBdd()->query('SELECT * FROM vehicules');
  $AllVehicules=$requete->fetchAll(PDO::FETCH_ASSOC);
  return $AllVehicules;
}

//GET ONE VEHICULE
public function getVehicule(){
  $requete=$this->getBdd()->prepare('SELECT * FROM vehicules WHERE id=?');
  $requete->exec($_POST['id']);
  $AllVehicules=$requete->fetchAll(PDO::FETCH_ASSOC);
  return $AllVehicules;
}

//DELETE THE VEHICULES FROM DATABASE

public function deleteVehicules(){
  $requete=$this->getBdd()->prepare('DELETE * FROM vehicules WHERE id=?');
  $requete->exec($_GET['id']);
}

//EDIT



}


 ?>
