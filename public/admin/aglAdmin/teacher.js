app.controller('teacherAdControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.teas = [];
    $scope.pers = [];
    $scope.progs = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/teachers"
    }).then(function (data) {
        $scope.teas = data.data;
        $scope.totalItems = $scope.teas.length;
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

    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/professional-groups"
    }).then(function (data) {
        $scope.progs = data.data;
        //$scope.totalItems = $scope.ads.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });

    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.teas, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/teachers"

        }).then(function (data) {
            $scope.teas = data.data;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/teachers",
                data: $scope.tea,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/teachers/" + $scope.id,
                data: $scope.tea,
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
                url: "http://127.0.0.1:8000/api/teachers/" + id

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
            $scope.modalTitle = "Thêm Giáo viên mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.tea) {
                $scope.tea.ID_Permission = "";
                $scope.tea.ID_Profession = "";
                $scope.tea.Name_Teacher = "";
                $scope.tea.Birth_Teacher = "";
                $scope.tea.Gender_Teacher = "";
                $scope.tea.Address_Teacher = "";
                $scope.tea.Mail_Teacher = "";
                $scope.tea.Phone_Teacher = "";
                $scope.tea.Img_Teacher = "";
                $scope.tea.Position_Teacher = ""
                $scope.tea.Status_Teacher = "";
                $scope.tea.Time_Start = "";
                $scope.tea.Time_End = "";
                $scope.tea.Pass_Teacher = "";
            }
        } else {
            $scope.modalTitle = "Cập nhật thông tin Giáo viên";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/teachers/" + id

            }).then(function (data) {
                $scope.tea = data.data;
            });
        }
    }
}]);
