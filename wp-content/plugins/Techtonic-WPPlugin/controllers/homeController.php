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
    $user->user_nicename;
    wp_send_json($user);
}

function GetPost(){
    global $wpdb;
    $wp_post->title = "Test";
    wp_send_json($wp_post);
}

function postItem(post){
    global $wpdb;
    $table = 'wp_posts';
    $data  = array(post_title=>$post_title, post_content=>$post_content, post_status=>$post_status, post_type=>$post_type, comment_status=>$comment_status, page_template=>$page_template);
    $wpdb->insert( $table, $data);
}
