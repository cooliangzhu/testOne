<?php
/***
 * for git test
*/
echo "this is B file\n";
function add($a, $b)
{
	$res = $a + $b;
	return $res;
}
$res = add(10, 2);
echo $res;
// try to edit file on git server