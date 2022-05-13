app.controller('FeedbackControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.ID_Student = sessionStorage.getItem("ID_Student");
    $scope.fbs = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $scope.fb = {};
    $scope.fb.ID_Student = $scope.ID_Student;
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/feedback"
    }).then(function (data) {
        $scope.fbs = [];
        data.data.forEach(function (item, i) {
            if (item.ID_Student == $scope.ID_Student) {
                $scope.fbs.push(item);
            }
        })
        $scope.totalItems = $scope.fbs.length;
    });
    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.fbs, newVal);
        $scope.totalItems = $scope.filtered.length;
        $scope.currentPage = 1;
    }, true);
    $scope.showModal = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Gửi ý kiến - phản hồi";
            $scope.modalButton = "Gửi";
            if ($scope.fb) {
                $scope.fb.Title = "";
                $scope.fb.Feedback_Content = "";
                $scope.fb.Feedback_Image = "";
                $scope.fb.Reply_Status = "";
            }
        } else {
            $scope.modalTitle = "Cập nhật thông tin ý kiến - phản hồi";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/feedback/" + id

            }).then(function (data) {
                $scope.fb = data.data;
            });
        }
    }
    $scope.showModalDT = function (id) {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/feedback/" + id

        }).then(function (data) {
            $scope.fb = data.data;
        });
    }
    $scope.reloadData = function () {
        $scope.fbs = [];
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/feedback"

        }).then(function (data) {
            data.data.forEach(function (item, i) {
                if (item.ID_Student == $scope.ID_Student) {
                    $scope.fbs.push(item);
                }
            })
            $scope.totalItems = $scope.fbs.length;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/feedback",
                data: $scope.fb,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/feedback/" + $scope.id,
                data: $scope.fb,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Cập nhật thành công!");
                console.log(res.data);
            });
        }
        $scope.reloadData();
    }
    $scope.deleteClick = function (id) {
        var ques = confirm("Bạn có chắc chắn muốn xóa không?");
        if (ques) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/feedback/" + id

            }).then(function (data) {
                alert("Xóa thành công!");
                $scope.message = data.data;
                $scope.reloadData();
            });
        }
    }
    var st = 0;
    $scope.sortTitle = function () {
        if (st % 2 != 0) {
            st++;
            $scope.fbs.sort((a, b) => {
                let fa = a.Title.toLowerCase(),
                    fb = b.Title.toLowerCase();
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
            $scope.fbs.sort((a, b) => {
                let fa = a.Title.toLowerCase(),
                    fb = b.Title.toLowerCase();
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
    var sc = 0;
    $scope.sortContent = function () {
        if (sc % 2 != 0) {
            sc++;
            $scope.fbs.sort((a, b) => {
                let fa = a.Feedback_Content.toLowerCase(),
                    fb = b.Feedback_Content.toLowerCase();
                if (fa < fb) {
                    return -1;
                }
                if (fa > fb) {
                    return 1;
                }
                return 0;
            });
        } else {
            sc++;
            $scope.fbs.sort((a, b) => {
                let fa = a.Feedback_Content.toLowerCase(),
                    fb = b.Feedback_Content.toLowerCase();
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
    var sti = 0;
    $scope.sortTime = function () {
        if (sti % 2 != 0) {
            sti++;
            $scope.fbs.sort((a, b) => {
                let da = new Date(a.created_at),
                    db = new Date(b.created_at);
                return da - db;
            });
        } else {
            sti++;
            $scope.fbs.sort((a, b) => {
                let da = new Date(a.created_at),
                    db = new Date(b.created_at);
                return db - da;
            });
        }
    };
    var ss = 0;
    $scope.sortStatus = function () {
        if (ss % 2 != 0) {
            ss++;
            $scope.fbs.sort((a, b) => {
                let fa = a.Reply_Status.toLowerCase(),
                    fb = b.Reply_Status.toLowerCase();
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
            $scope.fbs.sort((a, b) => {
                let fa = a.Reply_Status.toLowerCase(),
                    fb = b.Reply_Status.toLowerCase();
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
