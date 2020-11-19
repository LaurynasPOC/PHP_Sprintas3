<?php
namespace EmpData;
include_once 'bootstrap.php';

if(isset($_REQUEST['add'])){
    $emp = new Employees();
    // $pos = new Positions();
    $emp->setName($_REQUEST['name']);
    $emp->setLastname($_REQUEST['lastname']);
    $emp->setAge($_REQUEST['age']);
    $emp->setPhone_number($_REQUEST['phone_number']);
    // $position = $emp->setPosition_id($_REQUEST['position_id']);
    $emp->getEmpPositions($_REQUEST['position_id']);
    $entityManager->persist($emp);
    // $entityManager->persist($pos);
    $entityManager->flush();
    header("Location: emp");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/stiliuss.css">
    <title>Document</title>
</head>
<body>

<form class="form" action="" method="POST">
  <label  for="name">Employee name: </label><br>
  <input  type="text" name="name"><br>
  <label  for="name">Employee lastname: </label><br>
  <input  type="text" name="lastname"><br>
  <label  for="name">Employee age: </label><br>
  <input  type="text" name="age"><br>
  <label  for="name">Employee phone number: </label><br>
  <input  type="text" name="phone_number"><br>
  <select name="position_id">
  <?php
            // Print all projects names in select options
            $positions = $entityManager->getRepository('EmpData\Positions')->findAll();
            foreach($positions as $p) {
                print('<option value=' . $p->getId() . '>' . $p->getPositions() . '</option>');
            }
            ?>
        </select>
  <input class="in" type="submit" name='add' value="Submit">
</form>
</body>
</html>