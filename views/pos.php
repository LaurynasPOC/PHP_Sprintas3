<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="views/stiliuss.css">
     <title>Document</title>
 </head>
 <body>
 <div class="header">
         <div>
        <a href="emp">Employees</a>
        <a href="pos">Positions</a>
    </div>
         <div class="srch"><form action="" method="POST">        
        <input type="text" name='srpos' placeholder="Enter position..">
       <input type="submit" name='sr' value="Search">
        </form></div>  
</div>

<?php

include_once 'bootstrap.php';

if(isset($_REQUEST['sr'])){
    $position = $entityManager->getRepository('EmpData\Positions')->findBy(array('positions' => $_REQUEST['srpos']));
} else {
    $position = $entityManager->getRepository('EmpData\Positions')->findAll();
}
print("<table id='customers'>
<tr>
<th>ID</th>
<th>Positions</th>
<th>Employees at position</th>
<th>Actions</th>
</tr>");
foreach($position as $p)
    print("<tr>" 
            . "<td>" . $p->getId()  . "</td>" 
            . "<td>" . $p->getPositions() . "</td>" 
            . "<td>" . $p->getName() . "</td>" 
            // . "<td>" . $p->getEmployeesData() . "</td>" 
            . "<td><button><a href='delMethods.php?pdelete={$p->getId()}'>DELETE</a></button>" 
            . "<button><a href='?updatable={$p->getId()}'>UPDATE</a></button></td>"
        . "</tr>");
print("</table>"); ?>

<button><a href="addpos">Add New Position</a></button></td>
</body>
</html>

