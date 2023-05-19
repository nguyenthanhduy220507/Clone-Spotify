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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/images/spotify.ico" />
    <meta property="og:image" content="./assets/images/spotify.png" />
    <title>Spotify - Trình phát trên web</title>
    <!-- Icon Css -->
    <link rel="stylesheet" href="./assets/fonts/style.css" />
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="./assets/fonts/ie7/ie7.css" />
    <!--<![endif]-->
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- CSS - SCSS -->
    <link rel="stylesheet" href="./assets/css/index_help.css" />
    <style>
        @media(max-width: 767px) {
            #action-buttons {
                margin-top: 0px;
                margin-left: 50px;
            }
        }
    </style>
</head>

<body>
    <div id="container">
        <div class="container sm-12 lg-3 md-4">
            <div id="top-bar">
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <div id="action-buttons" class="d-flex flex-shrink-1">
                        <button type="button" title="Quay lại" class="d-flex justify-content-center align-items-center">
                            <i class="niand-icon-spotify-logo"></i>
                        </button>
                    </div>
                    <div class="btn-nav flex-shrink-1 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                        <a href="#" class="text-white">Premium</a>
                    </div>
                    <div class="btn-nav flex-shrink-1 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                        <a href="#" class="text-white">Hỗ trợ</a>
                    </div>
                    <div class="btn-nav flex-shrink-1 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                        <a href="#" class="text-white">Tải xuống</a>
                    </div>
                    <div id="vertical-line" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none"></div>
                    <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                        <button onclick="window.location.href='?url=auth/register_view'" id="sign-up" type="button" class="text-white me-4">
                            Đăng ký
                        </button>
                        <button onclick="window.location.href='?url=auth/login_view'" id="sign-in" type="button" class="rounded-5">
                            Đăng nhập
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <main id="main-view">
            <div class="container" style="max-width: 628px; margin: 0px auto; padding: 32px 16px">
                <p class="fs-6 text-white">NHÓM HỖ TRỢ CỦA SPOTIFY</p>
                <p class="fw-bold text-white" style="font-size: 3.5rem; font-weight: 500">
                    Chúng tôi có thể giúp bạn như thế nào?
                </p>
                <p class="fs-4 text-white">
                    <a href="?url=auth/login_view" class="text-decoration-underline text-white">Đăng nhập</a>
                    để được trợ giúp nhanh hơn
                </p>
                <div class="bg-light mb-3 mt-5">
                    <form class="d-flex justify-content-center align-items-center">
                        <a href="" class="text-dark ms-2"><i class="niand-icon-spotify-search"></i></a>
                        <input class="form-control border-0 ms-2" type="search" placeholder="Tìm Kiếm" aria-label="Search" />
                    </form>
                </div>
                <div class="container md-4 lg-3 sm-12" style="margin-bottom: 100px">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card mt-2" id="post_card">
                                <div class="card-body" style="height: 100px; position: relative">
                                    <a href="" class="text-decoration-none text-light">
                                        <h6 class="card-title fw-bold fs-6">
                                            Trợ giúp thanh toán
                                        </h6>
                                    </a>
                                    <img src="https://cdn.sanity.io/images/tsbk0zvv/production/a1f5c90620915aba2fc363330ecd1dbff17b7736-128x128.png?w=64&fit=max&auto=format" class="card-img-top img_1" alt="..." style="
                        width: 50px;
                        position: absolute;
                        top: -10px;
                        left: 135px;
                      " />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card mt-2" id="post_card1">
                                <div class="card-body" style="height: 100px; position: relative">
                                    <a href="" class="text-decoration-none text-light">
                                        <h6 class="card-title fw-bold fs-5">
                                            Trợ giúp về gói
                                        </h6>
                                    </a>
                                    <img src="https://cdn.sanity.io/images/tsbk0zvv/production/10bb309130cdd8dfe85a0e0e130ecdedc0ca22c6-128x128.png?w=64&fit=max&auto=format" class="card-img-top img_1" alt="..." style="
                        width: 50px;
                        position: absolute;
                        top: -10px;
                        left: 135px;
                      " />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card mt-2" id="post_card2">
                                <div class="card-body" style="height: 100px; position: relative">
                                    <a href="" class="text-decoration-none text-light">
                                        <h6 class="card-title fw-bold fs-5">
                                            Trợ giúp về ứng dụng
                                        </h6>
                                    </a>
                                    <img src="https://cdn.sanity.io/images/tsbk0zvv/production/59459c592409b198e88b2b4cd6e4da99306a04fa-128x128.png?w=64&fit=max&auto=format" class="card-img-top img_1" alt="..." style="
                        width: 50px;
                        position: absolute;
                        top: -10px;
                        left: 135px;
                      " />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card mt-2" id="post_card3">
                                <div class="card-body" style="height: 100px; position: relative">
                                    <a href="" class="text-decoration-none text-light">
                                        <h6 class="card-title fw-bold fs-5">
                                            Trợ giúp về thiết bị
                                        </h6>
                                    </a>
                                    <img src="https://cdn.sanity.io/images/tsbk0zvv/production/3e2fdd408d9175cbf6dc77fbd24fa0667aec5867-128x128.png?w=64&fit=max&auto=format" class="card-img-top img_1" alt="..." style="
                        width: 50px;
                        position: absolute;
                        top: -10px;
                        left: 135px;
                      " />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card mt-2" id="post_card4">
                                <div class="card-body" style="height: 100px; position: relative">
                                    <a href="" class="text-decoration-none text-light">
                                        <h6 class="card-title fw-bold fs-5">
                                            An toàn và Quyền riêng tư
                                        </h6>
                                    </a>
                                    <img src="https://cdn.sanity.io/images/tsbk0zvv/production/c39439e03b41892767854a2dafae387d68e397c5-128x128.png?w=64&fit=max&auto=format" class="card-img-top img_1" alt="..." style="
                        width: 50px;
                        position: absolute;
                        top: -10px;
                        left: 135px;
                      " />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm6 col-12">
                            <div class="card mt-2" id="post_card5">
                                <div class="card-body" style="height: 100px; position: relative">
                                    <a href="" class="text-decoration-none text-light">
                                        <h6 class="card-title fw-bold fs-5">
                                            Trợ giúp về tài khoản
                                        </h6>
                                    </a>
                                    <img src="https://cdn.sanity.io/images/tsbk0zvv/production/972abc9b7961e17d356b069c8be9dbaaf3ea51f3-128x128.png?w=64&fit=max&auto=format" class="card-img-top img_1" alt="..." style="
                        width: 50px;
                        position: absolute;
                        top: -10px;
                        left: 135px;
                      " />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fuild" style="background-color: #2a2a2a">
                <div class="container ps-0" style="
              background-color: #2a2a2a;
              max-width: 628px;
              margin: 0px auto;
              padding: 32px 16px;
            ">
                    <h3 class="text-white mb-5">Trợ giúp nhanh</h3>
                    <div class="d-flex gap-2 mb-4">
                        <div class="flex-grow-1 ms-3">
                            <a href="" class="text-white hover_a">Không thể đặt mật khẩu</a>
                        </div>
                        <div>
                            <a href=""><i class="niand-icon-spotify-right text-white"></i></a>
                        </div>
                    </div>
                    <div class="d-flex gap-2 mb-4">
                        <div class="flex-grow-1 ms-3">
                            <a href="" class="text-white hover_a">Bạn không nhớ thông tin đăng nhập</a>
                        </div>
                        <div>
                            <a href=""><i class="niand-icon-spotify-right text-white"></i></a>
                        </div>
                    </div>
                    <div class="d-flex gap-2 mb-4">
                        <div class="flex-grow-1 ms-3">
                            <a href="" class="text-white hover_a">Trợ giúp về đăng nhập bằng Facebook</a>
                        </div>
                        <div>
                            <a href=""><i class="niand-icon-spotify-right text-white"></i></a>
                        </div>
                    </div>
                    <div class="d-flex gap-2 mb-4">
                        <div class="flex-grow-1 ms-3">
                            <a href="" class="text-white hover_a">Phương tiện thanh toán</a>
                        </div>
                        <div>
                            <a href=""><i class="niand-icon-spotify-right text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fuild sm-12 md-4 lg-3" style="background-color:#000000">
                <div class="container" style="background-color:#000000; padding-top: 65px">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <a href=""><i class="niand-icon-spotify-logo text-white" style="font-size:2rem"></i></a>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <ul class="text-white">
                                        <h2 class="fs-6" style="color: #3b3b3b">CÔNG TY</h2>
                                        <li class="fs-6 mt-3 hover_li">Giới thiệu</li>
                                        <li class="fs-6mt-2 hover_li">Việc làm</li>
                                        <li class="fs-6 mt-2 hover_li">For the Record</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <ul class="text-white">
                                        <h2 class="fs-6" style="color: #3b3b3b">CỘNG ĐỒNG</h2>
                                        <li class="fs-6 mt-3 hover_li">Dành cho các Nghệ sĩ</li>
                                        <li class="fs-6mt-2 hover_li">Nhà phát triễn</li>
                                        <li class="fs-6 mt-2 hover_li">Quảng cáo</li>
                                        <li class="fs-6mt-2 hover_li">Nhà đầu tư</li>
                                        <li class="fs-6 mt-2 hover_li">Nhà cung cấp</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <ul class="text-white">
                                        <h2 class="fs-6 hover_li" style="color: #3b3b3b; white-space: nowrap;">LIÊN KIẾT
                                            HỮU ÍCH</h2>
                                        <li class="fs-6 mt-3 hover_li" style="white-space: nowrap;">Hổ trợ</li>
                                        <li class="fs-6mt-2 hover_li" style="white-space: nowrap;">Trình duyệt Web</li>
                                        <li class="fs-6 mt-2 hover_li" style="white-space: nowrap;">Ứng dụng di động miễn phí</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 d-flex">
                            <div class="col-md-6 col-sm-12 col-lg-3"></div>
                            <div class="col-md-6 col-sm-12  col-lg-3">
                                <ul class="d-flex list-unstyled">
                                    <li class="me-3"><a href="" class="rounded-5 p-2 fs-4 border border-circle" style="background-color:#3b3b3b"><i class="niand-icon-instagram text-white"></i></a></li>
                                    <li class="me-3"><a href="" class="rounded-5 p-2 fs-4 border border-circle" style="background-color:#3b3b3b"><i class="niand-icon-twitter text-white"></i></a></li>
                                    <li class="me-3"><a href="" class="rounded-5 p-2 fs-4 border border-circle" style="background-color:#3b3b3b"><i class="niand-icon-facebook text-white"></i></a></li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="container" style="background-color:#000000; padding-top: 65px">
                        <div class="d-flex justify-content-end">
                            <a href="" class="font_size_p_footer hover_li">Việt Nam (Tiếng Việt)</a>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-2  me-2">
                                            <p class="font_size_p_footer hover_li">Pháp lý</p>
                                        </div>
                                        <div class="col-md-2 me-2">
                                            <p class="font_size_p_footer hover_li" style="white-space: nowrap;">Trung
                                                tâm bảo mật</p>
                                        </div>
                                        <div class="col-md-2 me-5">
                                            <p class="font_size_p_footer hover_li" style="white-space: nowrap;">Chính
                                                sách Quyền riêng tư</p>
                                        </div>
                                        <div class="col-md-2 me-2">
                                            <p class="font_size_p_footer hover_li" style="white-space: nowrap;">Cookie
                                            </p>
                                        </div>
                                        <div class="col-md-2 me-2">
                                            <p class="font_size_p_footer hover_li" style="white-space: nowrap;">Giới
                                                thiệu Quảng cáo</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-0">
                                    <div class="d-flex justify-content-end">
                                        <p class="font_size_p_footer">© 2023 Spotify AB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>