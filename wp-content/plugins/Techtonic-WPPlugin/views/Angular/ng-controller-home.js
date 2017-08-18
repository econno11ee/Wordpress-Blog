app.controller("Homecontroller", function($scope, $http, homefactory) {

  $scope.post = {};
  $scope.messages = {};

  $scope.submit = function (post) {
    console.log(post);
        $scope.validateData(post,$scope.recordResponse);
    };


    $scope.validateData = function (post, callBack) {
        console.log(post);
        homefactory.postTohomeController(post, $scope.recordResponse);

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
