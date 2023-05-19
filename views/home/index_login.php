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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar" style="background-color:#34343a">
            <!-- TODO -->
            <?php require_once("./views/header-bar-login.php") ?>
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
                                        <a href="?url=playlists/playlist/<?php echo $playlist->getPlaylistId() ?>" style="color: white;">
                                            <img class="card-img-top img-fluid" src="<?php echo $playlist->getPlaylistImageUrl() ?>" alt="Card image">
                                        </a>

                                    </div>
                                    <div class="card-body">
                                        <div class="play-btn-wrapper" style="text-align: center;">
                                            <a href="?url=playlists/playlist/<?php echo $playlist->getPlaylistId() ?>" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"> </i></a>
                                        </div>
                                        <a href="?url=playlists/playlist/<?php echo $playlist->getPlaylistId() ?>" style="color: white;">
                                            <h6 class="card-title"> <?php echo $playlist->getPlaylistName() ?> </h6>
                                            <p class="card-text"><?php echo $playlist->getPlaylistDescription() ?> </p>
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
                                        <a href="?url=playlists/playlist/<?php echo $playlist->getPlaylistId() ?>" style="color: white;">
                                            <img class="card-img-top img-fluid" src="<?php echo $playlist->getPlaylistImageUrl() ?>" alt="<?php echo $playlist->getPlaylistName() ?>">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="play-btn-wrapper" style="text-align: center;">
                                            <a href="?url=playlists/playlist/<?php echo $playlist->getPlaylistId() ?>" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"> </i></a>
                                        </div>
                                        <a href="?url=playlists/playlist/<?php echo $playlist->getPlaylistId() ?>" style="color: white;">
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

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
            <?php require_once('./views/side-bar.php') ?>
        </div>

        <footer>
            <?php require_once("./views/playing-bar.php") ?>
        </footer>
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