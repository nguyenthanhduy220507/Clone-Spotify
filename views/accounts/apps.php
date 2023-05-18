<?php
require_once 'style.php';
?>
<link rel="stylesheet" href="./assets/css/index_account.css" />

<body>
    <div id="container">
        <?php require_once 'header.php'; ?>
        <main id="main-view">
            <div class="container-fuild" style="background-color: #1f2a3a">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 px-0 bg-dark">
                            <?php require_once 'sidebar.php' ?>
                        </div>
                        <div class="col-md-9 col-sm-12 bg-white">
                            <p class="fs-1 fw-bold m-4">Quản lí ứng dụng</p>
                            <p class="fs-6 m-4 lh-1">Bạn đã cấp quyền truy cập vào tài khoản Spotify của mình cho các
                                ứng dụng này. Để ngăn những ứng dụng đó truy cập sau này, hãy nhấp vào "Xóa quyền truy
                                cập".</p>
                            <p class="fs-6 m-4 lh-1">Bạn chưa phê duyệt ứng dụng nào.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once 'footer.php' ?>
        </main>
    </div>
</body>
<?php require_once 'script.php'; ?>
</html>