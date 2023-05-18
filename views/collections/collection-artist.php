<?php require_once 'style.php'; ?>

<link rel="stylesheet" href="./assets/css/index_collection_artist.css">

<body>
    <div id="main" class="d-grid">
        <?php require_once 'header.php' ?>
        <main id="main-view">
            <h2 class="m-4 text-white fw-bold">Nghệ sĩ</h2>
            <div class="container">
                <div class="row d-flex justify-content-start align-items-center">
                        <?php foreach($data['artists'] as $artist) { ?>
                        <div class="col-md-2 col-sm-6 col-8 border border-dark  ms-4 mb-4">
                            <div class="card my-3" style="background-color:#1a1a1a">
                                <div class="card mt-2 px-1" style="background-color:#1a1a1a">
                                    <img src="<?php echo $artist ->getArtistImageUrl() ?>" class="card-img-top" alt="..." style="border-radius: 50%;">
                                </div>
                                <div class="card-body">
                                    <div class="play-btn-wrapper">
                                        <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                    </div>
                                    <h6 class="card-title fw-bold text-white"><?php echo $artist->getArtistName() ?></h6>
                                    <p class="card-text" style="color: #5b5b5b">Nghệ sĩ</p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <hr class="my-5 text-white">
        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
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

        <?php require_once 'footer.php'; ?>

    </div>
</body>
<?php require_once 'script.php'; ?>

</html>