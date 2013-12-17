<?php

$arrayName = array(
	1,
	2,
	5,
	6,
	'Xin chào'
);

var_dump( $arrayName );

$arrayName = array(
	'key1' => 'value1',
	'key2' => 'value2'
);

var_dump( $arrayName );

$array = array(
	1 => "a",
	"1" => "b",
	1.5 => "c",
	'abc' => "d",
);

$array = array( );
$array[] = 'abc1';
$array[] = 'abc2';
$array[] = 'abc3';

$s = sizeof( $array );

for( $i = 0; $i < $s; $i++ )
{
	echo $array[$i] . '<br>';
}

$check = true;
$check = FALSE;
$Check = FALSE;

$full_name = 'abc';
$FullName = 'abc';

$a= 'Vũ Văn A';
$a= 'Vũ Văn A';


unset($tenbien, $check, $array);


?>