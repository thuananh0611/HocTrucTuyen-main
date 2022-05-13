app.controller('classsControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.clas = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/classs"
    }).then(function (data) {
        $scope.clas = data.data;
        $scope.totalItems = $scope.clas.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });
    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.clas, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/classs"

        }).then(function (data) {
            $scope.clas = data.data;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/classs",
                data: $scope.cla,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/classs/" + $scope.id,
                data: $scope.cla,
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
                url: "http://127.0.0.1:8000/api/classs/" + id

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
            $scope.modalTitle = "Thêm Lớp học mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.cla) {
                $scope.cla.ID_Teacher = "";
                $scope.cla.Name_Class = "";
                $scope.cla.Grade = "";
                $scope.cla.Total_Student = "";
                $scope.cla.School_Year = "";
            }
        } else {
            $scope.modalTitle = "Cập nhật thông tin Lớp học";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/classs/" + id

            }).then(function (data) {
                $scope.cla = data.data;
            });
        }
    }
}]);
