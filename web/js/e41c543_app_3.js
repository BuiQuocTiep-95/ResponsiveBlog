(function() {
    var app = angular.module('blog', [])
    // konfigurace znacek na {$ ... $}
        .config(
            function($interpolateProvider){
                $interpolateProvider.
                    startSymbol('{$').
                    endSymbol('$}');
            }
        );

    app.directive('postShort', function() {
        return {
            templateUrl: '/bundles/cvutfitbiwt1blogui/templates/directives/post-short.html'
        };
    });

} ());
