app.controller('profileAdControl', function ($scope, $http) {
    $scope.id = sessionStorage.getItem("id");;
    $scope.ID_Admin = sessionStorage.getItem("ID_Admin");;
    $scope.ads = [];
    $scope.pers = [];
    $scope.ad = {};
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/admin"
    }).then(function (data) {
        $scope.ads = data.data;
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/permission-groups"
    }).then(function (data) {
        $scope.pers = data.data;
    });

    $scope.saveData = function () {
        if ($scope.oldPass != $scope.ad.Pass_Admin) {
            alert("Mật khẩu cũ không đúng!");
        } else if ($scope.newPass == $scope.ad.Pass_Admin || $scope.ad.PassAdmin == $scope.ad.Pass_Admin) {
            alert("Mật khẩu mới không được trùng mật khẩu cũ!");
        } else if ($scope.newPass != $scope.ad.PassAdmin) {
            alert("Mật khẩu mới không khớp!");
        } else if ($scope.newPass == $scope.ad.PassAdmin && $scope.ad.Pass_Admin != $scope.newPass && $scope.ad.Pass_Admin != $scope.ad.PassAdmin) {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/admin/" + $scope.id,
                data: $scope.ad,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Cập nhật thành công!");
                location.reload();
            });
        } else {
            alert("Lỗi!");
        }
    }
});
