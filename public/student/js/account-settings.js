app.controller('AccountSettingsControl', function ($scope, $http) {
    $scope.id = sessionStorage.getItem("id");;
    $scope.ID_Student = sessionStorage.getItem("ID_Student");;
    $scope.lstStudents = [];
    $scope.lstParents = [];
    $scope.st = {};
    $scope.pt = {};
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/student"
    }).then(function (data) {
        $scope.lstStudents = data.data;
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/parent-student"
    }).then(function (data) {
        $scope.lstParents = data.data;
    }).then(function () {
        $scope.lstParents.forEach(function (itemParent, i) {
            $scope.lstStudents.forEach(function (itemStudent, i) {
                if (itemStudent.ID_Student == $scope.ID_Student && itemStudent.ID_Student == itemParent.ID_Student) {
                    $scope.st = itemStudent;
                    $scope.pt = itemParent;
                }
            });
        });
    });
    $scope.saveData = function () {
        if ($scope.oldPass != $scope.st.Pass_Student) {
            alert("Mật khẩu cũ không đúng!");
        } else if ($scope.newPass == $scope.st.Pass_Student || $scope.st.PassStudent == $scope.st.Pass_Student) {
            alert("Mật khẩu mới không được trùng mật khẩu cũ!");
        } else if ($scope.newPass != $scope.st.PassStudent) {
            alert("Mật khẩu mới không khớp!");
        } else if ($scope.newPass == $scope.st.PassStudent && $scope.st.Pass_Student != $scope.newPass && $scope.st.Pass_Student != $scope.st.PassStudent) {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/student/" + $scope.id,
                data: $scope.st,
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
