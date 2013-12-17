<?php

define( 'ABCD', 'value dsds  ds ad sd sa ds ds' );
$ABCD = 'value dsds  ds ad sd sa ds ds';

function testabc( $ABCD )
{
	$ABCD = 'value dsds  ds ad sd sa ds ds in function';
	return $ABCD;
}

testabc( $ABCD );

echo '<br>';

echo $ABCD;

?>