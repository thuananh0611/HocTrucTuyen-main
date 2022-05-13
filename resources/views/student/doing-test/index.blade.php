<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .card-text label:hover,
        input:hover {
            cursor: pointer;
            color: blue;
        }
    </style>
    <title>Đang làm bài</title>
    <link rel="shortcut icon" href="img/logotl.png">
    <script src="/student/js/angular.min.js"></script>
    <script>
        var app = angular.module('myapp', []);
    </script>
    <script src="/student/js/doing-test.js"></script>
</head>

<body ng-app="myapp" ng-controller="DoingTestControl">
    <nav class="navbar navbar-expand navbar-dark bg-primary site-header sticky-top py-1">
        <a class="navbar-brand" href="#"><b>3CESCHOOL</b></a>
        <div class="collapse navbar-collapse justify-content-md-center">
            <h4><span class="border border-white text-white" style="vertical-align: middle;" id="time">@{{counter |
                    counter | date:'mm:ss'}}</span></h4>
        </div>
        <span class="text-white" style="font-size: 14px;">@{{Name_Student}}<br><small>@{{ID_Student}}</small></span>
    </nav>
    <div class="container mt-3">
        <main role="main">
            <div class="mt-3 jumbotron" style="padding: 25px;" ng-repeat="t in lstTest">
                <h5 class="card-subtitle text-success">Câu @{{t.No}}:</h5>
                <p class="card-text">@{{t.Question_Content}}</p>
                <center ng-if="t.Img_Content != ''">
                    <img src="/storage/questions/@{{t.Img_Content}}" class="img-fluid" alt="image-content">
                </center>
                <p class="card-text mt-3">
                    <label>
                        <input class="inpA" name="@{{t.ID_Question}}" type="radio" value="@{{t.Answer_A}}">
                        <span>@{{t.Answer_A}}</span>
                    </label>
                </p>
                <p class="card-text">
                    <label>
                        <input class="inpA" name="@{{t.ID_Question}}" type="radio" value="@{{t.Answer_B}}">
                        <span>@{{t.Answer_B}}</span>
                    </label>
                </p>
                <p class="card-text">
                    <label>
                        <input class="inpA" name="@{{t.ID_Question}}" type="radio" value="@{{t.Answer_C}}">
                        <span>@{{t.Answer_C}}</span>
                    </label>
                </p>
                <p class="card-text">
                    <label>
                        <input class="inpA" name="@{{t.ID_Question}}" type="radio" value="@{{t.Answer_D}}">
                        <span>@{{t.Answer_D}}</span>
                    </label>
                </p>
            </div>
            <center class="mt-3 mb-3">
                <button type=" button" class="btn btn-outline-success" ng-click="submitTest()"><small>Nộp
                        bài</small></button>
            </center>
        </main>
    </div>

    <script src="/student/js/helpers.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>