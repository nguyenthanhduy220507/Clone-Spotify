<?php
require_once "./config/basehref.php";
$url = getUrl();
if (!isset($_SESSION['username'])) {
    header("Location: ?url=home/index");
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
    <link rel="icon" href="./assets/images/spotify.ico">
    <meta property="og:image" content="./assets/images/spotify.png">
    <title>Spotify - Trình phát trên web</title>
    <!-- Icon Css -->
    <link rel="stylesheet" href="./assets/fonts/style.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="./assets/fonts/ie7/ie7.css">
    <!--<![endif]-->
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- CSS - SCSS -->
    <link rel="stylesheet" href="./assets/css/index_album_login.css">
    <style>
        .hover_div:hover {
            background-color: #34343a;
        }

        .data-row:hover {
            background-color: #2a2a2a;
        }

        .data-row .icon {
            visibility: hidden;
        }

        .data-row:hover .icon {
            visibility: visible;
        }

        .hover_a:hover {
            text-decoration: underline;
        }


        .play-btn {
            visibility: hidden;
            display: none;
            border-radius: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 5px;
            margin: 4px 2px;
            cursor: pointer;
        }

        /* Hiển thị nút "play" khi có lớp "show" */
        .play-btn.show {
            background-color: #1ed760;
            display: block;
            visibility: visible;
        }

        /* Hiện play ở giữa card */
        .play-btn-wrapper {
            position: absolute;
            /* hoặc sử dụng relative nếu cần */
            top: 39%;
            left: 80%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        /* reponsive */
        @media(max-width: 767px) {
            #now-playing-bar-left {
                width: 100%;
            }

            .player-controls-center {
                margin-top: -70px;
                margin-left: 650px;
            }
        }
    </style>
</head>

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
                            <img src="<?php echo $data['album']->getAlbumImageUrl(); ?>" class="img-fluid rounded-start" alt="..." style="width: 65%">
                        </div>
                        <div class="col-md-8 col-sm-12" style="margin-top: 100px">
                            <div class="card-body">
                                <h5 class="card-title text-white">Album</h5>
                                <p class="card-text text-white fw-bold" style="font-size:60px"><?php echo $data['album']->getAlbumTitle(); ?></p>
                                <div class="d-flex text-white">
                                    <i class="niand-icon-spotify-clock"></i>
                                    <a href="" class="mx-1 text-white hover_a">
                                        <?php echo $data['album']->getAlbumArtist()->getArtistName(); ?></a>
                                    <p class="mx-1"> • <?php echo date('Y', strtotime($data['album']->getAlbumReleaseDate())); ?> • <?php echo $data['song_num']; ?> bài hát</p>
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
            <div class="md-4 sm-6 lg-3">
                <div class="container-fuild">
                    <div class="container data-row" style="background-color: #2b2b2b">
                        <div class="row my_row">
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <span class="text-white">#</span>
                            </div>
                            <div class="col-9 d-flex align-items-center justify-content-left ps-0">
                                <span class="text-white">Tiêu đề</span>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="niand-icon-spotify-clock text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($data['songs'] as $song) { ?>
                    <div class="container mt-2 data-row">
                        <div class="container-fuild">
                            <div class="row my_row sm-6 md-4">
                                <div class="col-1 d-flex align-items-center justify-content-center">
                                    <span class="text-white"><?php echo $song->getSongId()?></span>
                                </div>
                                <div class="col-10 d-flex align-items-center justify-content-left ps-0">
                                    <div class="card-body">
                                        <a href="#" class="card-title mt-2 text-white hover_a" style="font-size:15px"><?php echo $song->getSongTitle() ?>
                                        </a><br>
                                        <!-- <i class="niand-icon-spotify-clock"></i>
                                    <a href="#" class="card-text hover_a" style="font-size:15px; color:#4b4b4b">
                                        Adele</a> -->
                                    </div>
                                </div>
                                <div class="col-1 d-flex align-items-center justify-content-center">
                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                        <a href="" class="text-white me-4"><i class="niand-icon-spotify-heart-empty icon"></i></a>
                                        <span class="text-white"><?php echo $song->getSongDuration() ?></span>
                                        <a href="" class="text-white ms-4"><i class="niand-icon-spotify-three-dots icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="container my-3">
                <p class="mb-0 text-white" style="font-size:13px"><?php echo date('D,M,Y', strtotime($data['album']->getAlbumReleaseDate())); ?></p>
                <p class="mb-0 text-white" style="font-size:13px">℗ <?php echo date('Y', strtotime($data['album']->getAlbumReleaseDate())); ?> XL Recordings Ltd</p>
                <p class="mb-0 text-white" style="font-size:13px">℗ <?php echo date('Y', strtotime($data['album']->getAlbumReleaseDate())); ?> XL Recordings Ltd</p>

            </div>


            <div class="container">
                <div id="title_font_list" class="m-2">
                    <span class="fs-4 fw-bold mb-0 p-2">
                        <a href="#" class="text-light hover_a">Album khác của <?php echo $data['album']->getAlbumArtist() -> getArtistName()?></a>
                    </span>
                    <span class="fs-6 fw-bold mb-0 float-end">
                        <a href="#" class="text-light hover_a" style="font-size:12px">Xem danh sách dĩa nhạc</a>
                    </span>
                </div>
                <div class="row align-items-center">
                    <?php foreach($data['album'] as $albums) { ?>
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
                                    <p class="card-text text_font"><?php echo $albums->getAlbumReleaseDate()?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </main>

        <div id="side-bar" class="d-md-flex d-lg-flex d-xl-flex d-sm-none d-none flex-column">
            <div id="logo">
                <div class="w-100 d-flex justify-content-between">
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
<script>
    // Lấy tất cả các phần tử card-body
    var cardBodies = document.querySelectorAll('.card-body');

    // Lặp qua từng phần tử card-body
    cardBodies.forEach(function(cardBody) {
        // Lấy phần tử chứa nút "play" của từng card-body
        var playBtn = cardBody.querySelector('.play-btn');

        // Khi hover vào card-body
        cardBody.addEventListener('mouseover', function() {
            // Thêm lớp "show" vào phần tử chứa nút "play"
            playBtn.classList.add('show');
        });

        // Khi rời chuột khỏi card-body
        cardBody.addEventListener('mouseout', function() {
            // Loại bỏ lớp "show" khỏi phần tử chứa nút "play"
            playBtn.classList.remove('show');
        });
    });

    //reponsive
    window.onload = function() {
        document.getElementById("open-btn").addEventListener('click', function() {
            document.getElementById("side-bar").classList.toggle('d-sm-none');
            document.getElementById("side-bar").classList.toggle('d-none');
            document.getElementById("side-bar").style.width = '85vw';
            document.getElementById("main-view").classList.toggle('d-none');
        })
    }
</script>

</html>