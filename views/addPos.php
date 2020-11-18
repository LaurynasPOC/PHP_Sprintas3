<?php
namespace EmpData;
include_once 'bootstrap.php';
if(isset($_REQUEST['posAdd'])){
    $pos = new Positions();
    $pos->setPositions($_REQUEST['position']);
    $entityManager->persist($pos);
    $entityManager->flush();
    header("Location: pos");
} 
?>
<form class="form" action="" method="POST">
  <label class="in" for="name">New position: </label><br>
  <input class="in" type="text" name="position"><br>
  <input class="in" type="submit" name='posAdd' value="Submit">
</form>