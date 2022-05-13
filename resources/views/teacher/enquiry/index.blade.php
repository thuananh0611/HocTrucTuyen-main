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
            <li class="active-bre"><a href="/teacher/enquiry"> Đánh giá & Khảo sát</a>
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
                        <h4>Khảo sát & Đánh giá</h4>
                        <!-- <p>All about students like name, student id, phone, email, country, city and more</p> -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Loại đánh giá</th>
                                        <th>Họ tên</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Đánh giá môn học</td>
                                        <td>*****</td>
                                        <td>*****@gmail.com</td>
                                        <td>*******352</td>
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


</div>
@stop