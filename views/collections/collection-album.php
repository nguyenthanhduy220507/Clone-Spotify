<?php require_once 'style.php'; ?>
<link rel="stylesheet" href="./assets/css/index_collecttion_album.css">
</head>
<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <?php require_once('./views/header-bar-login.php') ?>
        </header>
        <main id="main-view">
            <!-- TODO Nội dung của trang con -->
            <h2 class="m-4 text-white fw-bold">Album</h2>
            <div class="container">
                <div class="row d-flex justify-content-start align-items-center">
                    <?php foreach ($data['albums'] as $album) { ?>
                        <div class="col-md-2 col-sm-6 col-8 border border-dark ms-4 mb-4">
                            <div class="card my-3" style="background-color:#1a1a1a">
                                <div class="card mt-1 px-1" style="background-color:#1a1a1a">
                                    <img src="<?php echo $album->getAlbumImageUrl() ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="play-btn-wrapper">
                                        <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                    </div>
                                    <h6 class="card-title fw-bold text-white"><?php echo $album->getAlbumTitle() ?></h6>
                                    <p class="card-text" style="color: #5b5b5b"><?php echo $album->getAlbumArtist()->getArtistName() ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <hr class="my-5 text-white">
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
<?php require_once 'script.php'; ?>

</html>