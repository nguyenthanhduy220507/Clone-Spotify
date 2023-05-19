<?php
require_once "./config/basehref.php";
$url = getUrl();
if (isset($_SESSION['username'])) {
    header("Location: ?url=searchss/search_login");
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
    <title>Search</title>
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
    <link rel="stylesheet" href="./assets/css/seach.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <?php require_once('./views/header-bar.php') ?>
        </header>

        <main id="main-view">
            <!-- TODO Nội dung của trang con -->
            <div id="popup">
                <div id="popup-content">
                    <div class="row">
                        <input type="text" class="form-control" placeholder="Bạn muốn nghe gì?" aria-label="Bạn muốn nghe gì?" aria-describedby="basic-addon2">
                    </div>

                    <button id="close-popup" class="btn rounded-pill fw-bold">Close</button>
                </div>
            </div>
            <!-- Dong 1 -->
            <div class="row">
                <div>
                    <span class="fw-bold fs-4 hightlightWord mx-1 text-white my-5">Playlist</span>
                </div>
                <br><br>
                <?php foreach ($data['playlists'] as $playlist) { ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column ">
                        <a href="?url=playlists/playlist/<?php echo $playlist->getPlaylistId(); ?>" class="text-decoration-none">
                            <div class="m-1">
                                <div class="card  " id="top_hit">
                                    <h5 class="card-title hightlightWord mx-2 my-1  "><?php echo $playlist->getPlaylistName(); ?></h5>
                                    <div class="card-body lean">
                                        <img class="card-img-top img-fluid" src="<?php echo $playlist->getPlaylistImageUrl(); ?>" alt="Card image">
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <!-- bang 2 -->
            <div class="row">
                <div>
                    <span class="fw-bold fs-4 hightlightWord mx-1 text-white my-5">Album</span>
                </div>
                <br><br>
                <?php foreach ($data['albums'] as $album) { ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column ">
                        <a href="?url=albums/album/<?php echo $album->getAlbumId(); ?>" class="text-decoration-none">
                            <div class="m-1">
                                <div class="card  " style="height: 200px;" id="top_hit">
                                    <h5 class="card-title hightlightWord mx-2 my-1  "><?php echo $album->getAlbumTitle(); ?></h5>
                                    <div class="card-body lean">
                                        <img class="card-img-top img-fluid" src="<?php echo $album->getAlbumImageUrl(); ?>" alt="Card image">
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <!-- dong 3 -->
            <div class="row">
                <div>
                    <span class="fw-bold fs-4 hightlightWord mx-1 text-white my-5">Artist</span>
                </div>
                <br><br>
                <?php foreach ($data['artists'] as $artist) { ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column card-container">
                        <a href="?url=artists/artist/<?php echo $artist->getArtistId(); ?>" class="text-decoration-none">
                            <div class="m-1">
                                <div class="card" style="height: 200px;" id="top_hit">
                                    <h5 class="card-title hightlightWord mx-2 my-1"><?php echo $artist->getArtistName(); ?></h5>
                                    <div class="card-body lean">
                                        <img class="card-img-top img-fluid" src="<?php echo $artist->getArtistImageUrl(); ?>" alt="Card image">
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <hr style="color: aliceblue; margin-top: 50px;">
            <br><br><br> <br><br>
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
    <script src="/js/playlist.js"></script>
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