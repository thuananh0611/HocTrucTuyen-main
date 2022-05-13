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
            <li class="active-bre"><a href="/teacher/events"> Sự kiện</a>
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
                        <h4>Các sự kiện</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Vị trí</th>
                                        <th>Trạng thái</th>
                                        <th>Sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span></td>
                                        <td>Hội thảo về An toàn thông tin mạng</td>
                                        <td>22/06/2022</td>
                                        <td>Hội trường A</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span></td>
                                        <td>Hội thảo về An toàn thông tin mạng</td>
                                        <td>22/06/2022</td>
                                        <td>Hội trường A</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span></td>
                                        <td>Hội thảo về An toàn thông tin mạng</td>
                                        <td>22/06/2022</td>
                                        <td>Hội trường A</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span></td>
                                        <td>Hội thảo về An toàn thông tin mạng</td>
                                        <td>22/06/2022</td>
                                        <td>Hội trường A</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span></td>
                                        <td>Hội thảo về An toàn thông tin mạng</td>
                                        <td>22/06/2022</td>
                                        <td>Hội trường A</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span></td>
                                        <td>Hội thảo về An toàn thông tin mạng</td>
                                        <td>22/06/2022</td>
                                        <td>Hội trường A</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
                                        </td>
                                        <td><a href="#" class="ad-st-view">Sửa</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span></td>
                                        <td>Hội thảo về An toàn thông tin mạng</td>
                                        <td>22/06/2022</td>
                                        <td>Hội trường A</td>
                                        <td>
                                            <span class="label label-success">Đang diễn ra</span>
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