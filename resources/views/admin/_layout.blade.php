<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/admin/css/app.min.css">

    <link rel="stylesheet" href="/admin/bundles/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="/admin/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/admin/bundles/prism/prism.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" href="/admin/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/admin/css/custom.css">
    <link rel="stylesheet" href="/admin/css/PagedList.css">
    <link rel='shortcut icon' type='image/x-icon' href='/admin/img/logotl.png' />
    <!-- General JS Scripts -->
    <script src="/admin/js/app.min.js"></script>
    <script src="/admin/js/md5.js"></script>

    <script src="/admin/js/angular.min.js"></script>
    <script src="/admin/js/ui-bootstrap-tpls-0.10.0.js"></script>
    <script>
        var app = angular.module('myapp', ['ui.bootstrap']);
    </script>
     <style>.card-body .table-responsive table tbody tr td {text-align:center}</style>
</head>

<body ng-app="myapp">
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- header here -->
            @include('admin.includes/header')

            <!-- slidebar here -->
            @include('admin.includes/slidebar')

            <!-- content here -->
            @yield('content')

            <!-- footer here -->
            @include('admin.includes/footer')

        </div>
    </div>

    <script src="/admin/js/helpers.js"></script>
    <!-- General JS Scripts -->
    <script src="/admin/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="/admin/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="/admin/bundles/summernote/summernote-bs4.js"></script>
    <script src="/admin/bundles/prism/prism.js"></script>
    <!-- Page Specific JS File -->
    <script src="/admin/js/page/index.js"></script>
    <script src="/admin/js/page/chart-apexcharts.js"></script>
    <!-- Template JS File -->
    <script src="/admin/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="/admin/js/custom.js"></script>
</body>

</html>