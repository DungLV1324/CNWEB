<?php
include("./model/dbProduct.php");
require_once './model/crud.php';

$db = new crud();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = "";
}
switch($controller){
    case "products":
        require_once './controller/index.php';
        break;
    default:
        require_once './controller/index.php';
        break;
}
