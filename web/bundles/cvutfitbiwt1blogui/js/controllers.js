(function() {
    var postControllers = angular.module('postControllers', ['restServices']);

    postControllers.controller('PostController',['$scope', 'PostList',
        function ($scope, PostList) {
            $scope.posts = PostList().query({ apikey : 'tester'});
        }
    ]);

    //postControllers.value('apiKey', 'tester');

    postControllers.controller('PostDetailController', ['$routeParams', '$scope', 'Post',
        function ($routeParams, $scope, Post) {
            var ID = $routeParams.id;
            $scope.post = Post().get({id : ID, apikey : 'tester'});
        }
    ]);

    postControllers.controller('PostEditController', ['$routeParams', '$scope', 'Post',
        function($routeParams, $scope, Post) {
            var ID = $routeParams.id;
            $scope.master = Post().get({id : ID, apikey : 'tester'});

    }]);

}) ();

