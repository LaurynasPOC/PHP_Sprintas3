<?php

$request = $_SERVER['REQUEST_URI'];
// print($request);
$route_prefix = '/PHP_Sprintas3';


switch ($request) {
    case $route_prefix.'/' :
        require __DIR__ . '/views/emp.php';
        break;
    case $route_prefix.'/emp' :
        require __DIR__ . '/views/emp.php';
        break;
    case $route_prefix.'/pos' :
        require __DIR__ . '/views/pos.php';
    break;
    case $route_prefix.'/addpos' :
        require __DIR__ . '/views/addPos.php';
        break;
    case preg_filter('/edelete=[0-9]+/', '$0' ,$request):
        require __DIR__ . '/views/delMethods.php';    
        break;
    case preg_filter('/pdelete=[0-9]+/', '$0' ,$request):
        require __DIR__ . '/views/delMethods.php';    
        break;
    case preg_filter('/eupdatable=[0-9]+/', '$0' ,$request):
        require __DIR__ . '/views/updateEmp.php';    
        break;
    case preg_filter('/updatable=[0-9]+/', '$0' ,$request):
        require __DIR__ . '/views/updatePos.php';    
        break;
    case $route_prefix.'/addEmp' :
        require __DIR__ . '/views/addEmp.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}



