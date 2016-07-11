(function() {
    var app = angular.module('blog', ['ngRoute', 'postControllers', 'restServices'])
    // konfigurace znacek na {$ ... $}
        .config(
            function($interpolateProvider){
                $interpolateProvider.
                    startSymbol('{$').
                    endSymbol('$}');
            }
        );

    app.run(['$route', function() {}]);

    app.config(['$routeProvider', '$locationProvider',
        function($routeProvider) {
            $routeProvider.
            when('/posts', {
                templateUrl: '/bundles/cvutfitbiwt1blogui/templates/posts/post-list.html',
                controller: 'PostController'
            }).
            when('/posts/id/:id', {
                templateUrl: '/bundles/cvutfitbiwt1blogui/templates/posts/post-detail.html',
                controller: 'PostDetailController'
            }).
            when('/posts/edit/id/:id', {
                templateUrl: '/bundles/cvutfitbiwt1blogui/templates/posts/post-edit.html',
                controller: 'PostEditController'
            }).
            otherwise({
                redirectTo: '/posts'
            });
        }

     ]);


}) ();
