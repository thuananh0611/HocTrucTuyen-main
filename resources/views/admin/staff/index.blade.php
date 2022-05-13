@extends('admin._layout')
@section('content')

<header>
  <title>Danh sách Nhân viên - 3CESCHOOL</title>
  <script src="/admin/aglAdmin/staff.js"></script>
</header>

<div class="main-content" ng-controller="staffAdControl">
  <section class="section">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin/home">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">
        <a href="/admin/staff">Quản lý Nhân viên</a>
      </li>
    </ul>
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Nhân viên</h4>
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
              placeholder="Tìm kiếm theo tên..." ng-model="search.Name_Staff">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="tableExport" style="width:100%;">
                <thead>
                  <tr style="text-align: center;">
                    <th>TT</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Ảnh</th>
                    <th>Chức vụ</th>
                    <th>Trạng thái</th>
                    <th>Thời gian bắt đầu làm việc</th>
                    <th>Thời gian kết thúc làm việc</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    ng-repeat="p in filtered = stafs | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>@{{$index+1}}</td>
                    <td>@{{p.Name_Staff}}</td>
                    <td>@{{p.Birth_Staff.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}</td>
                    <td>@{{p.Gender_Staff}}</td>
                    <td>@{{p.Address_Staff}}</td>
                    <td>@{{p.Mail_Staff}}</td>
                    <td>@{{p.Phone_Staff}}</td>
                    <td><img src="@{{p.Img_Staff}}" alt="Ảnh"></td>
                    <td>@{{p.Position_Staff}}</td>
                    <td>@{{p.Status_Staff}}</td>
                    <td>@{{p.Time_Start}}</td>
                    <td>@{{p.Time_End}}</td>
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
                  Họ và tên
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control"
                    pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$"
                    ng-model="staf.Name_Staff" required>
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
                  <input type="text" class="form-control datetimepicker" ng-model="staf.Birth_Staff"
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
                  <select class="form-control selectric" name="GenderStaf" ng-model="staf.Gender_Staff" required>
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
                  <input type="text" class="form-control" ng-model="staf.Address_Staff" required>
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
                    ng-model="staf.Mail_Staff" required>
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
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model=" staf.Phone_Staff"
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

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Chức vụ
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="PositionStaff" ng-model="staf.Position_Staff" required>
                    <option value="">--Chọn chức vụ--</option>
                    <option value="Nhân viên thư viện">Nhân viên thư viện</option>
                    <option value="Nhân viên thiết bị, thí nghiệm">Nhân viên thiết bị, thí nghiệm</option>
                    <option value="Nhân viên y tế">Nhân viên y tế</option>
                    <option value="Nhân viên kế toán">Nhân viên kế toán</option>
                    <option value="Nhân viên văn thư">Nhân viên văn thư</option>
                    <option value="Bảo vệ">Bảo vệ</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn chức vụ!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Trạng thái
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="StatusStaff" ng-model="staf.Status_Staff" required>
                    <option value="">--Chọn trạng thái--</option>
                    <option value="Đang học">Đang làm việc</option>
                    <option value="Nghỉ học">Nghỉ hưu</option>
                    <option value="Bảo lưu">Nghỉ thai sản</option>
                    <option value="Điều trị bệnh">Nghỉ điều trị bệnh</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn trạng thái!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Thời gian bắt đầu làm việc
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control datetimepicker" ng-model="staf.Time_Start"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập bắt đầu làm việc!
                  </div>
                </div>
              </div>
              
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Thời gian kết thúc làm việc
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control datetimepicker" ng-model="staf.Time_End"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996">
                  <div class="invalid-feedback">
                    Vui lòng nhập kết thúc làm việc!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4" id="passstaf">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mật khẩu
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="password" class="form-control" pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                    ng-model="staf.Pass_Staff" required>
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
</div>
@stop