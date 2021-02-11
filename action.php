<?php
$ip = $_SERVER['REMOTE_ADDR'];

unlink("tests/$ip.html");

$file = "tests/$ip.html";
$code = "<script>" . "\n";
$code .= $_POST['textbox'];
$code .= "</script>" . "\n";
$file = fopen($file, "a+")or die("Give permissions");
fwrite($file, $code);
fclose($file);

header("location: tests/$ip.html");
?>