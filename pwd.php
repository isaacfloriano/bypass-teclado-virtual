<?php

error_reporting(0);
ini_set('display_errors', 0);   
set_time_limit(0);

function bypass($senha){
	$p1 = $senha[0];
	$p2 = $senha[1];
	$p3 = $senha[2];
	$p4 = $senha[3];
	$p5 = $senha[4];
	$p6 = $senha[5];

 function caso($letra){

    $url = "https://plataforma-api.production.api.genial.systems/api/v1/Login/teclado-virtual";
    $res = file_get_contents($url);
	$json = $res;

	$obj = json_decode($json);

	$obj->a[0];
	$obj->a[1];
	$obj->b[0];
	$obj->b[1];
	$obj->c[0];
	$obj->c[1];
	$obj->d[0];
	$obj->d[1];
	$obj->e[0];
	$obj->e[1];

    switch($letra){
		case $obj->a[0]:
		$letra =  "a";
		break;
		case $obj->a[1]:
		$letra =  "a";
		break;
		case $obj->b[0]:
		$letra =  "b";
		break;
		case $obj->b[1]:
		$letra =  "b";
		break;
		case $obj->c[0]:
		$letra =  "c";
		break;
		case $obj->c[1]:
		$letra =  "c";
		break;
		case $obj->d[0]:
		$letra =  "d";
		break;
		case $obj->d[1]:
		$letra =  "d";
		break;
		case $obj->e[0]:
		$letra =  "e";
		break;
		case $obj->e[1]:
		$letra =  "e";
		break;
		default:
		return " p1 ";
		break;
	}
    return $letra;
 }
 return caso($p1).caso($p2).caso($p3).caso($p4).caso($p5).caso($p6);

}
$getSenha = $_GET['senha'];
echo bypass($getSenha);