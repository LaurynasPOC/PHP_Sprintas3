<?php
namespace EmpData;
include_once 'bootstrap.php';

if(isset($_REQUEST['eupdate'])){
    $emp = $entityManager->find('EmpData\Employees', $_REQUEST['update_id']);
    $emp->setName($_REQUEST['name']);
    $emp->setLastname($_REQUEST['lastname']);
    $emp->setAge($_REQUEST['age']);
    $emp->setPhone_number($_REQUEST['phone_number']);
    $emp->setPosition_id($_REQUEST['position_id']);
    $entityManager->flush();
    header('Location: emp');
}
?>
<link rel="stylesheet" href="views/stiliuss.css">
<?php
if(isset($_GET['eupdatable'])){
        $emp = $entityManager->find('EmpData\Employees', $_GET['eupdatable']);
     ?><form class="form" action="" method="POST" >
		<table >
            
			<tr>
                <input type="hidden" name="update_id" value="<?php echo $emp->getId() ?>">
				<td> <label for="name">Update name:</label></td>
				<td> <input type="text" id="name" name="name" value="<?php echo $emp->getName() ?>" Required></td>
			</tr>
			<tr>
				<td> <label for="lastname">Update lastname:</label></td>
				<td> <input type="text" id="lastname" name="lastname" value="<?php echo $emp->getLastname() ?>" Required></td>
			</tr>
			<tr>
				<td> <label for="age">Update age:</label></td>
				<td> <input type="number" id="age" name="age" value="<?php echo $emp->getAge() ?>" Required></td>
			</tr>
			<tr>
				<td> <label for="phone_number">Update phone number:</label></td>
				<td> <input type="number" id="phone_number" name="phone_number" value="<?php echo $emp->getPhone_number() ?>" Required></td>
			</tr>
			<tr>
				<td><label for="position_id">Position:</label></td>
				<td><select id="position_id" name="position_id">
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
        </select></td>
			</tr>
	
	<tr><td><input  type="submit" name="eupdate" value="Update"></td></tr>		
		</table>
	</form>	<?php
    }
    ?>