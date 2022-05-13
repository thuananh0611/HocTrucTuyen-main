@extends('admin._layout')
@section('content')

<header>
  <title>Danh sách Admin - 3CESCHOOL</title>
  <script src="/admin/aglAdmin/admin.js"></script>
</header>

<div class="main-content" ng-controller="adminAdControl">
  <section class="section">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin/home">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">
        <a href="/admin/admin">Quản lý Admin</a>
      </li>
    </ul>
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Admin</h4>
            <hr>
            Hiển thị &nbsp;<label class="mr-3"> <input type="number" class="form-control" style="width:62px;"
                ng-model="entryLimit" min="1"> </label>
            Tổng số &nbsp;<ins ng-bind="totalItems" class="text-info"></ins>&nbsp; bản ghi
            <button class="btn btn-info ml-5" data-toggle="modal" data-target=".bd-example-modal-lg"
              ng-click="showModal(0)" style="margin-right:10px;">
              <i class="far fa-plus-square"></i> Thêm
              mới
            </button>
            <input type="text" class="form-control" name="search" style="width:200px;"
              placeholder="Tìm kiếm theo tên..." ng-model="search.Name_Admin">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="tableExport" style="width:100%;">
                <thead>
                  <tr style="text-align: center;">
                    <th>TT</th>
                    <th>Mã quyền</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    ng-repeat="p in filtered = ads | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>@{{$index+1}}</td>
                    <td>@{{p.ID_Permission}}</td>
                    <td>@{{p.Name_Admin}}</td>
                    <td>@{{p.Birth_Admin.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}</td>
                    <td>@{{p.Gender_Admin}}</td>
                    <td>@{{p.Address_Admin}}</td>
                    <td>@{{p.Mail_Admin}}</td>
                    <td>@{{p.Phone_Admin}}</td>
                    <td><img src="@{{p.Img_Admin}}" alt="Ảnh"></td>
                    <td style="text-align: center;">
                      <button data-toggle="modal" data-target=".bd-example-modal-lg" title="Sửa"
                        class="btn btn-icon btn-primary" ng-click="showModal(p.id)">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button title="Xóa" class="btn btn-icon btn-warning" ng-click="deleteClick(p.id)">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                      <button data-toggle="modal" data-target="#largeModalCT" title="Xem chi tiết"
                        class="btn btn-icon btn-primary" ng-click="showModalCT(p.id)">
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
                  Họ và tên
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control"
                    pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$"
                    ng-model="ad.Name_Admin" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập họ và tên!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Ngày sinh
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control datetimepicker" ng-model="ad.Birth_Admin"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập ngày sinh!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Giới tính
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="GenderAdmin" ng-model="ad.Gender_Admin" required>
                    <option value="">--Chọn giới tính--</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn giới tính!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Địa chỉ
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="ad.Address_Admin" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập địa chỉ!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mail
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="email" class="form-control" pattern="^[A-Za-z][\w$.]+@[\w]+\.\w+$"
                    ng-model="ad.Mail_Admin" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập mail!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Điện thoại
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model="ad.Phone_Admin"
                    required>
                  <div class="invalid-feedback">
                    Vui lòng nhập số điện thoại!
                  </div>
                </div>
              </div>

              
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Ảnh
                </label>
                <div class="col-sm-12 col-md-7">
                  <input class="form-control" type="file" name="image" required enctype="multipart/form-data">
                  <div class="invalid-feedback">
                    Vui lòng chọn ảnh!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4" id="passad">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mật khẩu
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="password" class="form-control" pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                    ng-model="ad.Pass_Admin" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập mật khẩu!
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
        <form class="needs-validation" id="formIn">
          <div class="card-body">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Mã quyền
              </label>
              <div class="col-sm-12 col-md-7">
                <select class="form-control" ng-model="ad.ID_Permission" required>
                  <option ng-repeat="s in pers" value="@{{s.ID_Permission}}">@{{s.Name_Permission}}</option>
                </select>
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Họ và tên
              </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control"
                  pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$"
                  ng-model="ad.Name_Admin" required>
                {{-- <div class="invalid-feedback">
                  Vui lòng nhập họ và tên!
                </div> --}}
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Ngày sinh
              </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control datetimepicker" ng-model="ad.Birth_Admin"
                  pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
                {{-- <div class="invalid-feedback">
                  Vui lòng nhập ngày sinh!
                </div> --}}
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Giới tính
              </label>
              <div class="col-sm-12 col-md-7">
                <select class="form-control selectric" name="GenderAdmin" ng-model="ad.Gender_Admin" required>
                  <option value="">--Chọn giới tính--</option>
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                </select>
                {{-- <div class="invalid-feedback">
                  Vui lòng chọn giới tính!
                </div> --}}
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Địa chỉ
              </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" ng-model="ad.Address_Admin" required>
                {{-- <div class="invalid-feedback">
                  Vui lòng nhập địa chỉ!
                </div> --}}
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Mail
              </label>
              <div class="col-sm-12 col-md-7">
                <input type="email" class="form-control" pattern="^[A-Za-z][\w$.]+@[\w]+\.\w+$"
                  ng-model="ad.Mail_Admin" required>
                {{-- <div class="invalid-feedback">
                  Vui lòng nhập mail!
                </div> --}}
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Điện thoại
              </label>
              <div class="col-sm-12 col-md-7">
                <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model=" ad.Phone_Admin"
                  required>
                {{-- <div class="invalid-feedback">
                  Vui lòng nhập số điện thoại!
                </div> --}}
              </div>
            </div>

            
            <div class="form-group row mb-4" >
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Ảnh
              </label>
              <div class="col-sm-12 col-md-7">
                <input class="form-control" type="file" name="image" required enctype="multipart/form-data">
                <div class="invalid-feedback">
                  Vui lòng chọn ảnh!
                </div> 
              </div>
            </div>

            {{-- <div class="form-group row mb-4" id="passad">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                Mật khẩu
              </label>
              <div class="col-sm-12 col-md-7">
                <input type="password" class="form-control" pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                  ng-model="ad.Pass_Admin" required>
              </div>
            </div> --}}
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