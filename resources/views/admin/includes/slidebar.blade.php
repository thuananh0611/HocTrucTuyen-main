<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/admin/home">
                <img alt="image" src="/admin/img/logotl.png" class="header-logo" /> <span class="logo-name">3CESCHOOL</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown">
                <a href="/admin/home" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Tổng quan</span></a>
            </li>
            <li>
                <a class="nav-link" href="/admin/permission-groups"><i class="fas fa-user-check"></i><span>Quản lý phân quyền</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-user-plus"></i><span>Quản lý tài khoản</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/admin/admin">Danh sách Admin</a></li>
                    <!-- danh sách người dùng hiển thị hết tất cả hoặc có chế độ hiển thị lọc nhóm quyền -->
                    {{-- <li><a class="nav-link" href="">Thêm người dùng</a></li> --}}
                    <li><a class="nav-link" href="/admin/ComingSoon">Xử lý báo cáo và khiếu nại</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-edit"></i><span>Quản lý nội dung</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/admin/ComingSoon">Thay đổi giao diện</a></li>
                    {{-- <li><a class="nav-link" href="~/Login/Login/ComingSoon">Giao diện trang giáo viên</a></li>
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Giao diện trang học sinh</a></li> --}}
                    <li><a class="nav-link" href="/admin/ComingSoon">Lỗi và phiên bản mới</a></li>
                    <!-- một số cái không để nội dung đang trong giai đoạn hoàn thiện, tính năng chưa được cập nhật -->
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-chalkboard-teacher"></i><span>Quản lý giảng dạy</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/admin/professional-groups">Danh sách tổ chuyên môn</a></li>
                    <li><a class="nav-link" href="/admin/subjects">Danh sách bộ môn</a></li>
                    <li><a class="nav-link" href="/admin/classs">Danh sách lớp học</a></li>
                    <li><a class="nav-link" href="/admin/teachers">Danh sách giáo viên</a></li>
                    <li><a class="nav-link" href="sdmin/ComingSoon">Thời khóa biểu</a></li>
                    <li><a class="nav-link" href="">Ngân hàng tài liệu và đề thi</a></li>
                    <!-- dẫn đến trang của leader, vì phần này admin k quản lý trực tiếp, chỉ có nhiệm vụ cấp quyền -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thống kê ĐGCT giảng dạy</a></li>
                    <!-- Thống kê đánh giá chất lượng giảng dạy -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thống kê TTTĐ cán bộ</a></li>
                    <!-- Thống kê thành tích thi đua cán bộ -->
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-book-reader"></i><span>Quản lý học tập</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/admin/students">Danh sách học sinh</a></li>
                    <li><a class="nav-link" href="/admin/parentStudent">Danh sách phụ huynh học sinh</a></li>
                    <li>
                        <a class="nav-link" href="">Danh sách điểm</a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="/admin/ComingSoon">Danh sách điểm theo lớp</a></li>
                            <li><a class="nav-link" href="/admin/ComingSoon">Danh sách điểm theo môn học</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown">
                            <span>Quản lý điểm</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="nav-link" href="/admin/ComingSoon">Danh sách điểm theo lớp</a></li>
                            <li><a class="nav-link" href="/admin/ComingSoon">Danh sách điểm theo môn học</a></li>

                        </ul>
                    </li>
                    <!-- phần này dẫn đến trang leader -->
                    <li><a class="nav-link" href="/admin/ComingSoon">Thống kê kết quả học tập</a></li>
                    <li><a class="nav-link" href="/admin/ComingSoon">Thống kê thành tích thi đua</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-file-invoice-dollar"></i><span>Quản lý tài chính</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/admin/ComingSoon">Học phí</a></li>
                    <li><a class="nav-link" href="/admin/ComingSoon">BHTT & BHYT</a></li>
                    <li><a class="nav-link" href="/admin/ComingSoon">Cơ sở vật chất</a></li>
                    <li><a class="nav-link" href="/admin/ComingSoon">Quỹ lớp</a></li>
                    <li><a class="nav-link" href="/admin/ComingSoon">Lương thưởng cán bộ</a></li>
                    <li><a class="nav-link" href="/admin/ComingSoon">Thưởng thành tích thi đua</a></li>
                    <li><a class="nav-link" href="/admin/revenue">Thống kê khoản thu</a></li>
                    <li><a class="nav-link" href="/admin/expense">Thống kê khoản chi</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="/admin/ComingSoon">
                    <i class="fas fa-file-word"></i><span>
                        Quản lý văn bản biểu
                        mẫu
                    </span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="/admin/feedbackAd"><i class="fas fa-info"></i><span>Quản lý phản hồi</span></a>
            </li>
            <li>
                <a class="nav-link" href="/admin/profileAd"><i class="fas fa-user-check"></i><span>Thông tin cá nhân</span></a>
            </li>
        </ul>
    </aside>
</div>