<?php
require_once "./config/basehref.php";
$url = getUrl();

// if (isset($_COOKIE['username'])) {
//     $username = $_COOKIE['username'];
//     // Sử dụng giá trị 'username' từ cookie
//     // ...
// } else {
//     // Nếu cookie 'username' chưa tồn tại, thực hiện việc lưu cookie
//     if (isset($_POST['username'])) {
//         $username = $_POST['username'];
//         // Thiết lập cookie 'username' với giá trị từ $_POST['username']
//         setcookie('username', $username, time() + (86400 * 30), '/'); // Thời gian tồn tại của cookie: 30 ngày
//         // Reload lại trang
//         header('Location: ' . $url);
//         exit;
//     }
// }
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
    <link rel="stylesheet" href="./assets/css/index_queue.css">
    <style>
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

        /* reponsive */
        @media(max-width: 767px) {
            #now-playing-bar-left {
                width: 100%;
            }

            .player-controls-center {
                margin-top: -70px;
                margin-left: 650px;
            }

            .div_right {
                margin-left: 190px;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <?php require_once('./views/header-bar-login.php') ?>
        </header>

        <main id="main-view">
            <div class="container">
                <div class="container mt-5">
                    <div class="fs-3 fw-bold text-white">
                        Danh sách chờ
                    </div>
                    <div class="mt-3">
                        <p class="fs-6 fw-bold text-white">Đang phát</p>
                        <div class="container data-row">
                            <div class="row my_row">
                                <div class="col-1 d-flex align-items-center justify-content-center">
                                    <span class="text-white">1</span>
                                </div>
                                <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                    <img src="<?php echo $data['songs'][0]->getSongImageUrl() ?>" class="py-2 img-fluid rounded-start" alt="..." style="height: 75px">
                                    <div class="ms-3">
                                        <div class="">
                                            <a href="" class="card-title fw-bold mt-2 hover_a text-success" style="font-size:13px"><?php echo $data['songs'][0]->getSongTitle() ?></a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b"><?php echo $data['songs'][0]->getSongArtist()->getArtistName() ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center justify-content-center d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                                    <a href="" class="text-white hover_a"><?php echo $data['songs'][0]->getSongAlbum()->getAlbumTitle() ?></a>
                                </div>
                                <div class="col-2 d-flex align-items-center justify-content-center div_right">
                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                        <a href="" class="text-white me-4"><i class="niand-icon-spotify-heart-empty icon"></i></a>
                                        <span class="text-white"><?php echo sprintf("%d:%02d", floor($data['songs'][0]->getSongDuration() / 60), $data['songs'][0]->getSongDuration() % 60); ?></span>
                                        <a href="" class="text-white ms-4"><i class="niand-icon-spotify-three-dots icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="fs-6 fw-bold text-white mb-0">Tiếp theo trong danh sách chờ</p>
                        <?php $counter = 2; ?>
                        <?php foreach ($data['songs'] as $song) { ?>
                            <div class="container data-row">
                                <div class="row my_row">
                                    <div class="col-1 d-flex align-items-center justify-content-center">
                                        <span class="text-white"><?php echo $counter; ?></span>
                                    </div>
                                    <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                        <img src="<?php echo $song->getSongImageUrl(); ?>" class="py-2 img-fluid rounded-start" alt="..." style="height: 75px">
                                        <div class="ms-3">
                                            <div class="">
                                                <a href="" class="card-title fw-bold mt-2 hover_a text-success" style="font-size:13px"><?php echo $song->getSongTitle(); ?></a>
                                            </div>
                                            <div class="d-flex">
                                                <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b"><?php echo $song->getSongArtist()->getArtistName(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-center d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                                        <a href="" class="text-white hover_a"><?php echo $song->getSongAlbum()->getAlbumTitle(); ?></a>
                                    </div>
                                    <div class="col-2 d-flex align-items-center justify-content-center div_right">
                                        <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                            <a href="" class="text-white me-4"><i class="niand-icon-spotify-heart-empty icon"></i></a>
                                            <span class="text-white"><?php echo sprintf("%d:%02d", floor($song->getSongDuration() / 60), $song->getSongDuration() % 60); ?></span>
                                            <a href="" class="text-white ms-4"><i class="niand-icon-spotify-three-dots icon"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $counter++; ?>
                        <?php } ?>


                        <div class="w-100 container" style="background-color:#5b5b5b; margin-top:60px;margin-bottom: 80px;">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
            <?php require_once('./views/side-bar.php') ?>
        </div>

        <footer>
            <?php require_once('./views/playing-bar.php') ?>
        </footer>
    </div>
</body>
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

</html>