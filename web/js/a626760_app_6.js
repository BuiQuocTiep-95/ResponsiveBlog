(function() {
    var app = angular.module('blog', []).config(
        function($interpolateProvider){
            $interpolateProvider.
                    startSymbol('{$').
            endSymbol('$}');
        }
    );

    app.controller('PostController',
        function ($scope, $http) {
            $http({
                method: 'GET',
                url: 'http://127.0.0.1:8000/api/posts?apikey=tester'
            }).then(function successCallback(response) {
                $scope.prdel = "hovno";
                $scope.posts = response.data;
            }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
            });
        }
    );

    app.controller('PostDetailController',
        function ($routeParams, $scope, $http) {
            var id = $routeParams.id;
            var $route = 'http://127.0.0.1:8000/api/posts/id/' + $id + '?apikey=tester';
            $http({
                method: 'GET',
                url: $route
            }).then(function successCallback(response) {
                $scope.post = response.data;
            }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
            });
        }
    );


    app.config(['$routeProvider',
        function($routeProvider) {
            $routeProvider.
            when('/posts', {
                templateUrl: '/bundles/cvutfitbiwt1blogui/templates/posts/post-list.html',
                controller: 'PostController'
            }).
            when('/posts/*', {
                templateUrl: '/bundles/cvutfitbiwt1blogui/templates/posts/post-detail.html',
                controller: 'PostDetailController'
            }).
            otherwise({
                redirectTo: '/posts'
            });
        }
    ]);


});
