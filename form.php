<?php
$filename="comments";
$path="$filename.json";

$tmp = fopen($path, "wb");
@flock($tmp, LOCK_EX);

$contents = file_get_contents($path);

$array = json_decode($contents);
$array[] = ["person", $_REQUEST["line"]];
$contents = json_encode($array);

file_put_contents($path, $contents);

@flock($tmp, LOCK_UN);
fclose($tmp);


include 'file.php';
