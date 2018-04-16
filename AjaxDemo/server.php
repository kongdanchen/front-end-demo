<?php
//get the q parameter from URL
$q=$_GET["q"];


if ($q == "name")
{
  $response="kdc";
}
else
{
  $response="null";
}

// output the 
// 不用echo的话 browser收不到回复信息
echo $response;
?>