(function() {
    var postControllers = angular.module('postControllers', ['restServices']);

    postControllers.controller('PostController',
        function ($scope, $http) {
            $http({
                method: 'GET',
                url: 'http://127.0.0.1:8000/api/posts?apikey=tester'
            }).then(function successCallback(response) {
                $scope.posts = response.data;
            }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
            });
        }
    );

    postControllers.controller('PostDetailController', ['$routeParams', '$scope', 'Post', 'apikey',
        function ($routeParams, $scope, Post) {
            var id = $routeParams.id;
            $scope.post = Post('apikey').query();
        }
    ]);
}) ();

