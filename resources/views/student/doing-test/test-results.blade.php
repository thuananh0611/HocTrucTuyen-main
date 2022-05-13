<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Kết quả bài làm</title>
    <link rel="shortcut icon" href="img/logotl.png">
    <script src="/student/js/angular.min.js"></script>
    <script>
        var app = angular.module('myapp', []);
    </script>
    <script src="/student/js/test-results.js"></script>
</head>

<body ng-app="myapp" ng-controller="TestResultsControl">
    <nav class="navbar navbar-expand navbar-dark bg-primary site-header sticky-top py-1">
        <a class="navbar-brand" href="#"><b>3CESCHOOL</b></a>
        <div class="collapse navbar-collapse justify-content-md-center">
            <h4><span class="border border-white text-white" style="vertical-align: middle;" id="time">00:00</span></h4>
        </div>
        <span class="text-white" style="font-size: 14px;">@{{Name_Student}}<br><small>@{{ID_Student}}</small></span>
    </nav>
    <div class="container mt-3">
        <main role="main">
            <div class="jumbotron">
                <div class="col-sm-8 mx-auto">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td colspan="3" class="text-center text-success">
                                    <h3>Kết quả bài kiểm tra</h3>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">Mã bài kiểm tra</td>
                                <td></td>
                                <td class="text-left">@{{Name_Test1}}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Mã học sinh</td>
                                <td></td>
                                <td class="text-left">@{{ID_Student1}}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Họ tên học sinh</td>
                                <td></td>
                                <td class="text-left">@{{Name_Student1}}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Số câu</td>
                                <td></td>
                                <td class="text-left">@{{Detail1}}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Điểm</td>
                                <td></td>
                                <td class="text-left font-weight-bold text-danger">@{{Scores1}}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Thời gian nộp</td>
                                <td></td>
                                <td class="text-left">@{{Submission_Time1.replace('/Date(','').replace(')/','') |
                                    date:"HH:mm:ss | dd/MM/yyyy"}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>