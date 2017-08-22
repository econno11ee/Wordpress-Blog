<?php

/**
 * Posts short summary.
 *
 * Accessories description.
 *
 * @version 1.0
 * @author Nick
 */

class formInput {
  public $ID;
  public $post_author;
  public $post_date;
  public $post_date_gmt;
  public $post_content;
  public $post_title;
  public $post_excerpt;
  public $post_status;
  public $comment_status;
  public $ping_status;
  public $post_password;
  public $post_name;
  public $to_ping;
  public $post_modified;
  public $post_modified_gmt;
  public $post_content_filtered;
  public $post_parent;
  public $guid;
  public $post_mime_type;
  public $comment_count;

  public function __contstruct($data){
    foreach($data as $key => $val) {
        if(property_exists(__CLASS__,$key)) {
            $this->$key = $val;
        }
    }
  }
}
 ?>
