angular.module('myapp').directive('showMore', [function () {
    return {
        restrict: 'AE',
        replace: true,
        scope: {
            text: '=',
            limit: '='
        },
        template: '<div><p ng-show="largeText">{{ text | subString :0 :end }}<a href="javascript:;" ng-click="showMore()" ng-show="isShowMore">....&nbsp;&nbsp;<i class="ahv text-primary">Hiện</i></a><a href="javascript:;" ng-click="showLess()" ng-hide="isShowMore"><i class="ahv text-primary">&nbsp;&nbsp;Ẩn</i></a></p><p ng-hide="largeText">{{ text }}</p></div> ',
        link: function (scope, iElement, iAttrs) {
            scope.end = scope.limit;
            scope.isShowMore = true;
            scope.largeText = true;
            if (scope.text.length <= scope.limit) {
                scope.largeText = false;
            };
            scope.showMore = function () {
                scope.end = scope.text.length;
                scope.isShowMore = false;
            };
            scope.showLess = function () {
                scope.end = scope.limit;
                scope.isShowMore = true;
            };
        }
    };
}]);
angular.module('myapp').filter('subString', function () {
    return function (str, start, end) {
        if (str != undefined) {
            return str.substr(start, end);
        }
    }
})
angular.module('myapp').directive('clickSort', function () {
    return {
        restrict: 'A',
        scope: {
            sortBy: '@',
            clickSort: '='
        },
        link: function postLink(scope, element, attr) {
            element.addClass('sortable');
            element.bind('click', function () {
                scope.$apply(function () {
                    if (!isSortedOnThis()) {
                        sortAscending();
                    } else if (!isDesc()) {
                        sortDescending();
                    } else {
                        removeSort();
                    }
                });
            });
            scope.$watch('clickSort',
                function (newVal, oldVal) {
                    if (!isSortedOnThis()) {
                        element.removeClass('sort-asc');
                        element.removeClass('sort-desc');
                    }
                });

            function sortDescending() {
                scope.clickSort = '-' + scope.sortBy;
                element.removeClass('sort-asc');
                element.addClass('sort-desc');
            }

            function sortAscending() {
                scope.clickSort = '+' + scope.sortBy;
                element.removeClass('sort-desc');
                element.addClass('sort-asc');
            }

            function removeSort() {
                scope.clickSort = '';
                element.removeClass('sort-asc');
                element.removeClass('sort-desc');
            }

            function isDesc() {
                return scope.clickSort &&
                    scope.clickSort.charAt(0) === '-';
            }

            function isSortedOnThis() {
                return scope.clickSort &&
                    scope.sortBy ===
                    scope.clickSort.slice(1);
            }

            function init() {
                if (isSortedOnThis()) {
                    if (isDesc()) {
                        sortDescending();
                    } else {
                        sortAscending();
                    }
                }
            }
            init();
        }
    };
});
app.filter('startFrom', function () {
    return function (input, start) {
        start = +start;
        return input.slice(start);
    }
});
