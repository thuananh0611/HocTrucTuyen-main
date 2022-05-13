@extends('student._layout')
@section('content')

<header>
    <title>Thông tin lịch học - 3CESCHOOL</title>
    <script src="/student/js/schedule.js"></script>
</header>

<div class="page-content" ng-controller="ScheduleControl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/student/home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/student/schedule">Thông tin lịch học</a>
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
            <div class="col-lg-4 col-md-6 col-sm-6 form-group">
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
            <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                Tuần thứ:
                <button class="btn btn-outline-secondary btn-block bg-white text-dark" type="button"
                    data-toggle="dropdown" aria-expanded="false" title="Môn học">@{{search.Week}}&nbsp;<span
                        class="ua-icon-arrow-down-alt"></span></button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position:absolute;transform:translate3d(0px, 36px, 0px);top:0px;left:0px; will-change:transform;width:100%;">
                    <a class="dropdown-item" href="#" ng-repeat="w in lstWeeks" ng-click="search.Week = w.value"
                        ng-bind="w.value"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                Tìm kiếm theo ngày học:
                <input type="text" name="search" class="form-control" placeholder="08/05/2022"
                    ng-model="search.Learn_Day">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                <br>
                <button type="button" class="btn btn-white btn-block" ng-click="resetFilters()"><span
                        class="ua-icon-check-solid"></span>&nbsp;Bỏ chọn</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <h2><span class="ua-icon-fm-list"></span>&nbsp;Thời khóa biểu</h2>
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
                                        <th ng-click="sortWeek()">Tuần thứ&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortLearnDay()">Ngày học&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortDay()">Thứ&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortLesson()">Tiết&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortSubject()">Môn học&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortTeacher()">Giáo viên giảng dạy&nbsp;<span
                                                class="mdi mdi-sort"></th>
                                        <th ng-click="sortSemester()">Học kỳ&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortYear()">Năm học&nbsp;<span class="mdi mdi-sort"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        ng-repeat="s in filtered = schs | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                                        <td>@{{$index+1}}</td>
                                        <td>@{{s.Week}}</td>
                                        <td>@{{s.Learn_Day.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}
                                        </td>
                                        <td>@{{s.Day}}</td>
                                        <td>@{{s.Lesson}}</td>
                                        <td>@{{s.Name_Subjects }}</td>
                                        <td>@{{s.Name_Teacher}}</td>
                                        <td>@{{s.Semester}}</td>
                                        <td>@{{s.School_Year}}</td>
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
        </div>
    </div>
</div>

@stop