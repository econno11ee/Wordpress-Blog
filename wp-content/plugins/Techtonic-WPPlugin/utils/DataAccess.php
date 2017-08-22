<?php
require_once(ABSPATH . '/wp-load.php');
require(ABSPATH . '/wp-content/plugins/Techtonic-WPPlugin/models/wp_post.php');

/**
 * DataAccess short summary.
 *
 * DataAccess description.
 *
 * @version 1.0
 * @author Nick Seeber
 */
class DataAccess
{
    private static $initialized = false;

    private static function initialize()
    {
        global $wpdb;
    	if (self::$initialized)
    		return;

    	self::$initialized = true;
    }

    private static $formInput = array();

    public static function getPosts() {
      if (count(self::$formInput) === 0){
      self::initialize();
      }
      return self::$formInput;
    }

    public static function GetHomepage(){
        self::initialize();
        global $wpdb;

        $query = ("");

        $results = "Test";
        // $wpdb->get_results($query);

        return $results;

    }
}
?>
