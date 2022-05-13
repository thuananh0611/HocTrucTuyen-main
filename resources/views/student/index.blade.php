@extends('student._layout')
@section('content')

<header>
    <title>Trang chủ - 3CESCHOOL</title>
    <script src="/student/js/home.js"></script>
</header>

<div class="page-content" ng-controller="HomeControl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <h3 class="widget-remaining-time__heading">Bảng điều khiển</h3>
                    <div class="widget-remaining-time__block">
                        <script>
                            var myVar = setInterval(function () {myTimer()}, 1000);
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
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="/student/online-learning" class="widget widget-alpha widget-alpha--color-amaranth boxx bhv">
                    <div>
                        <div class="widget-alpha__amount">Học trực tuyến</div>
                        <div class="widget-alpha__description">Vào học tương tác trực tuyến</div>
                    </div>
                    <span class="widget-alpha__icon ua-icon-desktop"></span>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="/student/list-study-program"
                    class="widget widget-alpha widget-alpha--color-green-jungle boxx bhv">
                    <div>
                        <div class="widget-alpha__amount">Góc học tập</div>
                        <div class="widget-alpha__description">Xem bài giảng số hóa, tài liệu tham khảo</div>
                    </div>
                    <span class="widget-alpha__icon ua-icon-bag-outline"></span>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="/student/exam-list"
                    class="widget widget-alpha widget-alpha--color-orange widget-alpha--donut boxx bhv">
                    <div>
                        <div class="widget-alpha__amount">Kiểm tra, thi</div>
                        <div class="widget-alpha__description">Làm bài kiểm tra, bài thi, xem bài đã làm</div>
                    </div>
                    <span class="widget-alpha__icon ua-icon-templates"></span>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="/student/learning-outcomes"
                    class="widget widget-alpha widget-alpha--color-java widget-alpha--help boxx bhv">
                    <div>
                        <div class="widget-alpha__amount">Kết quả học tập</div>
                        <div class="widget-alpha__description">Tra cứu điểm kết quả học tập</div>
                    </div>
                    <span class="widget-alpha__icon ua-icon-bar-chart-up"></span>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="/student/schedule"
                    class="widget widget-alpha widget-alpha--color-java widget-alpha--help boxx bhv">
                    <div>
                        <div class="widget-alpha__amount">Thông tin lịch học</div>
                        <div class="widget-alpha__description">Tra cứu thông tin về lịch học, lịch thi</div>
                    </div>
                    <span class="widget-alpha__icon mdi mdi-calendar-clock"></span>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="/student/finance"
                    class="widget widget-alpha widget-alpha--color-orange widget-alpha--donut boxx bhv">
                    <div>
                        <div class="widget-alpha__amount">Tài chính</div>
                        <div class="widget-alpha__description">Tra cứu thông tin về các khoản chi phí</div>
                    </div>
                    <span class="widget-alpha__icon mdi mdi-currency-usd"></span>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="/student/evaluate" class="widget widget-alpha widget-alpha--color-green-jungle boxx bhv">
                    <div>
                        <div class="widget-alpha__amount">Khảo sát, đánh giá</div>
                        <div class="widget-alpha__description">Khảo sát, đánh giá chất lượng lớp học, giáo viên
                        </div>
                    </div>
                    <span class="widget-alpha__icon mdi mdi-clipboard-text"></span>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <a href="/student/feedback" class="widget widget-alpha widget-alpha--color-amaranth boxx bhv">
                    <div>
                        <div class="widget-alpha__amount">Ý kiến, phản hồi</div>
                        <div class="widget-alpha__description">Gửi các ý kiến về hệ thống</div>
                    </div>
                    <span class="widget-alpha__icon mdi mdi-message-processing"></span>
                </a>
            </div>
        </div>
    </div>
</div>

@stop