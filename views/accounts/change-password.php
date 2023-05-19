<?php require_once 'style.php'; ?>
<link rel="stylesheet" href="./assets/css/index_change-password.css" />

<body>
    <div id="container">
        <?php require_once 'header.php'; ?>

        <main id="main-view">
            <div class="container-fuild" style="background-color: #1f2a3a">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 px-0 bg-dark">
                            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="/" class="d-flex text-white">
                                        <i class="niand-icon-spotify-user" style="font-size:50px;"></i>
                                    </a>
                                </div>
                                <hr>
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item border_li nav-link-hover">
                                        <a href="?url=accounts/account" class="nav-link text-white" aria-current="page">
                                            <i class="niand-icon-spotify-home-account"></i>
                                            Tổng quan về tài khoản
                                        </a>
                                    </li>
                                    <li class="border_li nav-link-hover">
                                        <a href="?url=accounts/profile" class="nav-link text-white">
                                            <i class="niand-icon-spotify-edit-account"></i>
                                            Chỉnh sửa hồ sơ
                                        </a>
                                    </li>
                                    <li class="border_li nav-link-hover">
                                        <a href="?url=accounts/change_password" class="nav-link active text-white">
                                            <i class="niand-icon-spotify-key-account"></i>
                                            Đổi mật khẩu
                                        </a>
                                    </li>
                                    <li class="border_li nav-link-hover">
                                        <a href="?url=accounts/recover_playlists" class="nav-link text-white">
                                            <i class="niand-icon-spotify-back-account"></i>
                                            Khôi phục danh sách phát
                                        </a>
                                    </li>
                                    <li class="border_li nav-link-hover">
                                        <a href="?url=accounts/receipt" class="nav-link nav-link-hover text-white">
                                            <i class="niand-icon-spotify-oclock-account"></i>
                                            Biện nhận
                                        </a>
                                    </li>
                                    <li class="border_li nav-link-hover">
                                        <a href="?url=accounts/app" class="nav-link nav-link-hover text-white">
                                            <i class="niand-icon-spotify-application-account"></i>
                                            Ứng dụng
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 bg-white">
                            <p class="fs-1 fw-bold m-4">Đổi mật khẩu của bạn</p>
                            <div class="container ms-4 px-0">
                                <div class="container ps-0 pe-5">
                                    <form id="form" method="post">
                                        <div class="mb-3">
                                            <label class="form-label lh-1">Mật khẩu hiện tại</label>
                                            <input id="password" type="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label lh-1">Mật khẩu mới</label>
                                            <input id="new_password" type="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label lh-1">Lặp lại mật khẩu mới</label>
                                            <input id="confirm" type="password" class="form-control">
                                            <div id="password-message"></div>
                                        </div>
                                        <div id="response-message"></div>
                                        <div id="sign-up-save" class="d-flex my-3 justify-content-end">
                                            <button id="edit" type="button" ckass="text-muted" style="margin-right: 10px;">
                                                Hủy</button>
                                            <button id="password_new" type="submit" class="rounded-5">Cài đặt mặt khẩu
                                                mới</button>
                                        </div>
                                    </form>
                                    <script>
                                        $(document).ready(function() {
                                            $('#form').submit(function(e) {
                                                e.preventDefault(); // prevent form submission
                                                var id = '<?php echo $data['user']->getUserId() ?>';
                                                var password = $('#password').val();
                                                var new_password = $('#new_password').val();
                                                var confirm = $('#confirm').val();
                                                if (new_password != confirm) {
                                                    $('#password-message').html(`<div class="alert alert-danger mt-2">
                                                                        <strong>Failed!</strong> Password does not match
                                                                    </div>`);
                                                    return;
                                                }
                                                $.ajax({
                                                    url: '?url=accounts/change_password_auth',
                                                    type: 'POST',
                                                    data: {
                                                        id: id,
                                                        password: password,
                                                        new_password: new_password
                                                    },
                                                    success: function(response) {
                                                        if (response.success) {
                                                            // authentication succeeds, redirect to dashboard or home page
                                                            window.location.href = '?url=accounts/change_password';
                                                        } else {
                                                            // authentication fails, display error message
                                                            let html = `<div class="alert alert-danger mt-2">
                                                                        <strong>Failed!</strong> Failed. Please try again.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once 'footer.php'; ?>
        </main>
    </div>
</body>

</html>