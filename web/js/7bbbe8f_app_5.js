(function() {
    var app = angular.module('blog', ['ngRoute', 'PostControllers']);
    // konfigurace znacek na {$ ... $}

    app.config(
        function($interpolateProvider){
            $interpolateProvider.
                    startSymbol('{$').
            endSymbol('$}');
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

    app.provider('help', [
        function() {
            var injector = angular.injector(['PostControllers']);
            var postControl = injector.get('postControl');

            return postControl;
        }
    ]);

    var postFunc = function ($scope, postControl, $http) {
        $scope.prdel = "rdeeeeel";
        $scope.posts = postControl($http);
    };
    postFunc.$inject = [ '$scope', 'help', "$http"];
    app.controller('PostController', postFunc);

    app.directive('postShort', function() {
        return {
            templateUrl: '/bundles/cvutfitbiwt1blogui/templates/directives/post-short.html'
        };
    })


} ());
