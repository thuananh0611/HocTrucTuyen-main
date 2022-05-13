<!DOCTYPE html>
<html lang="en">


<head>
    <title>3CESCHOOL</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="/teacher/images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="/teacher/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="/teacher/css/materialize.css" rel="stylesheet">
    <link href="/teacher/css/bootstrap.css" rel="stylesheet" />
    <link href="/teacher/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="/teacher/css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <!-- header -->
    @include('teacher.includes/header')

    <!--== BODY CONTNAINER ==-->
    <!--  -->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="/teacher/images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Victoria Baker <span> Giáo viên</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <!-- slidebar -->
                @include('teacher.includes/slidebar')
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <!-- index -->
            @yield('content')

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <!-- footer -->
    @include('teacher.includes/footer')
    <script src="/teacher/js/main.min.js"></script>
    <script src="/teacher/js/bootstrap.min.js"></script>
    <script src="/teacher/js/materialize.min.js"></script>
    <script src="/teacher/js/custom.js"></script>

</body>


</html>