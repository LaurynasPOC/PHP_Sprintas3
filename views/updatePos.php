<?php
namespace EmpData;
include_once 'bootstrap.php';

if(isset($_REQUEST['pupdate'])){
    $pos = $entityManager->find('EmpData\Positions', $_REQUEST['update_id']);
    $pos->setPositions($_REQUEST['position']);
    $entityManager->flush();
    header('Location: pos');
}
?>
<link rel="stylesheet" href="views/stiliuss.css">
<?php
if(isset($_GET['updatable'])){
        $pos = $entityManager->find('EmpData\Positions', $_GET['updatable']);
     ?><form class="form" action="" method="POST" >
		<table >
            
			<tr>
                <input type="hidden" name="update_id" value="<?php echo $pos->getId() ?>">
				<td> <label for="name">Update position:</label></td>
				<td> <input type="text" id="name" name="position" value="<?php echo $pos->getPositions() ?>" Required></td>
			</tr>
			
	
	<tr><td><input  type="submit" name="pupdate" value="Update"></td></tr>		
		</table>
	</form>	<?php
    }
    ?>