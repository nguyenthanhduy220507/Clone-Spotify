<?php
require_once "./config/basehref.php";
$url = getUrl();
if (isset($_SESSION['username'])) {
    header("Location: ?url=albums/album_login/" . $data['id']);
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
    <link rel="stylesheet" href="./assets/css/index_album.css">

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
    </style>
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <?php require_once("./views/header-bar.php") ?>
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
                                    <span class="text-white"><?php echo $song->getSongId() ?></span>
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
                <p class="mb-0 text-white" style="font-size:13px"><?php echo date('d', strtotime($data['album']->getAlbumReleaseDate())) . ' tháng ' . date('m, Y', strtotime($data['album']->getAlbumReleaseDate())) ?></p>
                <p class="mb-0 text-white" style="font-size:13px">℗ <?php echo date('Y', strtotime($data['album']->getAlbumReleaseDate())); ?> XL Recordings Ltd</p>
                <p class="mb-0 text-white" style="font-size:13px">℗ <?php echo date('Y', strtotime($data['album']->getAlbumReleaseDate())); ?> XL Recordings Ltd</p>
            </div>

            <div class="container">
                <div id="title_font_list" class="m-2">
                    <span class="fs-4 fw-bold mb-0 p-2">
                        <a href="#" class="text-light hover_a">Album khác của Adele</a>
                    </span>
                    <span class="fs-6 fw-bold mb-0 float-end">
                        <a href="#" class="text-light hover_a" style="font-size:12px">Xem danh sách dĩa nhạc</a>
                    </span>
                </div>
                <div class="row align-items-center">
                    <?php foreach ($data['albums'] as $album) { ?>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 border border-dark m-3 hover_div">
                            <div class="card ">
                                <div class="card mt-2">
                                    <img src="<?php echo $album->getAlbumImageUrl() ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="play-btn-wrapper">
                                        <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                    </div>
                                    <h6 class="card-title fw-bold"><?php echo $album->getAlbumTitle() ?></h6>
                                    <p class="card-text text_font"><?php echo $album->getAlbumId() ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
            <?php require_once('./views/side-bar.php') ?>
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