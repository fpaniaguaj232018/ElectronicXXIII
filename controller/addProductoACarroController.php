<?php
session_start();
$id = $_GET["id"];//No lo usamos porque hicimos una ñapa
$pu = $_GET["pu"];
$nombre = $_GET["nombre"];

if(isset($_SESSION["total"])){
    $_SESSION["total"]+=$pu;
    array_push($_SESSION["productosComprados"],$nombre);
    var_dump($_SESSION["productosComprados"]);
} else {
    $_SESSION["total"]=$pu;
    $_SESSION["productosComprados"]=[$nombre];
}