@extends('student._layout')
@section('content')

<header>
  <title>Giáo dục công dân - 3CESCHOOL</title>
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
            <li class="breadcrumb-item">
              <a href="/student/list-study-program">Góc học tập</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="#">Giáo dục công dân</a>
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
    <div class="main-container tabs-alpha">
      <ul class="nav nav-tabs tabs-alpha__nav-tabs">
        <li class="nav-item tabs-alpha__item">
          <a class="nav-link tabs-alpha__link active" data-toggle="tab" href="#tabs-alpha-info">
            <span class="ua-icon-info"></span>&nbsp;&nbsp;Thông tin môn học
          </a>
        </li>
        <li class="nav-item tabs-alpha__item">
          <a class="nav-link tabs-alpha__link" data-toggle="tab" href="#tabs-alpha-contents">
            <span class="ua-icon-content"></span>&nbsp;&nbsp;Nội dung
          </a>
        </li>
        <li class="nav-item tabs-alpha__item">
          <a class="nav-link tabs-alpha__link" data-toggle="tab" href="#tabs-alpha-document">
            <span class="ua-icon-document"></span>&nbsp;&nbsp;Tài liệu
          </a>
        </li>
        <li class="nav-item tabs-alpha__item">
          <a class="nav-link tabs-alpha__link" data-toggle="tab" href="#tabs-alpha-exercise">
            <span class="ua-icon-bookmark"></span>&nbsp;&nbsp;Bài tập
          </a>
        </li>
        <li class="nav-item tabs-alpha__item">
          <a class="nav-link tabs-alpha__link" data-toggle="tab" href="#tabs-alpha-discuss">
            <span class="ua-icon-group"></span>&nbsp;&nbsp;Thảo luận
          </a>
        </li>
      </ul>
      <div class="tab-content tabs-alpha__tab-content">
        <div class="tab-pane active" id="tabs-alpha-info" role="tabpanel" aria-expanded="true">
          Thông tin môn học
        </div>
        <div class="tab-pane" id="tabs-alpha-contents" role="tabpanel" aria-expanded="false">
          Nội dung
        </div>
        <div class="tab-pane" id="tabs-alpha-document" role="tabpanel">
          Tài liệu
        </div>
        <div class="tab-pane" id="tabs-alpha-exercise" role="tabpanel">
          Bài tập
        </div>
        <div class="tab-pane" id="tabs-alpha-discuss" role="tabpanel">
          Thảo luận
        </div>
      </div>
    </div>
  </div>
</div>

@stop