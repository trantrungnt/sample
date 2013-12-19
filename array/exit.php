<?php

$arrayName = array(
	'key1' => 'value1',
	'key2' => 'value2'
);

//- Kiểm tra giá trị tồn tại key trong mảng.
$key = 'key3';
if( isset( $arrayName[$key] ) )
{
	echo 'Tồn tại giá trị với key = ' . $key;
}
else
{
	echo 'Không Tồn tại giá trị với key = ' . $key;
}
echo '<br>';
echo '<br>';
//- Kiểm tra giá trị tồn tại giá trị trong mảng.
$value = 'value2';
if( in_array($value, $arrayName) )
{
	echo 'Tồn tại giá trị với giá trị = ' . $value;
}
else
{
	echo 'Không Tồn tại giá trị với giá trị = ' . $value;
}

echo '<br>';
echo '<br>';
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
echo '<br>';
echo '<br>';
if (in_array("mac", $os)) {
    echo "Got mac";
}
//print_r( $arrayName );
?>
