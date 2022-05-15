app.controller('adminAdControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.ads = [];
    $scope.pers = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/admin"
    }).then(function (data) {
        $scope.ads = data.data;
        $scope.totalItems = $scope.ads.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });
    
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/permission-groups"
    }).then(function (data) {
        $scope.pers = data.data;
        });
    
    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.ads, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/admin"

        }).then(function (data) {
            $scope.ads = data.data;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/admin",
                data: $scope.ad,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/admin/" + $scope.id,
                data: $scope.ad,
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
                url: "http://127.0.0.1:8000/api/admin/" + id

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
            $scope.modalTitle = "Thêm Admin mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.ad) {
                //$scope.ad.ID_Permission = "Q01";
                $scope.ad.Name_Admin = "";
                $scope.ad.Birth_Admin = "";
                $scope.ad.Gender_Admin = "";
                $scope.ad.Address_Admin = "";
                $scope.ad.Mail_Admin = "";
                $scope.ad.Phone_Admin = "";
                $scope.ad.Img_Admin = "";
                //$scope.ad.Pass_Admin = "";
            }
        } else {
            document.getElementById('passstus').style.display = "none";
            $scope.modalTitle = "Cập nhật thông tin Admin";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/admin/" + id

            }).then(function (data) {
                $scope.ad = data.data;
            });
        }
    }
    $scope.showModalCT = function (id) {
        $scope.modalTitleCT = "Thông tin chi tiết Admin";
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/admin/" + id

        }).then(function (data) {
            $scope.ad = data.data;
        });
    }
}]);
