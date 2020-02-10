<?php
$filename="comments";
$array=json_decode(file_get_contents("$filename.json"));
$array[]=['added',$_REQUEST["line"]];
file_put_contents("$filename.json",json_encode($array),LOCK_EX);
include 'file.php';