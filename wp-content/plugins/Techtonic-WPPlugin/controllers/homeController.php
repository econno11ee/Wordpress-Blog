<?php
// require_once('../../../../wp-load.php');
// require_once('../../../../wp-load.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/Techtonic-WPPlugin/utils/DataAccess.php');


global $wpdb;

$id = $_GET["id"];  
$method = $_GET["method"];
 
if(is_callable($method)){
    $method($id, $wpdb);
}else{
    defaultResponse(); //or some kind of error message
}


function Gethomepage(){
    global $wpdb;
    $user->name = "Test";
    wp_send_json($user);
}












