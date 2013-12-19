<?php

function bodautiengviet( $tring )
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
	$str2 = $tring;
	return $tring;
}

$tiengviet = "Xin chào các bạn";

echo $tiengviet . '<br>';
$str2 = '';

$tiengviet_kodau = bodautiengviet( $tiengviet, $str2 );
echo $tiengviet_kodau . '<br>';

$tiengviet2 = "Xin chào các bạn việt nam";

echo $tiengviet2 . '<br>';
$str2 = '';

$tiengviet_kodau2 = bodautiengviet( $tiengviet2, $str2 );
echo $str2;

function hello( )
{
	echo "Xin chào các bạn việt nam XXXXXXXXXXXX" . '<br>';
	;
}

hello( );

function hello2( )
{
	return "Xin chào các bạn việt nam XXXXXXXXXXXX 2";
}

echo bodautiengviet( hello2( ) ) . '<br>';
;
?>
