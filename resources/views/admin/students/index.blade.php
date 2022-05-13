@extends('admin._layout')
@section('content')

<header>
  <title>Danh sách Học sinh - 3CESCHOOL</title>
  <script src="/admin/aglAdmin/student.js"></script>
</header>

<div class="main-content" ng-controller="studentsAdControl">
  <section class="section">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin/home">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">
        <a href="/admin/students">Quản lý Học sinh</a>
      </li>
    </ul>
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Học sinh</h4>
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
              placeholder="Tìm kiếm theo tên..." ng-model="search.Name_Student">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="tableExport" style="width:100%;">
                <thead>
                  <tr style="text-align: center;">
                    <th>TT</th>
                    <th>Mã lớp</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    {{-- <th>Quốc tịch</th>
                    <th>Dân tộc</th>
                    <th>Tôn giáo</th> --}}
                    <th>Địa chỉ</th>
                    {{-- <th>Mã bảo hiểm</th>
                    <th>Niên khóa</th> --}}
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    ng-repeat="p in filtered = stus | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>@{{$index+1}}</td>
                    <td>@{{p.ID_Class}}</td>
                    <td>@{{p.Name_Student}}</td>
                    <td>@{{p.Birth_Student.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}</td>
                    <td>@{{p.Gender_Student}}</td>
                    {{-- <td>@{{p.Nationality_Student}}</td>
                    <td>@{{p.Ethnic_Student}}</td>
                    <td>@{{p.Religion_Student}}</td> --}}
                    <td>@{{p.Address_Student}}</td>
                    {{-- <td>@{{p.Insurance_Code}}</td>
                    <td>@{{p.School_Year}}</td> --}}
                    <td>@{{p.Phone_Student}}</td>
                    <td>@{{p.Mail_Student}}</td>
                    <td><img src="@{{p.Img_Student}}" alt="Ảnh"></td>
                    <td>@{{p.Status_Student}}</td>
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
                  Mã lớp
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="stu.ID_Class" required>
                    <option ng-repeat="s in clas" value="@{{s.ID_Class}}">@{{s.Name_Class}}</option>
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
                    ng-model="stu.Name_Student" required>
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
                  <input type="text" class="form-control datetimepicker" ng-model="stu.Birth_Student"
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
                  <select class="form-control selectric" name="GenderStudent" ng-model="stu.Gender_Student" required>
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
                  Quốc tịch
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="stu.Nationality_Student" required>
                    <option ng-repeat="s in listnational" value="@{{s.country}}">@{{s.country}}</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn quốc tịch!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Dân tộc
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.Ethnic_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập dân tộc!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Tôn giáo
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.Religion_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập tên tôn giáo!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Địa chỉ
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.Address_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập địa chỉ!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mã số bảo hiểm y tế
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.Insurance_Code" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập tên mã số bảo hiểm y tế!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Số tài khoản
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.AccountNumber_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập mã số tài khoản!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Niên khóa
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.School_Year" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập niên khóa!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Điện thoại
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model=" stu.Phone_Student"
                    required>
                  <div class="invalid-feedback">
                    Vui lòng nhập số điện thoại!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mail
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="email" class="form-control" pattern="^[A-Za-z][\w$.]+@[\w]+\.\w+$"
                    ng-model="stu.Mail_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập mail!
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

              <div class="form-group row mb-4" id="passstus">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mật khẩu
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="password" class="form-control" pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                    ng-model="stu.Pass_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập mật khẩu!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Trạng thái
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="statusstudent" ng-model="stu.Status_Student" required>
                    <option value="">--Chọn trạng thái--</option>
                    <option value="Đang học">Đang học</option>
                    <option value="Nghỉ học">Nghỉ học</option>
                    <option value="Bảo lưu">Bảo lưu</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn trạng thái!
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
                  Mã lớp
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="stu.ID_Class" required>
                    <option ng-repeat="s in clas" value="@{{s.ID_Class}}">@{{s.Name_Class}}</option>
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
                    ng-model="stu.Name_Student" required>
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
                  <input type="text" class="form-control datetimepicker" ng-model="stu.Birth_Student"
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
                  <select class="form-control selectric" name="GenderStudent" ng-model="stu.Gender_Student" required>
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
                  Quốc tịch
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" ng-model="stu.Nationality_Student" required>
                    <option ng-repeat="s in listnational" value="@{{s.country}}">@{{s.country}}</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn quốc tịch!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Dân tộc
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.Ethnic_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập dân tộc!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Tôn giáo
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.Religion_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập tên tôn giáo!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Địa chỉ
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.Address_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập địa chỉ!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mã số bảo hiểm y tế
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.Insurance_Code" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập tên mã số bảo hiểm y tế!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Số tài khoản
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.AccountNumber_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập mã số tài khoản!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Niên khóa
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="stu.School_Year" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập niên khóa!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Điện thoại
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model=" stu.Phone_Student"
                    required>
                  <div class="invalid-feedback">
                    Vui lòng nhập số điện thoại!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mail
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="email" class="form-control" pattern="^[A-Za-z][\w$.]+@[\w]+\.\w+$"
                    ng-model="stu.Mail_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập mail!
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

              <div class="form-group row mb-4" id="passstus">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Mật khẩu
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="password" class="form-control" pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                    ng-model="stu.Pass_Student" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập mật khẩu!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Trạng thái
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="statusstudent" ng-model="stu.Status_Student" required>
                    <option value="">--Chọn trạng thái--</option>
                    <option value="Đang học">Đang học</option>
                    <option value="Nghỉ học">Nghỉ học</option>
                    <option value="Bảo lưu">Bảo lưu</option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn trạng thái!
                  </div>
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