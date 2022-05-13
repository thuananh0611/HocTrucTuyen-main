@extends('admin._layout')
@section('content')

<header>
  <title>Danh sách Khoản chi - 3CESCHOOL</title>
  <script src="/admin/aglAdmin/expense.js"></script>
</header>

<div class="main-content" ng-controller="expenseControl">
  <section class="section">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="/admin/home">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">
          <a href="/admin/expense">Quản lý Khoản chi</a>
      </li>
  </ul>
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Khoản chi</h4>
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
              placeholder="Tìm kiếm theo tên..." ng-model="search.ID_Expense">
          </div>

          <div class="card-header">
            Tổng chi: &nbsp;<ins ng-bind="Tong | number" class="text-info"></ins>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="tableExport" style="width:100%;">
                <thead>
                  <tr style="text-align: center;">
                    <th>TT</th>
                    <th>Mã khoản chi</th>
                    <th>Mã nhân viên</th>
                    <th>Ngày chi</th>
                    <th>Tổng tiền</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    ng-repeat="p in filtered = exs | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>@{{$index+1}}</td>
                    <td>@{{p.ID_Expense}}</td>
                    <td>@{{p.ID_Staff}}</td>
                    <td>@{{p.Date_Expense.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}</td>
                    <td>@{{p.Total_Money}}</td>
                    <td style="text-align: center;">
                      <button data-toggle="modal" data-target=".bd-example-modal-lg" title="Sửa"
                        class="btn btn-icon btn-primary" ng-click="showModal(p.id)">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button title="Xóa" class="btn btn-icon btn-warning" ng-click="deleteClick(p.id)">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                      <button data-toggle="modal" data-target="#largeModalCT" title="Xem chi tiết"
                        class="btn btn-icon btn-primary" ng-click="showModalCT(p.ID_Expense)">
                        <i class="fas fa-info"></i>
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
                  Mã nhân viên
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="ex.ID_Staff" required>
                    <option ng-repeat="s in stafs" value="@{{s.ID_Staff}}">@{{s.Name_Staff}}</option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Ngày chi
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control datetimepicker" ng-model="ex.Date_Expense"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập ngày chi!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Tổng tiền
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="number" class="form-control" ng-model="ex.Total_Money" required>
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

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" id="largeModalCT">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><span>@{{modalTitleCT}}</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="needs-validation" id="formIn"  ng-repeat="p in excts | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mã chi tiết khoản chi
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="p.ID_Expense_CT" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mã khoản chi
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="p.ID_Expense" required>
                    <option ng-repeat="s in exs" value="@{{s.ID_Expense}}">@{{s.ID_Expense}}</option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Loại khoản chi
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="p.TypeOfExpense" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Thành tiền
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="number" class="form-control" ng-model="p.Into_Money" required>
                </div>
              </div>

            </div>
            {{-- <div class="text-right">
              <button class="btn btn-icon icon-left btn-success" id="btnSubmit" ng-click="saveData()">
                <i class="fas fa-check"></i>
                <span>@{{modalButton}}</span>
              </button>
            </div> --}}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop