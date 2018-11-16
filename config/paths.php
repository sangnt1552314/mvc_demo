<?php
$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
$str_test = $_SERVER['REQUEST_URI'];
$count = 0;
$find = "/";
$positions = array();
for($i = 0; $i<strlen($str_test); $i++)
{
     $pos = strpos($str_test, $find, $count);
     if($pos == $count){
           $positions[] = $pos;
     }
     $count++;
}
$length = abs($positions[1] - $positions[0]);
$request_uri = substr($str_test, $positions[0], $length+1);
$url = $protocol.$_SERVER['HTTP_HOST'].$request_uri;

define('URL',$url);
?>
