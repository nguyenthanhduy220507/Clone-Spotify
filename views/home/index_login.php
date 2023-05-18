<?php
require_once "./config/basehref.php";
$url = getUrl();
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- CSS - SCSS -->
    <link rel="stylesheet" href="./assets/css/index_login.css">
    <?php
    if (isset($css)) {
        echo $css;
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar" style="background-color:#34343a">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div id="action-buttons" class="d-flex flex-shrink-1">
                    <button type="button" title="Quay lại" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center">
                        <i class="niand-icon-spotify-left"></i>
                    </button>
                    <button type="button" title="Tiếp theo" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center">
                        <i class="niand-icon-spotify-right"></i>
                    </button>
                    <button type="button" title="Tiếp theo" id="open-btn" class="d-md-none d-block d-flex justify-content-center align-items-center ">
                        <i class="niand-icon-spotify-heart"></i>
                    </button>
                </div>
                <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                    <button id="sign-up" type="button" class="text-black rounded-5 ms-2">Nâng cấp</button>
                    <button id="sign-in" type="button" class="rounded-5 ms-2"><i class="znake-icon-spotify-install"></i>
                        Cài đặt ứng dụng</button>
                    <button id="icon" type="button" class="rounded-5 ms-2 dropdown-toggle" data-bs-toggle="dropdown"><i class="znake-icon-spotify-user"></i></button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="d-flex dropdown-item">
                                <a class="text-dark flex-grow-1" href="#">Tài khoản</a>
                                <i class="znake-icon-spotify-share-user text-dark"></i>
                            </div>
                        </li>
                        <li><a class="dropdown-item text-dark" href="#">Hồ sơ</a></li>
                        <li>
                            <div class="d-flex dropdown-item">
                                <a class="text-dark flex-grow-1" href="#">Nâng cấp lên Premium</a>
                                <i class="znake-icon-spotify-share-user text-dark"></i>
                            </div>
                        </li>
                        <li><a class="dropdown-item text-dark" href="#">Hỗ trợ</a></li>
                        <li>
                            <div class="d-flex dropdown-item">
                                <a class="text-dark flex-grow-1" href="#">Tải xuống</a>
                                <i class="znake-icon-spotify-share-user text-dark"></i>
                            </div>
                        </li>
                        <li><a class="dropdown-item text-dark" href="#">Cài đặt</a></li>
                        <li>
                            <hr class="dropdown-divider" style="border-top-color: #000000;">
                        </li>
                        <li><a class="dropdown-item text-dark" href="?url=auth/logout">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <main id="main-view">
            <!-- TODO Nội dung của trang con -->
            <div class="  text-white my-5" id="chon">
                <div class="row">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-lg-10">
                            <span class="fw-bold fs-4 hightlightWord mx-3 ">Danh cho <?php echo $data['user']->getUsername(); ?></span>
                        </div>
                        <div class="col-sm-3 col-lg-2 col-md-2 col-lg-2">
                            <span class="fw-bold fs-6  hightlightWord d-flex justify-content-end ">Hiện tất cả</span>
                        </div>

                    </div>
                    <br><br>

                    <?php foreach ($data['playlist_sugs'] as $playlist) { ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column ">
                            <div class="m-1 flex-grow-1">
                                <div class="card  bg-bg h-100">
                                    <div class="card-body">
                                        <a href="/base.html" style="color: white;">
                                            <img class="card-img-top img-fluid" src="<?php echo $playlist->getPlaylistImageUrl()  ?>" alt="Card image">
                                        </a>

                                    </div>
                                    <div class="card-body">
                                        <div class="play-btn-wrapper" style="text-align: center;">
                                            <a href="#" class="btn   play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"> </i></a>
                                        </div>
                                        <a href="/base.html" style="color: white;">
                                            <h6 class="card-title"> <?php echo $playlist->getPlaylistName()  ?> </h6>
                                            <p class="card-text"><?php echo $playlist->getPlaylistDescription()  ?> </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>




                </div>
                <!-- Tuyển tập hàng đầu của bạn -->
                <div class="row my-3">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-lg-10">
                            <span class="fw-bold fs-4 hightlightWord mx-2">Tuyển tập hàng đầu của bạn</span>
                        </div>
                        <div class="col-sm-3 col-lg-2 col-md-2 col-lg-2">
                            <span class="fw-bold fs-6  hightlightWord d-flex justify-content-end">Hiện tất cả</span>
                        </div>

                    </div>
                    <br><br>
                    <?php foreach ($data['current_user_playlist'] as $playlist) { ?>
                        <div class="d-flex flex-column col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="m-1 flex-grow-1">
                                <div class="card  bg-bg h-100">
                                    <div class="card-body">
                                        <a href="#" style="color: white;">
                                            <img class="card-img-top img-fluid" src="<?php echo $playlist->getPlaylistImageUrl() ?>" alt="<?php echo $playlist->getPlaylistName() ?>">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="play-btn-wrapper" style="text-align: center;">
                                            <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"> </i></a>
                                        </div>
                                        <a href="#" style="color: white;">
                                            <h6 class="card-title"><?php echo $playlist->getPlaylistName() ?></h6>
                                            <p class="card-text"><?php echo $playlist->getPlaylistDescription() ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- Danh sách Album của nghệ sĩ -->
                <div class="row my-3">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-lg-10">
                            <span class="fw-bold fs-4 hightlightWord mx-2">Danh sách Album của nghệ sĩ</span>
                        </div>
                        <div class="col-sm-3 col-lg-2 col-md-2 col-lg-2">
                            <span class="fw-bold fs-6  hightlightWord d-flex justify-content-end">Hiện tất cả</span>
                        </div>
                    </div>
                    <br><br>
                    <?php foreach ($data['albums'] as $album) { ?>
                        <div class="d-flex flex-column col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="m-1 flex-grow-1">
                                <div class="card  bg-bg h-100">
                                    <div class="card-body">
                                        <a href="?url=albums/album/<?php echo $album->getAlbumId() ?>" style="color: white;">
                                            <img class="card-img-top img-fluid" src="<?php echo $album->getAlbumImageUrl() ?>" alt="<?php echo $album->getAlbumTitle() ?>">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="play-btn-wrapper" style="text-align: center;">
                                            <a href="?url=albums/album/<?php echo $album->getAlbumId() ?>" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"> </i></a>
                                        </div>
                                        <a href="?url=albums/album/<?php echo $album->getAlbumId() ?>" style="color: white;">
                                            <h6 class="card-title"><?php echo $album->getAlbumTitle() ?></h6>
                                            <p class="card-text"><?php echo $album->getAlbumReleaseDate() ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <hr style="color: aliceblue; margin-top: 50px;">
            <br><br><br> <br><br>

        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none  d-flex flex-column">
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
                            <div id="anh">
                                <img class="img-fluid rounded-1" src="<?php echo $data['song']->getSongImageUrl(); ?>" alt="<?php echo $data['song']->getSongTitle(); ?>">
                            </div>
                            <div class="word">
                                <div class="title">
                                    <?php echo $data['song']->getSongTitle(); ?>
                                </div>
                                <div class="authors">
                                    <a href="#"><?php echo $data['song']->getSongAlbum()->getAlbumTitle(); ?></a>
                                    <a href="#"><?php echo $data['song']->getSongArtist()->getArtistName(); ?></a></a>
                                </div>
                            </div>
                            <div>
                                <i class="niand-icon-spotify-heart-empty d-lg-flex d-md-flex d-sm-none d-none"></i>
                            </div>
                            <div>
                                <i class="niand-icon-spotify-picture-in-picture d-lg-flex d-md-flex d-sm-none d-none"></i>
                            </div>
                        </div>
                    </div>
                    <div id="now-playing-bar-center" class="col d-flex align-items-center">
                        <div class="d-flex flex-column w-100 gap-2">
                            <div class="player-controls d-xl-flex  d-flex align-items-center justify-content-center gap-4">
                                <div class="player-controls-left d-lg-flex d-md-flex d-sm-none d-none   d-flex align-items-center justify-content-center gap-4">
                                    <button type="button">
                                        <i class="niand-icon-spotify-mix "></i>
                                    </button>
                                    <button type="button" class="">
                                        <i class="niand-icon-spotify-prev "></i>
                                    </button>
                                </div>
                                <div class="player-controls-center">
                                    <button id="play-button" type="button" class="bg-white m-0 p-1 rounded-circle d-flex justify-content-center align-items-center">
                                        <i class="niand-icon-spotify-play text-black"></i>
                                    </button>
                                </div>
                                <div class="player-controls-right  d-flex align-items-center justify-content-center gap-4">
                                    <button type="button">
                                        <i class="niand-icon-spotify-next d-lg-flex d-md-flex d-sm-none d-none"></i>
                                    </button>
                                    <button type="button">
                                        <i class="niand-icon-spotify-loop d-lg-flex d-md-flex d-sm-none d-none"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="playback-bar  d-flex align-items-center justify-content-center gap-2">
                                <div class="playback-position">
                                    0:00
                                </div>
                                <div class="progress border w-100" style="height: 4px;">
                                    <div id="progress-bar-song" class="progress-bar bg-dark"></div>
                                </div>
                                <div class="playback-duration">
                                    <?php
                                    $seconds = $data['song']->getSongDuration();
                                    $minutes = floor($seconds / 60); // Lấy phần nguyên của số phút
                                    $remainingSeconds = $seconds % 60; // Lấy số giây còn lại

                                    // Định dạng chuỗi phút:giây
                                    $formattedTime = sprintf("%d:%02d", $minutes, $remainingSeconds);

                                    echo $formattedTime;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <audio id="audio-player" src="<?php echo $data['song']->getSongUrl(); ?>"></audio>
                    <div id="now-playing-bar-right" class="col d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-end align-items-center gap-3">
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
                            <div id="volume-bar" class="progress border" style="width: 100px; height: 4px;">
                                <div id="volume-progress" class="progress-bar bg-dark" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            var audio = document.getElementById("audio-player");
            var playButton = document.getElementById("play-button");

            playButton.addEventListener("click", function() {
                if (audio.paused) {
                    audio.play();
                    playButton.innerHTML = '<i class="niand-icon-spotify-pause text-black"></i>';
                } else {
                    audio.pause();
                    playButton.innerHTML = '<i class="niand-icon-spotify-play text-black"></i>';
                }
            });
            var progressBar = document.getElementById("progress-bar-song");

            // Đợi sự kiện 'canplay' được kích hoạt trước khi đính kèm sự kiện 'timeupdate'
            audio.addEventListener('canplay', function() {
                audio.addEventListener('timeupdate', function() {
                    var duration = audio.duration; // Thời lượng của đoạn nhạc (tính theo giây)
                    var currentTime = audio.currentTime; // Thời gian hiện tại (tính theo giây)
                    var progress = (currentTime / duration) * 100; // Tính toán phần trăm hoàn thành
                    progressBar.style.width = progress + "%"; // Cập nhật chiều rộng của thanh tiến trình
                });
            });
            audio.addEventListener('ended', function() {
                playButton.innerHTML = '<i class="niand-icon-spotify-pause text-black"></i>'; // Thay đổi biểu tượng thành nút pause
            });
            var volumeBar = document.getElementById('volume-bar');
            var volumeProgress = document.getElementById('volume-progress');

            function setVolume(event) {
                var volumeBarWidth = volumeBar.offsetWidth;
                var mouseX = event.pageX - volumeBar.offsetLeft;
                var volume = mouseX / volumeBarWidth;

                // Giới hạn giá trị âm lượng từ 0 đến 1
                volume = Math.max(0, Math.min(1, volume));

                // Cập nhật âm lượng của audio
                audio.volume = volume;

                // Cập nhật chiều rộng của thanh tiến trình
                volumeProgress.style.width = (volume * 100) + '%';
            }

            volumeBar.addEventListener('mousedown', function(event) {
                setVolume(event);

                // Thêm sự kiện 'mousemove' để theo dõi việc kéo
                document.addEventListener('mousemove', setVolume);
            });

            document.addEventListener('mouseup', function() {
                // Loại bỏ sự kiện 'mousemove' khi ngừng kéo
                document.removeEventListener('mousemove', setVolume);
            });
        </script>
    </div>
    <script src="/assets/js/script.js"></script>
    <script>
        window.onload = function() {
            document.getElementById("open-btn").addEventListener('click', function() {
                document.getElementById("side-bar").classList.toggle('d-sm-none');
                document.getElementById("side-bar").classList.toggle('d-none');
                document.getElementById("side-bar").style.width = '85vw';
                document.getElementById("main-view").classList.toggle('d-none');
            })
        }
    </script>
</body>

</html>