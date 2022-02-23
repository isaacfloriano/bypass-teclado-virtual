<?php
/*
*	@𝘼𝙪𝙩𝙝𝙤𝙧 𝙋𝙪𝙜𝙣𝙤
*	𝙒𝙝𝙖𝙩𝙨𝘼𝙥𝙥 (𝟲𝟭)𝟵 𝟵𝟲𝟬𝟯-𝟳𝟬𝟯𝟲 
*	𝙏𝙚𝙡𝙚𝙜𝙧𝙖𝙢  𝙩.𝙢𝙚/𝙥𝙪𝙜𝙣𝙤_𝙛𝙘
*	
*/

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

	switch($p1){
		case $obj->a[0]:
		$p1 =  "a";
		break;
		case $obj->a[1]:
		$p1 =  "a";
		break;
		case $obj->b[0]:
		$p1 =  "b";
		break;
		case $obj->b[1]:
		$p1 =  "b";
		break;
		case $obj->c[0]:
		$p1 =  "c";
		break;
		case $obj->c[1]:
		$p1 =  "c";
		break;
		case $obj->d[0]:
		$p1 =  "d";
		break;
		case $obj->d[1]:
		$p1 =  "d";
		break;
		case $obj->e[0]:
		$p1 =  "e";
		break;
		case $obj->e[1]:
		$p1 =  "e";
		break;
		default:
		return " p1 ";
		break;
	}

	switch($p2){
		case $obj->a[0]:
		$p2 =  "a";
		break;
		case $obj->a[1]:
		$p2 =  "a";
		break;
		case $obj->b[0]:
		$p2 =  "b";
		break;
		case $obj->b[1]:
		$p2 =  "b";
		break;
		case $obj->c[0]:
		$p2 =  "c";
		break;
		case $obj->c[1]:
		$p2 =  "c";
		break;
		case $obj->d[0]:
		$p2 =  "d";
		break;
		case $obj->d[1]:
		$p2 =  "d";
		break;
		case $obj->e[0]:
		$p2 =  "e";
		break;
		case $obj->e[1]:
		$p2 =  "e";
		break;
		default:
		return " p2 ";
		break;
	}

	switch($p3){
		case $obj->a[0]:
		$p3 =  "a";
		break;
		case $obj->a[1]:
		$p3 =  "a";
		break;
		case $obj->b[0]:
		$p3 =  "b";
		break;
		case $obj->b[1]:
		$p3 =  "b";
		break;
		case $obj->c[0]:
		$p3 =  "c";
		break;
		case $obj->c[1]:
		$p3 =  "c";
		break;
		case $obj->d[0]:
		$p3 =  "d";
		break;
		case $obj->d[1]:
		$p3 =  "d";
		break;
		case $obj->e[0]:
		$p3 =  "e";
		break;
		case $obj->e[1]:
		$p3 =  "e";
		break;
		default:
		return " p3 ";
		break;
	}
	switch($p4){
		case $obj->a[0]:
		$p4 =  "a";
		break;
		case $obj->a[1]:
		$p4 =  "a";
		break;
		case $obj->b[0]:
		$p4 =  "b";
		break;
		case $obj->b[1]:
		$p4 =  "b";
		break;
		case $obj->c[0]:
		$p4 =  "c";
		break;
		case $obj->c[1]:
		$p4 =  "c";
		break;
		case $obj->d[0]:
		$p4 =  "d";
		break;
		case $obj->d[1]:
		$p4 =  "d";
		break;
		case $obj->e[0]:
		$p4 =  "e";
		break;
		case $obj->e[1]:
		$p4 =  "e";
		break;
		default:
		return " p4 ";
		break;
	}
	switch($p5){
		case $obj->a[0]:
		$p5 =  "a";
		break;
		case $obj->a[1]:
		$p5 =  "a";
		break;
		case $obj->b[0]:
		$p5 =  "b";
		break;
		case $obj->b[1]:
		$p5 =  "b";
		break;
		case $obj->c[0]:
		$p5 =  "c";
		break;
		case $obj->c[1]:
		$p5 =  "c";
		break;
		case $obj->d[0]:
		$p5 =  "d";
		break;
		case $obj->d[1]:
		$p5 =  "d";
		break;
		case $obj->e[0]:
		$p5 =  "e";
		break;
		case $obj->e[1]:
		$p5 =  "e";
		break;
		default:
		return " p5 ";
		break;
	}
	switch($p6){
		case $obj->a[0]:
		$p6 =  "a";
		break;
		case $obj->a[1]:
		$p6 =  "a";
		break;
		case $obj->b[0]:
		$p6 =  "b";
		break;
		case $obj->b[1]:
		$p6 =  "b";
		break;
		case $obj->c[0]:
		$p6 =  "c";
		break;
		case $obj->c[1]:
		$p6 =  "c";
		break;
		case $obj->d[0]:
		$p6 =  "d";
		break;
		case $obj->d[1]:
		$p6 =  "d";
		break;
		case $obj->e[0]:
		$p6 =  "e";
		break;
		case $obj->e[1]:
		$p6 =  "e";
		break;
		default:
		return " p6 ";
		break;
	}

	return $decodeSenha = $p1.$p2.$p3.$p4.$p5.$p6;

}
$getSenha = $_GET['senha'];
echo bypass($getSenha);