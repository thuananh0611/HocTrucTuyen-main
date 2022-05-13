@extends('admin._layout')
@section('content')

<header>
  <title>Danh sách Lớp học - 3CESCHOOL</title>
  <script src="/admin/aglAdmin/classs.js"></script>
</header>

<div class="main-content" ng-controller="classsControl">
  <section class="section">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="/admin/home">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">
          <a href="/admin/classs">Quản lý Lớp học</a>
      </li>
  </ul>
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Lớp học</h4>
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
              placeholder="Tìm kiếm theo tên..." ng-model="search.Name_Class">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="tableExport" style="width:100%;">
                <thead>
                  <tr style="text-align: center;">
                    <th>TT</th>
                    <th>Mã lớp</th>
                    <th>Mã giáo viên</th>
                    <th>Tên lớp</th>
                    <th>Khối</th>
                    <th>Số lượng học sinh</th>
                    <th>Niên khóa</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    ng-repeat="p in filtered = clas | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>@{{$index+1}}</td>
                    <td>@{{p.ID_Class}}</td>
                    <td>@{{p.ID_Teacher}}</td>
                    <td>@{{p.Name_Class}}</td>
                    <td>@{{p.Grade}}</td>
                    <td>@{{p.Total_Student}}</td>
                    <td>@{{p.School_Year}}</td>
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
                  Mã giáo viên
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="cla.ID_Teacher" required>
                    <option ng-repeat="s in teas" value="@{{s.ID_Teacher}}">@{{s.Name_Teacher}}</option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                 Tên lớp
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="cla.Name_Class" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập tên lớp!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Khối
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="Grade" ng-model="cla.Grade" required>
                    <option value="">--Chọn khối lớp--</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn khối lớp!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Số lượng học sinh
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="number" class="form-control" ng-model="cla.Total_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập số lượng học sinh!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Niên khóa
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="cla.School_Year" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập niên khóa!
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