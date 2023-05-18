<?php require_once 'style.php'; ?>

<link rel="stylesheet" href="./assets/css/index_collection_artist.css">

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div id="action-buttons" class="d-flex flex-shrink-1">
                    <button type="button" title="Quay lại" class="d-flex justify-content-center align-items-center d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                        <i class="niand-icon-spotify-left"></i>
                    </button>
                    <button type="button" title="Tiếp theo" class="d-flex justify-content-center align-items-center d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                        <i class="niand-icon-spotify-right"></i>
                    </button>
                    <div class="d-md-none d-block">
                        <button type="button" id="open-btn" class="d-flex justify-content-center align-items-center">
                            <i class="niand-icon-spotify-heart"></i>
                        </button>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light py-0">
                        <div class="container-fluid" style="background-color: #0d0d0d;">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item rounded-1">
                                        <a class="nav-link text-white fw-bold" style="font-size:14px" aria-current="page" href="?url=collections/collection_playlist">Playlist</a>
                                    </li>
                                    <li class="nav-item bg-secondary ms-3" style="font-size:14px">
                                        <a class="nav-link text-white fw-bold" href="?url=collections/collection_artist">Nghệ sĩ</a>
                                    </li>
                                    <li class="nav-item ms-3" style="font-size:14px">
                                        <a class="nav-link text-white fw-bold" href="?url=collections/collection_album">Album</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                    <button id="setting" type="button" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none rounded-5 ms-2 d-flex justify-content-center align-items-center"><i class="niand-icon-spotify-install"></i>
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
                        <li><a class="dropdown-item text-dark" href="help.html">Hỗ trợ</a></li>
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
            <h2 class="m-4 text-white fw-bold">Nghệ sĩ</h2>
            <div class="container">
                <div class="row d-flex justify-content-start align-items-center">
                    <?php foreach ($data['artists'] as $artist) { ?>
                        <div class="col-md-2 col-sm-6 col-8 border border-dark  ms-4 mb-4">
                            <div class="card my-3" style="background-color:#1a1a1a">
                                <div class="card mt-2 px-1" style="background-color:#1a1a1a">
                                    <img src="<?php echo $artist->getArtistImageUrl() ?>" class="card-img-top" alt="..." style="border-radius: 50%;">
                                </div>
                                <div class="card-body">
                                    <div class="play-btn-wrapper">
                                        <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                    </div>
                                    <h6 class="card-title fw-bold text-white"><?php echo $artist->getArtistName() ?></h6>
                                    <p class="card-text" style="color: #5b5b5b">Nghệ sĩ</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <hr class="my-5 text-white">
        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
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

        <?php require_once 'footer.php'; ?>

    </div>
</body>
<?php require_once 'script.php'; ?>

</html>