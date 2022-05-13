@extends('teacher._layout')
@section('content')

<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="/teacher/home"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
            </li>
            <li class="active-bre"><a href="/teacher/home"> Bảng điều khiển</a>
            </li>
            <li class="active-bre"><a href="/teacher/courses"> Danh sách các khóa học (Dành cho lớp học online)</a>
            </li>
            <li class="page-back"><a href="/teacher/home"><i class="fa fa-backward" aria-hidden="true"></i> Quay lại</a>
            </li>
        </ul>
    </div>
    <!--== Courses Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Danh sách các khóa học</h4>
                        <p>Tất cả những khóa học: dành cho học sinh online, dành cho học sinh ôn thi, tốt nghiệp THPT.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã khóa</th>
                                        <th>Tên khóa</th>
                                        <th>Danh mục</th>
                                        <th>Thời gian</th>
                                        <th>Bắt đầu</th>
                                        <th>Kết thúc</th>
                                        <th>Sĩ số</th>
                                        <th>Trạng thái</th>
                                        <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>KH0022
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ôn tập kiểm tra - Đề 15 phút</span></a>
                                        </td>
                                        <td>Vật lý 10</td>
                                        <td>90 ngày</td>
                                        <td>02/02/2022</td>
                                        <td>03/05/2022</td>
                                        <td>80</td>
                                        <td>
                                            <span class="label label-success">Đã đóng</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
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