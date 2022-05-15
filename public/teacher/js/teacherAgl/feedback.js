app.controller('feedbackADControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    //$scope.ID_Student = "A2023005";
    $scope.fbs = [];
    $scope.ads = [];
    $scope.stus = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/feedbackAd"
    }).then(function (data) {
        $scope.fbs = data.data;
        $scope.totalItems = $scope.fbs.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/admin"
    }).then(function (data) {
        $scope.ads = data.data;
        //$scope.totalItems = $scope.fbs.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });

    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/students"
    }).then(function (data) {
        $scope.stus = data.data;
        //$scope.totalItems = $scope.fbs.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });

    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.fbs, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);
    $scope.showModal = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Gửi ý kiến - phản hồi";
            $scope.modalButton = "Gửi";
            if ($scope.fb) {
                $scope.fb.Title = "";
                $scope.fb.Content = "";
                $scope.fb.Img = "";
                $scope.fb.Status_Reply = "";
            }
        } else {
            $scope.modalTitle = "Cập nhật thông tin ý kiến - phản hồi";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/feedbackAd/" + id

            }).then(function (data) {
                $scope.fb = data.data;
            });
        }
    }
    $scope.showModalDT = function (id) {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/feedbackAd/" + id

        }).then(function (data) {
            $scope.fb = data.data;
        });
    }
    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/feedbackAd"

        }).then(function (data) {
            $scope.fbs = data.data;
            $scope.totalItems = $scope.fbs.length;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/feedbackAd",
                data: $scope.fb,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/feedbackAd/" + $scope.id,
                data: $scope.fb,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Cập nhật thành công!");
                console.log(res.data);
            });
        }
        $scope.reloadData();
    }
    $scope.deleteClick = function (id) {
        var ques = confirm("Bạn có chắc chắn muốn xóa không?");
        if (ques) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/feedbackAd/" + id

            }).then(function (data) {
                alert("Xóa thành công!");
                $scope.message = data.data;
                $scope.reloadData();
            });
        }
    }
}]);
