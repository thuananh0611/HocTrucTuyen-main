app.controller('staffAdControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.stafs = [];
    $scope.pers = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/staff"
    }).then(function (data) {
        $scope.stafs = data.data;
        $scope.totalItems = $scope.stafs.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });
    
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/permission-groups"
    }).then(function (data) {
        $scope.pers = data.data;
        //$scope.totalItems = $scope.ads.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });

    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.stafs, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/staff"

        }).then(function (data) {
            $scope.stafs = data.data;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/staff",
                data: $scope.staf,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/staff/" + $scope.id,
                data: $scope.staf,
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
                url: "http://127.0.0.1:8000/api/staff/" + id

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
            $scope.modalTitle = "Thêm Nhân viên mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.staf) {
                //$scope.staf.ID_Permission = "Q06";
                $scope.staf.Name_Staff = "";
                $scope.staf.Birth_Staff = "";
                $scope.staf.Gender_Staff = "";
                $scope.staf.Address_Staff = "";
                $scope.staf.Mail_Staff = "";
                $scope.staf.Phone_Staff = "";
                $scope.staf.Img_Staff = "";
                $scope.staf.Position_Staff = "";
                $scope.staf.Status_Staff = "";
                $scope.staf.Time_Start = "";
                $scope.staf.Time_End = "";
                $scope.staf.Pass_Staff = "";
            }
        } 
        else {
            document.getElementById('passstaf').style.display = "none";
            $scope.modalTitle = "Cập nhật thông tin Nhân viên";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/staff/" + id

            }).then(function (data) {
                $scope.staf = data.data;
            });
        }
    }
}]);
