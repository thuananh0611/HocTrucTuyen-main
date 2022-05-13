@extends('teacher._layout')
@section('content')

<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
            </li>
            <li class="active-bre"><a href="#"> Bảng điều khiển</a>
            </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Quay lại</a>
            </li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Bảng điều khiển dành cho giáo viên</h2>
        <p>Dưới đây là các thống kê dữ liệu cơ bản:</p>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>Các khóa học</h5>
                        <h4>948</h4>
                        <a href="#">Xem thêm</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>Yêu cầu</h5>
                        <h4>672</h4>
                        <a href="#">Xem thêm</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>Học sinh</h5>
                        <h4>689</h4>
                        <a href="#">Xem thêm</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-4">
                        <h5>Đánh giá</h5>
                        <h4>24</h4>
                        <a href="#">Xem thêm</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Thông tin học sinh</h4>
                        <p>Các thông tin của học sinh như tên, mã học sinh, số điện thoại, địa chỉ email, quê quán, nơi cư trú và những thông tin khác</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Người dùng</th>
                                        <!-- Ảnh -->
                                        <th>Họ tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Quê quán</th>
                                        <th>Mã học sinh</th>
                                        <th>Ngày sinh</th>
                                        <th>Trạng thái</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lương Ngọc Bích</span><span class="list-enq-city">Tứ Kỳ, Hải Dương</span></a>
                                        </td>
                                        <td>098 999 888</td>
                                        <td>bich@gmail.com</td>
                                        <td>Hải Dương</td>
                                        <td>ST0001</td>
                                        <td>14 May 2001</td>
                                        <td>
                                            <span class="label label-success">Đang học</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lương Ngọc Bích</span><span class="list-enq-city">Tứ Kỳ, Hải Dương</span></a>
                                        </td>
                                        <td>098 999 888</td>
                                        <td>bich@gmail.com</td>
                                        <td>Hải Dương</td>
                                        <td>ST0001</td>
                                        <td>14 May 2001</td>
                                        <td>
                                            <span class="label label-success">Đang học</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lương Ngọc Bích</span><span class="list-enq-city">Tứ Kỳ, Hải Dương</span></a>
                                        </td>
                                        <td>098 999 888</td>
                                        <td>bich@gmail.com</td>
                                        <td>Hải Dương</td>
                                        <td>ST0001</td>
                                        <td>14 May 2001</td>
                                        <td>
                                            <span class="label label-success">Đang học</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lương Ngọc Bích</span><span class="list-enq-city">Tứ Kỳ, Hải Dương</span></a>
                                        </td>
                                        <td>098 999 888</td>
                                        <td>bich@gmail.com</td>
                                        <td>Hải Dương</td>
                                        <td>ST0001</td>
                                        <td>14 May 2001</td>
                                        <td>
                                            <span class="label label-success">Đang học</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lương Ngọc Bích</span><span class="list-enq-city">Tứ Kỳ, Hải Dương</span></a>
                                        </td>
                                        <td>098 999 888</td>
                                        <td>bich@gmail.com</td>
                                        <td>Hải Dương</td>
                                        <td>ST0001</td>
                                        <td>14 May 2001</td>
                                        <td>
                                            <span class="label label-success">Đang học</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lương Ngọc Bích</span><span class="list-enq-city">Tứ Kỳ, Hải Dương</span></a>
                                        </td>
                                        <td>098 999 888</td>
                                        <td>bich@gmail.com</td>
                                        <td>Hải Dương</td>
                                        <td>ST0001</td>
                                        <td>14 May 2001</td>
                                        <td>
                                            <span class="label label-success">Đang học</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lương Ngọc Bích</span><span class="list-enq-city">Tứ Kỳ, Hải Dương</span></a>
                                        </td>
                                        <td>098 999 888</td>
                                        <td>bich@gmail.com</td>
                                        <td>Hải Dương</td>
                                        <td>ST0001</td>
                                        <td>14 May 2001</td>
                                        <td>
                                            <span class="label label-success">Đang học</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Xem</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Thông tin khóa học</h4>
                        <p>Tất cả về các khóa học, cấu trúc chương trình, học phí, danh sách khóa học tốt nhất (xếp hạng), giáo trình, kỹ thuật giảng dạy và các chi tiết khác.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên khóa học</th>
                                        <th>Danh mục</th>
                                        <th>Thời hạn</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Sĩ số</th>
                                        <th>Trạng thái</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Vật Lý</span><span class="list-enq-city">Lớp 11</span></a>
                                        </td>
                                        <td>Khối A</td>
                                        <td>60 Ngày(420 tiếng)</td>
                                        <td>03 Jun 2022</td>
                                        <td>12 Aug 2022</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Đang mở</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Vật Lý</span><span class="list-enq-city">Lớp 11</span></a>
                                        </td>
                                        <td>Khối A</td>
                                        <td>60 Ngày(420 tiếng)</td>
                                        <td>03 Jun 2022</td>
                                        <td>12 Aug 2022</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Đang mở</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Vật Lý</span><span class="list-enq-city">Lớp 11</span></a>
                                        </td>
                                        <td>Khối A</td>
                                        <td>60 Ngày(420 tiếng)</td>
                                        <td>03 Jun 2022</td>
                                        <td>12 Aug 2022</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Đang mở</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Vật Lý</span><span class="list-enq-city">Lớp 11</span></a>
                                        </td>
                                        <td>Khối A</td>
                                        <td>60 Ngày(420 tiếng)</td>
                                        <td>03 Jun 2022</td>
                                        <td>12 Aug 2022</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Đang mở</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Vật Lý</span><span class="list-enq-city">Lớp 11</span></a>
                                        </td>
                                        <td>Khối A</td>
                                        <td>60 Ngày(420 tiếng)</td>
                                        <td>03 Jun 2022</td>
                                        <td>12 Aug 2022</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Đang mở</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Vật Lý</span><span class="list-enq-city">Lớp 11</span></a>
                                        </td>
                                        <td>Khối A</td>
                                        <td>60 Ngày(420 tiếng)</td>
                                        <td>03 Jun 2022</td>
                                        <td>12 Aug 2022</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Đang mở</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Vật Lý</span><span class="list-enq-city">Lớp 11</span></a>
                                        </td>
                                        <td>Khối A</td>
                                        <td>60 Ngày(420 tiếng)</td>
                                        <td>03 Jun 2022</td>
                                        <td>12 Aug 2022</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Đang mở</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Xem</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <!--== Country Campaigns ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Hướng nghiệp</h4>
                        <!-- <p>Randomised words which don't look even slightly believable. If you are going to use a passage</p> -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Công ty</th>
                                        <th>Số người</th>
                                        <th>Ngày</th>
                                        <th>Địa điểm</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Samsung</span>
                                        </td>
                                        <td>50</td>
                                        <td>15 April 2022</td>
                                        <td>Đỗ Ngọc Du, TP Hải Dương</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Samsung</span>
                                        </td>
                                        <td>50</td>
                                        <td>15 April 2022</td>
                                        <td>Đỗ Ngọc Du, TP Hải Dương</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Samsung</span>
                                        </td>
                                        <td>50</td>
                                        <td>15 April 2022</td>
                                        <td>Đỗ Ngọc Du, TP Hải Dương</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Samsung</span>
                                        </td>
                                        <td>50</td>
                                        <td>15 April 2022</td>
                                        <td>Đỗ Ngọc Du, TP Hải Dương</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Country Campaigns ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Các sự kiện giáo dục</h4>
                        <p>Education is about teaching, learning skills and knowledge.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Địa điểm</th>
                                        <th>Khách mời</th>
                                        <th>Thay đổi</th>
                                        <th>Kinh phí</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Gia Lộc</span>
                                        </td>
                                        <td>UTEHY</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">20,000,000 VND</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">Đang tiếng hành</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Gia Lộc</span>
                                        </td>
                                        <td>UTEHY</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">20,000,000 VND</span>
                                        </td>
                                        <td>
                                            <span class="label label-danger">Đã kết thúc</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Gia Lộc</span>
                                        </td>
                                        <td>UTEHY</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">20,000,000 VND</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Đợi duyệt</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Gia Lộc</span>
                                        </td>
                                        <td>UTEHY</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">20,000,000 VND</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Đợi duyệt</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Gia Lộc</span>
                                        </td>
                                        <td>UTEHY</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">20,000,000 VND</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <!--== Listing Enquiry ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Lịch kiểm tra</h4>
                        <!-- <p>Education is about teaching, learning skills and knowledge.</p> -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Chọn</th>
                                        <th>Kì thi</th>
                                        <th>Tên bài thi</th>
                                        <th>Bắt đầu</th>
                                        <th>Kết thúc</th>
                                        <th>Thời gian</th>
                                        <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-1" checked="checked" />
                                            <label for="filled-in-box-1"></label>
                                        </td>
                                        <td>15 phút</td>
                                        <td><span class="list-enq-name">Phép tính đạo hàm</span><span class="list-enq-city">Lớp 12</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>10:15am</td>
                                        <td>00:15mins</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">Xem</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-2" />
                                            <label for="filled-in-box-2"></label>
                                        </td>
                                        <td>15 phút</td>
                                        <td><span class="list-enq-name">Phép tính đạo hàm</span><span class="list-enq-city">Lớp 12</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>10:15am</td>
                                        <td>00:15mins</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">Xem</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-3" />
                                            <label for="filled-in-box-3"></label>
                                        </td>
                                        <td>15 phút</td>
                                        <td><span class="list-enq-name">Phép tính đạo hàm</span><span class="list-enq-city">Lớp 12</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>10:15am</td>
                                        <td>00:15mins</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">Xem</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-4" />
                                            <label for="filled-in-box-4"></label>
                                        </td>
                                        <td>15 phút</td>
                                        <td><span class="list-enq-name">Phép tính đạo hàm</span><span class="list-enq-city">Lớp 12</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>10:15am</td>
                                        <td>00:15mins</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">Xem</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-5" />
                                            <label for="filled-in-box-5"></label>
                                        </td>
                                        <td>15 phút</td>
                                        <td><span class="list-enq-name">Phép tính đạo hàm</span><span class="list-enq-city">Lớp 12</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>10:15am</td>
                                        <td>00:15mins</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">Xem</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== Latest Activity ==-->
    <div class="sb2-2-3">
        <div class="row">
            <!--== Latest Activity ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Hoạt động cuối</h4>
                        <!-- <p>Education is about teaching, learning skills and knowledge.</p> -->
                    </div>
                    <div class="tab-inn list-act-hom">
                        <ul>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>12 apr, 2022</span> Chào mừng tới hệ thống 3CESCHOOL</h4>
                                <p> Sẽ có rất nhiều chức năng đang đợi bạn khám phá và sử dụng. Hãy tận dụng nó và phản ánh lại mọi ý kiến của bạn trong quá trình sử dụng hệ thống.</p>
                            </li>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>12 apr, 2022</span> Chào mừng tới hệ thống 3CESCHOOL</h4>
                                <p> Sẽ có rất nhiều chức năng đang đợi bạn khám phá và sử dụng. Hãy tận dụng nó và phản ánh lại mọi ý kiến của bạn trong quá trình sử dụng hệ thống.</p>
                            </li>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>12 apr, 2022</span> Chào mừng tới hệ thống 3CESCHOOL</h4>
                                <p> Sẽ có rất nhiều chức năng đang đợi bạn khám phá và sử dụng. Hãy tận dụng nó và phản ánh lại mọi ý kiến của bạn trong quá trình sử dụng hệ thống.</p>
                            </li>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>12 apr, 2022</span> Chào mừng tới hệ thống 3CESCHOOL</h4>
                                <p> Sẽ có rất nhiều chức năng đang đợi bạn khám phá và sử dụng. Hãy tận dụng nó và phản ánh lại mọi ý kiến của bạn trong quá trình sử dụng hệ thống.</p>
                            </li>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>12 apr, 2022</span> Chào mừng tới hệ thống 3CESCHOOL</h4>
                                <p> Sẽ có rất nhiều chức năng đang đợi bạn khám phá và sử dụng. Hãy tận dụng nó và phản ánh lại mọi ý kiến của bạn trong quá trình sử dụng hệ thống.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--== Social Media ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Mạng xã hội</h4>
                        <!-- <p>Education is about teaching, learning skills and knowledge.</p> -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Media</th>
                                        <th>Tên</th>
                                        <th>Lượt chia sẻ</th>
                                        <th>Lượt thích</th>
                                        <th>Thành viên</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/1.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Linked In</span><span class="list-enq-city">Đỗ Ngọc Du, TP Hải Dương</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/2.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Twitter</span><span class="list-enq-city">Đỗ Ngọc Du, TP Hải Dương</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/3.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Facebook</span><span class="list-enq-city">Đỗ Ngọc Du, TP Hải Dương</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/4.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Google Plus</span><span class="list-enq-city">Đỗ Ngọc Du, TP Hải Dương</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/5.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">YouTube</span><span class="list-enq-city">Đỗ Ngọc Du, TP Hải Dương</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/6.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">WhatsApp</span><span class="list-enq-city">Đỗ Ngọc Du, TP Hải Dương</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/7.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">VK</span><span class="list-enq-city">Đỗ Ngọc Du, TP Hải Dương</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/2.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Twitter</span><span class="list-enq-city">Đỗ Ngọc Du, TP Hải Dương</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <!-- <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Google Map</h4>
                        <p>Education is about teaching, learning skills and knowledge.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi tab-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
@stop