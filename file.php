<?php
ob_start();
include 'out.php';
$html=ob_get_contents();
ob_end_flush();
file_put_contents("$filename.html",$html);
