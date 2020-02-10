<?php
$filename="comments";
$path="$filename.db.json";

$to_add=["person", $_REQUEST["line"]];

$tmp = fopen("$path.lockfile", "wb");
flock($tmp, LOCK_EX);

$contents = file_get_contents($path);

$array = json_decode($contents);
$array[] = $to_add;
$contents = json_encode($array);

file_put_contents($path, $contents);

include 'file.php';

flock($tmp, LOCK_UN);
fclose($tmp);
