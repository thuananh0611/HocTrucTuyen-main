@extends('admin._layout')
@section('content')

<header>
    <title>Thông tin cá nhân - 3CESCHOOL</title>
    <script src="/admin/aglAdmin/profileAd.js"></script>
</header>

<div class="main-content" ng-controller="profileAdControl">

    <section class="section">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin/home">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="/admin/profileAd">Tài khoản của bạn</a>
            </li>
        </ul>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                        <div class="card-body">
                            <div class="author-box-center">
                                <img alt="image" src="/admin/Content/images/bg01.jpg" width="100px" height="100px"
                                    class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                                <div class="author-box-name">
                                    <span  ng-bind="ad.Name_Admin"></span>
                                    <span  class="author-box-job" style="font-size: 14px;">Quản trị viên
                                        </span>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="author-box-description">
                                    <p>
                                        Muốn xây dựng đất nước, trước hết phải phát triển giáo dục. Muốn trị
                                        nước, phải trọng dụng người tài.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="card">
                        <div class="padding-20">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#profileAd"
                                        role="tab" aria-selected="true">Thông tin cá nhân</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profilepass"
                                        role="tab" aria-selected="false">Đổi mật khẩu</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                                <div class="tab-pane fade show active" id="profileAd" role="tabpanel">
                                    <form class="needs-validation" novalidate>
                                        <div class="card-body">
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                                    Mã quyền
                                                </label>
                                                <div class="col-sm-12 col-md-7">
                                                    <select class="form-control" ng-model="ad.ID_Permission" required>
                                                        <option ng-repeat="s in pers" value="@{{ad.ID_Permission}}">
                                                            @{{ad.Name_Permission}}</option>
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
                                                    <input type="text" class="form-control datetimepicker"
                                                        ng-model="ad.Birth_Admin" pattern="\d{1,2}/\d{1,2}/\d{4}"
                                                        datepicker-popup="dd/MM/yyyy" placeholder="31/12/1996" required>
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
                                                    <select class="form-control selectric" name="GenderAdmin"
                                                        ng-model="ad.Gender_Admin" required>
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
                                                    <input type="text" class="form-control" ng-model="ad.Address_Admin"
                                                        required>
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
                                                    <input type="email" class="form-control"
                                                        pattern="^[A-Za-z][\w$.]+@[\w]+\.\w+$" ng-model="ad.Mail_Admin"
                                                        required>
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
                                                    <input type="tel" class="form-control"
                                                        pattern="^(0[35789][0-9]{8})$" ng-model=" ad.Phone_Admin"
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
                                                    <input class="form-control" type="file" name="image" required
                                                        enctype="multipart/form-data">
                                                    <div class="invalid-feedback">
                                                        Vui lòng chọn ảnh!
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                                    Mật khẩu
                                                </label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="password" class="form-control"
                                                        pattern="[a-zA-Z0-9!@#$%^&*]{8,}" ng-model="ad.Pass_Admin"
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập mật khẩu!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn btn-icon icon-left btn-success" ng-click="ChangeInfo()">
                                                <i class="fas fa-check"></i>
                                                Lưu thay đổi
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profilepass" role="tabpanel">
                                    <form class="needs-validation" novalidate>
                                        <div class="card-body">
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                                    Mật khẩu hiện tại
                                                </label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="password" class="form-control"
                                                        pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                                                        placeholder="Nhập mật khẩu cũ..." ng-model="oldPass" required>
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập mật khẩu hiện tại!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                                    Mật khẩu mới
                                                </label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="password" class="form-control"
                                                        pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                                                        placeholder="Nhập mật khẩu mới..." ng-model="newPass" required>
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập mật khẩu mới!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                                    Xác nhận mật khẩu mới
                                                </label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="password" class="form-control"
                                                        pattern="[a-zA-Z0-9!@#$%^&*]{8,}"
                                                        placeholder="Nhập lại mật khẩu mới..." ng-model="st.PassAdmin"
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập xác nhận mật khẩu mới!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-icon icon-left btn-success" ng-click="saveData()">
                                                <i class="fas fa-check"></i>
                                                Lưu thay đổi
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>