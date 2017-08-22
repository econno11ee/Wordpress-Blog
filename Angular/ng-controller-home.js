app.controller("Homecontroller", function($scope, $http,homefactory,$window) {

$scope.post = {};

 $scope.messages = {};
 console.log("hello");
 $scope.submit = function (post) {
   console.log(post);
        $scope.validateData(post,$scope.recordResponse);
    };


    $scope.validateData = function (post, callBack) {

        homefactory.postTohomeController(post);

    };

    $scope.recordResponse = function (response) {
        if (response == 'OK') {
            $scope.messages = 'Your post has successfully been added!'
        } else {
            $scope.messages = 'There was a problem adding your post :('
        }
    }

});
