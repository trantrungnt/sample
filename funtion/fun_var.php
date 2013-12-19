<?php

define('ABCD', 'aaaaaaa');

function bodauTiengViet( $tring )
{
	$tring = str_replace( 'â', 'a', $tring );
	$tring = str_replace( 'ă', 'a', $tring );
	$tring = str_replace( 'à', 'a', $tring );
	$tring = str_replace( 'ả', 'a', $tring );
	$tring = str_replace( 'ã', 'a', $tring );
	$tring = str_replace( 'ạ', 'a', $tring );
	$tring = str_replace( 'á', 'a', $tring );
	$tring = str_replace( 'ệ', 'e', $tring );
	$tring = str_replace( ' ', '-', $tring );
	return $tring . '' . ABCD;
}

$tiengviet = "Xin chào các bạn";

echo $tiengviet . '<br>';
//Xin chào các bạn

echo bodauTiengViet( $tiengviet ) . '<br>';
//Xin-chao-cac-ban

echo $tiengviet . '<br>';
//Xin chào các bạn

echo $tring . '----<br>';

phpinfo();

?>
