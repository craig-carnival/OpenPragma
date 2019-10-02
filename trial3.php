<?php
$arr = array("ide" => 121);
$string = "id=101&name=Nikhil";
parse_str($string, $arr);
var_dump($arr);
