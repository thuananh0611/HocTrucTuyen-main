@extends('student._layout')
@section('content')

<header>
    <title>Thông tin tài chính - 3CESCHOOL</title>
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
                            <a href="/student/finance">Thông tin tài chính</a>
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
            <div class="col-lg-12">
                <div class="widget widget-remaining-time" style="font-weight: 500;">
                    <div class="col-md-4 form-group">
                        <label class="col-sm-6 control-label">Tổng số tiền phải nộp:</label>
                        <label class="col-sm-5 control-label" style="color:red;">10.523.220,00 ₫</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-sm-6 control-label">Tổng số tiền đã nộp: </label>
                        <label class="col-sm-5 control-label" style="color:red;">10.523.220,00 ₫</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-sm-6 control-label">Số tiền thừa/thiếu: </label>
                        <label class=" control-label" style="color:red;">0,00 ₫</label>
                    </div>
                    <div class="text-center col-sm-12">
                        <a href="/student/pay-tuition" class="btn btn-info">Thanh toán trực tuyến</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Năm học</th>
                                        <th>Học kỳ</th>
                                        <th>Mức học phí</th>
                                        <th>Miễn giảm</th>
                                        <th>Số tiền phải nộp</th>
                                        <th>Số tiền đã nộp</th>
                                        <th>Thừa thiếu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2020-2021</td>
                                        <td>1</td>
                                        <td>5.850.000,00 ₫</td>
                                        <td>0,00 ₫</td>
                                        <td>5.850.000,00 ₫</td>
                                        <td>5.850.000,00 ₫</td>
                                        <td>0,00 ₫</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr style="margin: 30px 0;">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport1" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Năm học</th>
                                        <th>Học kỳ</th>
                                        <th>Khoản thu khác</th>
                                        <th>Số tiền phải nộp</th>
                                        <th>Số tiền đã nộp</th>
                                        <th>Thừa thiếu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2020-2021</td>
                                        <td>1</td>
                                        <td>Bảo hiểm y tế</td>
                                        <td>850.000,00 ₫</td>
                                        <td>850.000,00 ₫</td>
                                        <td>0,00 ₫</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop