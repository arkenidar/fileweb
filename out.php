<?php
$filename="comments";
$array=json_decode(file_get_contents("$filename.json"));
foreach($array as $item){
$name=$item[0]; $says=$item[1];
echo htmlspecialchars("$name says $says <br>\n");
}
