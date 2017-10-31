<?php
require ("../model/VehiculesManager.php");

function loadClass($class){
  require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");


$VehiculesManager= new VehiculesManager();


if(isset($_POST['submit'])){
  $type=ucfirst($_POST['type']);

  if(isset($_POST['type'], $_POST['marque'], $_POST['color'])){
    $vehicule=new $type($_POST);
    $VehiculesManager->addVehicules($vehicule);
  }
}



if (isset($_POST['delete'])){
  $Delete
}



if(isset($_POST['edit'])){

}


$AllVehicules=$VehiculesManager->getVehicules();
foreach ($AllVehicules as $key => $value){
  $type = ucfirst($value['type']);
  $AllVehicules[$key] = new $type($value);
}



// echo '<pre>';
// var_dump($AllVehicules);
// // var_dump($vehicules);
// echo'</pre>';
// // var_dump($car1);
//






include "../views/indexVue.php";
 ?>
