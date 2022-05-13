@extends('student._layout')
@section('content')

<header>
    <title>Kết quả học tập - 3CESCHOOL</title>
    <script src="/student/js/learning-outcomes.js"></script>
</header>

<div class="page-content" ng-controller="LearningOutcomesControl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/student/home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/student/learning-outcomes">Kết quả học tập</a>
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
            <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                Năm học:
                <button class="btn btn-outline-secondary btn-block bg-white text-dark" type="button"
                    data-toggle="dropdown" aria-expanded="false" title="Năm học">@{{search.item.School_Year}}&nbsp;<span
                        class="ua-icon-arrow-down-alt"></span></button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position:absolute;transform:translate3d(0px, 36px, 0px);top:0px;left:0px; will-change:transform;width:100%;">
                    <a class="dropdown-item" href="#" ng-repeat="y in lstYears"
                        ng-click="search.item.School_Year = y.value" ng-bind="y.value"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                Học kỳ:
                <button class="btn btn-outline-secondary btn-block bg-white text-dark" type="button"
                    data-toggle="dropdown" aria-expanded="false" title="Học kỳ">@{{search.item.Semester}}&nbsp;<span
                        class="ua-icon-arrow-down-alt"></span></button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position:absolute;transform:translate3d(0px, 36px, 0px);top:0px;left:0px; will-change:transform;width:100%;">
                    <a class="dropdown-item" href="#" ng-click="search.item.Semester='1'">Học kỳ I</a>
                    <a class="dropdown-item" href="#" ng-click="search.item.Semester='2'">Học kỳ II</a>
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
            <div class="col-lg-2 col-md-6 col-sm-6 form-group">
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
                                <h2><span class="ua-icon-fm-list"></span>&nbsp;Kết quả học tập theo các môn</h2>
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
                                        <th ng-click="sortTeacher()">Giáo viên giảng dạy&nbsp;<span
                                                class="mdi mdi-sort"></th>
                                        <th ng-click="sortSubject()">Môn học&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortScore()">Điểm trung bình môn&nbsp;<span class="mdi mdi-sort">
                                        </th>
                                        <th ng-click="sortSemester()">Học kỳ&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortYear()">Năm học&nbsp;<span class="mdi mdi-sort"></th>
                                        <th>Xem chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        ng-repeat="lo in filtered = los | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                                        <td>@{{$index+1}}</td>
                                        <td>@{{lo.Name_Teacher}}</td>
                                        <td>@{{lo.Name_Subjects}}</td>
                                        <td class="text-center">@{{lo.avgScore}}</td>
                                        <td class="text-center">@{{lo.item.Semester}}</td>
                                        <td class="text-center">@{{lo.item.School_Year}}</td>
                                        <td class="text-center"><a href="#" data-toggle="modal"
                                                data-target="#modal-view" ng-click="showModal(lo.item.id)"><span
                                                    class="btn btn-success ua-icon-info"></span></a></td>
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
        <div id="modal-view" class="modal fade custom-modal custom-modal-subscribe">
            <div class="modal-dialog" role="document">
                <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ua-icon-modal-close"></span>
                </button>
                <div class="modal-content" style="width: auto;">
                    <div class="modal-header custom-modal__image">
                        <img src="img/modal/test-1.png" alt="" class="" style="width: 72px;">
                    </div>
                    <div class="modal-body custom-modal__body" style="text-align: inherit;">
                        <h4 class="custom-modal__body-heading">Thông tin chi tiết điểm</h4>
                        <div class="custom-modal__form">
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-right">Môn học</td>
                                            <td></td>
                                            <td class="text-left">@{{lo.Name_Subject}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Giáo viên giảng dạy</td>
                                            <td></td>
                                            <td class="text-left">@{{lo.Name_Teacher}}</td>
                                        </tr>
                                        <tr ng-if="lo.Regular_Score_1 != null">
                                            <td class="text-right">Điểm TX 1</td>
                                            <td></td>
                                            <td class="text-left">@{{lo.Regular_Score_1}}</td>
                                        </tr>
                                        <tr ng-if="lo.Regular_Score_2 != null">
                                            <td class="text-right">Điểm TX 2</td>
                                            <td></td>
                                            <td class="text-left">@{{lo.Regular_Score_2}}</td>
                                        </tr>
                                        <tr ng-if="lo._15minutes_Score_1 != null">
                                            <td class="text-right">Điểm 15p_1</td>
                                            <td></td>
                                            <td class="text-left">@{{lo._15minutes_Score_1}}</td>
                                        </tr>
                                        <tr ng-if="lo._15minutes_Score_2 != null">
                                            <td class="text-right">Điểm 15p_2</td>
                                            <td></td>
                                            <td class="text-left">@{{lo._15minutes_Score_2}}</td>
                                        </tr>
                                        <tr ng-if="lo._15minutes_Score_3 != null">
                                            <td class="text-right">Điểm 15p_3</td>
                                            <td></td>
                                            <td class="text-left">@{{lo._15minutes_Score_3}}</td>
                                        </tr>
                                        <tr ng-if="lo._45minutes_Score_1 != null">
                                            <td class="text-right">Điểm 45p_1</td>
                                            <td></td>
                                            <td class="text-left">@{{lo._45minutes_Score_1}}</td>
                                        </tr>
                                        <tr ng-if="lo._45minutes_Score_2 != null">
                                            <td class="text-right">Điểm 45p_2</td>
                                            <td></td>
                                            <td class="text-left">@{{lo._45minutes_Score_2}}</td>
                                        </tr>
                                        <tr ng-if="lo._45minutes_Score_3 != null">
                                            <td class="text-right">Điểm 45p_3</td>
                                            <td></td>
                                            <td class="text-left">@{{lo._45minutes_Score_3}}</td>
                                        </tr>
                                        <tr ng-if="lo.Semester_Score != null">
                                            <td class="text-right">Điểm học kỳ</td>
                                            <td></td>
                                            <td class="text-left">@{{lo.Semester_Score}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Điểm trung bình môn</td>
                                            <td></td>
                                            <td class="text-left">@{{lo.avgScore}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Học kỳ</td>
                                            <td></td>
                                            <td class="text-left">@{{lo.Semester}}</td>
                                        </tr>
                                        <tr ng-repeat="sy in avgYear" ng-if="sy.ID_Subjects == lo.ID_Subjects">
                                            <td class="text-right">Điểm trung bình môn cả năm</td>
                                            <td></td>
                                            <td class="text-left">@{{sy.avgScoreYear}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Năm học</td>
                                            <td></td>
                                            <td class="text-left">@{{lo.School_Year}}</td>
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
</div>

@stop