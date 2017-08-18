<?php

include_once( ABSPATH . '/wp-content/plugins/Techtonic-WPPlugin/utils/DataAccess.php');
/* Template Name: welcome */

global $wpdb;
$user = wp_get_current_user();


?>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
