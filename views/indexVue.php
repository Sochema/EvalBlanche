<?php include('templates/header.php');

foreach ($AllVehicules as $Vehicule){


 ?>
<div class="card w-50">
  <div class="card-block">
    <h3 class="card-title"><?php echo $Vehicule->getType(); ?></h3>
    <p class="card-text"><?php echo $Vehicule->getMarque(); ?></p>
    <p class="card-text"><?php echo $Vehicule->getColor(); ?></p>
    <a href="article.php?article=<?php echo $Vehicule->getId();?>" class="btn btn-primary">See the vehicule</a>
  <form class="" action="index.html" method="post">
    <input type="submit" class="btn btn-primary" name="edit" value="Edit the vehicule">
    <input type="submit" class="btn btn-primary" name="delete" value="Delete the vehicule">
    <input type="hidden" name="idVehicule" value="<?php echo $Vehicule->getId();?>" class="btn btn-primary">
  </form>
  </div>
</div>

<?php
}
 ?>

<hr>


  <h3>COMPLETE THE FORM TO ADD A VEHICULE</h3>

<div class="row">
    <form action="" method="post" class="col s12">
      <div class="row">
        <div class="col s6">
          <p>
            <input class="with-gap" name="type" type="radio" value="cars" id="test1" />
            <label for="test1">Car</label>
          </p>
          <p>
            <input class="with-gap" name="type" type="radio" value="trucks" id="test2" />
            <label for="test2">Truck</label>
          </p>
          <p>
            <input class="with-gap" name="type" type="radio" value="motos" id="test3"  />
            <label for="test3">Moto</label>
          </p>
        </div>
        <div class="col s6">
          <p>
            <input class="with-gap" name="color" type="radio" value="jaune" id="test4" />
            <label for="test4">Jaune</label>
          </p>
          <p>
            <input class="with-gap" name="color" type="radio" value="vert" id="test5" />
            <label for="test5">Vert</label>
          </p>
          <p>
            <input class="with-gap" name="color" type="radio" value="noir" id="test6" />
            <label for="test6">Noir</label>
          </p>
          <p>
            <input class="with-gap" name="color" type="radio" value="blanc" id="test7" />
            <label for="test7">Blanc</label>
          </p>
          <p>
            <input class="with-gap" name="color" type="radio" value="gris" id="test8" />
            <label for="test8">Gris</label>
          </p>
        </div>
        <div class="col s6">
          <p>
            <input class="with-gap" name="marque" type="radio" value="volkswagen" id="test9" />
            <label for="test9">Volkwagen </label>
          </p>
          <p>
            <input class="with-gap" name="marque" type="radio" value="audi" id="test10" />
            <label for="test10">Audi</label>
          </p>
          <p>
            <input class="with-gap" name="marque" type="radio" value="peugeot" id="test11" />
            <label for="test11">Peugeot</label>
          </p>
          <p>
            <input class="with-gap" name="marque" type="radio" value="bmw" id="test12" />
            <label for="test12">BMW</label>
          </p>
          <p>
            <input class="with-gap" name="marque" type="radio" value="renault" id="test13" />
            <label for="test13">Renault</label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <button class="btn waves-effect waves-light" type="submit" name="submit">Submit a vehicule</button>
        </div>
      </div>
    </form>
  </div>

<?php include('templates/footer.php');?>
