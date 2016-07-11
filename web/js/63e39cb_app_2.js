(function() {
    var app = angular.module('blog', ['ngRoute', 'postControllers'])
    // konfigurace znacek na {$ ... $}
        .config(
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
            when('/posts/detail/*', {
                templateUrl: '/bundles/cvutfitbiwt1blogui/templates/posts/post-detail.html',
                controller: 'PostDetailController'
            }).
            otherwise({
                templateUrl: '/bundles/cvutfitbiwt1blogui/templates/posts/post-detail.html',
                controller: 'PostDetailController'
            });
        }
    ]);


}) ();
