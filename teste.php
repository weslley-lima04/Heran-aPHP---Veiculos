<?php 


include_once "veiculorodoviario.php";
include_once "caminhao.php";
include_once "automovel.php";

$caminhao = new Caminhao(8, 20, "Trigo");

$auto = new Automovel(4, 10, "Van");


$auto->Mostra();
$caminhao->Mostra();






 ?>