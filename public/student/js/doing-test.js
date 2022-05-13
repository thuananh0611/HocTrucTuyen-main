app.controller('DoingTestControl', function ($scope, $http, $interval) {
    $scope.ID_Student = sessionStorage.getItem("ID_Student");
    $scope.No = 1;
    $scope.ID_Test = sessionStorage.getItem("ID_Test");
    $scope.Time_To_Do = sessionStorage.getItem("Time_To_Do");
    $scope.Total_Questions = sessionStorage.getItem("Total_Questions");
    $scope.Name_Student = sessionStorage.getItem("Name_Student");
    $scope.lstTestQuestions = [];
    $scope.lstQuestions = [];
    $scope.lstTest = [];
    $scope.lstAnswerStudent = [];
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/test-questions"
    }).then(function (data) {
        $scope.lstTestQuestions = data.data;
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/questions"
    }).then(function (data) {
        $scope.lstQuestions = data.data;
    }).then(function () {
        $scope.lstTestQuestions.forEach(function (itemTestQuest, i) {
            $scope.lstQuestions.forEach(function (itemQuest, i) {
                if (itemTestQuest.ID_Test == $scope.ID_Test && itemTestQuest.ID_Question == itemQuest.ID_Question) {
                    $scope.lstTest.push({
                        No: $scope.No++,
                        ID_Question: itemQuest.ID_Question,
                        Img_Content: itemQuest.Img_Content,
                        Question_Content: itemQuest.Question_Content,
                        Answer_A: itemQuest.Answer_A,
                        Answer_B: itemQuest.Answer_B,
                        Answer_C: itemQuest.Answer_C,
                        Answer_D: itemQuest.Answer_D,
                        Correct_Answer: itemQuest.Correct_Answer,
                    })
                }
            });
        });
    });
    $scope.counter = 60 * $scope.Time_To_Do;
    $interval(function () {
        if ($scope.counter-- <= 0) {
            $scope.counter = 60 * $scope.Time_To_Do;
            alert('Hết thời gian làm bài! Vui lòng nộp bài!');
            $scope.st = {};
            $scope.coefficient = 10.0 / $scope.Total_Questions;
            $scope.countCorrect = 0;
            $scope.st.ID_Student = $scope.ID_Student;
            $scope.st.ID_Test = $scope.ID_Test;
            $scope.st.details_assignments = [];
            var ele = document.getElementsByClassName('inpA');
            for (i = 0; i < ele.length; i++) {
                if (ele[i].type = "radio") {
                    if (ele[i].checked) {
                        $scope.lstAnswerStudent.push({
                            ID_Question: ele[i].name,
                            Answer_Student: ele[i].value
                        });
                    }
                }
            }
            $scope.lstAnswerStudent.forEach(function (item, i) {
                $scope.st.details_assignments.push({
                    ID_Question: item.ID_Question,
                    Answer_Student: item.Answer_Student,
                });
            });
            $scope.lstQuestions.forEach(function (itemQuestions, i) {
                $scope.st.details_assignments.forEach(function (itemDetails, i) {
                    if (itemQuestions.ID_Question == itemDetails.ID_Question && itemQuestions.Correct_Answer == itemDetails.Answer_Student) {
                        $scope.countCorrect += 1;
                    }
                });
            });
            if ($scope.countCorrect > 0) {
                $scope.st.Scores = ($scope.coefficient * $scope.countCorrect).toFixed(1);
                $scope.st.Detail = $scope.countCorrect + "/" + $scope.Total_Questions;
            } else {
                $scope.st.Scores = 0;
                $scope.st.Detail = "0/0";
            }
            sessionStorage.setItem("Scores", $scope.st.Scores);
            sessionStorage.setItem("Detail", $scope.st.Detail);
            sessionStorage.setItem("Submission_Time", new Date().toISOString());
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/test-info",
                data: $scope.st,
                'content-Type': "application/json"
            }).then(function (res) {
                console.log(res.data);
            });
            // $http({
            //     method: "POST",
            //     url: "http://127.0.0.1:8000/api/details-assignments",
            //     data: $scope.st,
            //     'content-Type': "application/json"
            // }).then(function (res) {
            //     console.log(res.data);
            // });
            sessionStorage.removeItem("ID_Test");
            sessionStorage.removeItem("Time_To_Do");
            sessionStorage.removeItem("Total_Questions");
            window.location.href = '/student/test-results';
        }
    }, 1000);
    $scope.submitTest = function () {
        if (confirm("Bạn có chắc chắn muốn nộp bài?")) {
            $scope.st = {};
            $scope.coefficient = 10.0 / $scope.Total_Questions;
            $scope.countCorrect = 0;
            $scope.st.ID_Student = $scope.ID_Student;
            $scope.st.ID_Test = $scope.ID_Test;
            $scope.st.details_assignments = [];
            var ele = document.getElementsByClassName('inpA');
            for (i = 0; i < ele.length; i++) {
                if (ele[i].type = "radio") {
                    if (ele[i].checked) {
                        $scope.lstAnswerStudent.push({
                            ID_Question: ele[i].name,
                            Answer_Student: ele[i].value
                        });
                    }
                }
            }
            $scope.lstAnswerStudent.forEach(function (item, i) {
                $scope.st.details_assignments.push({
                    ID_Question: item.ID_Question,
                    Answer_Student: item.Answer_Student,
                });
            });
            $scope.lstQuestions.forEach(function (itemQuestions, i) {
                $scope.st.details_assignments.forEach(function (itemDetails, i) {
                    if (itemQuestions.ID_Question == itemDetails.ID_Question && itemQuestions.Correct_Answer == itemDetails.Answer_Student) {
                        $scope.countCorrect += 1;
                    }
                });
            });
            if ($scope.countCorrect > 0) {
                $scope.st.Scores = ($scope.coefficient * $scope.countCorrect).toFixed(1);
                $scope.st.Detail = $scope.countCorrect + "/" + $scope.Total_Questions;
            } else {
                $scope.st.Scores = 0;
                $scope.st.Detail = "0/0";
            }
            sessionStorage.setItem("Scores", $scope.st.Scores);
            sessionStorage.setItem("Detail", $scope.st.Detail);
            sessionStorage.setItem("Submission_Time", new Date().toISOString());
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/test-info",
                data: $scope.st,
                'content-Type': "application/json"
            }).then(function (res) {
                console.log(res.data);
            });
            // $http({
            //     method: "POST",
            //     url: "http://127.0.0.1:8000/api/details-assignments",
            //     data: $scope.st,
            //     'content-Type': "application/json"
            // }).then(function (res) {
            //     console.log(res.data);
            // });
            sessionStorage.removeItem("ID_Test");
            sessionStorage.removeItem("Time_To_Do");
            sessionStorage.removeItem("Total_Questions");
            window.location.href = '/student/test-results';
        }
        console.log($scope.st);
    }
});
