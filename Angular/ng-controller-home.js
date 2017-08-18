app.controller("Homecontroller", function($scope, $http,homefactory) {

  $scope.post = {};
  $scope.messages = {};

  $scope.submit = function (Post) {
        $scope.validateData(Post,$scope.recordResponse);
    };


    $scope.validateData = function (Post, callBack) {
        console.log(Post);
        homefactory.postTohomeController(Post, $scope.recordResponse);

    };

    $scope.recordResponse = function (response) {
        if (response == 'OK') {
            $scope.messages = 'Your post has successfully been added!'
        } else {
            $scope.messages = 'There was  problem adding your post :('
        }
    }
    $window.alert($scope.messages);
});
