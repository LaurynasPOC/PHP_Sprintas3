<?php

include_once 'bootstrap.php';

if(isset($_GET['edelete'])){
    $emp = $entityManager->find('EmpData\Employees', $_GET['edelete']);
    $entityManager->remove($emp);
    $entityManager->flush();
    header("Location: emp");
}

if(isset($_GET['pdelete'])){
    $pos = $entityManager->find('EmpData\Positions', $_GET['pdelete']);
    $entityManager->remove($pos);
    $entityManager->flush();
    header("Location: pos");
}