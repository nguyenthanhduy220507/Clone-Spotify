<?php require_once 'style.php'; ?>

<link rel="stylesheet" href="./assets/css/index_collection_playlist.css">
</head>
<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <?php require_once('./views/header-bar-login.php') ?>
        </header>
        <main id="main-view">
            <h2 class="m-4 text-white fw-bold">Playlist</h2>
            <div class="container m-4">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-lg-5 col-12 ps-0 pe-4 mb-3">
                        <div class="card" id="post_card">
                            <div class="card-body" style="position: relative;">
                                <div class="play-btn-wrapper" style="position: absolute; top:265px; left:380px">
                                    <a href="?url=collections/collection_like_song" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                </div>
                                <a href="" class="text-decoration-none text-light">
                                    <h5 class="card-title fw-bold fs-3" style="margin-top:200px">
                                        Bài hát đã thích
                                    </h5>
                                    <p class="mb-0 mt-3"><?php echo count($data['songs']) ?> bài hát đã thích</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($data['playlists'] as $playlist) { ?>
                        <div class="col-md-2 col-sm-6 col-lg-2 col-5 border border-dark hover_div ms-4 mb-3">
                            <div class="card my-3">
                                <div class="card mt-2">
                                    <img src="<?php echo $playlist->getPlaylistImageUrl() ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="play-btn-wrapper">
                                        <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play fs-5 hightlight1"> </i></a>
                                    </div>
                                    <h6 class="card-title fw-bold"><?php echo $playlist->getPlaylistName() ?></h6>
                                    <p class="card-text text_font"><?php echo $playlist->getPlaylistDescription() ?></p>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>
                <hr class="my-5 text-white">
            </div>
        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
            <?php require_once('./views/side-bar.php'); ?>
        </div>
        <footer>
            <?php require_once('./views/playing-bar.php') ?>
        </footer>
    </div>
</body>
<?php require_once 'script.php'; ?>

</html>