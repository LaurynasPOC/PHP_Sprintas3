<?php
namespace EmpData;
include_once 'bootstrap.php';

if(isset($_REQUEST['add'])){
    $emp = new Employees();
    $emp->setName($_REQUEST['name']);
    $emp->setLastname($_REQUEST['lastname']);
    $emp->setAge($_REQUEST['age']);
    $emp->setPhone_number($_REQUEST['phone_number']);
    $emp->setPosition_id($_REQUEST['position_id']);
    $entityManager->persist($emp);
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
            $conn = mysqli_connect("localhost", "root", "mysql", "sprintas3");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT id, positions 
                FROM positions";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['positions']; ?></option>
                    <?php 
                }
            } ?>
        </select>
  <input class="in" type="submit" name='add' value="Submit">
</form>
</body>
</html>