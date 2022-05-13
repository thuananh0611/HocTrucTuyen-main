@extends('student._layout')
@section('content')

<header>
    <title>Tài khoản của bạn - 3CESCHOOL</title>
    <script src="/student/js/account-settings.js"></script>
</header>

<div class="page-content" ng-controller="AccountSettingsControl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/student/home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/student/account-settings">Tài khoản của bạn</a>
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
        <div class="main-container">
            <h1 class="container-heading">Tài khoản của bạn</h1>
            <div class="container-tabs">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#settings-account-settings">Thông tin tài
                            khoản</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings-password">Đổi mật
                            khẩu</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="settings-account-settings">
                        <div class=" container-block">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="settings-user" style="justify-content: center;">
                                        <div class="settings-user__wrap">
                                            <img src="/storage/users/@{{st.Img_Student}}" alt=""
                                                class="rounded-circle settings-user__avatar" width="120" height="120">
                                            <!-- <div class="textavatar textavatar--settings settings-user__avatar" data-width="120" data-height="120" data-name="Richard Hendrick" data-toggle="textavatar"></div> -->
                                            <div class="settings-user__info">
                                                <span class="settings-user__name" ng-bind="st.Name_Student"></span>
                                                <span class="settings-user__email" style="font-size: 14px;">Sinh
                                                    viên</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-block">
                            <h4 class="container-block__heading">Sơ yếu lý lịch sinh viên</h4>
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-5">
                                    <div class="form-group">
                                        <label for="mahs">Mã học sinh</label>
                                        <input type="text" class="form-control text-center" ng-model="st.ID_Student"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-7">
                                    <div class="form-group">
                                        <label for="hoten">Họ tên</label>
                                        <input type="text" class="form-control text-center" ng-model="st.Name_Student"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="form-group">
                                        <label for="ngaysinh">Ngày sinh</label>
                                        <input type="text" class="form-control text-center"
                                            datepicker-popup="dd/MM/yyyy" ng-model="st.Birth_Student" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <div class="form-group">
                                        <label for="gioitinh">Giới tính</label>
                                        <input type="text" class="form-control text-center" ng-model="st.Gender_Student"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="form-group">
                                        <label for="quoctich">Quốc tịch</label>
                                        <input type="text" class="form-control text-center"
                                            ng-model="st.Nationality_Student" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="dantoc">Dân tộc</label>
                                        <input type="text" class="form-control text-center" ng-model="st.Ethnic_Student"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="tongiao">Tôn giáo</label>
                                        <input type="text" class="form-control text-center"
                                            ng-model="st.Religion_Student" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="quequan">Quê quán</label>
                                        <input type="text" class="form-control text-center"
                                            ng-model="st.Address_Student" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="masbh">Mã số bảo hiểm</label>
                                        <input type="text" class="form-control text-center" ng-model="st.Insurance_Code"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="nienkhoa">Niên khóa</label>
                                        <input type="text" class="form-control text-center" ng-model="st.School_Year"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="dienthoai">Điện thoại</label>
                                        <input type="text" class="form-control text-center" ng-model="st.Phone_Student"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control text-center" ng-model="st.Mail_Student"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-block">
                            <h4 class="container-block__heading">Quan hệ gia đình</h4>
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="tencha">Họ tên cha</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Name_Dad"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-3">
                                    <div class="form-group">
                                        <label for="namsinhcha">Năm sinh</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Birth_Dad"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-3">
                                    <div class="form-group">
                                        <label for="quoctichcha">Quốc tịch</label>
                                        <input type="text" class="form-control text-center"
                                            ng-model="pt.Nationality_Dad" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="dantoccha">Dân tộc</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Ethnic_Dad"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="tongiaocha">Tôn giáo</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Religion_Dad"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="quequancha">Quê quán</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Address_Dad"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="nghenghiepcha">Nghề nghiệp</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Job_Dad"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="dienthoaicha">Điện thoại</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Phone_Dad"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="tenme">Họ tên mẹ</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Name_Mom"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-3">
                                    <div class="form-group">
                                        <label for="namsinhme">Năm sinh</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Birth_Mom"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-3">
                                    <div class="form-group">
                                        <label for="quoctichme">Quốc tịch</label>
                                        <input type="text" class="form-control text-center"
                                            ng-model="pt.Nationality_Mom" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="dantocme">Dân tộc</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Ethnic_Mom"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="tongiaome">Tôn giáo</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Religion_Mom"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="quequanme">Quê quán</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Address_Mom"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="nghenghiepme">Nghề nghiệp</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Job_Mom"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="dienthoaime">Điện thoại</label>
                                        <input type="text" class="form-control text-center" ng-model="pt.Phone_Mom"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="settings-password">
                        <div class="container-block">
                            <h4 class="container-block__heading">Cập nhật mật khẩu</h4>
                            <form method="post" id="frmPass">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="settings-new-password">Mật khẩu cũ</label>
                                            <input type="password" class="form-control"
                                                pattern="[a-zA-Z0-9!@#$%^&*]{8,}" placeholder="Nhập mật khẩu cũ..."
                                                ng-model="oldPass" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="settings-new-password">Mật khẩu mới</label>
                                            <input type="password" class="form-control"
                                                pattern="[a-zA-Z0-9!@#$%^&*]{8,}" placeholder="Nhập mật khẩu mới..."
                                                ng-model="newPass" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="settings-new-password">Nhập lại mật khẩu</label>
                                            <input type="password" class="form-control"
                                                pattern="[a-zA-Z0-9!@#$%^&*]{8,}" placeholder="Nhập lại mật khẩu mới..."
                                                ng-model="st.PassStudent" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-controls">
                                    <button type="submit" class="btn btn-info" ng-click="saveData()">Lưu thay
                                        đổi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop