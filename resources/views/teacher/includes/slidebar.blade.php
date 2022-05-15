<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="~/Leader/Leader/Index">
                <img alt="image" src="/teacher/img/logotl.png" class="header-logo" /> <span class="logo-name">3CESCHOOL</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown active">
                <a href="~/Leader/Leader/Index" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Tổng quan</span></a>
            </li>
            <li>
                <a href="~/Leader/Leader/PersonalTask" class="nav-link">
                    <i class="fas fa-tasks"></i><span>
                        Nhiệm vụ cá
                        nhân
                    </span>
                </a>
                <!-- Phần này hiển thị thời khóa biểu + nhiệm vụ được tổ trưởng giao || công việc của lớp chủ nhiệm || việc mà tổ trưởng cần làm -->
            </li>
            <li>
                <a class="nav-link" href="coming"><i class="fas fa-plus-square"></i><span>Tạo lớp mới</span></a>
                <!-- Lớp học trực tuyến trong trường hợp vừa là leader vừa là chủ nghiệm và phụ trách giảng dạy -->
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-user-graduate"></i><span>Quản lý học sinh</span>
                </a>
                <!-- Toàn trường -->
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="~/Leader/Student/Index">Lý lịch trích ngang</a></li>
                    <li><a class="nav-link" href="~/Leader/Student/Index">Danh sách tài khoản</a></li>
                    <li><a class="nav-link" href="~/Leader/Calendar/Index">Thời khóa biểu</a></li>
                    <li><a class="nav-link" href="~/Leader/Student/ViewScoreTest">Điểm và lưu trữ</a></li>
                    <!-- Phần này quản lý điểm và lưu các bài tập, bài thi của học sinh -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thống kê KQHT & KT</a></li>
                    <!-- Phiếu đánh giá + Thống kê kết quả học tập và khen thưởng -->
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-chalkboard-teacher"></i><span>Quản lý giáo viên</span>
                </a>
                <!-- Toàn trường -->
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="~/Leader/Leader/PersonalInforLead">Thông tin hồ sơ</a></li>
                    <li><a class="nav-link" href="~/Leader/Leader/Leader">Danh sách tài khoản</a></li>
                    <li><a class="nav-link" href="~/Leader/Calendar/Index">Thời khóa biểu</a></li>
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Phân công giảng dạy</a></li>
                    <!-- Bảng phân công nhiệm vụ chủ nhiệm hoặc giảng dạy -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thống kê CLGD & KT</a></li>
                    <!-- Phiếu đánh giá + Thống kê chất lượng giảng dạy và khen thưởng -->
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-file-invoice"></i><span>Quản lý ngân hàng tài liệu và đề thi</span>
                </a>
                <!-- Phân chia theo nhóm tổ bộ môn, ví dụ nhóm tổ Toán - Lý - Hóa 3 khối -->
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="~/Leader/Document/Index">Hệ thống tài liệu</a></li>
                    <!-- Chia theo môn Toán || Lý || Hóa các lớp 10,11,12 -->
                    <li><a class="nav-link" href="~/Leader/Test/Index">Hệ thống đề thi</a></li>
                    <!-- Chia theo môn Toán || Lý || Hóa các lớp 10,11,12 qua các dạng bài thi 15 || 45 || giữa kỳ || cuối kỳ || học sinh giỏi,...-->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Phân công nhiệm vụ</a></li>
                    <!-- Bảng phân công phụ trách soạn giáo án, bổ sung tài liệu và làm bộ đề cho các giáo viên -->
                    <li><a class="nav-link" href="~/Leader/Test/Index">Duyệt tài liệu & đề thi</a></li>
                    <!-- Hiện khi người dùng là trcomingưởng bộ môn -->
                    <li><a class="nav-link" href="~/Leader/Question/Index">Làm tài liệu & đề thi</a></li>
                    <!-- Hiển thị khi người dùng lcomingà giáo viên giảng dạy -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thống kê CLTL & ĐT</a></li>
                    <!-- Phiếu đánh giá + Thống kê chất lượng tài liệu và đề thi -->
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-chalkboard-teacher"></i><span>Quản lý lớp chủ nhiệm</span>
                </a>
                <!-- Chỉ hiển thị khi user là gv chủ nhiệm -->
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Danh sách lớp CN</a></li>
                    <!-- Lý lịch trích ngang của học sinh theo lớp -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Danh sách tài khoản</a></li>
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Bảng điểm học sinh</a></li>
                    <!-- Bảng điểm theo kỳ học + năm các môn-->
                    <li><a class="nav-link" href="~/Leader/Calendar/Index">Thời khóa biểu</a></li>
                    <!-- TKB của lớp -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thông báo và hoạt động</a></li>
                    <!-- Thông báo tới nhóm lớp các thông tin cần thiết liên quan đến lớp học trực tuyến -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thống kê CLHT & KT</a></li>
                    <!-- Phiếu đánh giá + Thống kê chất lượng học tập và khen thưởng -->
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-chalkboard"></i><span>Quản lý lớp giảng dạy</span>
                </a>
                <!-- Hiển thị khi user là gv giảng dạy -->
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Danh sách lớp GD</a></li>
                    <!-- Danh sách điểm danh của lớp được phân công giảng dạy + link lớp học-->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Danh sách tài khoản</a></li>
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Bảng điểm học sinh</a></li>
                    <!-- Bảng điểm theo kỳ học + năm của môn-->
                    <li><a class="nav-link" href="~/Leader/Calendar/Index">Thời khóa biểu</a></li>
                    <!-- TKB giảng dạy các lớp của giáo viên -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thông báo và hoạt động</a></li>
                    <!-- Thông báo và giao bài tập, bài thi tới nhóm lớp các thông tin cần thiết liên quan đến lớp học trực tuyến -->
                    <li><a class="nav-link" href="~/Login/Login/ComingSoon">Thống kê CLHT </a></li>
                    <!-- Phiếu đánh giá + Thống kê chất lượng học tập -->
                </ul>
            </li>
            <li>
                <a class="nav-link" href="~/Leader/Leader/PersonalInforLead"><i class="fas fa-user-check"></i><span>Thông tin cá nhân</span></a>
            </li>
        </ul>
    </aside>
</div>