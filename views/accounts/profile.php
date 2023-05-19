<?php require_once 'style.php'; ?>
<link rel="stylesheet" href="./assets/css/index_profile.css" />

<body>
    <div id="container">
        <?php require_once 'header.php'; ?>

        <main id="main-view">
            <div class="container-fuild" style="background-color: #1f2a3a">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3 px-0 bg-dark">
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
                                        <a href="?url=accounts/profile" class="nav-link text-white active">
                                            <i class="niand-icon-spotify-edit-account"></i>
                                            Chỉnh sửa hồ sơ
                                        </a>
                                    </li>
                                    <li class="border_li nav-link-hover">
                                        <a href="?url=accounts/change_password" class="nav-link text-white">
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
                            <p class="fs-1 fw-bold m-4">Chỉnh sửa hồ sơ</p>
                            <div class="container ms-4 px-0">
                                <div class="container ps-0 pe-5">
                                    <form id="form" method="post">
                                        <input id="id" type="number" class="d-none" value="<?php echo $data['user']->getUserId() ?>">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Email</label>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $data['user']->getEmail() ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Giới tính</label>
                                            <select id="gender" class="form-select" aria-label="Default select example">
                                                <option <?php echo ($data['user']->getGender() == 'Nam') ? 'selected' : ''; ?>>Nam</option>
                                                <option <?php echo ($data['user']->getGender() == 'Nữ') ? 'selected' : ''; ?>>Nữ</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Ngày sinh</label>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-3 ps-0">
                                                        <input id="day" type="text" class="form-control" value="<?php echo date('d', strtotime($data['user']->getDayOfBirth())) ?>">
                                                    </div>
                                                    <div class="col-3 ps-0">
                                                        <select id="month" class="form-select" aria-label="Default select example">
                                                            <option value="1" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 1) ? 'selected' : ''; ?>>Tháng Một</option>
                                                            <option value="2" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 2) ? 'selected' : ''; ?>>Tháng Hai</option>
                                                            <option value="3" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 3) ? 'selected' : ''; ?>>Tháng Ba</option>
                                                            <option value="4" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 4) ? 'selected' : ''; ?>>Tháng Tư</option>
                                                            <option value="5" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 5) ? 'selected' : ''; ?>>Tháng Năm</option>
                                                            <option value="6" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 6) ? 'selected' : ''; ?>>Tháng Sáu</option>
                                                            <option value="7" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 7) ? 'selected' : ''; ?>>Tháng Bảy</option>
                                                            <option value="8" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 8) ? 'selected' : ''; ?>>Tháng Tám</option>
                                                            <option value="9" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 9) ? 'selected' : ''; ?>>Tháng Chín</option>
                                                            <option value="10" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 10) ? 'selected' : ''; ?>>Tháng Mười</option>
                                                            <option value="11" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 11) ? 'selected' : ''; ?>>Tháng Mười Một</option>
                                                            <option value="12" <?php echo (date('m', strtotime($data['user']->getDayOfBirth())) == 12) ? 'selected' : ''; ?>>Tháng Mười Hai</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3 ps-0">
                                                        <input id="year" type="text" class="form-control" value="<?php echo date('Y', strtotime($data['user']->getDayOfBirth())) ?>">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Quốc gia khu vực</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Việt Nam</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Chia sẻ dữ liệu đăng ký
                                                của tôi với các nhà cung cấp nội dung Spotify cho mục đích tiếp
                                                thị.</label>
                                        </div>
                                        <hr class="mt-3 mb-5">
                                        <div id="response-message"></div>
                                        <div id="sign-up-save" class="d-flex my-3 justify-content-end">
                                            <button id="edit" type="button" class="text-muted" style="margin-right: 10px;">
                                                Hủy</button>
                                            <button id="save" type="submit" class="rounded-5">Lưu hồ sơ</button>
                                        </div>
                                    </form>
                                </div>

                                <script>
                                    $(document).ready(function() {
                                        $('#form').submit(function(e) {
                                            e.preventDefault(); // prevent form submission
                                            var id = $('#id').val();
                                            var username = '<?php echo $data['user']->getUsername() ?>';
                                            var password = '<?php echo $data['user']->getPassword() ?>';
                                            var email = $('#email').val();
                                            var day = $('#day').val();
                                            var month = $('#month').val();
                                            var year = $('#year').val();
                                            var formattedDate = year + "-" + ("0" + month).slice(-2) + "-" + ("0" + day).slice(-2);
                                            var gender = $('#gender').val();
                                            var type = '<?php echo $data['user']->getType() ?>';
                                            $.ajax({
                                                url: '?url=admin/auth_user_form/update',
                                                type: 'POST',
                                                data: {
                                                    id: id,
                                                    username: username,
                                                    password: password,
                                                    email: email,
                                                    day_of_birth: formattedDate,
                                                    gender: gender,
                                                    type: type
                                                },
                                                success: function(response) {
                                                    if (response.success) {
                                                        // authentication succeeds, redirect to dashboard or home page
                                                        window.location.href = '?url=accounts/profile';
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


            <?php require_once 'footer.php' ?>
        </main>
    </div>
</body>

</html>