<?php
require_once "./config/basehref.php";
$url = getUrl();
if (!isset($_SESSION['username'])) {
    header("Location: ?url=artists/artist/" . $data['id']);
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
    <title>Artist-Login</title>
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
    <link rel="stylesheet" href="/assets/css/artist_login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <?php require_once("./views/header-bar-login.php") ?>
        </header>

        <main id="main-view">
            <!-- TODO Nội dung của trang con -->
            <div class="row  bg-image" style="background-image: url(<?php echo $data['artist']->getArtistImageUrl(); ?>);">
                <div class="col-12 my-5 text-white fw-bold">
                    <div class="my-5">
                        <i class="niand-icon-confirm text-primary"></i> Nghệ sĩ được xác nhận
                        <div style="font-size: 6rem;"><?php echo $data['artist']->getArtistName(); ?></div>

                        <div class="my-4">
                            <!-- 51.307.561 người nghe hằng tháng -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">

                <div class="col-6">
                    <button class="btn play-bttt"> <i class="niand-icon-spotify-play text-black fs-5 "> </i></button>
                    <button type="button" class="follow">Theo dõi</button>
                    <button class="btn " style="border: 1px solid black; "><i class="niand-icon-spotify-three-dots hightlight1 my-5 fs-4"> </i></button>
                </div>
            </div>
            <div class="my-4 fw-bold fs-2 text-white">
                Phổ biến
            </div>
            <!-- Bai 1 -->
            <?php foreach ($data['songs'] as $song) { ?>
                <div class="row my-3 mx-3 detailHover">
                    <div class=" col-1 text-white d-flex align-items-center justify-content-center">
                        <?php echo array_search($song, $data['songs']) + 1; ?>
                    </div>
                    <div class=" col-2">
                        <img class="p-1 img-fluid" src="<?php echo $song->getSongImageUrl() ?>" alt="error" style="height: 60px;">
                    </div>
                    <div class="col-5">
                        <div class="my-1 text-white d-flex align-items-center">
                            <a href="" data-id="<?php echo $song->getSongId() ?>" class="play-song"><?php echo $song->getSongTitle() ?></a>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center text-white">
                        <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" style="border: 1px solid black; "><i class="  hightlight1 my-5 fs-4"> </i></button>
                        <ul class="dropdown-menu" style="background-color: #242424">
                            <?php foreach ($data['playlists'] as $playlist) { ?>
                                <?php if (!in_array($song, $data['list_song_playlist'][array_search($playlist, $data['playlists'])])) { ?>
                                    <li><a class="dropdown-item text-white" href="?url=playlists/add_song_to_playlist/<?php echo $song->getSongId() ?>/<?php echo $playlist->getPlaylistId() ?>">Thêm vào playlist <?php echo $playlist->getPlaylistName() ?></a></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class=" col-1 d-flex align-items-center">
                        <h6 class="card-title">
                            <span class="text-white">
                                <?php
                                $seconds = $song->getSongDuration();
                                $minutes = floor($seconds / 60); // Lấy phần nguyên của số phút
                                $remainingSeconds = $seconds % 60; // Lấy số giây còn lại

                                // Định dạng chuỗi phút:giây
                                $formattedTime = sprintf("%d:%02d", $minutes, $remainingSeconds);

                                echo $formattedTime;
                                ?>
                            </span>

                        </h6>

                    </div>
                </div>
            <?php } ?>
            <div class="mx-5 hightlightWord text-white">
                <!-- Xem thêm -->
            </div>
            <div class="row">
                <div class="fs-5 fw-bold my-4 mx-2 text-white">
                    Album
                </div>
                <?php foreach ($data['albums'] as $album) { ?>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex mx-3 flex-column ">
                        <div class="m-1 flex-grow-1">
                            <div class="card  bg-bg h-100">
                                <div class="card-body">
                                    <a href="?url=albums/album/<?php echo $album->getAlbumId() ?>" style="color: white;">
                                        <img class="card-img-top img-fluid" src="<?php echo $album->getAlbumImageUrl() ?>" alt="Card image">
                                    </a>

                                </div>
                                <div class="card-body">
                                    <div class="play-btn-wrapper" style="text-align: center;">
                                        <a href="?url=albums/album/<?php echo $album->getAlbumId() ?>" class="btn   play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"> </i></a>
                                    </div>
                                    <a href="?url=albums/album/<?php echo $album->getAlbumId() ?>" style="color: white;">
                                        <h6 class="card-title"> <?php echo $album->getAlbumTitle(); ?> </h6>
                                        <p class="card-text">Hồ sơ </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br> <br><br> <br><br> <br> <br> <br><br> <br><br> <br><br> <br>
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
        $(document).ready(function() {
            $('.play-song').click(function(e) {
                e.preventDefault(); // prevent form submission
                var clickedButton = $(this); // Nút được click
                $('.play-song').each(function() {
                    if ($(this).is(clickedButton)) {
                        // Xử lý khi tìm thấy nút được click
                        var value = $(this).attr('data-id');
                        $.ajax({
                            url: '?url=home/play_music',
                            type: 'POST',
                            data: {
                                value: value
                            },
                            success: function(response) {
                                if (response.success) {
                                    location.reload(true); // Tải lại trang hiện tại và bỏ qua cache
                                }
                            },
                            error: function() {
                                console.log('Error processing request');
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>