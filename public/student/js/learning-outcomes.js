app.controller('LearningOutcomesControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.ID_Student = sessionStorage.getItem("ID_Student");
    $scope.los = [];
    $scope.lstSubjects = [];
    $scope.lstTeachers = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $scope.avgScore = 0;
    $scope.avgScoreYear = 0;
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
        url: "http://127.0.0.1:8000/api/teachers"
    }).then(function (data) {
        $scope.lstTeachers = data.data;
    })
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/learning-outcomes"
    }).then(function (data) {
        $scope.los = [];
        data.data.forEach(function (item, i) {
            $scope.lstSubjects.forEach(function (itemSubjects, i) {
                $scope.lstTeachers.forEach(function (itemTeachers, i) {
                    if (item.ID_Student == $scope.ID_Student && itemSubjects.ID_Subjects == item.ID_Subjects && itemTeachers.ID_Teacher == item.ID_Teacher) {
                        if (item.Regular_Score_1 != null && item.Regular_Score_2 != null && item._15minutes_Score_1 != null && item._15minutes_Score_2 != null && item._15minutes_Score_3 == null && item._45minutes_Score_1 != null && item._45minutes_Score_2 != null && item._45minutes_Score_3 == null && item.Semester_Score != null) {
                            $scope.avgScore = ((item.Regular_Score_1 + item.Regular_Score_2 + item._15minutes_Score_1 + item._15minutes_Score_2) + (item._45minutes_Score_1 + item._45minutes_Score_2) * 2 + item.Semester_Score * 3) / 11;
                            $scope.los.push({
                                item,
                                avgScore: ($scope.avgScore).toFixed(1),
                                Name_Subjects: itemSubjects.Name_Subjects,
                                Name_Teacher: itemTeachers.Name_Teacher,
                            });
                        } else if (item.Regular_Score_1 != null && item.Regular_Score_2 != null && item._15minutes_Score_1 != null && item._15minutes_Score_2 != null && item._15minutes_Score_3 != null && item._45minutes_Score_1 != null && item._45minutes_Score_2 != null && item._45minutes_Score_3 == null && item.Semester_Score != null) {
                            $scope.avgScore = ((item.Regular_Score_1 + item.Regular_Score_2 + item._15minutes_Score_1 + item._15minutes_Score_2) + (item._45minutes_Score_1 + item._45minutes_Score_2) * 2 + item.Semester_Score * 3) / 12;
                            $scope.los.push({
                                item,
                                avgScore: ($scope.avgScore).toFixed(1),
                                Name_Subjects: itemSubjects.Name_Subjects,
                                Name_Teacher: itemTeachers.Name_Teacher,
                            });
                        } else if (item.Regular_Score_1 != null && item.Regular_Score_2 != null && item._15minutes_Score_1 != null && item._15minutes_Score_2 != null && item._15minutes_Score_3 == null && item._45minutes_Score_1 != null && item._45minutes_Score_2 != null && item._45minutes_Score_3 != null && item.Semester_Score != null) {
                            $scope.avgScore = ((item.Regular_Score_1 + item.Regular_Score_2 + item._15minutes_Score_1 + item._15minutes_Score_2) + (item._45minutes_Score_1 + item._45minutes_Score_2) * 2 + item.Semester_Score * 3) / 13;
                            $scope.los.push({
                                item,
                                avgScore: ($scope.avgScore).toFixed(1),
                                Name_Subjects: itemSubjects.Name_Subjects,
                                Name_Teacher: itemTeachers.Name_Teacher,
                            });
                        } else if (item.Regular_Score_1 != null && item.Regular_Score_2 != null && item._15minutes_Score_1 != null && item._15minutes_Score_2 != null && item._15minutes_Score_3 != null && item._45minutes_Score_1 != null && item._45minutes_Score_2 != null && item._45minutes_Score_3 != null && item.Semester_Score != null) {
                            $scope.avgScore = ((item.Regular_Score_1 + item.Regular_Score_2 + item._15minutes_Score_1 + item._15minutes_Score_2) + (item._45minutes_Score_1 + item._45minutes_Score_2) * 2 + item.Semester_Score * 3) / 14;
                            $scope.los.push({
                                item,
                                avgScore: ($scope.avgScore).toFixed(1),
                                Name_Subjects: itemSubjects.Name_Subjects,
                                Name_Teacher: itemTeachers.Name_Teacher,
                            });
                        } else {
                            $scope.avgScore = 0;
                            $scope.los.push({
                                item,
                                avgScore: ($scope.avgScore).toFixed(1),
                                Name_Subjects: itemSubjects.Name_Subjects,
                                Name_Teacher: itemTeachers.Name_Teacher,
                            });
                        }
                    }
                });
            });
        });
        $scope.totalItems = $scope.los.length;
    });
    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.los, newVal);
        $scope.totalItems = $scope.filtered.length;
        $scope.currentPage = 1;
    }, true);
    $scope.showModal = function (id) {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/learning-outcomes/" + id

        }).then(function (data) {
            $scope.lo = data.data;
            $scope.lstSubjects.forEach(function (itemSubjects, i) {
                $scope.lstTeachers.forEach(function (itemTeachers, i) {
                    if (itemSubjects.ID_Subjects == $scope.lo.ID_Subjects && itemTeachers.ID_Teacher == $scope.lo.ID_Teacher) {
                        if ($scope.lo.Regular_Score_1 != null && $scope.lo.Regular_Score_2 != null && $scope.lo._15minutes_Score_1 != null && $scope.lo._15minutes_Score_2 != null && $scope.lo._15minutes_Score_3 == null && $scope.lo._45minutes_Score_1 != null && $scope.lo._45minutes_Score_2 != null && $scope.lo._45minutes_Score_3 == null && $scope.lo.Semester_Score != null) {
                            $scope.avgScore = (($scope.lo.Regular_Score_1 + $scope.lo.Regular_Score_2 + $scope.lo._15minutes_Score_1 + $scope.lo._15minutes_Score_2) + ($scope.lo._45minutes_Score_1 + $scope.lo._45minutes_Score_2) * 2 + $scope.lo.Semester_Score * 3) / 11;
                            $scope.lo.avgScore = ($scope.avgScore).toFixed(1);
                            $scope.lo.ID_Subject = itemSubjects.ID_Subject;
                            $scope.lo.Name_Subject = itemSubjects.Name_Subjects;
                            $scope.lo.Name_Teacher = itemTeachers.Name_Teacher;
                        } else if ($scope.lo.Regular_Score_1 != null && $scope.lo.Regular_Score_2 != null && $scope.lo._15minutes_Score_1 != null && $scope.lo._15minutes_Score_2 != null && $scope.lo._15minutes_Score_3 != null && $scope.lo._45minutes_Score_1 != null && $scope.lo._45minutes_Score_2 != null && $scope.lo._45minutes_Score_3 == null && $scope.lo.Semester_Score != null) {
                            $scope.avgScore = (($scope.lo.Regular_Score_1 + $scope.lo.Regular_Score_2 + $scope.lo._15minutes_Score_1 + $scope.lo._15minutes_Score_2) + ($scope.lo._45minutes_Score_1 + $scope.lo._45minutes_Score_2) * 2 + $scope.lo.Semester_Score * 3) / 12;
                            $scope.lo.avgScore = ($scope.avgScore).toFixed(1);
                            $scope.lo.ID_Subject = itemSubjects.ID_Subject;
                            $scope.lo.Name_Subject = itemSubjects.Name_Subjects;
                            $scope.lo.Name_Teacher = itemTeachers.Name_Teacher;
                        } else if ($scope.lo.Regular_Score_1 != null && $scope.lo.Regular_Score_2 != null && $scope.lo._15minutes_Score_1 != null && $scope.lo._15minutes_Score_2 != null && $scope.lo._15minutes_Score_3 == null && $scope.lo._45minutes_Score_1 != null && $scope.lo._45minutes_Score_2 != null && $scope.lo._45minutes_Score_3 != null && $scope.lo.Semester_Score != null) {
                            $scope.avgScore = (($scope.lo.Regular_Score_1 + $scope.lo.Regular_Score_2 + $scope.lo._15minutes_Score_1 + $scope.lo._15minutes_Score_2) + ($scope.lo._45minutes_Score_1 + $scope.lo._45minutes_Score_2) * 2 + $scope.lo.Semester_Score * 3) / 13;
                            $scope.lo.avgScore = ($scope.avgScore).toFixed(1);
                            $scope.lo.ID_Subject = itemSubjects.ID_Subject;
                            $scope.lo.Name_Subject = itemSubjects.Name_Subjects;
                            $scope.lo.Name_Teacher = itemTeachers.Name_Teacher;
                        } else if ($scope.lo.Regular_Score_1 != null && $scope.lo.Regular_Score_2 != null && $scope.lo._15minutes_Score_1 != null && $scope.lo._15minutes_Score_2 != null && $scope.lo._15minutes_Score_3 != null && $scope.lo._45minutes_Score_1 != null && $scope.lo._45minutes_Score_2 != null && $scope.lo._45minutes_Score_3 != null && $scope.lo.Semester_Score != null) {
                            $scope.avgScore = (($scope.lo.Regular_Score_1 + $scope.lo.Regular_Score_2 + $scope.lo._15minutes_Score_1 + $scope.lo._15minutes_Score_2) + ($scope.lo._45minutes_Score_1 + $scope.lo._45minutes_Score_2) * 2 + $scope.lo.Semester_Score * 3) / 14;
                            $scope.lo.avgScore = ($scope.avgScore).toFixed(1);
                            $scope.lo.ID_Subject = itemSubjects.ID_Subject;
                            $scope.lo.Name_Subject = itemSubjects.Name_Subjects;
                            $scope.lo.Name_Teacher = itemTeachers.Name_Teacher;
                        } else {
                            $scope.avgScore = 0;
                            $scope.lo.avgScore = ($scope.avgScore).toFixed(1);
                            $scope.lo.ID_Subject = itemSubjects.ID_Subject;
                            $scope.lo.Name_Subject = itemSubjects.Name_Subjects;
                            $scope.lo.Name_Teacher = itemTeachers.Name_Teacher;
                        }
                    }
                });
            });
            $scope.avgYear = [];
            $scope.los.forEach(function (item, i) {
                $scope.los.forEach(function (item1, i) {
                    if (item.item.avgScore != 0 && item1.item.avgScore != 0 && item.item.ID_Subjects == item1.item.ID_Subjects && item.item.Semester == 1 && item1.item.Semester == 2) {
                        $scope.avgScoreYear = (Number(item.avgScore) + (Number(item1.avgScore) * 2)) / 3;
                        $scope.avgYear.push({
                            ID_Subjects: item.item.ID_Subjects,
                            avgScoreYear: ($scope.avgScoreYear).toFixed(1),
                            School_Year: item.item.School_Year,
                        });
                    }
                });
            });
        });
    }
    var st = 0;
    $scope.sortTeacher = function () {
        if (st % 2 != 0) {
            st++;
            $scope.los.sort((a, b) => {
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
            $scope.los.sort((a, b) => {
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
            $scope.los.sort((a, b) => {
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
            $scope.los.sort((a, b) => {
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
    var ssc = 0;
    $scope.sortScore = function () {
        if (ssc % 2 != 0) {
            ssc++;
            $scope.los.sort((a, b) => {
                return a.avgScore - b.avgScore;
            });
        } else {
            ssc++;
            $scope.los.sort((a, b) => {
                return b.avgScore - a.avgScore;
            });
        }
    };
    var sse = 0;
    $scope.sortSemester = function () {
        if (sse % 2 != 0) {
            sse++;
            $scope.los.sort((a, b) => {
                return a.item.Semester - b.item.Semester;
            });
        } else {
            sse++;
            $scope.los.sort((a, b) => {
                return b.item.Semester - a.item.Semester;
            });
        }
    };
    var sy = 0;
    $scope.sortYear = function () {
        if (sy % 2 != 0) {
            sy++;
            $scope.los.sort((a, b) => {
                let fa = a.item.School_Year.toLowerCase(),
                    fb = b.item.School_Year.toLowerCase();
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
            $scope.los.sort((a, b) => {
                let fa = a.item.School_Year.toLowerCase(),
                    fb = b.item.School_Year.toLowerCase();
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
