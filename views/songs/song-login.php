<?php
    require_once "./config/basehref.php";
    $url = getUrl();
    if (!isset($_SESSION['username'])) {
        header("Location: ?url=songs/song/".$data['id']);
    }
?>
<?php require_once 'style.php'; ?>
<link rel="stylesheet" href="./assets/css/song-login.css">

<body>
    <div id="main" class="d-grid">
    <header id="top-bar" style="background-color:#34343a">
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
                    <button id="sign-up" type="button" class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none text-black rounded-5 ms-2">Nâng
                        cấp</button>
                    <button id="sign-in" type="button" class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none rounded-5 ms-2 d-flex justify-content-center align-items-center"><i class="niand-icon-spotify-install"></i>
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
            <div class="p-2 lg-3 md-4 sm-6" style="background-color: #34343a">
                <div class="card mb-3" style="background-color: #34343a; border: none">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center" style="margin-right: -50px;">
                            <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="img-fluid rounded-start" alt="..." style="width: 65%">
                        </div>
                        <div class="col-md-8 col-sm-12" style="margin-top: 100px">
                            <div class="card-body">
                                <h5 class="card-title text-white">Album</h5>
                                <p class="card-text text-white fw-bold" style="font-size:60px">21</p>
                                <div class="d-flex text-white">
                                    <i class="niand-icon-spotify-clock"></i>
                                    <a href="" class="mx-1 text-white hover_a">
                                        Adele</a>
                                    <p class="mx-1"> • 2011 • 11 bài hát,</p>
                                    <p class="mx-1"> 48 phút 4 giây</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex align-items-center my-3" style="background-color: #18181a; height:50px">
                <button type="button" class="m-0 ms-2 rounded-circle d-flex justify-content-center align-items-center p-3 me-3" style="background-color: #1ed760;font-size:20px">
                    <i class="niand-icon-spotify-play text-black"></i>
                </button>
                <a href="" class="rounded-circle me-3 fs-3">
                    <i class="niand-icon-spotify-heart-empty text-light"></i>
                </a>
                <a href="" class="rounded-circle fs-3">
                    <i class="niand-icon-spotify-three-dots text-light"></i>
                </a>

            </div>
            <div class="sm-12 md-4 lg-3">
                <div class="container mt-2 data-row">
                    <div class="container-fuild">
                        <div class="my_row ms-4 my-5">
                            <div class="d-flex align-items-center justify-content-left px-0">
                                <img src="https://i.scdn.co/image/ab67616d00004851bffc14adc7cc41fbb03bbaa8" class="py-2 img-fluid rounded-start" alt="...">
                                <div class="ms-3">
                                    <div class="">
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white" style="font-size:13px">Nghệ sĩ</a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="" class="card-text hover_a text-white fw-bold" style="font-size:13px;">Farsjön</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-white ms-4">Các bản nhạc thịnh hành của</p>
                <p class="fs-4 text-white ms-4 fw-bold">Farsjön</p>
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
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white" style="font-size:13px">Farsjön</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 px-0  d-flex align-items-center justify-content-center">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">20.016.634
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon"><i class="niand-icon-spotify-heart-full-green"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon"><i class="niand-icon-spotify-three-dots"></i></a>
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
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white" style="font-size:13px">Farsjön</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 px-0  d-flex align-items-center justify-content-center">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">20.016.634
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon"><i class="niand-icon-spotify-heart-full-green"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon"><i class="niand-icon-spotify-three-dots"></i></a>
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
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white" style="font-size:13px">Farsjön</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 px-0  d-flex align-items-center justify-content-center">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">20.016.634
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon"><i class="niand-icon-spotify-heart-full-green"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon"><i class="niand-icon-spotify-three-dots"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="container">
                <div class="m-2">
                    <span class="fs-4 fw-bold mb-0">
                        <a href="#" class="text-light hover_a">Các bản phát hành thịnh hành của Farsjön</a>
                    </span>
                    <span class="fs-6 fw-bold mb-0 float-end">
                        <a href="#" class="text-light hover_a" style="font-size:12px">Hiển thị tất cả</a>
                    </span>
                </div>
                <div class="row d-fex justify-content-center align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card">
                            <div class="card">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="m-2">
                    <span class="fs-4 fw-bold mb-0">
                        <a href="#" class="text-light hover_a">Các bản phát hành thịnh hành của Farsjön</a>
                    </span>
                    <span class="fs-6 fw-bold mb-0 float-end">
                        <a href="#" class="text-light hover_a" style="font-size:12px">Hiển thị tất cả</a>
                    </span>
                </div>
                <div class="row d-fex justify-content-center align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card">
                            <div class="card">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-3">
                <p class="mb-0 text-white" style="font-size:12px">℗ 2022 Farsjön</p>
                <p class="mb-0 text-white" style="font-size:12px">℗ 2022 Farsjön</p>
            </div>
            <div class="my-5" style="color: #7b7b7b">
                <hr>
            </div>
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

        <footer>
            <div id="now-playing-bar" class="pe-2 ps-2">
                <div class="row row-cols-3 m-auto">
                    <div id="now-playing-bar-left" class="col d-flex align-items-center">
                        <div class="d-flex gap-3 justify-content-start align-items-center">
                            <div>
                                <img class="img-fluid rounded-1" src="https://i.scdn.co/image/ab67616d0000485170cb943c9a67b7eda3414366" alt="">
                            </div>
                            <div>
                                <div class="title">
                                    không nói ai mà biết
                                </div>
                                <div class="authors">
                                    <a href="#">14 Casper</a>
                                    <a href="#">Bon Nghiêm</a>
                                </div>
                            </div>
                            <div>
                                <i class="niand-icon-spotify-heart-empty icon-hidden"></i>
                            </div>
                            <div>
                                <i class="niand-icon-spotify-picture-in-picture icon-hidden"></i>
                            </div>
                        </div>
                    </div>
                    <div id="now-playing-bar-center" class="col d-flex align-items-center">
                        <div class="d-flex flex-column w-100 gap-2">
                            <div class="player-controls d-flex align-items-center justify-content-center gap-4">
                                <div class="player-controls-left d-flex align-items-center justify-content-center gap-4">
                                    <button type="button">
                                        <i class="niand-icon-spotify-mix"></i>
                                    </button>
                                    <button type="button">
                                        <i class="niand-icon-spotify-prev"></i>
                                    </button>
                                </div>
                                <div class="player-controls-center">
                                    <button type="button" class="bg-white m-0 p-1 rounded-circle d-flex justify-content-center align-items-center">
                                        <i class="niand-icon-spotify-play text-black"></i>
                                    </button>
                                </div>
                                <div class="player-controls-right d-flex align-items-center justify-content-center gap-4">
                                    <button type="button">
                                        <i class="niand-icon-spotify-next"></i>
                                    </button>
                                    <button type="button">
                                        <i class="niand-icon-spotify-loop"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="d-md-flex d-lg-flex d-xl-flex d-sm-none d-none playback-bar d-flex align-items-center justify-content-center gap-2">
                                <div class="playback-position">
                                    0:00
                                </div>
                                <div class="progress-bar w-100 rounded-2">
                                </div>
                                <div class="playback-duration">
                                    4:34
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="now-playing-bar-right" class="d-md-flex d-lg-flex d-xl-flex d-sm-none d-none col d-flex justify-content-end align-items-center gap-3">
                        <div>
                            <i class="niand-icon-spotify-mic"></i>
                        </div>
                        <div>
                            <i class="niand-icon-spotify-playlist"></i>
                        </div>
                        <div>
                            <i class="niand-icon-spotify-loudspeaker"></i>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="niand-icon-spotify-volumn"></i>
                            <div class="volumn-bar rounded-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<?php require_once 'script.php'; ?>
</html>