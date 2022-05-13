app.controller('ExamListControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.exs = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $scope.id = sessionStorage.getItem("id");;
    $scope.ID_Student = sessionStorage.getItem("ID_Student");;
    $scope.ID_Class = sessionStorage.getItem("ID_Class");;
    $scope.lstTests = [];
    $scope.lstTestQuestions = [];
    $scope.lstQuestions = [];
    $scope.lstTestInfo = [];
    $scope.lstDetails = [];
    $scope.lstSubjects = [];
    $scope.Pass_Test = '';
    $scope.Test_Status = '';
    $scope.lstTypes = [{
        value: '15 phút'
    }, {
        value: '45 phút'
    }, {
        value: '90 phút'
    }, {
        value: 'Học kỳ'
    }, {
        value: 'Khác'
    }, ];
    $scope.lstYears = [{
        value: '2016-2017'
    }, {
        value: '2018-2019'
    }, {
        value: '2019-2020'
    }, {
        value: '2020-2021'
    }, {
        value: '2021-2022'
    }, {
        value: '2022-2023'
    }];
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/subjects"
    }).then(function (data) {
        $scope.lstSubjects = data.data;
    });
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
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/test-info"
    }).then(function (data) {
        $scope.lstTestInfo = data.data;
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/details-assignments"
    }).then(function (data) {
        $scope.lstDetails = data.data;
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/exam-list"
    }).then(function (data) {
        $scope.lstTests = data.data;
    }).then(function () {
        $scope.lstTests.forEach(function (itemTests, i) {
            $scope.lstSubjects.forEach(function (itemSubjects, i) {
                if (itemTests.ID_Class == $scope.ID_Class && itemTests.ID_Subjects == itemSubjects.ID_Subjects) {
                    $scope.exs.push({
                        id: itemTests.id,
                        ID_Test: itemTests.ID_Test,
                        Name_Subjects: itemSubjects.Name_Subjects,
                        Name_Test: itemTests.Name_Test,
                        Type_Test: itemTests.Type_Test,
                        Date_To_Do: moment(itemTests.Date_To_Do).format('D/MM/yyyy | H giờ mm'),
                        Pass_Test: itemTests.Pass_Test,
                        Test_Status: itemTests.Test_Status,
                        Type_Test: itemTests.Type_Test,
                        Total_Questions: itemTests.Total_Questions,
                        Time_To_Do: itemTests.Time_To_Do,
                        Note: itemTests.Note,
                        Semester: itemTests.Semester,
                        School_Year: itemTests.School_Year,
                    });
                }
            });
        });
        $scope.totalItems = $scope.exs.length;
    });
    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.exs, newVal);
        $scope.totalItems = $scope.filtered.length;
        $scope.currentPage = 1;
    }, true);
    $scope.showModalInfo = function (id) {
        $scope.exs.forEach(function (itemExs, i) {
            $scope.lstTestInfo.forEach(function (itemTestInfo, i) {
                if (itemExs.id == id && itemExs.ID_Test == itemTestInfo.ID_Test && $scope.ID_Student == itemTestInfo.ID_Student) {
                    $scope.Name_Subjects = itemExs.Name_Subjects;
                    $scope.Name_Test = itemExs.Name_Test;
                    $scope.Type_Test = itemExs.Type_Test;
                    $scope.Date_To_Do = itemExs.Date_To_Do;
                    $scope.Total_Questions = itemExs.Total_Questions;
                    $scope.Time_To_Do = itemExs.Time_To_Do;
                    $scope.Test_Status_Student = itemTestInfo.Test_Status_Student;
                    $scope.Note = itemExs.Note;
                    $scope.Semester = itemExs.Semester;
                    $scope.School_Year = itemExs.School_Year;
                } else if (itemExs.id == id && itemExs.ID_Test != itemTestInfo.ID_Test && $scope.ID_Student != itemTestInfo.ID_Student) {
                    $scope.Name_Subjects = itemExs.Name_Subjects;
                    $scope.Name_Test = itemExs.Name_Test;
                    $scope.Type_Test = itemExs.Type_Test;
                    $scope.Date_To_Do = itemExs.Date_To_Do;
                    $scope.Total_Questions = itemExs.Total_Questions;
                    $scope.Time_To_Do = itemExs.Time_To_Do;
                    $scope.Test_Status_Student = "Chưa hoàn thành";
                    $scope.Note = itemExs.Note;
                    $scope.Semester = itemExs.Semester;
                    $scope.School_Year = itemExs.School_Year;
                }
            });
        });
    }
    $scope.showModalIn = function (id) {
        $scope.password = '';
        $scope.exs.forEach(function (itemExs, i) {
            $scope.lstTestInfo.forEach(function (itemTestInfo, i) {
                if (itemExs.id == id && itemExs.ID_Test == itemTestInfo.ID_Test && $scope.ID_Student == itemTestInfo.ID_Student) {
                    $scope.Pass_Test = itemExs.Pass_Test;
                    $scope.Test_Status = itemExs.Test_Status;
                    $scope.Test_Status_Student = itemTestInfo.Test_Status_Student;
                    sessionStorage.setItem("ID_Test", itemExs.ID_Test);
                    sessionStorage.setItem("Name_Test", itemExs.Name_Test);
                    sessionStorage.setItem("Time_To_Do", itemExs.Time_To_Do);
                    sessionStorage.setItem("Total_Questions", itemExs.Total_Questions);
                } else if (itemExs.id == id && itemExs.ID_Test != itemTestInfo.ID_Test && $scope.ID_Student != itemTestInfo.ID_Student) {
                    $scope.Pass_Test = itemExs.Pass_Test;
                    $scope.Test_Status = itemExs.Test_Status;
                    $scope.Test_Status_Student = "Chưa hoàn thành";
                    sessionStorage.setItem("ID_Test", itemExs.ID_Test);
                    sessionStorage.setItem("Name_Test", itemExs.Name_Test);
                    sessionStorage.setItem("Time_To_Do", itemExs.Time_To_Do);
                    sessionStorage.setItem("Total_Questions", itemExs.Total_Questions);
                }
            });
        });
    }
    $scope.goToDoExam = function () {
        if ($scope.password == $scope.Pass_Test) {
            if ($scope.Test_Status == "Mở") {
                if ($scope.Test_Status_Student == "Chưa hoàn thành") {
                    if (confirm("Bạn có chắc chắn muốn làm bài?")) {
                        location.href = "/student/doing-test";
                    }
                } else {
                    alert("Bạn đã hoàn thành bài kiểm tra này!");
                }
            } else {
                alert("Bài kiểm tra đã khóa!");
            }
        } else {
            alert("Mật khẩu làm bài sai! Vui lòng nhập lại!");
        }
    }
    $scope.showModalDetail = function (ID_Test) {
        $scope.lstDetailsST = [];
        $scope.Name_Test = '';
        $scope.Detail = "0/0";
        $scope.Scores = 0;
        $scope.No = 1;
        $scope.lstTests.forEach(function (itemTests, i) {
            $scope.lstTestQuestions.forEach(function (itemTestQuest, i) {
                $scope.lstQuestions.forEach(function (itemQuest, i) {
                    $scope.lstDetails.forEach(function (itemDetails, i) {
                        $scope.lstTestInfo.forEach(function (itemTestInfo, i) {
                            if (itemTests.ID_Test == ID_Test && itemTestQuest.ID_Test == ID_Test && itemTestQuest.ID_Test == itemTestInfo.ID_Test && itemTestQuest.ID_Test == itemDetails.ID_Test && itemTestInfo.ID_Student == $scope.ID_Student && itemTestInfo.ID_Student == itemDetails.ID_Student && itemTestQuest.ID_Question == itemQuest.ID_Question && itemTestQuest.ID_Question == itemDetails.ID_Question) {
                                $scope.lstDetailsST.push({
                                    No: $scope.No++,
                                    ID_Test: itemTestQuest.ID_Test,
                                    ID_Question: itemQuest.ID_Question,
                                    Img_Content: itemQuest.Img_Content,
                                    Question_Content: itemQuest.Question_Content,
                                    Answer_A: itemQuest.Answer_A,
                                    Answer_B: itemQuest.Answer_B,
                                    Answer_C: itemQuest.Answer_C,
                                    Answer_D: itemQuest.Answer_D,
                                    Correct_Answer: itemQuest.Correct_Answer,
                                    Answer_Student: itemDetails.Answer_Student,
                                });
                                $scope.Name_Test = itemTests.Name_Test;
                                $scope.Detail = itemTestInfo.Detail;
                                $scope.Scores = itemTestInfo.Scores;
                            }
                        });
                    });
                });
            });
        });
    }
    var ss = 0;
    $scope.sortSubject = function () {
        if (ss % 2 != 0) {
            ss++;
            $scope.exs.sort((a, b) => {
                let fa = a.Name_Subjects.toLowerCase(),
                    fb = b.Name_Subjects.toLowerCase();
                if (fa < fb) {
                    return -1;
                }
                if (fa > fb) {
                    return 1;
                }
                return 0;
            });
        } else {
            ss++;
            $scope.exs.sort((a, b) => {
                let fa = a.Name_Subjects.toLowerCase(),
                    fb = b.Name_Subjects.toLowerCase();
                if (fa > fb) {
                    return -1;
                }
                if (fa < fb) {
                    return 1;
                }
                return 0;
            });
        }
    };
    var st = 0;
    $scope.sortTest = function () {
        if (st % 2 != 0) {
            st++;
            $scope.exs.sort((a, b) => {
                let fa = a.Name_Test.toLowerCase(),
                    fb = b.Name_Test.toLowerCase();
                if (fa < fb) {
                    return -1;
                }
                if (fa > fb) {
                    return 1;
                }
                return 0;
            });
        } else {
            st++;
            $scope.exs.sort((a, b) => {
                let fa = a.Name_Test.toLowerCase(),
                    fb = b.Name_Test.toLowerCase();
                if (fa > fb) {
                    return -1;
                }
                if (fa < fb) {
                    return 1;
                }
                return 0;
            });
        }
    };
    var sty = 0;
    $scope.sortType = function () {
        if (sty % 2 != 0) {
            sty++;
            $scope.exs.sort((a, b) => {
                let fa = a.Type_Test.toLowerCase(),
                    fb = b.Type_Test.toLowerCase();
                if (fa < fb) {
                    return -1;
                }
                if (fa > fb) {
                    return 1;
                }
                return 0;
            });
        } else {
            sty++;
            $scope.exs.sort((a, b) => {
                let fa = a.Type_Test.toLowerCase(),
                    fb = b.Type_Test.toLowerCase();
                if (fa > fb) {
                    return -1;
                }
                if (fa < fb) {
                    return 1;
                }
                return 0;
            });
        }
    };
    var sd = 0;
    $scope.sortDate = function () {
        if (sd % 2 != 0) {
            sd++;
            $scope.exs.sort((a, b) => {
                let fa = a.Date_To_Do.toLowerCase(),
                    fb = b.Date_To_Do.toLowerCase();
                if (fa < fb) {
                    return -1;
                }
                if (fa > fb) {
                    return 1;
                }
                return 0;
            });
        } else {
            sd++;
            $scope.exs.sort((a, b) => {
                let fa = a.Date_To_Do.toLowerCase(),
                    fb = b.Date_To_Do.toLowerCase();
                if (fa > fb) {
                    return -1;
                }
                if (fa < fb) {
                    return 1;
                }
                return 0;
            });
        }
    };
    var sse = 0;
    $scope.sortSemester = function () {
        if (sse % 2 != 0) {
            sse++;
            $scope.exs.sort((a, b) => {
                return a.Semester - b.Semester;
            });
        } else {
            sse++;
            $scope.exs.sort((a, b) => {
                return b.Semester - a.Semester;
            });
        }
    };
    var sy = 0;
    $scope.sortYear = function () {
        if (sy % 2 != 0) {
            sy++;
            $scope.exs.sort((a, b) => {
                let fa = a.School_Year.toLowerCase(),
                    fb = b.School_Year.toLowerCase();
                if (fa < fb) {
                    return -1;
                }
                if (fa > fb) {
                    return 1;
                }
                return 0;
            });
        } else {
            sy++;
            $scope.exs.sort((a, b) => {
                let fa = a.School_Year.toLowerCase(),
                    fb = b.School_Year.toLowerCase();
                if (fa > fb) {
                    return -1;
                }
                if (fa < fb) {
                    return 1;
                }
                return 0;
            });
        }
    };
}]);
