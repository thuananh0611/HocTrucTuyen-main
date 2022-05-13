<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/student/img/logotl.png">
    <link rel="stylesheet" href="/student/css/custom.css">
    <link rel="stylesheet" href="/student/fonts/open-sans/style.min.css">
    <link rel="stylesheet" href="/student/fonts/universe-admin/style.css">
    <link rel="stylesheet" href="/student/fonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/student/fonts/iconfont/style.css">
    <link rel="stylesheet" href="/student/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="/student/vendor/simplebar/simplebar.css">
    <link rel="stylesheet" href="/student/vendor/tagify/tagify.css">
    <link rel="stylesheet" href="/student/vendor/tippyjs/tippy.css">
    <link rel="stylesheet" href="/student/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/student/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/student/css/style.min.css" id="stylesheet">
    <link rel="stylesheet" href="/student/css/PagedList.css" id="stylesheet">
    <script src="/student/js/ie.assign.fix.min.js"></script>
    <script src="/student/js/angular.min.js"></script>
    <script src="/student/js/ui-bootstrap-tpls-0.10.0.js"></script>
    <script>
        var app = angular.module('myapp', ['ui.bootstrap']);
    </script>
    <script src="/student/js/home.js"></script>
</head>

<body class="js-loading" ng-app="myapp">
    <!-- add for rounded corners: form-controls-rounded -->
    <div class="page-preloader js-page-preloader">
        <div class="page-preloader__logo">
            <img src="img/logo-black-lg-1.png" alt="" class="page-preloader__logo-image">
        </div>
        <div class="page-preloader__loader">
            <div class="page-preloader__loader-heading">Đang tải hệ thống</div>
            <div class="page-preloader__loader-desc">Cập nhật tiện ích con</div>
            <div class="progress progress-rounded page-preloader__loader-progress">
                <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="page-preloader__copyright">3CESCHOOL, <script>
                document.write(new Date().getFullYear());
            </script>
        </div>
    </div>

    <!-- header here -->
    @include('student.includes/header')

    <div class="page-wrap">
        <!-- slidebar here -->
        @include('student.includes/slidebar')

        <!-- content here -->
        @yield('content')
    </div>

    <!-- footer here -->
    @include('student.includes/footer')

    <script src="/student/js/helpers.js"></script>
    <script src="/student/js/moment.js"></script>
    <script src="/student/vendor/echarts/echarts.min.js"></script>
    <script src="/student/vendor/jquery/jquery.min.js"></script>
    <script src="/student/vendor/popper/popper.min.js"></script>
    <script src="/student/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/student/vendor/select2/js/select2.full.min.js"></script>
    <script src="/student/vendor/simplebar/simplebar.js"></script>
    <script src="/student/vendor/text-avatar/jquery.textavatar.js"></script>
    <script src="/student/vendor/tippyjs/tippy.all.min.js"></script>
    <script src="/student/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="/student/vendor/wnumb/wNumb.js"></script>
    <script src="/student/js/main.js"></script>
    <script src="/student/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="/student/js/preview/default-dashboard.min.js"></script>
    <script src="/student/js/preview/slide-nav.min.js"></script>
</body>

</html>