<?php
    require_once "./config/basehref.php";
    $url = getUrl();
    if (isset($_SESSION['username'])) {
        header("Location: ?url=home/index_login");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        echo "<base href='".$url."'>";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/spotify.ico">
    <meta property="og:image" content="./assets/images/spotify.png">
    <title>Spotify - Trình phát trên web</title>
    <!-- Icon Css -->
    <link rel="stylesheet" href="../assets/fonts/style.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="../assets/fonts/ie7/ie7.css">
    <!--<![endif]-->
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- CSS - SCSS -->
    <link rel="stylesheet" href="../assets/css/index.css">
    <?php
        if (isset($css)) {
            echo $css;
        }
    ?>
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div id="action-buttons" class="d-flex flex-shrink-1">
                    <button type="button" title="Quay lại" class="d-flex justify-content-center align-items-center">
                        <i class="niand-icon-spotify-left"></i>
                    </button>
                    <button type="button" title="Tiếp theo" class="d-flex justify-content-center align-items-center">
                        <i class="niand-icon-spotify-right"></i>
                    </button>
                </div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white">Premium</a></div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white">Hỗ trợ</a></div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white">Tải xuống</a></div>
                <div id="vertical-line"></div>
                <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                    <button
                        onclick="window.location.href='?url=auth/register_view'"
                        id="sign-up" type="button"
                        class="text-white me-4">
                            Đăng ký
                    </button>
                    <button
                        onclick="window.location.href='?url=auth/login_view'"
                        id="sign-in"
                        type="button"
                        class="rounded-5">
                            Đăng nhập
                    </button>
                </div>
            </div>
        </header>

        <main id="main-view">
            <!-- Nội dung của trang con -->
            <?php echo $content; ?>
        </main>

        <div id="side-bar" class="d-flex flex-column">
            <div id="logo">
                <div class="w-100">
                    <a href="?url=home/index" class="text-white">
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

</html>