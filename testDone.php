<?php
error_reporting(E_ERROR);
$patch = explode('&',file_get_contents('php://input'));
$arr = array();
foreach($patch as $value){
    $tmp = explode('=',$value);
    $arr[$tmp[0]] = urldecode($tmp[1]);
}
if(is_numeric($arr['result'])){
    $url = 'result.php?fen='.intval($arr['result']);
    header('Content-Type: text/javascript; charset=utf-8');
    echo 'window.location = \''.$url.'\'';
}