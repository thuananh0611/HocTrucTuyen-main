app.controller('expenseControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.exs = [];
    $scope.excts = [];
    $scope.stafs = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $scope.Tong = 0;
    //$scope.TotalMoney=sessionStorage.getItem("Total_Money");
    
    
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/expense"
    }).then(function (data) {
        $scope.exs = data.data;
        $scope.exs.forEach(ex => {
            $scope.Tong += ex.Total_Money;
        })
        $scope.totalItems = $scope.exs.length;
    });

    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/expense-ct"
    }).then(function (data) {
        $scope.excts = data.data;
        //$scope.totalItems = $scope.excts.length;
    });

    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/staff"
    }).then(function (data) {
        $scope.stafs = data.data;
    });

    $scope.resetFilters = function () {
        $scope.search = {};
    };

    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.exs, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/expense"

        }).then(function (data) {
            $scope.exs = data.data;
        });
    }
    $scope.reloadDataCT = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/expense-ct"

        }).then(function (data) {
            $scope.excts = data.data;
        });
    }

    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/expense",
                data: $scope.ex,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Th??m th??nh c??ng!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/expense/" + $scope.id,
                data: $scope.ex,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("C???p nh???t th??nh c??ng!");
                console.log(res.data);
            });
        }
        $scope.reloadData();
    }

    $scope.saveDataCT = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/expense-ct",
                data: $scope.exct,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Th??m th??nh c??ng!");
                console.log(res.data);
            });
        } else {
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/expense-ct/" + $scope.id,
                data: $scope.exct,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("C???p nh???t th??nh c??ng!");
                console.log(res.data);
            });
        }
        $scope.reloadData();
    }

    $scope.deleteClick = function (id) {
        var hoi = confirm("B???n c?? ch???c ch???n mu???n x??a kh??ng?");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/expense/" + id

            }).then(function (data) {
                alert("X??a th??nh c??ng!");
                $scope.message = data.data;
                $scope.reloadData();
            });
        }
    }
    $scope.deleteClickCT = function (id) {
        var hoi = confirm("B???n c?? ch???c ch???n mu???n x??a kh??ng?");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/expense-ct/" + id

            }).then(function (data) {
                alert("X??a th??nh c??ng!");
                $scope.message = data.data;
                $scope.reloadData();
            });
        }
    }
    $scope.showModal = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Th??m Kho???n chi m???i";
            $scope.modalButton = "Th??m m???i";
            if ($scope.ex) {
                $scope.ex.ID_Expense = "";
                $scope.ex.ID_Staff = "";
                $scope.ex.Date_Expense = "";
                $scope.ex.Total_Money = "";
            }
        } else {
            $scope.modalTitle = "C???p nh???t th??ng tin Kho???n chi";
            $scope.modalButton = "C???p nh???t";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/expense/" + id

            }).then(function (data) {
                $scope.ex = data.data;
            });
        }
    }
    $scope.showModalCT = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitleCT = "Th??ng tin chi ti???t kho???n chi"
            $scope.modalTitle = "Th??m Kho???n chi m???i";
            $scope.modalButton = "Th??m m???i";
            if ($scope.exct) {
                $scope.exct.ID_Expense_CT = "";
                $scope.exct.ID_Expense = "";
                $scope.exct.TypeOfExpense = "";
                $scope.exct.Into_Money = "";
            }
        } else {
            $scope.modalTitleCT = "Th??ng tin chi ti???t kho???n chi"
            $scope.modalTitle = "C???p nh???t th??ng tin Kho???n chi";
            $scope.modalButton = "C???p nh???t";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/expense-ct/" + id

            }).then(function (data) {
                $scope.excts = data.data;
                //console.log(data.data);
            });
        }
    }
    
}]);
