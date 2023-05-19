<?php
require_once "./config/basehref.php";
$url = getUrl();
if (isset($_SESSION['username'])) {
    header("Location: ?url=home/index_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    echo "<base href='" . $url . "'>";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/spotify.ico">
    <title>Đăng ký - Spotify</title>
    <!-- Icon Css -->
    <link rel="stylesheet" href="../assets/fonts/style.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="../assets/fonts/ie7/ie7.css">
    <!--<![endif]-->
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center w-50 m-auto">
            <div class="p-3 mt-4">
                <a class="text-dark text-decoration-none fs-1" href="index.php">
                    <i class="niand-icon-spotify-logo"></i>
                </a>
            </div>
            <h2 class="h2 fw-bolder mb-4" style="letter-spacing: -1px;">Đăng ký miễn phí để bắt đầu nghe.</h2>
            <a class="btn rounded-pill p-2 pe-5 ps-5 bg-primary w-50 text-white d-flex justify-content-center align-items-center">
                <style>
                    .niand-icon-facebook:before {
                        color: #FFF;
                    }
                </style>
                <i class="niand-icon-facebook text-white pe-2"></i>
                <span>Đăng ký bằng Facebook</span>
            </a>
            <a class="btn rounded-pill p-2 pe-5 ps-5 bg-white w-50 text-dark d-flex justify-content-center align-items-center mt-3 border border-2 border-dark">
                <i class="niand-icon-google pe-2"></i>
                <span>Đăng ký bằng Google</span>
            </a>
            <form id="register-form" method="post" class="mt-3 d-flex flex-column justify-content-center align-items-center w-75 was-validated">
                <div class="mb-3 mt-3 w-100">
                    <label for="email" class="form-label fw-bold">Email của bạn là gì?</label>
                    <input type="email" class="form-control border-dark" id="email" placeholder="Nhập email của bạn" name="email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 w-100">
                    <label for="confirm-email" class="form-label fw-bold">Xác nhận email của bạn</label>
                    <input type="email" class="form-control border-dark" id="confirm-email" placeholder="Nhập lại email của bạn" name="confirm-email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <div id="confirm-email-message"></div>
                </div>
                <div class="mb-3 w-100">
                    <label for="password" class="form-label fw-bold">Tạo mật khẩu</label>
                    <input type="password" class="form-control border-dark" id="password" placeholder="Tạo mật khẩu" name="password" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <div id="password-message"></div>
                </div>
                <div class="mb-3 w-100">
                    <label for="username" class="form-label fw-bold">Bạn tên là gì?</label>
                    <input type="text" class="form-control border-dark" id="username" placeholder="Nhập tên hồ sơ" name="username" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <div id="username-message"></div>
                    <p>Tên này sẽ xuất hiện trên hồ sơ của bạn</p>
                </div>
                <div class="mb-3 w-100">
                    <label for="day-of-birth" class="form-label fw-bold">Bạn sinh ngày nào?</label>
                    <input type="date" class="form-control border-dark" id="day-of-birth" name="day_of_birth" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 w-100">
                    <label class="form-label fw-bold">Giới tính của bạn là gì?</label>
                    <div class="form-check w-100">
                        <input type="radio" class="form-check-input" id="male" name="gender" value="Nam" checked required>Nam
                        <label class="form-check-label" for="male"></label>
                    </div>
                    <div class="form-check w-100">
                        <input type="radio" class="form-check-input" id="female" name="gender" value="Nữ" required>Nữ
                        <label class="form-check-label" for="female"></label>
                    </div>
                    <!-- <div class="form-check w-100">
                        <input type="radio" class="form-check-input" id="other" name="gender" value="Khác" required>Khác
                        <label class="form-check-label"></label>
                    </div> -->
                </div>
                <p class="text-center" style="font-size: 10px;">Bằng việc nhấp vào nút Đăng ký, bạn đồng ý với <a href="">Điều khoản và điều kiện sử dụng</a> của Spotify.</p>
                <p class="text-center" style="font-size: 10px;">Để tìm hiểu thêm về cách thức Spotify thu thập, sử dụng, chia sẻ và bảo vệ dữ liệu cá nhân của bạn, vui lòng xem <a href="">Chính sách quyền riêng tư của Spotify.</a></p>
                <button type="submit" class="btn rounded-pill p-3 pe-5 ps-5 fw-bolder w-50" style="background-color: #1fdf64;">Đăng ký</button>
            </form>
            <div id="response-message">
                <!-- TODO -->
            </div>
            <p class="mt-2 mb-5">Bạn có tài khoản? <a href="?url=auth/login_view">Đăng nhập.</a></p>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#register-form').submit(function(e) {
                e.preventDefault(); // prevent form submission
                var username = $('#username').val();
                var pattern_name = /^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễếệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹý ]+$/;
                if (!pattern_name.test(username)) {
                    let html = `<div class="alert alert-danger mt-1">
                                    <strong>Failed!</strong> Username must be contain no special characters.
                                </div>`
                    $('#username-message').html(html);
                    return;
                }
                var password = $('#password').val();
                var pattern_password = /^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{5,})\S$/;
                if (!pattern_password.test(password)) {
                    let html = `<div class="alert alert-danger mt-1">
                                    <strong>Failed!</strong> Password must contain at least 6 characters, uppercase and lowercase letters, numbers.
                                </div>`
                    $('#password-message').html(html);
                    return;
                }
                var email = $('#email').val();
                var confirm_email = $('#confirm-email').val();
                if (confirm_email != email) {
                    let html = `<div class="alert alert-danger mt-1">
                                    <strong>Failed!</strong> Email does not match. Please try again.
                                </div>`
                    $('#confirm-email-message').html(html);
                    return;
                }
                var date = $('#day-of-birth').val();
                var gender = $('input[name="gender"]:checked').val();
                $.ajax({
                    url: '?url=auth/auth_register',
                    type: 'POST',
                    data: {
                        username: username,
                        password: password,
                        email: email,
                        date: date,
                        gender: gender
                    },
                    success: function(response) {
                        if (response.success) {
                            // authentication succeeds, redirect to dashboard or home page
                            window.location.href = '?url=auth/login_view';
                        } else {
                            // authentication fails, display error message
                            let html = `<div class="alert alert-danger mt-2">
                                            <strong>Failed!</strong> Failed to register. Please try again.
                                        </div>`
                            $('#response-message').html(html);
                        }
                    },
                    error: function() {
                        // handle AJAX error
                        $('#response-message').html('Error processing request');
                    }
                });
            });
        });
    </script>
</body>

</html>