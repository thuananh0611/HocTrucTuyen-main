<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống - 3CESCHOOL</title>
    <link rel="stylesheet" href="/login/css/style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
</head>

<body>
    <div id="particles-js">
        <div class="form-box">
            <div class="header-text">
                Đăng nhập
            </div>
            <input placeholder="Nhập tài khoản..." type="text" required>
            <div class="container">
                <input type="password" id="pw" placeholder="Nhập mật khẩu..." required>
                <span class="show-btn"><i class="fas fa-eye"></i></span>
            </div>
            <button>Đăng nhập</button>
            <center>
                <span style="font-style: italic;">Bạn là giáo viên? <a href="/LOGIN/teacher">Bấm vào đây</a> để đăng
                    nhập giáo viên.</span>
                <br><br>
                <span style="font-style: italic;"><a href="/LOGIN/forgotpassword">Quên mật khẩu?</a></span>
            </center>
        </div>
    </div>

    <script src="/login/js/particles.js"></script>
    <script src="/login/js/app.js"></script>
    <script>
        const passField = document.getElementById("pw");
        const showBtn = document.querySelector("span i");
        showBtn.onclick = (() => {
            if (passField.type === "password") {
                passField.type = "text";
                showBtn.classList.add("hide-btn");
            } else {
                passField.type = "password";
                showBtn.classList.remove("hide-btn");
            }
        });
    </script>
</body>

</html>