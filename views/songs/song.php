<?php
    require_once "./config/basehref.php";
    $url = getUrl();
    if (isset($_SESSION['username'])) {
        header("Location: ?url=songs/song_login/".$data['id']);
    }
?>
<?php require_once 'style.php'?>
<link rel="stylesheet" href="./assets/css/song.css">
<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div id="action-buttons" class="d-flex flex-shrink-1">
                    <button type="button" title="Quay lại"
                        class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center next_prev">
                        <i class="niand-icon-spotify-left"></i>
                    </button>
                    <button type="button" title="Tiếp theo"
                        class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center next_prev">
                        <i class="niand-icon-spotify-right"></i>
                    </button>
                    <div class="d-md-none d-block">
                        <button type="button" class="d-flex justify-content-center align-items-center" id="open-btn">
                            <i class="niand-icon-spotify-heart"></i>
                        </button>
                    </div>
                </div>
                <div class="btn-nav flex-shrink-1 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none"><a href="#"
                        class="text-white">Premium</a></div>
                <div class="btn-nav flex-shrink-1 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none"><a href="#"
                        class="text-white">Hỗ trợ</a></div>
                <div class="btn-nav flex-shrink-1 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none"><a href="#"
                        class="text-white">Tải xuống</a></div>
                <div id="vertical-line" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none"></div>
                <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                    <button id="sign-up" type="button" class="text-white">Đăng ký</button>
                    <button id="sign-in" type="button" class="rounded-5">Đăng nhập</button>
                </div>
            </div>
        </header>

        <main id="main-view">
            <div class="p-2 lg-3 md-4 sm-6" style="background-color: #34343a">
                <div class="card mb-3" style="background-color: #34343a; border: none">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-flex justify-content-center align-items-center"
                            style="margin-right: -50px;">
                            <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                class="img-fluid rounded-start" alt="..." style="width: 65%">
                        </div>
                        <div class="col-md-8 col-sm-12" style="margin-top: 100px">
                            <div class="card-body">
                                <h5 class="card-title text-white">Bài hát</h5>
                                <p class="card-text text-white fw-bold" style="font-size:60px"><?php $data['song']->getSongTitle() ?></p>
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
                <button type="button"
                    class="m-0 ms-2 rounded-circle d-flex justify-content-center align-items-center p-3 me-3"
                    style="background-color: #1ed760;font-size:20px">
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
                <div class="container">
                    <div id="post-card" class="ms-3 rounded-3 mb-3">
                        <div class="pt-4 ">
                            <span class="text-white fw-bold fs-5 ps-3">
                                Đăng nhập để xem lời bài hát và nghe toàn bộ bản nhạc
                            </span>
                        </div>
                        <div id="sign-up-in-sub" class="d-flex align-items-center justify-content-end mt-3">
                            <button id="sign-in-sub" type="button" class="mb-3 me-4">Đăng nhập</button>
                            <button id="sign-up-sub" type="button" class="rounded-5 mb-3 me-4">Đăng ký</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-2 data-row">
                    <div class="container-fuild">
                        <div class="my_row ms-4 my-5">
                            <div class="d-flex align-items-center justify-content-left px-0">
                                <img src="https://i.scdn.co/image/ab67616d00004851bffc14adc7cc41fbb03bbaa8"
                                    class="py-2 img-fluid rounded-start" alt="...">
                                <div class="ms-3">
                                    <div class="">
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white"
                                            style="font-size:13px">Nghệ sĩ</a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="" class="card-text hover_a text-white fw-bold"
                                            style="font-size:13px;">Farsjön</a>
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
                                <img src="https://i.scdn.co/image/ab67616d00004851bffc14adc7cc41fbb03bbaa8"
                                    class="py-2 img-fluid rounded-start" alt="...">
                                <div class="ms-3">
                                    <div class="">
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white"
                                            style="font-size:13px">Farsjön</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 px-0  d-flex align-items-center justify-content-center">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <a href="#"
                                        class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none"
                                        style="font-size:15px">20.016.634
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon"><i
                                            class="niand-icon-spotify-heart-full-green"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon"><i
                                            class="niand-icon-spotify-three-dots"></i></a>
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
                                <img src="https://i.scdn.co/image/ab67616d00004851bffc14adc7cc41fbb03bbaa8"
                                    class="py-2 img-fluid rounded-start" alt="...">
                                <div class="ms-3">
                                    <div class="">
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white"
                                            style="font-size:13px">Farsjön</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 px-0  d-flex align-items-center justify-content-center">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <a href="#"
                                        class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none"
                                        style="font-size:15px">20.016.634
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon"><i
                                            class="niand-icon-spotify-heart-full-green"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon"><i
                                            class="niand-icon-spotify-three-dots"></i></a>
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
                                <img src="https://i.scdn.co/image/ab67616d00004851bffc14adc7cc41fbb03bbaa8"
                                    class="py-2 img-fluid rounded-start" alt="...">
                                <div class="ms-3">
                                    <div class="">
                                        <a href="" class="card-title fw-bold mt-2 hover_a text-white"
                                            style="font-size:13px">Farsjön</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 px-0  d-flex align-items-center justify-content-center">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <a href="#"
                                        class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none"
                                        style="font-size:15px">20.016.634
                                    </a><br>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                    <a href="" class="text-white me-4 icon"><i
                                            class="niand-icon-spotify-heart-full-green"></i> </a>
                                    <span class="text-white">
                                        1:39
                                    </span>
                                    <a href="" class="text-white ms-4 icon"><i
                                            class="niand-icon-spotify-three-dots"></i></a>
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
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
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
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <h6 class="card-title fw-bold">21</h6>
                                <p class="card-text text_font">2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                        <div class="card ">
                            <div class="card mt-2">
                                <img src="https://i.scdn.co/image/ab67616d00001e02164feb363334f93b6458d2a9"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="play-btn-wrapper">
                                    <a href="#" class="btn play-btn"><i
                                            class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
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
            <div id="now-playing-bar" class="d-flex align-items-center">
                <div id="data">
                    <h6>xem trước spotify</h6>
                    <p>Đăng ký để nghe không giới hạn các bài hát và podcast với quảng cáo không thường xuyên. Không cần
                        thẻ tín dụng.</p>
                </div>
                <div id="btn-sign-up">
                    <button type="button" class="rounded-5">Đăng ký miễn phí</button>
                </div>
            </div>
        </footer>
    </div>
</body>
<?php require_once 'script.php'; ?>
</html>