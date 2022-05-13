app.controller('ScheduleControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.ID_Student = sessionStorage.getItem("ID_Student");
    $scope.ID_Class = sessionStorage.getItem("ID_Class");
    $scope.schs = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $scope.lstSubjects = [];
    $scope.lstTeachers = [];
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
    $scope.lstWeeks = [];
    for (let i = 1; i <= 52; i++) {
        $scope.lstWeeks.push({
            value: i,
        });
    }
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/subjects"
    }).then(function (data) {
        $scope.lstSubjects = data.data;
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/teachers"
    }).then(function (data) {
        $scope.lstTeachers = data.data;
    });
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/schedule"
    }).then(function (data) {
        $scope.schs = [];
        data.data.forEach(function (item, i) {
            $scope.lstSubjects.forEach(function (itemSubjects, i) {
                $scope.lstTeachers.forEach(function (itemTeachers, i) {
                    if (item.ID_Class == $scope.ID_Class && item.ID_Subjects == itemSubjects.ID_Subjects && item.ID_Teacher == itemTeachers.ID_Teacher) {
                        $scope.schs.push({
                            Week: item.Week,
                            Learn_Day: item.Learn_Day,
                            Day: item.Day,
                            Lesson: item.Lesson,
                            Name_Subjects: itemSubjects.Name_Subjects,
                            Name_Teacher: itemTeachers.Name_Teacher,
                            Semester: item.Semester,
                            School_Year: item.School_Year,
                        });
                    }
                });
            });
        });
        $scope.totalItems = $scope.schs.length;
    });
    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.schs, newVal);
        $scope.totalItems = $scope.filtered.length;
        $scope.currentPage = 1;
    }, true);
    var sk = 0;
    $scope.sortWeek = function () {
        if (sk % 2 != 0) {
            sk++;
            $scope.schs.sort((a, b) => {
                return a.Week - b.Week;
            });
        } else {
            sk++;
            $scope.schs.sort((a, b) => {
                return b.Week - a.Week;
            });
        }
    };
    var sl = 0;
    $scope.sortLearnDay = function () {
        if (sl % 2 != 0) {
            sl++;
            $scope.schs.sort((a, b) => {
                let da = new Date(a.Learn_Day),
                    db = new Date(b.Learn_Day);
                return da - db;
            });
        } else {
            sl++;
            $scope.schs.sort((a, b) => {
                let da = new Date(a.Learn_Day),
                    db = new Date(b.Learn_Day);
                return db - da;
            });
        }
    };
    var sd = 0;
    $scope.sortDay = function () {
        if (sd % 2 != 0) {
            sd++;
            $scope.schs.sort((a, b) => {
                return a.Day - b.Day;
            });
        } else {
            sd++;
            $scope.schs.sort((a, b) => {
                return b.Day - a.Day;
            });
        }
    };
    var sle = 0;
    $scope.sortLesson = function () {
        if (sle % 2 != 0) {
            sle++;
            $scope.schs.sort((a, b) => {
                return a.Lesson - b.Lesson;
            });
        } else {
            sle++;
            $scope.schs.sort((a, b) => {
                return b.Lesson - a.Lesson;
            });
        }
    };
    var st = 0;
    $scope.sortTeacher = function () {
        if (st % 2 != 0) {
            st++;
            $scope.schs.sort((a, b) => {
                let fa = a.Name_Teacher.toLowerCase(),
                    fb = b.Name_Teacher.toLowerCase();
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
            $scope.schs.sort((a, b) => {
                let fa = a.Name_Teacher.toLowerCase(),
                    fb = b.Name_Teacher.toLowerCase();
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
    var ss = 0;
    $scope.sortSubject = function () {
        if (ss % 2 != 0) {
            ss++;
            $scope.schs.sort((a, b) => {
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
            $scope.schs.sort((a, b) => {
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
    var sse = 0;
    $scope.sortSemester = function () {
        if (sse % 2 != 0) {
            sse++;
            $scope.schs.sort((a, b) => {
                return a.Semester - b.Semester;
            });
        } else {
            sse++;
            $scope.schs.sort((a, b) => {
                return b.Semester - a.Semester;
            });
        }
    };
    var sy = 0;
    $scope.sortYear = function () {
        if (sy % 2 != 0) {
            sy++;
            $scope.schs.sort((a, b) => {
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
            $scope.schs.sort((a, b) => {
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
