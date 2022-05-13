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
            <li class="active-bre"><a href="/teacher/exam-time-table"> Lịch thi</a>
            </li>
            <li class="page-back"><a href="/teacher/home"><i class="fa fa-backward" aria-hidden="true"></i> Quay lại</a>
            </li>
        </ul>
    </div>
    <!--== BODY INNER CONTAINER ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Lịch thi</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên bài thi</th>
                                        <th>Ngày thi</th>
                                        <th>Giờ bắt đầu</th>
                                        <th>Thời gian thi</th>
                                        <th>Sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kiểm tra 15 phút</td>
                                        <td>02/06/2022</td>
                                        <td>10:00AM</td>
                                        <td>00:15</td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Kiểm tra 15 phút</td>
                                        <td>02/06/2022</td>
                                        <td>10:00AM</td>
                                        <td>00:15</td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Kiểm tra 15 phút</td>
                                        <td>02/06/2022</td>
                                        <td>10:00AM</td>
                                        <td>00:15</td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Kiểm tra 15 phút</td>
                                        <td>02/06/2022</td>
                                        <td>10:00AM</td>
                                        <td>00:15</td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Kiểm tra 15 phút</td>
                                        <td>02/06/2022</td>
                                        <td>10:00AM</td>
                                        <td>00:15</td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Kiểm tra 15 phút</td>
                                        <td>02/06/2022</td>
                                        <td>10:00AM</td>
                                        <td>00:15</td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Kiểm tra 15 phút</td>
                                        <td>02/06/2022</td>
                                        <td>10:00AM</td>
                                        <td>00:15</td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Kiểm tra 15 phút</td>
                                        <td>02/06/2022</td>
                                        <td>10:00AM</td>
                                        <td>00:15</td>
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