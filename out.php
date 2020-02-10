<?php
$filename="comments";
$path="$filename.json";

$tmp = fopen($path, 'rb');
@flock($tmp, LOCK_SH);

$contents = file_get_contents($path);

$array=json_decode($contents);

foreach($array as $item){
$name=$item[0]; $says=$item[1];
echo htmlspecialchars("$name says $says")."<br>\n";
}

@flock($tmp, LOCK_UN);
fclose($tmp);
