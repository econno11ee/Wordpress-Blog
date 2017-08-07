<?php 

include_once( ABSPATH . '/wp-content/plugins/Techtonic-WPPlugin/utils/DataAccess.php');
/* Template Name: Home Page */ 

global $wpdb;
$user = wp_get_current_user();

?>

<?php get_header();?>
<div class="col-md-12" ng-app="myShoppingList" ng-controller="myCtrl">
    <div class="row" ng-repeat="item in products">
        <?php if ( have_posts() ) while ( have_posts() ) :
                    the_post(); ?>            
        <?php the_content(); ?>   
        <?php endwhile; ?>	

        <?php echo($testData) ?>

        <span>{{item}}</span>
    </div>
</div>

<?php get_footer();?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script type="text/javascript">
var app = angular.module("myShoppingList", []); 


app.controller("myCtrl", function($scope, $http) {
    $scope.products = ["Milk", "Bread", "Cheese"];


    $scope.getData = function(callback){
        $http({ method:'get', url:"http://TGWP.com/homecontroller.php?method=GetHomePage"})
        .success(function(response){
            callback(response);
        })
    }

    $scope.GetDataCallback = function(data){
        $scope.products = data;
    }

    $scope.getData($scope.GetDataCallback);
});

</script>