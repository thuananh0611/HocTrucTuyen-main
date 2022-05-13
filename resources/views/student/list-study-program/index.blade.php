@extends('student._layout')
@section('content')

<header>
    <title>Góc học tập - 3CESCHOOL</title>
</header>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/student/home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/student/list-study-program">Góc học tập</a>
                        </li>
                    </ul>
                    <div class="widget-remaining-time__block">
                        <script>
                            var myVar = setInterval(function () { myTimer() }, 1000);
                            function myTimer() {
                            var d = new Date();
                            var t = d.toLocaleTimeString();
                            document.getElementById("h").innerHTML = t;
                            }
                        </script>
                        <script type="text/javascript">
                            n = new Date();
                            if (n.getTimezoneOffset() == 0) t = n.getTime() + (7 * 60 * 60 * 1000);
                            else t = n.getTime();
                            n.setTime(t);
                            var dn = new Array("Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
                            d = n.getDay();
                            m = n.getMonth() + 1;
                            y = n.getFullYear()
                            document.write(dn[d] + ", " + (n.getDate() < 10 ? "0" : "") + n.getDate() + "/" + (m < 10 ? "0" :
                            "") + m + "/" + y + "&nbsp;&nbsp;|&nbsp;&nbsp;")
                        </script>
                        <span id="h"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-4 form-group">
                <select name="namhoc" id="namhoc" class="form-control">
                    <option value="">--Chọn năm học--</option>
                    <option value="">1</option>
                </select>
            </div>
            <div class="col-lg-4 col-sm-4 form-group">
                <select name="hocky" id="hocky" class="form-control">
                    <option value="">--Chọn học kỳ--</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                </select>
            </div>
            <div class="col-lg-4 col-sm-4">
                <input type="text" name="timkiem" id="timkiem" class="form-control" placeholder="Tìm theo...">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 text-center text-success">
                <h1>Danh sách môn học</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="/student/subject-details">
                    <div class="card-widget card-widget-b bhv">
                        <img src="img/group.jpg" alt="" class="img-fluid">
                        <div class="card-widget-b__stats">
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-document-solid card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">Giáo dục công dân</div>
                                    <div class="card-widget-b__stats-item-desc">Môn học</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-user card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">Trần Thị Huyền</div>
                                    <div class="card-widget-b__stats-item-desc">Giáo viên giảng dạy</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-envelope card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">tranhuyen@gmail.com</div>
                                    <div class="card-widget-b__stats-item-desc">Mail</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-phone card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">0985143841</div>
                                    <div class="card-widget-b__stats-item-desc">Điện thoại</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="/student/subject-details">
                    <div class="card-widget card-widget-b bhv">
                        <img src="img/group.jpg" alt="" class="img-fluid">
                        <div class="card-widget-b__stats">
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-document-solid card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">Giáo dục công dân</div>
                                    <div class="card-widget-b__stats-item-desc">Môn học</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-user card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">Trần Thị Huyền</div>
                                    <div class="card-widget-b__stats-item-desc">Giáo viên giảng dạy</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-envelope card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">tranhuyen@gmail.com</div>
                                    <div class="card-widget-b__stats-item-desc">Mail</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-phone card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">0985143841</div>
                                    <div class="card-widget-b__stats-item-desc">Điện thoại</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="/student/subject-details">
                    <div class="card-widget card-widget-b bhv">
                        <img src="img/group.jpg" alt="" class="img-fluid">
                        <div class="card-widget-b__stats">
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-document-solid card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">Giáo dục công dân</div>
                                    <div class="card-widget-b__stats-item-desc">Môn học</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-user card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">Trần Thị Huyền</div>
                                    <div class="card-widget-b__stats-item-desc">Giáo viên giảng dạy</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-envelope card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">tranhuyen@gmail.com</div>
                                    <div class="card-widget-b__stats-item-desc">Mail</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-phone card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">0985143841</div>
                                    <div class="card-widget-b__stats-item-desc">Điện thoại</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="/student/subject-details">
                    <div class="card-widget card-widget-b bhv">
                        <img src="img/group.jpg" alt="" class="img-fluid">
                        <div class="card-widget-b__stats">
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-document-solid card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">Giáo dục công dân</div>
                                    <div class="card-widget-b__stats-item-desc">Môn học</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-user card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">Trần Thị Huyền</div>
                                    <div class="card-widget-b__stats-item-desc">Giáo viên giảng dạy</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-envelope card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">tranhuyen@gmail.com</div>
                                    <div class="card-widget-b__stats-item-desc">Mail</div>
                                </div>
                            </div>
                            <div class="card-widget-b__stats-item">
                                <span class="ua-icon-phone card-widget-b__stats-item-icon"></span>
                                <div class="card-widget-b__stats-item-content">
                                    <div class="card-widget-b__stats-item-value">0985143841</div>
                                    <div class="card-widget-b__stats-item-desc">Điện thoại</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@stop