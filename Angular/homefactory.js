app.factory('homefactory',function ($http) {
  return {
      postTohomeController: function (post) {

          var url = "http://localhost:8080/wp-content/plugins/Techtonic-WPPlugin/controllers/homeController.php?method=postItem"
          console.log(post)
          $http({
              method: 'POST', url: url, data: post, crossDomain: true,headers: { 'Content-Type': 'application/json' }
          }).
              then(function ($response) {
                  $window.alert("Success");

              }).catch(function ($response) {
              });
      }
  };
});
