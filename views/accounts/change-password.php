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
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label lh-1">Mật khẩu hiện tại</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label lh-1">Mật khẩu mới</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label lh-1">Lặp lại mật khẩu mới</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </form>
                                </div>
                                <div id="sign-up-save" class="d-flex my-3 justify-content-end me-5">
                                    <button id="edit" type="button" ckass="text-muted" style="margin-right: 10px;">
                                        Hủy</button>
                                    <button id="password_new" type="button" class="rounded-5">Cài đặt mặt khẩu
                                        mới</button>
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