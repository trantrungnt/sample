<?php

// Xac dinh thu muc goc cua site
define( 'NV_ROOTDIR', pathinfo( str_replace( DIRECTORY_SEPARATOR, '/', __file__ ), PATHINFO_DIRNAME ) );

include NV_ROOTDIR . '/xtemplate.class.php';

$array = array( );
$array[] = array(
	'id' => '1',
	'name' => 'Nguyễn Văn A',
	'date' => '20/11/2010'
);

$array[] = array(
	'id' => '2',
	'name' => 'Nguyễn Văn b',
	'date' => '20/11/2010'
);

$array[] = array(
	'id' => '3',
	'name' => 'Nguyễn Văn c',
	'date' => '20/11/2010'
);

$array2 = array( );

$xtpl = new XTemplate( 'list.html' );
if( ! empty( $array ) )
{
	foreach( $array as $value )
	{
		$xtpl->assign( 'DATA', $value );
		$xtpl->parse( 'main.table.loop' );
	}
	$xtpl->parse( 'main.table' );
}
$xtpl->parse( 'main' );
$cont = $xtpl->text( 'main' );

echo 'Thực hiên' . $cont;
?>