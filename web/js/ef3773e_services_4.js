/**
 * Created by Bui on 6/2/16.
 */
(function() {
    var restServices = angular.module('restServices', ['ngResource']);

    restServices.factory('PostList', function ($resource) {
        return function () {
            return $resource('/api/posts?apikey=:apikey',
                {'query': { method: 'GET' }});
        }
    });

    restServices.factory('Post', function ($resource) {
        return function () {
            return $resource('/api/posts/:id?apikey=:apikey',
                {'query': { method: 'GET' }});
        }
    });

    restServices.directive("fileread", [function () {
            return {
                scope: {
                    fileread: "="
                },
                link: function (scope, element, attributes) {
                    element.bind("change", function (changeEvent) {
                        var reader = new FileReader();
                        reader.onload = function (loadEvent) {
                            scope.$apply(function () {
                                scope.fileread = loadEvent.target.result;
                            });
                        };
                        reader.readAsDataURL(changeEvent.target.files[0]);
                    });
                }
            }
        }]);

}) ();