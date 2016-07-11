/**
 * Created by Bui on 6/1/16.
 */
(function() {
    var postControllers = angular.module('postControllers', []).config(
        function($interpolateProvider){
            $interpolateProvider.
            startSymbol('{$').
            endSymbol('$}');
        }
    );

    postControllers.controller('PostController', getPosts);
    function getPosts($scope, $http) {
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

    postControllers.controller('PostDetailController', getPost);
    function getPost($routeParams, $scope, $http) {
        var id = $routeParams.id;
        var $route = 'http://127.0.0.1:8000/api/posts/id/' + $id + '?apikey=tester';
        $http({
            method: 'GET',
            url: $route
        }).then(function successCallback(response) {
            $scope.posts = response.data;
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
    }
});

