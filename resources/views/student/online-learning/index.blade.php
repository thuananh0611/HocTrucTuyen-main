@extends('student._layout')
@section('content')

<header>
    <title>Học trực tuyến - 3CESCHOOL</title>
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
                            <a href="/student/online-learning">Học trực tuyến</a>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2><span class="ua-icon-fm-list"></span>&nbsp;Danh sách các môn học</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Môn học</th>
                                        <th>Giáo viên giảng dạy</th>
                                        <th>Tổ chuyên môn</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Toán</td>
                                        <td>Nguyễn Văn A</td>
                                        <td>Tổ tự nhiên</td>
                                        <td class="table__actions">
                                            <div class="dropdown">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">Thao tác</button>
                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                    style="position: absolute; transform: translate3d(0px, 36px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modal-view"><span
                                                            class="ua-icon-calendar"></span>&nbsp;&nbsp;Xem lịch học</a>
                                                    <a class="dropdown-item" href="#"><span
                                                            class="ua-icon-arrow-right"></span>&nbsp;&nbsp;Vào lớp
                                                        học</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-view" class="modal fade custom-modal custom-modal-subscribe">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content" style="width: auto;">
                        <div class="modal-header custom-modal__image">
                            <img src="img/modal/calendar.png" alt="" class="" style="width: 72px;">
                        </div>
                        <div class="modal-body custom-modal__body" style="text-align: inherit;">
                            <h4 class="custom-modal__body-heading">Thông tin lịch học</h4>
                            <div class="custom-modal__form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="widget widget-remaining-time"
                                            style="margin-top: -35px;margin-bottom: 0px;">
                                            <div class="col-md-6 form-group">
                                                <label class="col-sm-5 control-label">Tên môn học:</label>
                                                <label class="col-sm-6 control-label"
                                                    style="font-weight: 500;">Toán</label>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="col-sm-5 control-label">Giáo viên giảng dạy:</label>
                                                <label class="col-sm-6 control-label" style="font-weight: 500;">Nguyễn
                                                    Văn A</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="table-responsive">
                                        <b>Thời khóa biểu</b>
                                        <table class="table table-striped table-hover" id="tableExport"
                                            style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th>TT</th>
                                                    <th>Từ ngày</th>
                                                    <th>Đến ngày</th>
                                                    <th>Thứ</th>
                                                    <th>Tiết</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>22/02/2022</td>
                                                    <td>22/02/2022</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr style="width: 100%;margin: 30px 0;">
                                    <b>Danh sách học sinh</b><button class="btn btn-info" id="btn1"
                                        style="margin-left: 30px;">Hiển
                                        thị</button>
                                    <div class="table-responsive" id="content" style="display: none;">
                                        <table class="table table-striped table-hover" id="tableExport1"
                                            style="width:100%;">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>TT</th>
                                                    <th>Mã học sinh</th>
                                                    <th>Họ tên</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>A2124001</td>
                                                    <td>Nguyễn Văn A</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button class="btn btn-info mt-3" id="btn2" style="display: none;">Ẩn</button>
                                    <script language="javascript">
                                        document.getElementById("btn1").onclick = function () {
                                        document.getElementById("content").style.display = 'block';
                                        document.getElementById("btn1").style.display = 'none';
                                        document.getElementById("btn2").style.display = 'block';
                                        };
                                        document.getElementById("btn2").onclick = function () {
                                        document.getElementById("content").style.display = 'none';
                                        document.getElementById("btn1").style.display = 'block';
                                        document.getElementById("btn2").style.display = 'none';
                                        };
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop