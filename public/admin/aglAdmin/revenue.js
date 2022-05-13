app.controller('revenueControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.revs = [];
    $scope.rects = [];
    $scope.stus = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};

    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/revenue"
    }).then(function (data) {
        $scope.revs = data.data;
        $scope.totalItems = $scope.revs.length;
    });

    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/revenue-ct"
    }).then(function (data) {
        $scope.rects = data.data;
        //$scope.totalItems = $scope.excts.length;
    });

    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/students"
    }).then(function (data) {
        $scope.stus = data.data;
    });

    $scope.resetFilters = function () {
        $scope.search = {};
    };

    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.revs, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/revenue"

        }).then(function (data) {
            $scope.revs = data.data;
        });
    }
    $scope.reloadDataCT = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/revenue-ct"

        }).then(function (data) {
            $scope.rects = data.data;
        });
    }

    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/revenue",
                data: $scope.rev,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/revenue/" + $scope.id,
                data: $scope.rev,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Cập nhật thành công!");
                console.log(res.data);
            });
        }
        $scope.reloadData();
    }

    $scope.saveDataCT = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/revenue-ct",
                data: $scope.rect,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/revenue-ct/" + $scope.id,
                data: $scope.rect,
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
                url: "http://127.0.0.1:8000/api/revenue/" + id

            }).then(function (data) {
                alert("Xóa thành công!");
                $scope.message = data.data;
                $scope.reloadData();
            });
        }
    }
    $scope.deleteClickCT = function (id) {
        var hoi = confirm("Bạn có chắc chắn muốn xóa không?");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/revenue-ct/" + id

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
            $scope.modalTitle = "Thêm Khoản thu mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.rev) {
                $scope.rev.ID_Revenue = "";
                $scope.rev.ID_Student = "";
                $scope.rev.Date_Revenue = "";
                $scope.rev.Total_Money = "";
            }
        } else {
            $scope.modalTitle = "Cập nhật thông tin Khoản thu";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/revenue/" + id

            }).then(function (data) {
                $scope.rev = data.data;
            });
        }
    }
    $scope.showModalCT = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm Khoản thu mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.rect) {
                $scope.rect.ID_Revenue_CT = "";
                $scope.rect.ID_Revenue = "";
                $scope.rect.TypeOfRevenue = "";
                $scope.rect.Into_Money = "";
            }
        } else {
            $scope.modalTitle = "Cập nhật thông tin Khoản thu";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/revenue-ct/" + id

            }).then(function (data) {
                $scope.rect = data.data;
            });
        }
    }
}]);
