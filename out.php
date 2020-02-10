<?php

// not used directly, but included

$filename="comments";
$path="$filename.db.json";

$contents = file_get_contents($path);

$array=json_decode($contents);

foreach($array as $item){
$name=$item[0]; $says=$item[1];
echo htmlspecialchars("$name says $says")."<br>\n";
}
