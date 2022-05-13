<div class="navbar navbar-light navbar-expand-lg">
    <button class="sidebar-toggler" type="button">
        <span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
        <span class="ua-icon-alert-close sidebar-toggler__close"></span>
    </button>

    <span class="navbar-brand">
        <a href="/student/home"><img src="img/logo-1.png" alt="" class="navbar-brand__logo"></a>
    </span>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="ua-icon-navbar-open navbar-toggler__open"></span>
        <span class="ua-icon-alert-close navbar-toggler__close"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-collapse">
        <div class="navbar__menu">
            <div class="navbar__menu-side">
                <div class="navbar-search navbar__menu-search">
                    <div class="input-group input-group-icon iconfont icon-right">
                        <input class="form-control navbar-search__input navbar__menu-search-input" type="text" placeholder="Tìm kiếm..." /><span class="input-icon ua-icon-search"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown">
            <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="navbar-notify navbar-notify--notifications">
                    <span>
                        <span class="navbar-notify__icon mdi mdi-bell"></span>
                        <span class="navbar-notify__text">Thông báo</span>
                    </span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications">
                <div class="navbar-dropdown-notifications__header">
                    <span>THÔNG BÁO</span>
                    <a href="#" class="navbar-dropdown-notifications__mark-read">
                        Đánh dấu tất cả là đã đọc <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
                    </a>
                </div>
                <div class="navbar-dropdown-notifications__body js-scrollable">
                    <div class="navbar-dropdown-notifications__body-empty"><img class="navbar-dropdown-notifications__body-empty-image" src="img/empty-notifications.png" alt="" />
                        <div class="navbar-dropdown-notifications__body-empty-text">Bạn đã cập nhật!</div>
                    </div>
                </div>
                <a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>Xem tất cả</span></a>
            </div>
        </div>
        <div class="dropdown navbar-dropdown no-arrow navbar-help-dropdown navbar-notify-dropdown--help">
            <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="navbar-notify">
                    <span>
                        <span class="navbar-notify__icon mdi mdi-help-circle"></span>
                        <span class="navbar-notify__text">Thông tin</span>
                    </span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-center navbar-dropdown-menu">
                <h6 class="navbar-help-dropdown__heading">Bạn cần trợ giúp?</h6>
                <p class="navbar-help-dropdown__desc">
                    Gọi cho chúng tôi: <a href="tel:063 344 9085">063 344 9085</a> <br>
                    hoặc gửi email: <a href="mailto:hotro@3ceschool.com">hotro@3ceschool.com</a>
                </p>
            </div>
        </div>
        <div class="dropdown navbar-dropdown" ng-controller="HomeControl">
            <a class="navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
                <img src="img/users/user-19.png" alt="" class="navbar-dropdown-toggle__user-avatar" style="height:34px;margin:0 10px;border-radius:50px;">
                <span class="navbar-dropdown__user-name">Joyce Walsh</span>&nbsp;<span class="ua-icon-arrow-down-alt"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
                <div class="navbar-dropdown-user-content">
                    <div class="dropdown-user__avatar"><img src="/storage/users/@{{Img_Student}}" alt="" /></div>
                    <div class="dropdown-info">
                        <div class="dropdown-info__name">@{{Name_Student}}</div>
                        <div class="dropdown-info__job" style="font-size: 12px;">Sinh viên</div>
                        <div class="dropdown-info-buttons">
                            <a class="dropdown-info__viewprofile" href="/student/account-settings">Xem thông tin</a>
                            <a class="dropdown-info__addaccount" href="#">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>