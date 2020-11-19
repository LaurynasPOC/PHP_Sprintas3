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
            <input type="text" name='srname' placeholder="Enter name..">
           <input type="submit" name='sr' value="Search">
            </form></div>  
    </div>
    <?php

include_once 'bootstrap.php';

if(isset($_REQUEST['sr'])){
    $emp = $entityManager->getRepository('EmpData\Employees')->findBy(array('name' => $_REQUEST['srname']));
    
} else {
    $emp = $entityManager->getRepository('EmpData\Employees')->findAll();  
}


    print("<table id='customers'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Phone number</th>
    <th>Position ID</th>
    <th>Actions</th>
    </tr>");
    foreach($emp as $e)
    
        print("<tr>" 
        . "<td>" . $e->getId()  . "</td>" 
        . "<td>" . $e->getName() . "</td>" 
        . "<td>" . $e->getLastname() . "</td>" 
        . "<td>" . $e->getAge() . "</td>" 
        . "<td>" . $e->getPhone_number() . "</td>" 
        . "<td>" . $e->getEmpPositions()->getPositions() . "</td>" 
        . "<td><button><a href='delMethods.php?edelete={$e->getId()}'>DELETE</a></button>" 
        . "<button><a href='?eupdatable={$e->getId()}'>UPDATE</a></button></td>"
            . "</tr>");
    print("</table>"); ?>


    
    
    
    <button><a href="addEmp">Add New Employee</a></button></td>
    </body>
    </html>