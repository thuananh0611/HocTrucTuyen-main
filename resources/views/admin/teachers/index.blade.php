@extends('admin._layout')
@section('content')

<header>
  <title>Danh sách Giáo viên - 3CESCHOOL</title>
  <script src="/admin/aglAdmin/teacher.js"></script>
</header>

<div class="main-content" ng-controller="teacherAdControl">
  <section class="section">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin/home">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">
        <a href="/admin/teachers">Quản lý Giáo viên</a>
      </li>
    </ul>
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Giáo viên</h4>
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
              placeholder="Tìm kiếm theo tên..." ng-model="search.Name_Teacher">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="tableExport" style="width:100%;">
                <thead>
                  <tr style="text-align: center;">
                    <th>TT</th>
                    {{-- <th>Mã quyền</th> --}}
                    <th>Mã tổ chuyên môn</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    {{-- <th>Địa chỉ</th> --}}
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Ảnh</th>
                    {{-- <th>Chức vụ</th>
                    <th>Trạng thái</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th> --}}
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    ng-repeat="p in filtered = teas | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>@{{$index+1}}</td>
                    {{-- <td>@{{p.ID_Permission}}</td> --}}
                    <td>@{{p.ID_Professional}}</td>
                    <td>@{{p.Name_Teacher}}</td>
                    <td>@{{p.Birth_Teacher.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}</td>
                    <td>@{{p.Gender_Teacher}}</td>
                    {{-- <td>@{{p.Address_Teacher}}</td> --}}
                    <td>@{{p.Mail_Teacher}}</td>
                    <td>@{{p.Phone_Teacher}}</td>
                    <td><img src="@{{p.Img_Teacher}}" alt="Ảnh"></td>
                    {{-- <td>@{{p.Position_Teacher}}</td>
                    <td>@{{p.Status_Teacher}}</td>
                    <td>@{{p.Time_Start}}</td>
                    <td>@{{p.Time_End}}</td> --}}
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
                  Mã quyền
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="tea.ID_Permission" required>
                    <option ng-repeat="s in pers" value="@{{s.ID_Permission}}">@{{s.Name_Permission}}</option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mã tổ chuyên môn
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="tea.ID_Professional" required>
                    <option ng-repeat="s in progs" value="@{{s.ID_Professional}}">@{{s.Name_Professional}}</option>
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
                    ng-model="tea.Name_Teacher" required>
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
                  <input type="text" class="form-control datetimepicker" ng-model="tea.Birth_Teacher"
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
                  <select class="form-control selectric" name="GenderTeacher" ng-model="tea.Gender_Teacher" required>
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
                  <input type="text" class="form-control" ng-model="tea.Address_Teacher" required>
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
                    ng-model="tea.Mail_Teacher" required>
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
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model=" tea.Phone_Teacher"
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
                  <input type="text" class="form-control" ng-model="tea.Position_Teacher" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập chức vụ!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Trạng thái
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="statusteacher" ng-model="tea.Status_Teacher" required>
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
                  <input type="text" class="form-control datetimepicker" ng-model="tea.Time_Start"
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
                  <input type="text" class="form-control datetimepicker" ng-model="tea.Time_End"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996">
                  <div class="invalid-feedback">
                    Vui lòng nhập kết thúc làm việc!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4" id="passsteas">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mật khẩu
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="password" class="form-control" pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                    ng-model="tea.Pass_Teacher" required>
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