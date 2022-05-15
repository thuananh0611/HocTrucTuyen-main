<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>3CESCHOOL</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="//teacher/css/app.min.css">
    <link rel="stylesheet" href="//teacher/bundles/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="//teacher/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="//teacher/bundles/prism/prism.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/teacher/css/style.css">
    <link rel="stylesheet" href="/teacher/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/teacher/css/custom.css">
    <link rel="stylesheet" href="/teacher/css/PagedList.css">
    <link rel='shortcut icon' type='image/x-icon' href='/teacher/img/logotl.png' />
    <!-- General JS Scripts -->
    <script src="/teacher/js/app.min.js"></script>
    <script src="/teacher/js/md5.js"></script>
    <script src="/teacher/angular-1.8.2/angular.min.js"></script>
    <script data-semver="0.12.1" type="text/javascript" src="/teacher/ui-bootstrap-tpls-0.12.1.min.js"></script>
    <script>
        var app = angular.module("MyApp", ['ui.bootstrap']);
    </script>
</head>

<body ng-app="MyApp">
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- header -->
            @include('teacher.includes/header');
            <!-- slidebar -->
            @include('teacher.includes/slidebar');
            <!-- Main Content -->
            yield('content');
            <!-- footer -->
            @include('teacher.includes/footer');

        </div>
    </div>

    <!-- JS Libraies -->
    <script src="/teacher/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="/teacher/bundles/summernote/summernote-bs4.js"></script>
    <script src="/teacher/bundles/prism/prism.js"></script>
    <!-- Page Specific JS File -->
    <script src="/teacher/js/page/index.js"></script>
    <script src="/teacher/js/page/chart-apexcharts.js"></script>
    <!-- Template JS File -->
    <script src="/teacher/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="/teacher/js/custom.js"></script>
</body>

</html>