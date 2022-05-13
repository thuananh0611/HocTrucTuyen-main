<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a>
            </li>
            <li>
                <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a>
            </li>
            <li>
                <form class="form-inline mr-auto">
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Tìm kiếm" aria-label="Search" data-width="200">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
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
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">
                <i data-feather="mail"></i>
                <span class="badge headerBadge1">
                    6
                </span>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    Messages
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                    <a href="#" class="dropdown-item">
                        <span class="dropdown-item-avatar
											text-white">
                            <img alt="image" src="/admin/img/users/user-1.png" class="rounded-circle">
                        </span> <span class="dropdown-item-desc">
                            <span class="message-user">
                                John
                                Deo
                            </span>
                            <span class="time messege-text">Please check your mail !!</span>
                            <span class="time">2 Min Ago</span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-avatar text-white">
                            <img alt="image" src="/admin/img/users/user-2.png" class="rounded-circle">
                        </span> <span class="dropdown-item-desc">
                            <span class="message-user">
                                Sarah
                                Smith
                            </span> <span class="time messege-text">
                                Request for leave
                                application
                            </span>
                            <span class="time">5 Min Ago</span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-avatar text-white">
                            <img alt="image" src="/admin/img/users/user-5.png" class="rounded-circle">
                        </span> <span class="dropdown-item-desc">
                            <span class="message-user">
                                Jacob
                                Ryan
                            </span> <span class="time messege-text">
                                Your payment invoice is
                                generated.
                            </span> <span class="time">12 Min Ago</span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-avatar text-white">
                            <img alt="image" src="/admin/img/users/user-4.png" class="rounded-circle">
                        </span> <span class="dropdown-item-desc">
                            <span class="message-user">
                                Lina
                                Smith
                            </span> <span class="time messege-text">
                                hii John, I have upload
                                doc
                                related to task.
                            </span> <span class="time">
                                30
                                Min Ago
                            </span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-avatar text-white">
                            <img alt="image" src="/admin/img/users/user-3.png" class="rounded-circle">
                        </span> <span class="dropdown-item-desc">
                            <span class="message-user">
                                Jalpa
                                Joshi
                            </span> <span class="time messege-text">
                                Please do as specify.
                                Let me
                                know if you have any query.
                            </span> <span class="time">
                                1
                                Days Ago
                            </span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-avatar text-white">
                            <img alt="image" src="/admin/img/users/user-2.png" class="rounded-circle">
                        </span> <span class="dropdown-item-desc">
                            <span class="message-user">
                                Sarah
                                Smith
                            </span> <span class="time messege-text">Client Requirements</span>
                            <span class="time">2 Days Ago</span>
                        </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
                <i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    Notifications
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <span class="dropdown-item-icon bg-primary text-white">
                            <i class="fas
												fa-code"></i>
                        </span> <span class="dropdown-item-desc">
                            Template update is
                            available now! <span class="time">
                                2 Min
                                Ago
                            </span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-icon bg-info text-white">
                            <i class="far
												fa-user"></i>
                        </span> <span class="dropdown-item-desc">
                            <b>You</b> and <b>
                                Dedik
                                Sugiharto
                            </b> are now friends <span class="time">
                                10 Hours
                                Ago
                            </span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-icon bg-success text-white">
                            <i class="fas
												fa-check"></i>
                        </span> <span class="dropdown-item-desc">
                            <b>Kusnaedi</b> has
                            moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">
                                12
                                Hours
                                Ago
                            </span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-icon bg-danger text-white">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span> <span class="dropdown-item-desc">
                            Low disk space. Let's
                            clean it! <span class="time">17 Hours Ago</span>
                        </span>
                    </a> <a href="#" class="dropdown-item">
                        <span class="dropdown-item-icon bg-info text-white">
                            <i class="fas
												fa-bell"></i>
                        </span> <span class="dropdown-item-desc">
                            Welcome to Otika
                            template! <span class="time">Yesterday</span>
                        </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="" class="user-img-radious-style" id="imgU"> <span class="d-sm-none d-lg-inline-block"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">Xin chào<br><span id="nameU"></span></div>
                <a href="/Admin/Admin/ProfileAd" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Hồ sơ
                </a>
                <div class="dropdown-divider"></div>
                <a href="/Login/Login/LogOut" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i>
                    Đăng xuất
                </a>
                <script>
                    var nameU = localStorage.getItem("nameU");
                    var imgU = localStorage.getItem("imgU");
                    $("#nameU").text(nameU);
                    $("#imgU").attr("src", imgU);
                </script>
            </div>
        </li>
    </ul>
</nav>