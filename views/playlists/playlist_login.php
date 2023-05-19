<?php
require_once "./config/basehref.php";
$url = getUrl();
if (!isset($_SESSION['username'])) {
    header("Location: ?url=playlists/playlist/" . $data['id']);
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- CSS - SCSS -->
    <link rel="stylesheet" href="./assets/css/playlist_login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <?php require_once("./views/header-bar-login.php") ?>
        </header>

        <main id="main-view">
            <!-- TODO Nội dung của trang con -->
            <div class="  text-white " id="chon">
                <div class="row">

                    <div class="row " style="background-color: rgb(144, 168, 192);">

                        <div class="col-md-12 col-lg-12 col-xl-3 d-flex align-items-center justify-content-center anh">
                            <img src="<?php echo $data['playlist']->getPlaylistImageUrl(); ?>" alt="error" class="img-fluid w-45 mx-3 my-5">
                        </div>
                        <div class="col-lg-12 col-xl-9 my-5 text-white fw-bold" id="title">
                            <div class="my-5">
                                Playlist
                                <div style="font-size: 6rem;"><?php echo $data['playlist']->getPlaylistName(); ?></div>
                                <div><?php echo $data['playlist']->getPlaylistDescription(); ?></div>
                                <div>
                                    <img src="/assets/images/spotify.png" alt="error" style="width: 25px; height: 25px;"> Spotify,
                                    <?php echo $data['songplaylists_num'] . " bài hát" ?>
                                    <span><?php
                                            $totalDuration = 0;

                                            foreach ($data['songplaylists'] as $songplaylist) {
                                                $seconds = $songplaylist->getSong()->getSongDuration();
                                                $minutes = floor($seconds / 60);
                                                $remainingSeconds = $seconds % 60;

                                                $formattedTime = sprintf("%d:%02d", $minutes, $remainingSeconds);
                                                $totalDuration += $seconds;
                                            }

                                            $totalMinutes = floor($totalDuration / 60);
                                            $totalRemainingSeconds = $totalDuration % 60;

                                            $totalFormattedTime = sprintf("%d:%02d", $totalMinutes, $totalRemainingSeconds);
                                            echo ", khoảng " . $totalFormattedTime . " phút";
                                            ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">

                        <div class="col-6">
                            <button class="btn play-bttt"> <i class="niand-icon-spotify-play text-black fs-5 "> </i></button>
                            <button class="btn " style="border: 1px solid black; "><i class="niand-icon-spotify-heart-empty  hightlight1 my-5 fs-4"> </i></button>
                            <button class="btn dropdown-toggle " data-bs-toggle="dropdown" style="border: 1px solid black; "><i class="niand-icon-spotify-three-dots  hightlight1 my-5 fs-4"> </i></button>
                            <ul class="dropdown-menu " style="background-color: #242424">
                                <li><a class="dropdown-item text-white" href="#">Thêm vào thư viện</a></li>
                                <?php if ($data['can_edit']) { ?>
                                    <li><a class="dropdown-item text-white">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                                Update playlist
                                            </button>
                                        </a></li>
                                        <li><a class="dropdown-item text-white" href="?url=playlists/clear_all/<?php echo $data['playlist']->getPlaylistId() ?>">Clear playlist</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row my-3 mx-3">
                        <div class=" col-1 d-flex">
                            #
                        </div>
                        <div class=" col-4">
                            <span> Tiêu đề</span>
                        </div>
                        <div class=" col-3 ">

                        </div>
                        <div class=" col-3 album">
                            Album
                        </div>
                        <!-- <div class=" col-3 xemthem">
                         
                      </div> -->
                        <div class=" col-1 thoigian">
                            <i class="niand-icon-spotify-clock"></i>
                        </div>
                    </div>

                    <!-- Bai 1 -->
                    <?php
                    $counter = 1;
                    foreach ($data['songplaylists'] as $songplaylists) { ?>
                        <div class="row my-3 mx-3  detailHover">
                            <div class=" col-1 d-flex align-items-center">
                                <?php echo $counter; ?>
                            </div>
                            <div class=" col-1 d-flex align-items-center">
                                <img src="<?php echo $songplaylists->getSong()->getSongImageUrl() ?> " alt="error" class="img-fluid " id="fix_img">
                            </div>
                            <div class="  col-3">
                                <div class="my-1 hightlightWord">
                                    <a href="" data-id="<?php echo $songplaylists->getSong()->getSongId() ?>" class="play-song"> <?php echo $songplaylists->getSong()->getSongTitle() ?></a>
                                </div>
                                <div class="my-1 hightlightWord">
                                    <a href="?url=artists/artist/<?php echo $songplaylists->getSong()->getSongArtist()->getArtistId() ?>"> <?php echo $songplaylists->getSong()->getSongArtist()->getArtistName() ?></a>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center xemthem">

                            </div>
                            <div onclick="window.location.href = '?url=albums/album/<?php echo $songplaylists->getSong()->getSongAlbum()->getAlbumId() ?>'" class="col-3 d-flex align-items-center hightlightWord">
                                <?php echo $songplaylists->getSong()->getSongAlbum()->getAlbumTitle() ?>
                            </div>
                            <!-- <div class="col-3 d-flex align-items-center xemthem">
                
                </div> -->
                            <div class=" col-1 d-flex align-items-center thoigian">
                                <span class="text-white">
                                    <?php
                                    $seconds = $songplaylists->getSong()->getSongDuration();
                                    $minutes = floor($seconds / 60); // Lấy phần nguyên của số phút
                                    $remainingSeconds = $seconds % 60; // Lấy số giây còn lại

                                    // Định dạng chuỗi phút:giây
                                    $formattedTime = sprintf("%d:%02d", $minutes, $remainingSeconds);

                                    echo $formattedTime;
                                    $counter++;
                                    ?>
                                </span>
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
    <script src="/assets/js/playlist.js"></script>
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
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update playlist</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="form" method="post">
                        <div class="mb-3 mt-3">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" value="<?php if (isset($data['playlist'])) echo $data['playlist']->getPlaylistName(); ?>" placeholder="Enter name" name="name" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" value="<?php if (isset($data['playlist'])) echo $data['playlist']->getPlaylistDescription(); ?>" placeholder="Enter description" name="description" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div id="response-message"></div>
                    </form>
                    <script>
                        $(document).ready(function() {
                            $('#form').submit(function(e) {
                                e.preventDefault(); // prevent form submission
                                var id = '<?php echo $data['playlist']->getPlaylistId() ?>';
                                var name = $('#name').val();
                                var description = $('#description').val();
                                var user = '<?php echo $data['playlist']->getPlaylistUser()->getUserId() ?>';
                                var image_url = '<?php echo $data['playlist']->getPlaylistImageUrl() ?>';
                                $.ajax({
                                    url: '?url=admin/auth_playlist_form/update',
                                    type: 'POST',
                                    data: {
                                        id: id,
                                        name: name,
                                        description: description,
                                        user: user,
                                        image_url: image_url
                                    },
                                    success: function(response) {
                                        if (response.success) {
                                            // authentication succeeds, redirect to dashboard or home page
                                            window.location.href = '?url=playlists/playlist/' + <?php echo $data['id'] ?>;;
                                        } else {
                                            // authentication fails, display error message
                                            let html = `<div class="alert alert-danger mt-2">
                                            <strong>Failed!</strong> Failed. Please try again.
                                        </div>`
                                            $('#response-message').html(html);
                                        }
                                    },
                                    error: function() {
                                        // handle AJAX error
                                        $('#response-message').html('Error processing request');
                                    }
                                });
                            });
                        });
                    </script>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>