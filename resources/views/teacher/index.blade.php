@extends('/teacher._layout')
@section('content')

<header>
    <title>Danh sách Tổ trưởng - 3CESCHOOL</title>
    <script src="/teacher/js/teacherAgl/leader.js"></script>
</header>
<div class="main-content" ng-controller="LeaderCtrl">
    <section class="section">
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Danh sách Tổ trưởng</h4>
                        <hr>
                        <button class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg" ng-click="Clear()" style="margin-right:10px;">
                            <i class="far fa-plus-square"></i> Thêm
                            mới
                        </button>
                        <input type="text" class="form-control" id="search" name="search" ng-model="search" style="width:200px;" placeholder="Tìm kiếm...">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Giới tính</th>
                                        <th>Địa chỉ</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Ảnh</th>
                                        <th>Chức vụ</th>
                                        
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="p in filtered = tes | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                                        <td>@{{$index+1}}</td>
                                        <td>@{{p.Name_Teacher}}</td>
                                        <td>@{{p.Birth_Teacher.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}</td>
                                        <td>@{{p.Gender_Teacher}}</td>
                                        <td>@{{p.Address_Teacher}}</td>
                                        <td>@{{p.Mail_Teacher}}</td>
                                        <td>@{{p.Phone_Teacher}}</td>
                                        <td><img src="/storage/users/@{{p.Img_Teacher}}" alt="Ảnh"></td>
                                        <td>@{{p.Position_Teacher}}</td>
                                        <td>@{{p.Status_Teacher}}</td>
                                        <td style="text-align: center;">
                                            <button data-toggle="modal" data-target=".bd-example-modal-lg" title="Sửa" class="btn btn-icon btn-primary" ng-click="showModal(p.id)">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button title="Xóa" class="btn btn-icon btn-warning" ng-click="deleteClick(p.id)">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <button data-toggle="modal" data-target="#largeModalCT" title="Xem chi tiết" class="btn btn-icon btn-primary" ng-click="showModalCT(p.id)">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <pagination ng-model="currentPage" total-items="total" max-size="maxSize" boundary-links="true">
                                </pagination>
                            </div>
                        </div> -->
                            <center>
                                <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit" boundary-links="true"></pagination>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="section">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Thành tích học tập khối 10</h4>
                    </div>
                    <div class="card-body">
                        <div class="recent-report__chart">
                            <div id="chart7"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Thành tích học tập khối 11</h4>
                    </div>
                    <div class="card-body">
                        <div class="recent-report__chart">
                            <div id="chart71"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Thành tích học tập khối 12</h4>
                    </div>
                    <div class="card-body">
                        <div class="recent-report__chart">
                            <div id="chart72"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Thành tích học tập của các lớp</h4>
                    </div>
                    <div class="card-body">
                        <div class="recent-report__chart">
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Thành tích của giáo viên</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-center">
                                        <div class="custom-checkbox custom-checkbox-table custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Task Name</th>
                                    <th>Members</th>
                                    <th>Task Status</th>
                                    <th>Assigh Date</th>
                                    <th>Due Date</th>
                                    <th>Priority</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Create a mobile app</td>
                                    <td class="text-truncate">
                                        <ul class="list-unstyled order-list m-b-0 m-b-0">
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-8.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-9.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-10.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-primary">+4</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">50%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-success" data-width="50%"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>2019-05-28</td>
                                    <td>
                                        <div class="badge badge-success">Low</div>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                            <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Redesign homepage</td>
                                    <td class="text-truncate">
                                        <ul class="list-unstyled order-list m-b-0 m-b-0">
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-1.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-2.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-primary">+2</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">40%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-danger" data-width="40%"></div>
                                        </div>
                                    </td>
                                    <td>2017-07-14</td>
                                    <td>2018-07-21</td>
                                    <td>
                                        <div class="badge badge-danger">High</div>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                            <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Backup database</td>
                                    <td class="text-truncate">
                                        <ul class="list-unstyled order-list m-b-0 m-b-0">
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-3.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-4.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-5.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-primary">+3</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">55%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-purple" data-width="55%"></div>
                                        </div>
                                    </td>
                                    <td>2019-07-25</td>
                                    <td>2019-08-17</td>
                                    <td>
                                        <div class="badge badge-info">Average</div>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                            <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Android App</td>
                                    <td class="text-truncate">
                                        <ul class="list-unstyled order-list m-b-0 m-b-0">
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-7.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-8.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-primary">+4</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">70%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar" data-width="70%"></div>
                                        </div>
                                    </td>
                                    <td>2018-04-15</td>
                                    <td>2019-07-19</td>
                                    <td>
                                        <div class="badge badge-success">Low</div>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
                                            <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Logo Design</td>
                                    <td class="text-truncate">
                                        <ul class="list-unstyled order-list m-b-0 m-b-0">
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-9.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-10.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-2.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-primary">+2</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">45%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-cyan" data-width="45%"></div>
                                        </div>
                                    </td>
                                    <td>2017-02-24</td>
                                    <td>2018-09-06</td>
                                    <td>
                                        <div class="badge badge-danger">High</div>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                                            <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Ecommerce website</td>
                                    <td class="text-truncate">
                                        <ul class="list-unstyled order-list m-b-0 m-b-0">
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-8.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-9.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo">
                                            </li>
                                            <li class="team-member team-member-sm">
                                                <img class="rounded-circle" src="/teacher/img/users/user-10.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-primary">+4</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">30%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-orange" data-width="30%"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>2019-05-28</td>
                                    <td>
                                        <div class="badge badge-info">Average</div>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop