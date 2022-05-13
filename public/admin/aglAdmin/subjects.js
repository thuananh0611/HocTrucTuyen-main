app.controller('subjectsControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.subs = [];
    $scope.progs = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/subjects"
    }).then(function (data) {
        $scope.subs = data.data;
        $scope.totalItems = $scope.subs.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/professional-groups"
    }).then(function (data) {
        $scope.progs = data.data;
    });
    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.subs, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/subjects"

        }).then(function (data) {
            $scope.subs = data.data;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/subjects",
                data: $scope.sub,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/subjects/" + $scope.id,
                data: $scope.sub,
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
                url: "http://127.0.0.1:8000/api/subjects/" + id

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
            $scope.modalTitle = "Thêm Môn học mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.sub) {
                $scope.sub.ID_Professional = "";
                $scope.sub.Name_Subjects = "";
                $scope.sub.Details_Subjects = "";
            }
        } else {
            $scope.modalTitle = "Cập nhật thông tin Môn học";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/subjects/" + id

            }).then(function (data) {
                $scope.sub = data.data;
            });
        }
    }
}]);
