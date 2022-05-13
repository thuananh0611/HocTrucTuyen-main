app.controller('HomeControl', function ($scope, $http) {
    sessionStorage.setItem("ID_Student", "A20230005");
    $scope.ID_Student = sessionStorage.getItem("ID_Student");
    $scope.lstStudents = [];
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/students"
    }).then(function (data) {
        $scope.lstStudents = data.data;
    }).then(function () {
        $scope.lstStudents.forEach(function (item, i) {
            if (item.ID_Student == $scope.ID_Student) {
                sessionStorage.setItem("id", item.id);
                sessionStorage.setItem("ID_Class", item.ID_Class);
                sessionStorage.setItem("Name_Student", item.Name_Student);
                sessionStorage.setItem("Img_Student", item.Img_Student);
            }
        });
        $scope.Name_Student = sessionStorage.getItem("Name_Student");
        $scope.Img_Student = sessionStorage.getItem("Img_Student");
    });
});
