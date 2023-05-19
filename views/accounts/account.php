<?php
require_once 'style.php';
?>
<link rel="stylesheet" href="./assets/css/index_account.css" />

<body>
    <div id="container">
        <?php require_once 'header.php'; ?>
        <main id="main-view">
            <div class="container-fuild" style="background-color: #1f2a3a">
                <div class="container px-0" style="background-color: #ffcdd2">
                    <div class="row g-0" style="padding: 75px">
                        <div class="col-md-7 col-sm-12 mx-auto">
                            <div class="card-body">
                                <h5 class="card-title fw-bold" style="font-size: 30px;">Dùng 3 tháng Premium với giá
                                    59,000₫.</h5>
                                <p class="card-text fs-6 mb-5 mt-2">Sau đó chỉ 59,000₫/tháng. Ưu đãi kết thúc vào
                                    16/05/2023. Hủy bất cứ lúc nào.</p>
                                <div id="button_sign" class="d-flex align-items-center flex-shrink-1">
                                    <button id="button_sign_start" type="button" class="text-white me-2 rounded-5">Bắt
                                        Đầu</button>
                                    <button id="button_sign_look" type="button" class="rounded-5">Xem các gói</button>
                                </div>
                                <p class="card-text mt-5"><small class="text-muted" style="font-size: 10px;">Chỉ áp dụng
                                        cho gói Individual. Sau đó là 59,000₫/tháng. <a href="" class="text-dark text-decoration-underline">Có áp dụng các điều khoản và
                                            điều kiện</a>. Chỉ dành cho người chưa dùng thử gói Premium. Ưu đãi kết thúc
                                        vào ngày 16/05/2023.</small></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 px-auto bg-dark">
                            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="/" class="d-flex text-white">
                                        <i class="niand-icon-spotify-user" style="font-size:50px;"></i>
                                    </a>
                                </div>
                                <hr>
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item border_li nav-link-hover">
                                        <a href="?url=accounts/account" class="nav-link active" aria-current="page">
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
                            <p class="fs-1 fw-bold m-4">Tổng quan về tài khoản</p>
                            <p class="fw-bold fs-5 ms-4">Hồ sơ</p>
                            <div class="container ms-4">
                                <div class="row">
                                    <div class="col-md-6 px-auto col-sm-12">
                                        <p class="fs-6" style="color: #6b6b6b">Tên người dùng</p>
                                    </div>
                                    <div class="col-md-6 px-auto col-sm-12">
                                        <p><?php echo $data['user']->getUsername() ?></p>
                                    </div>
                                    <hr class="md-4 lg-3 sm-12">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 px-auto col-sm-12">
                                        <p class="fs-6" style="color: #6b6b6b">Email</p>
                                    </div>
                                    <div class="col-md-6 px-auto col-sm-12">
                                        <p><?php echo $data['user']->getEmail() ?></p>
                                    </div>
                                    <hr class="md-4 lg-3 sm-12">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 px-auto col-sm-12">
                                        <p class="fs-6" style="color: #6b6b6b">Ngày sinh</p>
                                    </div>
                                    <div class="col-md-6 px-auto col-sm-12">
                                        <p><?php echo date('d', strtotime($data['user']->getDayOfBirth())) . ' tháng ' . date('m, Y', strtotime($data['user']->getDayOfBirth())) ?></p>
                                    </div>
                                    <hr class="md-4 lg-3 sm-12">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 px-auto col-sm-12">
                                        <p class="fs-6" style="color: #6b6b6b">Quốc gia hoặc khu vực</p>
                                    </div>
                                    <div class="col-md-6 px-auto col-sm-12">
                                        <p>Việt Nam</p>
                                    </div>
                                    <hr class="md-4 lg-3 sm-12">
                                </div>
                                <div id="sign-up-edit" class="d-flex my-3">
                                    <a id="edit" type="button" class="rounded-5" href="?url=accounts/profile">Chỉnh sửa hồ sơ</a>
                                </div>
                                <p class="fw-bold fs-5 mt-5">Đăng xuất ở mọi nơi</p>
                                <p style="font-size:13px">Thao tác này sẽ giúp bạn đăng xuất trên tất cả thiết bị di
                                    động, máy tính bảng, trình
                                    phát trên web và ứng dụng cho máy tính mà bạn đã đăng nhập. Đối với thiết bị của đối
                                    tác (ví dụ: loa, máy chơi trò chơi và TV), hãy <a href="" class="text-dark text-decoration-underline">chuyển đến phần Ứng dụng
                                        trong trang
                                        tài khoản của bạn</a> rồi chọn XÓA QUYỀN TRUY CẬP.</p>
                                <div id="sign-up-log-out" class="d-flex align-items-center flex-shrink-1 my-3">
                                    <button id="log-out" type="button" class="rounded-5">Đăng xuất ở mọi nơi</button>
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