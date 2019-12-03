<?php
echo "Test";
require('modulo_fuction.php');

$x=20;
$y=4;
$expect=5;

$answer=modulo($x,$y);

echo "Result: ".$x."%".$y."=".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed";
    exit(0); 
}
else
{
    echo "Test Failed";
    exit(1);
}
