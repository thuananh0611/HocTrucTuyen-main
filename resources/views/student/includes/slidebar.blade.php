<div class="sidebar-section">
    <div class="sidebar-section__scroll">
        <div class="sidebar-section__user has-background" ng-controller="HomeControl">
            <img src="/storage/users/@{{Img_Student}}" alt="" class="sidebar-section__user-avatar rounded-circle">
            <div class="dropdown sidebar-section__user-dropdown">
                <a class="sidebar-section__user-dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @{{Name_Student}}
                    &nbsp;<span class="ua-icon-arrow-down-alt"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="/student/account-settings">Tài khoản</a>
                    <a class="dropdown-item" href="#">Đăng xuất</a>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <ul class="sidebar-section-nav">
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="/student/home">
                        <span class="sidebar-section-nav__item-icon ua-icon-navbar-open"></span>
                        <span class="sidebar-section-nav__item-text">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="/student/online-learning">
                        <span class="sidebar-section-nav__item-icon ua-icon-desktop"></span>
                        <span class="sidebar-section-nav__item-text">Học trực tuyến</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="/student/list-study-program">
                        <span class="sidebar-section-nav__item-icon ua-icon-bag-outline"></span>
                        <span class="sidebar-section-nav__item-text">Góc học tập</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="/student/exam-list">
                        <span class="sidebar-section-nav__item-icon  ua-icon-templates"></span>
                        <span class="sidebar-section-nav__item-text">Kiểm tra, thi</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="/student/learning-outcomes">
                        <span class="sidebar-section-nav__item-icon ua-icon-bar-chart-up"></span>
                        <span class="sidebar-section-nav__item-text">Kết quả học tập</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="/student/schedule">
                        <span class="sidebar-section-nav__item-icon mdi mdi-calendar-clock"></span>
                        <span class="sidebar-section-nav__item-text">Thông tin lịch học</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                        <span class="sidebar-section-nav__item-icon mdi mdi-currency-usd"></span>
                        <span class="sidebar-section-nav__item-text">Tài chính</span>
                    </a>
                    <ul class="sidebar-section-subnav">
                        <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link"
                                href="/student/finance">Thông tin tài
                                chính</a></li>
                        <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link"
                                href="/student/pay-tuition">Thanh toán trực
                                tuyến</a></li>
                    </ul>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="/student/evaluate">
                        <span class="sidebar-section-nav__item-icon mdi mdi-clipboard-text"></span>
                        <span class="sidebar-section-nav__item-text">Khảo sát, đánh giá</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="/student/feedback">
                        <span class="sidebar-section-nav__item-icon mdi mdi-message-processing"></span>
                        <span class="sidebar-section-nav__item-text">Ý kiến, phản hồi</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>