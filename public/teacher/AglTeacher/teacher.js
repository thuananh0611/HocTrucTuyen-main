app.controller('TeacherControl', function ($scope, $http) {
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/teacher"

    }).then(function (data) {
        $scope.tes = data.data;
    });
    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/teacher"

        }).then(function (data) {
            $scope.tes = data.data;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/teacher",
                data: $scope.te,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/teacher/" + $scope.id,
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
                url: "http://127.0.0.1:8000/api/teacher/" + id

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
            if ($scope.te) {
                $scope.te.ID_Permission = "";
            }
        } else {
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
});
