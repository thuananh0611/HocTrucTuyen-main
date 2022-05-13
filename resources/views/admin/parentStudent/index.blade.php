@extends('admin._layout')
@section('content')

<header>
  <title>Danh sách Phụ huynh học sinh - 3CESCHOOL</title>
  <script src="/admin/aglAdmin/parentStudent.js"></script>
</header>

<div class="main-content" ng-controller="parentstudentAdControl">
  <section class="section">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin/home">Trang chủ</a>
      </li>
      <li class="breadcrumb-item active">
        <a href="/admin/parentStudent">Quản lý Phụ huynh học sinh</a>
      </li>
    </ul>
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Phụ huynh học sinh</h4>
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
                    <th>Tên học sinh</th>
                    <th>Họ và tên Bố</th>
                    {{-- <th>Ngày sinh bố</th>
                    <th>Giới tính bố</th>
                    <th>Quốc tịch bố</th>
                    <th>Dân tộc bố</th>
                    <th>Tôn giáo bố</th> --}}
                    <th>Địa chỉ Bố</th>
                    <th>Nghệ nghiệp Bố</th>
                    <th>Số điện thoại Bố</th>
                    <th>Họ và tên Mẹ</th>
                    {{-- <th>Ngày sinh M</th>
                    <th>Giới tính M</th>
                    <th>Quốc tịch M</th>
                    <th>Dân tộc M</th>
                    <th>Tôn giáo M</th> --}}
                    <th>Địa chỉ Mẹ</th>
                    <th>Nghệ nghiệp Mẹ</th>
                    <th>Số điện thoại Mẹ</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    ng-repeat="p in filtered = parentStus | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>@{{$index+1}}</td>
                    <td>@{{p.ID_Student}}</td>
                    <td>@{{p.Name_Dad}}</td>
                    {{-- <td>@{{p.Birth_Dad.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}</td>
                    <td>@{{p.Gender_Dad}}</td>
                    <td>@{{p.Nationality_Dad}}</td>
                    <td>@{{p.Ethnic_Dad}}</td>
                    <td>@{{p.Religion_Dad}}</td> --}}
                    <td>@{{p.Address_Dad}}</td>
                    <td>@{{p.Job_Dad}}</td>
                    <td>@{{p.Phone_Dad}}</td>
                    <td>@{{p.Name_Mom}}</td>
                    {{-- <td>@{{p.Birth_Mom.replace('/Date(','').replace(')/','') | date:"dd/MM/yyyy"}}</td>
                    <td>@{{p.Gender_Mom}}</td>
                    <td>@{{p.Nationality_Mom}}</td>
                    <td>@{{p.Ethnic_Mom}}</td>
                    <td>@{{p.Religion_Mom}}</td> --}}
                    <td>@{{p.Address_Mom}}</td>
                    <td>@{{p.Job_Mom}}</td>
                    <td>@{{p.Phone_Mom}}</td>
                    <td style="text-align: center;">
                      <button data-toggle="modal" data-target=".bd-example-modal-lg" title="Sửa"
                        class="btn btn-icon btn-primary" ng-click="showModal(p.id)">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button title="Xóa" class="btn btn-icon btn-warning" ng-click="deleteClick(p.id)">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                      <button data-toggle="modal" data-target=".bd-example-modal-lg" title="Chi tiết"
                      class="btn btn-icon btn-primary" ng-click="showModal(p.id)">
                        <i class="ua-icon-list-lg-view"></i>
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
                  Mã học sinh
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control">
                    <option ng-repeat="s in stus" ng-bind="s.Name_Student"></option>
                  </select>
                </div>
              </div>
              <p>Thông tin về bố</p>
              <div class="form-group row mb-4">
                  
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Họ và tên 
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control"
                    pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$"
                    ng-model="parentStu.Name_Dad" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập họ và tên bố!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Ngày sinh 
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control datetimepicker" ng-model="parentStu.Birth_Dad"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập ngày sinh!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Quốc tịch 
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="nationalDad" ng-model="parentStu.Nationality_Dad" required>
                    <option ng-repeat="s in listnational" ng-bind="s.country"></option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn giới tính!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Dân tộc
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Ethnic_Dad" required>
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
                  <input type="text" class="form-control" ng-model="parentStu.Religion_Dad" required>
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
                  <input type="text" class="form-control" ng-model="parentStu.Address_Dad" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập địa chỉ!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Nghề nghiệp
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Address_Dad" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập nghề nghiệp của bố!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Điện thoại
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model="parentStu.Phone_Dad"
                    required>
                  <div class="invalid-feedback">
                    Vui lòng nhập số điện thoại!
                  </div>
                </div>
              </div>

              <p>Thông tin về mẹ</p>
              <div class="form-group row mb-4">
                  
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Họ và tên
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control"
                    pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$"
                    ng-model="parentStu.Name_Mom" required>
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
                  <input type="text" class="form-control datetimepicker" ng-model="parentStu.Birth_Mom"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập ngày sinh!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Quốc tịch
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="nationalMom" ng-model="parentStu.Nationality_Mom" required>
                    <option ng-repeat="s in listnational" ng-bind="s.country"></option>
                  </select>
                  <div class="invalid-feedback">
                    Vui lòng chọn giới tính!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Dân tộc
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Ethnic_Mom" required>
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
                  <input type="text" class="form-control" ng-model="parentStu.Religion_Mom" required>
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
                  <input type="text" class="form-control" ng-model="parentStu.Address_Mom" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập địa chỉ!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Nghề nghiệp
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Job_Mom" required>
                  <div class="invalid-feedback">
                    Vui lòng nhập nghề nghiệp của mẹ!
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Điện thoại
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model="parentStu.Phone_Mom"
                    required>
                  <div class="invalid-feedback">
                    Vui lòng nhập số điện thoại!
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



  <div class="modal fade bd-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                  Mã học sinh
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control">
                    <option ng-repeat="s in stus" ng-bind="s.Name_Student"></option>
                  </select>
                </div>
              </div>
              <p>Thông tin về bố</p>
              <div class="form-group row mb-4">
                  
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Họ và tên 
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control"
                    pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$"
                    ng-model="parentStu.Name_Dad" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Ngày sinh 
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control datetimepicker" ng-model="parentStu.Birth_Dad"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Quốc tịch 
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="nationalDad" ng-model="parentStu.Nationality_Dad" required>
                    <option ng-repeat="s in listnational" ng-bind="s.country"></option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Dân tộc
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Ethnic_Dad" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Tôn giáo
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Religion_Dad" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Địa chỉ
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Address_Dad" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Nghề nghiệp
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Address_Dad" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Điện thoại
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model="parentStu.Phone_Dad"
                    required>
                </div>
              </div>

              <p>Thông tin về mẹ</p>
              <div class="form-group row mb-4">
                  
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Họ và tên
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control"
                    pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$"
                    ng-model="parentStu.Name_Mom" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Ngày sinh
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control datetimepicker" ng-model="parentStu.Birth_Mom"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Quốc tịch
                </label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="nationalMom" ng-model="parentStu.Nationality_Mom" required>
                    <option ng-repeat="s in listnational" ng-bind="s.country"></option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Dân tộc
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Ethnic_Mom" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Tôn giáo
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Religion_Mom" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Địa chỉ
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Address_Mom" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Nghề nghiệp
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" ng-model="parentStu.Job_Mom" required>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                  Điện thoại
                </label>
                <div class="col-sm-12 col-md-7">
                  <input type="tel" class="form-control" pattern="^(0[35789][0-9]{8})$" ng-model="parentStu.Phone_Mom"
                    required>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop