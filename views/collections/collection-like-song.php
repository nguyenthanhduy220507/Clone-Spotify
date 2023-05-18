<?php require_once 'style.php'?>
<link rel="stylesheet" href="./assets/css/collection-like-song.css">
<body>
    <div id="main" class="d-grid">
        <header id="top-bar" style="background-color:#4c3693">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div id="action-buttons" class=" d-flex flex-shrink-1">
                    <button type="button" title="Quay lại" class="d-md-flex d-lg-flex d-xl-flex d-sm-none d-none d-flex justify-content-center align-items-center next_prev">
                        <i class="niand-icon-spotify-left"></i>
                    </button>
                    <button type="button" title="Tiếp theo" class="d-md-flex d-lg-flex d-xl-flex d-sm-none d-none d-flex justify-content-center align-items-center next_prev">
                        <i class="niand-icon-spotify-right"></i>
                    </button>
                    <div class="d-md-none d-block">
                        <button type="button" class="d-flex justify-content-center align-items-center" id="open-btn">
                            <i class="niand-icon-spotify-heart"></i>
                        </button>
                    </div>
                </div>
                <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">

                    <button id="sign-up" type="button" class="text-black rounded-5 ms-2 d-md-flex d-lg-flex d-xl-flex d-sm-none d-none">Nâng
                        cấp</button>
                    <button id="sign-in" type="button" class="rounded-5 ms-2 d-md-flex d-lg-flex d-xl-flex d-sm-none d-none d-fex justify-content-center align-items-center"><i class="niand-icon-spotify-install"></i>
                        Cài đặt ứng dụng</button>
                    <button id="icon" type="button" class="rounded-5 ms-2 dropdown-toggle" data-bs-toggle="dropdown"><i class="niand-icon-spotify-user"></i></button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="d-flex dropdown-item">
                                <a class="text-dark flex-grow-1" href="#">Tài khoản</a>
                                <i class="niand-icon-spotify-share-user text-dark"></i>
                            </div>
                        </li>
                        <li><a class="dropdown-item text-dark" href="#">Hồ sơ</a></li>
                        <li>
                            <div class="d-flex dropdown-item">
                                <a class="text-dark flex-grow-1" href="#">Nâng cấp lên Premium</a>
                                <i class="niand-icon-spotify-share-user text-dark"></i>
                            </div>
                        </li>
                        <li><a class="dropdown-item text-dark" href="#">Hỗ trợ</a></li>
                        <li>
                            <div class="d-flex dropdown-item">
                                <a class="text-dark flex-grow-1" href="#">Tải xuống</a>
                                <i class="niand-icon-spotify-share-user text-dark"></i>
                            </div>
                        </li>
                        <li><a class="dropdown-item text-dark" href="#">Cài đặt</a></li>
                        <li>
                            <hr class="dropdown-divider" style="border-top-color: #000000;">
                        </li>
                        <li><a class="dropdown-item text-dark" href="">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <main id="main-view">
            <div class="p-2" style="background-color: #4c3693">
                <div class="card mb-3" style="background-color: #4c3693; border: none">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-right: -50px;">
                            <img src="https://t.scdn.co/images/3099b3803ad9496896c43f22fe9be8c4.png" class="img-fluid rounded-start" alt="..." style="width: 65%">
                        </div>
                        <div class="col-md-8" style="margin-top: 100px">
                            <div class="card-body">
                                <h5 class="card-title text-white">Album</h5>
                                <p class="card-text text-white fw-bold" style="font-size:60px">21</p>
                                <div class="d-flex text-white">
                                    <a href="" class="mx-1 text-white hover_a">
                                        niand zz</a>
                                    <p class="mx-1"> • 5 bài hát</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fuild" style="background-color: #20183d">
                <div class="container d-flex align-items-center py-5" style="background-color: #20183d; height:50px">
                    <a href="" class="rounded-circle me-3 p-2 fs-3" style="background-color: #1fdf64;">
                        <i class="niand-icon-spotify-play text-dark"></i>
                    </a>
                </div>
            </div>
            <div id="chua_dat_ten">
                <div class="container-fuild">
                    <div class="container data-row py-1" style="background-color: #2b2b2b">
                        <div class="row my_row">
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <span class="text-white">#</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left ps-0">
                                <span class="text-white">Tiêu đề</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left ps-0 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                                <span class="text-white">Album</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left ps-0 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                                <span class="text-white">Ngày thêm</span>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="niand-icon-spotify-clock text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-2 data-row">
                    <div class="container-fuild">
                        <div class="row my_row">
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <span class="text-white">1</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <img src="https://i.scdn.co/image/ab67616d00004851bffc14adc7cc41fbb03bbaa8" class="py-2 img-fluid rounded-start" alt="...">
                                <div class="ms-3">
                                    <div class="">
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white" style="font-size:13px">Vì yêu cứ đâm đầu</a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">MIN,</a>
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">
                                            Đen,</a>
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">
                                            JustaTee</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <div class="card-body">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">Vì Yêu
                                        cứ Đâm Đầu
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <div class="card-body">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">1 giây
                                        trước
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon_heart"><i class="niand-icon-spotify-heart"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon_three_dot"><i class="niand-icon-spotify-three-dots"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-2 data-row">
                    <div class="container-fuild">
                        <div class="row my_row">
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <span class="text-white">1</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <img src="https://i.scdn.co/image/ab67616d00004851bffc14adc7cc41fbb03bbaa8" class="py-2 img-fluid rounded-start" alt="...">
                                <div class="ms-3">
                                    <div class="">
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white" style="font-size:13px">Vì yêu cứ đâm đầu</a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">MIN,</a>
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">
                                            Đen,</a>
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">
                                            JustaTee</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <div class="card-body">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">Vì Yêu
                                        cứ Đâm Đầu
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <div class="card-body">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">1 giây
                                        trước
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon_heart"><i class="niand-icon-spotify-heart"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon_three_dot"><i class="niand-icon-spotify-three-dots"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-2 data-row">
                    <div class="container-fuild">
                        <div class="row my_row">
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <span class="text-white">1</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <img src="https://i.scdn.co/image/ab67616d00004851bffc14adc7cc41fbb03bbaa8" class="py-2 img-fluid rounded-start" alt="...">
                                <div class="ms-3">
                                    <div class="">
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white" style="font-size:13px">Vì yêu cứ đâm đầu</a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">MIN,</a>
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">
                                            Đen,</a>
                                        <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b">
                                            JustaTee</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <div class="card-body">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">Vì Yêu
                                        cứ Đâm Đầu
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                <div class="card-body">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">1 giây
                                        trước
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon_heart"><i class="niand-icon-spotify-heart"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon_three_dot"><i class="niand-icon-spotify-three-dots"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div id="side-bar" class="d-md-flex d-lg-flex d-xl-flex d-sm-none d-none d-flex flex-column">
            <div id="logo">
                <div class="w-100">
                    <a href="#" class="text-white">
                        <i class="niand-icon-spotify-logo"></i>
                    </a>
                </div>
            </div>
            <nav id="menu" class="w-100">
                <ul>
                    <li>
                        <a href="#" class="active text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-home"></i>
                            <span>Trang chủ</span></a>
                    </li>
                    <li>
                        <a href="#" class="text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-search"></i>
                            <span>Tìm kiếm</span></a>
                    </li>
                    <li>
                        <a href="#" class="text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-library"></i>
                            <span>Thư viện</span></a>
                    </li>
                </ul>
            </nav>
            <div id="user-actions" class="d-flex flex-column flex-grow-1">
                <div class="mt-4">
                    <div class="w-100 action-button">
                        <button type="button" class="d-flex align-items-center">
                            <span class="playlist-add">
                                <i class="niand-icon-spotify-add"></i>
                            </span>
                            <span>Tạo playlist</span>
                        </button>
                    </div>
                    <div class="w-100 action-button">
                        <button type="button" class="d-flex align-items-center">
                            <span class="liked-song">
                                <i class="niand-icon-spotify-heart"></i>
                            </span>
                            <span>Bài hát đã thích</span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="user-settings">
                <div class="cookie w-100">
                    <a href="#" class="text-white">Cookie</a>
                </div>
                <div class="languages">
                    <button type="button" class="d-flex align-items-center">
                        <i class="niand-icon-spotify-internet"></i>
                        <span>Tiếng Việt</span>
                    </button>
                </div>
            </div>
        </div>
        <?php require_once 'footer.php' ?>
    </div>
</body>
<?php require_once 'script.php' ?>
</html>