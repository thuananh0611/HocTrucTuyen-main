@extends('student._layout')
@section('content')

<header>
    <title>Ý kiến, phản hồi - 3CESCHOOL</title>
    <script src="/student/js/feedback.js"></script>
</header>

<div class="page-content" ng-controller="FeedbackControl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/student/home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/student/feedback">Ý kiến - Phản hồi</a>
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
            <div class="col-lg-3 col-sm-6 form-group">
                Trạng thái:
                <button class="btn btn-outline-secondary btn-block bg-white text-dark" type="button"
                    data-toggle="dropdown" aria-expanded="false" title="Trạng thái">@{{search.Reply_Status}}&nbsp;<span
                        class="ua-icon-arrow-down-alt"></span></button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position:absolute;transform:translate3d(0px, 36px, 0px);top:0px;left:0px; will-change:transform;width:100%;">
                    <a class="dropdown-item" href="#" ng-click="search.Reply_Status='Đã hồi đáp'">Đã hồi đáp</a>
                    <a class="dropdown-item" href="#" ng-click="search.Reply_Status='Chưa hồi đáp'">Chưa hồi đáp</a>
                </div>
            </div>
            <div class="col-lg-5 col-sm-6 form-group">
                Tìm kiếm:
                <input type="text" name="search" class="form-control" placeholder="Tìm kiếm theo tiêu đề..."
                    ng-model="search.Title">
            </div>
            <div class="col-lg-2 col-sm-6 form-group">
                <br>
                <button type="button" class="btn btn-white btn-block" ng-click="resetFilters()"><span
                        class="ua-icon-check-solid"></span>&nbsp;Bỏ chọn</button>
            </div>
            <div class="col-lg-2 col-sm-6 form-group">
                <br>
                <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-add"
                    ng-click="showModal(0)"><span class="ua-icon-action-plus"></span>&nbsp;Thêm mới</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <h2><span class="ua-icon-fm-list"></span>&nbsp;Danh sách ý kiến - phản hồi</h2>
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
                                        <th ng-click="sortTitle()">Tiêu đề&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortContent()">Nội dung ý kiến - phản hồi&nbsp;<span
                                                class="mdi mdi-sort"></th>
                                        <th ng-click="sortTime()">Thời gian gửi&nbsp;<span class="mdi mdi-sort"></th>
                                        <th ng-click="sortStatus()">Trạng thái hồi đáp&nbsp;<span class="mdi mdi-sort">
                                        </th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        ng-repeat="fb in filtered = fbs | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                                        <td>@{{$index+1}}</td>
                                        <td>@{{fb.Title}}</td>
                                        <td>
                                            <show-more text="fb.Feedback_Content" limit="20"> </show-more>
                                        </td>
                                        <td>@{{fb.created_at.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy |
                                            HH:mm:ss"}}</td>
                                        <td>@{{fb.Reply_Status}}</td>
                                        <td class="table__actions">
                                            <div class="dropdown">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">Thao tác&nbsp;<span
                                                        class="ua-icon-arrow-down-alt"></span></button>
                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                    style="position: absolute; transform: translate3d(0px, 36px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modal-view" ng-click="showModalDT(fb.id)"><span
                                                            class="ua-icon-list-lg-view"></span>&nbsp;&nbsp;Xem chi
                                                        tiết</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modal-add" ng-click="showModal(fb.id)"
                                                        ng-if="fb.Reply_Status == 'Chưa hồi đáp'"><span
                                                            class="ua-icon-edit-outline"></span>&nbsp;&nbsp;Sửa thông
                                                        tin</a>
                                                    <a class="dropdown-item" href="#"
                                                        ng-click="deleteClick(fb.id)"><span
                                                            class="ua-icon-trash"></span>&nbsp;&nbsp;Xóa</a>
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
            <div id="modal-add" class="modal fade custom-modal custom-modal-subscribe">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ua-icon-modal-close"></span>
                    </button>
                    <div class="modal-content" style="width: auto;">
                        <div class="modal-header custom-modal__image">
                            <img src="/student/img/modal/4.png" alt="" class="">
                        </div>
                        <div class="modal-body custom-modal__body" style="text-align: inherit;">
                            <h4 class="custom-modal__body-heading">@{{modalTitle}}</h4>
                            <div class="custom-modal__form">
                                <form action="@{{ route('feedback.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="Title">Tiêu đề<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" name="Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Content">Nội dung ý kiến - phản hồi<b
                                                class="text-danger">*</b></label>
                                        <textarea name="Feedback_Content" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">File đính kèm</label>
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                    <center>
                                        <button type="submit" class="btn btn-info"
                                            ng-click="saveData()">@{{modalButton}}</button>
                                    </center>
                                </form>
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
                            <img src="img/modal/4.png" alt="" class="">
                        </div>
                        <div class="modal-body custom-modal__body" style="text-align: inherit;">
                            <h4 class="custom-modal__body-heading">Thông tin ý kiến - phản hồi</h4>
                            <div class="custom-modal__form">
                                <div class="row">
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label for="Title">Tiêu đề</label>
                                            <input type="text" class="form-control" ng-model="fb.Title" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label for="Feedback_Content">Nội dung ý kiến - phản hồi</label>
                                            <textarea name="Feedback_Content" ng-model="fb.Feedback_Content"
                                                class="form-control" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label for="created_at">Thời gian gửi</label>
                                            <input type="text" name="created_at" class="form-control"
                                                datepicker-popup="dd/MM/yyyy | HH:mm:ss" ng-model="fb.created_at"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3" ng-if="fb.Feedback_Image != ''">
                                        <div class="form-group">
                                            <label for="file">Ảnh đính kèm</label><br>
                                            <center>
                                                <img src="/storage/feedback/@{{fb.Feedback_Image}}" class="img-fluid"
                                                    alt="Ảnh đính kèm">
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label for="Reply_Status">Trạng thái hồi đáp</label>
                                            <input type="text" class="form-control" ng-model="fb.Reply_Status" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3" ng-if="fb.Reply_Content != ''">
                                        <div class="form-group">
                                            <label for="Reply_Content">Nội dung hồi đáp</label>
                                            <textarea name="Reply_Content" class="form-control"
                                                ng-model="fb.Reply_Content" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3" ng-if="fb.Reply_Image != ''">
                                        <div class="form-group">
                                            <label for="file">Ảnh đính kèm</label><br>
                                            <center>
                                                <img src="/storage/feedback/@{{fb.Reply_Image}}" class="img-fluid"
                                                    alt="Ảnh đính kèm">
                                            </center>
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