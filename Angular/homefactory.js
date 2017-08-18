app.factory('homefactory',function ($http) {
  return {
      postTohomeController: function (Movie,callBack) {
          var url = "http://localhost:50941/wp-content/plugins/Techtonic-WPPlugin/controllers/homeController.php?method=PostItem"
          console.log(Movie)
          $http({
              method: 'POST', url: url, data: Movie, headers: { 'Content-Type': 'application/json' }
          }).
              then(function (response) {


                  callBack(response.statusText);



              }).catch(function (response) {
              });
      }
  };
});
