@extends('admin._layout')
@section('content')

<header>
  <title>Danh sách phản hồi - 3CESCHOOL</title>
  <script src="/admin/aglAdmin/feedback.js"></script>
</header>

<div class="main-content" ng-controller="feedbackADControl">
  <section class="section">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="/admin/home">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">
          <a href="/admin/feedbackAd">Quản lý Phản hồi</a>
      </li>
  </ul>
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Phản hồi</h4>
            <hr>
            Hiển thị &nbsp;<label class="mr-3"> <input type="number" class="form-control" style="width:62px;"
                ng-model="entryLimit" min="1"> </label>
            Tổng số &nbsp;<ins ng-bind="totalItems" class="text-info"></ins>&nbsp; bản ghi
            <button class="btn btn-info ml-5" data-toggle="modal" data-target=".bd-example-modal-lg" ng-click="showModal(0)"
              style="margin-right:10px;">
              <i class="far fa-plus-square"></i> Thêm
              mới
            </button>
            <input type="text" class="form-control" name="search" style="width:200px;"
              placeholder="Tìm kiếm theo tên..." ng-model="search.Title">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="tableExport" style="width:100%;">
                <thead>
                  <tr style="text-align: center;">
                    <th>TT</th>
                    <th>Admin</th>
                    <th>Học sinh</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung ý kiến - phản hồi</th>
                    <th>Ảnh</th>
                    <th>Thời gian gửi</th>
                    <th>Trạng thái hồi đáp</th>
                    <th>Nội dung hồi đáp</th>
                    <th>Ảnh hồi đáp</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    ng-repeat="fb in filtered = fbs | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>@{{$index+1}}</td>
                    <td>@{{fb.ID_Admin}}</td>
                    <td>@{{fb.ID_Student}}</td>
                    <td>@{{fb.Title}}</td>
                    <td>
                        <show-more text="fb.Content" limit="20"> </show-more>
                    </td>
                    <td><img src="@{{fb.Img}}" alt="Ảnh"></td>
                    <td>@{{fb.created_at.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy |
                        HH:mm:ss"}}</td>
                    <td>@{{fb.Status_Reply}}</td>
                    <td>@{{fb.Reply_Content}}</td>
                    <td><img src="@{{fb.Reply_Image}}" alt="Ảnh"></td>
                    <td style="text-align: center;">
                      <button data-toggle="modal" data-target=".bd-example-modal-lg" title="Sửa"
                        class="btn btn-icon btn-primary" ng-click="showModal(p.id)">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button title="Xóa" class="btn btn-icon btn-warning" ng-click="deleteClick(p.id)">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <center>
                <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit"
                  boundary-links="true"></pagination>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Large modal -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" id="largeModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><span>@{{modalTitle}}</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="needs-validation" id="formIn">
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mã Admin
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control">
                    <option ng-repeat="s in ads" ng-bind="s.ID_Admin"></option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Tiêu đề
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="fb.Title" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập tiêu đề!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Trạng thái hồi đáp
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="statusreply" ng-model="fb.Status_Reply" required>
                    <option value="">--Chọn trạng thái--</option>
                    <option value="Đã hồi đáp">Đã hồi đáp</option>
                    <option value="Chưa hồi đáp">Chưa hồi đáp</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn trạng thái!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Nội dung ý kiến - phản hồi
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="fb.Reply_Content" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập nội dung ý kiến - phản hồi!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Ảnh phản hồi
                </label>
                <div class="col-sm-12 col-md-7">
                  <input class="form-control" type="file" name="image" required enctype="multipart/form-data">
                  <div class="invalid-feedback">
                    Vui lòng chọn ảnh!
                  </div>
                </div>
              </div>
              
            </div>
            <div class="text-right">
              <button class="btn btn-icon icon-left btn-success" id="btnSubmit" ng-click="saveData()">
                <i class="fas fa-check"></i>
                <span>@{{modalButton}}</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop