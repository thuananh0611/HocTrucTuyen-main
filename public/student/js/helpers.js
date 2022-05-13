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
app.filter('startFrom', function () {
    return function (input, start) {
        start = +start;
        return input.slice(start);
    }
});
app.filter('counter', [function () {
    return function (seconds) {
        return new Date(1970, 0, 1).setSeconds(seconds);
    };
}])
