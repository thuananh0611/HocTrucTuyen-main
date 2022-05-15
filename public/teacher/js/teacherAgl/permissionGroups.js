app.controller('permissionGroupsControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.pers = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/permission-groups"
    }).then(function (data) {
        $scope.pers = data.data;
        $scope.totalItems = $scope.pers.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });
    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.pers, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/permission-groups"

        }).then(function (data) {
            $scope.pers = data.data;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/permission-groups",
                data: $scope.per,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/permission-groups/" + $scope.id,
                data: $scope.per,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Cập nhật thành công!");
                console.log(res.data);
            });
        }
        $scope.reloadData();
    }
    $scope.deleteClick = function (id) {
        var hoi = confirm("Bạn có chắc chắn muốn xóa không?");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/permission-groups/" + id

            }).then(function (data) {
                alert("Xóa thành công!");
                $scope.message = data.data;
                $scope.reloadData();
            });
        }
    }
    $scope.showModal = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm Nhóm quyền mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.per) {
                $scope.per.Name_Permission = "";
                $scope.per.Details_Permission = "";
            }
        } else {
            $scope.modalTitle = "Cập nhật thông tin Nhóm quyền";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/permission-groups/" + id

            }).then(function (data) {
                $scope.per = data.data;
            });
        }
    }
}]);
