@extends('student._layout')
@section('content')

<header>
    <title>Kiểm tra, thi - 3CESCHOOL</title>
    <script src="/student/js/exam-list.js"></script>
</header>

<div class="page-content" ng-controller="ExamListControl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/student/home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/student/exam-list">Kiểm tra, thi</a>
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
            <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                Môn học:
                <button class="btn btn-outline-secondary btn-block bg-white text-dark" type="button"
                    data-toggle="dropdown" aria-expanded="false" title="Môn học">@{{search.Name_Subjects}}&nbsp;<span
                        class="ua-icon-arrow-down-alt"></span></button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position:absolute;transform:translate3d(0px, 36px, 0px);top:0px;left:0px; will-change:transform;width:100%;">
                    <a class="dropdown-item" href="#" ng-repeat="s in lstSubjects"
                        ng-click="search.Name_Subjects = s.Name_Subjects" ng-bind="s.Name_Subjects"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                Kiểu bài:
                <button class="btn btn-outline-secondary btn-block bg-white text-dark" type="button"
                    data-toggle="dropdown" aria-expanded="false" title="Kiểu bài">@{{search.Type_Test}}&nbsp;<span
                        class="ua-icon-arrow-down-alt"></span></button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position:absolute;transform:translate3d(0px, 36px, 0px);top:0px;left:0px; will-change:transform;width:100%;">
                    <a class="dropdown-item" href="#" ng-repeat="s in lstTypes" ng-click="search.Type_Test = s.value"
                        ng-bind="s.value"></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6 form-group">
                Tìm kiếm:
                <input type="text" name="search" class="form-control" placeholder="Tìm theo tên bài..."
                    ng-model="search.Name_Test">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                Năm học:
                <button class="btn btn-outline-secondary btn-block bg-white text-dark" type="button"
                    data-toggle="dropdown" aria-expanded="false" title="Năm học">@{{search.School_Year}}&nbsp;<span
                        class="ua-icon-arrow-down-alt"></span></button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position:absolute;transform:translate3d(0px, 36px, 0px);top:0px;left:0px; will-change:transform;width:100%;">
                    <a class="dropdown-item" href="#" ng-repeat="s in lstYears" ng-click="search.School_Year = s.value"
                        ng-bind="s.value"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                Học kỳ:
                <button class="btn btn-outline-secondary btn-block bg-white text-dark" type="button"
                    data-toggle="dropdown" aria-expanded="false" title="Học kỳ">@{{search.Semester}}&nbsp;<span
                        class="ua-icon-arrow-down-alt"></span></button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position:absolute;transform:translate3d(0px, 36px, 0px);top:0px;left:0px; will-change:transform;width:100%;">
                    <a class="dropdown-item" href="#" ng-click="search.Semester = 1">Học kỳ I</a>
                    <a class="dropdown-item" href="#" ng-click="search.Semester = 2">Học kỳ II</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                Tìm kiếm theo ngày thi:
                <input type="text" name="search" class="form-control" placeholder="08/05/2022"
                    ng-model="search.Date_To_Do">
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 form-group">
                <br>
                <button type="button" class="btn btn-white btn-block" ng-click="resetFilters()"><span
                        class="ua-icon-check-solid"></span>&nbsp;Bỏ chọn</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <h2><span class="ua-icon-fm-list"></span>&nbsp;Danh sách các bài kiểm tra</h2>
                            </div>
                            <div class="col-lg-6 col-sm-6 text-right">
                                Hiển thị <label class="mr-3"> <input type="number" class="form-control"
                                        style="width:62px;" ng-model="entryLimit" min="1"> </label>
                                Tổng số <ins ng-bind="totalItems" class="text-info"></ins> bản ghi
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover sort" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th ng-click="sortSubject()">Môn học&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortTest()">Tên bài kiểm tra&nbsp;<span class="mdi mdi-sort" </th>
                                        <th ng-click="sortType()">Kiểu bài&nbsp;<span class="mdi mdi-sort" </th>
                                        <th ng-click="sortDate()">Ngày thi&nbsp;<span class="mdi mdi-sort" </th>
                                        <th ng-click="sortSemester()">Học kỳ&nbsp;<span class="mdi mdi-sort" </th>
                                        <th ng-click="sortYear()">Năm học&nbsp;<span class="mdi mdi-sort" </th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        ng-repeat="ex in filtered = exs | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                                        <td>@{{$index+1}}</td>
                                        <td>@{{ex.Name_Subjects}}</td>
                                        <td>@{{ex.Name_Test}}</td>
                                        <td>@{{ex.Type_Test}}</td>
                                        <td>@{{ex.Date_To_Do}}</td>
                                        <td>@{{ex.Semester}}</td>
                                        <td>@{{ex.School_Year}}</td>
                                        <td class="table__actions">
                                            <div class="dropdown">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">Thao tác&nbsp;<span
                                                        class="ua-icon-arrow-down-alt"></span></button>
                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                    style="position: absolute; transform: translate3d(0px, 36px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modal-in" ng-click="showModalIn(ex.id)"><span
                                                            class="ua-icon-arrow-right"></span>&nbsp;&nbsp;Làm bài</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modal-view-info"
                                                        ng-click="showModalInfo(ex.id)"><span
                                                            class="ua-icon-info"></span>&nbsp;&nbsp;Xem thêm thông
                                                        tin</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modal-view-detail"
                                                        ng-click="showModalDetail(ex.ID_Test)"><span
                                                            class="ua-icon-list-view"></span>&nbsp;&nbsp;Xem
                                                        chi tiết bài làm</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <center>
                                <pagination page="currentPage" max-size="noOfPages" total-items="totalItems"
                                    items-per-page="entryLimit" boundary-links="true"></pagination>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-in" class="modal fade custom-modal custom-modal-subscribe">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content" style="width: auto;">
                        <div class="modal-header custom-modal__image">
                            <img src="img/modal/test.png" alt="" class="" style="width: 72px;">
                        </div>
                        <div class="modal-body custom-modal__body" style="text-align: inherit;">
                            <h4 class="custom-modal__body-heading">Xác nhận làm bài</h4>
                            <div class="custom-modal__form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="widget text-center" style="margin-top: -35px;margin-bottom: 0px;">
                                            <form method="post">
                                                <p>Nhập mật khẩu do giáo viên cung cấp để làm bài.</p>
                                                <input type="text" name="password" class="form-control"
                                                    placeholder="Nhập mật khẩu..." required ng-model="password">
                                                <button type="submit" class="btn btn-success mt-3"
                                                    ng-click="goToDoExam()">Xác nhận</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-view-info" class="modal fade custom-modal custom-modal-subscribe">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content" style="width: auto;">
                        <div class="modal-header custom-modal__image">
                            <img src="img/modal/document.png" alt="" class="" style="width: 72px;">
                        </div>
                        <div class="modal-body custom-modal__body" style="text-align: inherit;">
                            <h4 class="custom-modal__body-heading">Thông tin bài kiểm tra</h4>
                            <div class="custom-modal__form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="widget widget-remaining-time"
                                            style="margin-top:-35px;margin-bottom:0px;font-weight:500;">
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Tên môn học:</label>
                                                <label class="col-sm-7 control-label">@{{Name_Subjects}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Tên bài kiểm tra:</label>
                                                <label class="col-sm-7 control-label">@{{Name_Test}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Kiểu bài:</label>
                                                <label class="col-sm-7 control-label">@{{Type_Test}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Tổng số câu:</label>
                                                <label class="col-sm-7 control-label">@{{Total_Questions}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Thời gian làm:</label>
                                                <label class="col-sm-7 control-label">@{{Time_To_Do}} (phút)</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Ngày thi:</label>
                                                <label class="col-sm-7 control-label">@{{Date_To_Do}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Học kỳ:</label>
                                                <label class="col-sm-7 control-label">@{{Semester}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Năm học:</label>
                                                <label class="col-sm-7 control-label">@{{School_Year}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Trạng thái:</label>
                                                <label class="col-sm-7 control-label">@{{Test_Status_Student}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Ghi chú:</label>
                                                <label class="col-sm-7 control-label">@{{Note}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-view-detail" class="modal fade custom-modal custom-modal-subscribe">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content" style="width: auto;">
                        <div class="modal-header custom-modal__image">
                            <img src="img/modal/test-1.png" alt="" class="" style="width: 72px;">
                        </div>
                        <div class="modal-body custom-modal__body" style="text-align: inherit;">
                            <h4 class="custom-modal__body-heading">Thông tin chi tiết bài làm</h4>
                            <div class="custom-modal__form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="widget widget-remaining-time"
                                            style="margin-top: -35px;margin-bottom: 0px;">
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Tên bài kiểm tra:</label>
                                                <label class="col-sm-7 control-label"
                                                    style="font-size: 15px;">@{{Name_Test}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Điểm:</label>
                                                <label class="col-sm-7 control-label"
                                                    style="font-weight: bold;color: red;font-size: 15px;">@{{Scores}}</label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="col-sm-4 control-label">Số câu:</label>
                                                <label class="col-sm-7 control-label"
                                                    style="font-weight: 500;">@{{Detail}}</label>
                                            </div>
                                            <hr style="width: 100%;">
                                            <div class="mt-3" ng-repeat="dt in lstDetailsST">
                                                <h5 class="card-subtitle text-success">Câu @{{dt.No}}:</h5>
                                                <p class="card-text">@{{dt.Question_Content}}</p>
                                                <center ng-if="dt.Img_Content != ''">
                                                    <img src="/storage/questions/@{{dt.Img_Content}}" class="img-fluid"
                                                        alt="content">
                                                </center>
                                                <p class="card-text mt-3">
                                                    <label>
                                                        <input class="inpA" type="radio" value="@{{dt.Answer_A}}"
                                                            ng-if="dt.Answer_A == dt.Answer_Student" checked disabled />
                                                        <input class="inpA" type="radio" value="@{{dt.Answer_A}}"
                                                            ng-if="dt.Answer_A != dt.Answer_Student" disabled />
                                                        <span
                                                            ng-if="dt.Answer_A == dt.Correct_Answer && dt.Answer_A == dt.Answer_Student"
                                                            style="color:green;">@{{dt.Answer_A}}</span>
                                                        <span
                                                            ng-if="dt.Answer_A != dt.Correct_Answer && dt.Answer_A == dt.Answer_Student"
                                                            style="color:red;">@{{dt.Answer_A}}</span>
                                                        <span
                                                            ng-if="dt.Answer_A == dt.Correct_Answer && dt.Answer_A != dt.Answer_Student"
                                                            style="color:green;">@{{dt.Answer_A}}</span>
                                                        <span
                                                            ng-if="dt.Answer_A != dt.Correct_Answer && dt.Answer_A != dt.Answer_Student"
                                                            style="color:black;">@{{dt.Answer_A}}</span>
                                                    </label>
                                                </p>
                                                <p class="card-text">
                                                    <label>
                                                        <input class="inpA" type="radio" value="@{{dt.Answer_B}}"
                                                            ng-if="dt.Answer_B == dt.Answer_Student" checked disabled />
                                                        <input class="inpA" type="radio" value="@{{dt.Answer_B}}"
                                                            ng-if="dt.Answer_B != dt.Answer_Student" disabled />
                                                        <span
                                                            ng-if="dt.Answer_B == dt.Correct_Answer && dt.Answer_B == dt.Answer_Student"
                                                            style="color:green;">@{{dt.Answer_B}}</span>
                                                        <span
                                                            ng-if="dt.Answer_B != dt.Correct_Answer && dt.Answer_B == dt.Answer_Student"
                                                            style="color:red;">@{{dt.Answer_B}}</span>
                                                        <span
                                                            ng-if="dt.Answer_B == dt.Correct_Answer && dt.Answer_B != dt.Answer_Student"
                                                            style="color:green;">@{{dt.Answer_B}}</span>
                                                        <span
                                                            ng-if="dt.Answer_B != dt.Correct_Answer && dt.Answer_B != dt.Answer_Student"
                                                            style="color:black;">@{{dt.Answer_B}}</span>
                                                    </label>
                                                </p>
                                                <p class="card-text">
                                                    <label>
                                                        <input class="inpA" type="radio" value="@{{dt.Answer_C}}"
                                                            ng-if="dt.Answer_C == dt.Answer_Student" checked disabled />
                                                        <input class="inpA" type="radio" value="@{{dt.Answer_C}}"
                                                            ng-if="dt.Answer_C != dt.Answer_Student" disabled />
                                                        <span
                                                            ng-if="dt.Answer_C == dt.Correct_Answer && dt.Answer_C == dt.Answer_Student"
                                                            style="color:green;">@{{dt.Answer_C}}</span>
                                                        <span
                                                            ng-if="dt.Answer_C != dt.Correct_Answer && dt.Answer_C == dt.Answer_Student"
                                                            style="color:red;">@{{dt.Answer_C}}</span>
                                                        <span
                                                            ng-if="dt.Answer_C == dt.Correct_Answer && dt.Answer_C != dt.Answer_Student"
                                                            style="color:green;">@{{dt.Answer_C}}</span>
                                                        <span
                                                            ng-if="dt.Answer_C != dt.Correct_Answer && dt.Answer_C != dt.Answer_Student"
                                                            style="color:black;">@{{dt.Answer_C}}</span>
                                                    </label>
                                                </p>
                                                <p class="card-text">
                                                    <label>
                                                        <input class="inpA" type="radio" value="@{{dt.Answer_D}}"
                                                            ng-if="dt.Answer_D == dt.Answer_Student" checked disabled />
                                                        <input class="inpA" type="radio" value="@{{dt.Answer_D}}"
                                                            ng-if="dt.Answer_D != dt.Answer_Student" disabled />
                                                        <span
                                                            ng-if="dt.Answer_D == dt.Correct_Answer && dt.Answer_D == dt.Answer_Student"
                                                            style="color:green;">@{{dt.Answer_D}}</span>
                                                        <span
                                                            ng-if="dt.Answer_D != dt.Correct_Answer && dt.Answer_D == dt.Answer_Student"
                                                            style="color:red;">@{{dt.Answer_D}}</span>
                                                        <span
                                                            ng-if="dt.Answer_D == dt.Correct_Answer && dt.Answer_D != dt.Answer_Student"
                                                            style="color:green;">@{{dt.Answer_D}}</span>
                                                        <span
                                                            ng-if="dt.Answer_D != dt.Correct_Answer && dt.Answer_D != dt.Answer_Student"
                                                            style="color:black;">@{{dt.Answer_D}}</span>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop