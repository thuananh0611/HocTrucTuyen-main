@extends('student._layout')
@section('content')

<header>
  <title>Thanh toán trực tuyến- 3CESCHOOL</title>
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
              <a href="/student/pay-tuition">Thanh toán trực tuyến</a>
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
        <div class="widget widget-remaining-time">
          <div class="row">
            <div class="col-md-6">
              <b>Phương thức thanh toán</b>
            </div>
            <div class="col-md-6" style="text-align:center;vertical-align:middle">
              <img src="img/vietinbank.png" style="width:150px;height:50px">
              <a class="btn btn-warning btn-xs" href="javascript:void(0)"><span
                  class="ua-icon-widget-money"></span>&nbsp; Thanh toán</a>
            </div>
          </div>
          <hr style="width: 100%;">
          <p>Bạn chưa biết thanh toán? &nbsp;&nbsp;<a href="" class="ahv" style="color: blue;"><b>HƯỚNG DẪN THANH
                TOÁN</b></a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2><span class="ua-icon-fm-list"></span>&nbsp;Danh sách các khoản thanh toán</h2>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>TT</th>
                    <th>Năm học</th>
                    <th>Học kỳ</th>
                    <th>Đợt thu</th>
                    <th>Mã khoản thu</th>
                    <th>Tên khoản thu</th>
                    <th>Số tiền</th>
                    <th class="text-center">Chọn<br><input type="checkbox" name="" id=""></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2020-2021</td>
                    <td>1</td>
                    <td>1</td>
                    <td>123456</td>
                    <td>Học phí</td>
                    <td>5.850.000,00 ₫</td>
                    <td class="text-center"><input type="checkbox" name="" id=""></td>
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