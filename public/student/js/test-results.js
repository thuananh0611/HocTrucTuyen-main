app.controller('TestResultsControl', function ($scope, $http, $interval) {
    $scope.ID_Student = sessionStorage.getItem("ID_Student");
    $scope.Name_Student = sessionStorage.getItem("Name_Student");
    $scope.viewResults = function () {
        $scope.Name_Test1 = sessionStorage.getItem("Name_Test");
        $scope.ID_Student1 = sessionStorage.getItem("ID_Student");
        $scope.Name_Student1 = sessionStorage.getItem("Name_Student");
        $scope.Detail1 = sessionStorage.getItem("Detail");
        $scope.Scores1 = sessionStorage.getItem("Scores");
        $scope.Submission_Time1 = sessionStorage.getItem("Submission_Time");
    }
    $scope.viewResults();
});
