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
            <li class="active-bre"><a href="/teacher/classes"> Lớp chủ nhiệm</a>
            </li>
            <li class="page-back"><a href="/teacher/home"><i class="fa fa-backward" aria-hidden="true"></i> Quay lại</a>
            </li>
        </ul>
    </div>
    <!--== Main-class Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Lớp chủ nhiệm</h4>
                        <p>Thông tin liên quan đến lớp chủ nhiệm.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên lớp</th>
                                        <th>Niên khóa</th>
                                        <th>Mã lớp</th>
                                        <th>Khai giảng</th>
                                        <th>Ngày bế giảng <br> (Dự kiến) </th>
                                        <th>Sĩ số</th>
                                        <th>Đánh giá</th>
                                        <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="admin-course-details.html"><span class="list-enq-name">Lớp 10A</span>
                                        </td>
                                        <td>2021-2024</td>
                                        <td>K10A11</td>
                                        <td>03/09/2021</td>
                                        <td>05/07/2024</td>
                                        <td>50</td>
                                        <td>
                                            <span class="label label-success">Khá</span>
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

    <!--== Latest Activity ==-->
    <div class="sb2-2-3">

    </div>

</div>
@stop