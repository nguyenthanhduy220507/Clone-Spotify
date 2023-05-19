<?php require_once 'style.php' ?>
<link rel="stylesheet" href="./assets/css/collection-like-song.css">
</head>
<body>
    <div id="main" class="d-grid">
        <header id="top-bar" style="background-color:#4c3693">
            <?php require_once('./views/header-bar-login.php') ?>
        </header>
        <main id="main-view">
            <div class="p-2" style="background-color: #4c3693">
                <div class="card mb-3" style="background-color: #4c3693; border: none">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-right: -50px;">
                            <img src="https://t.scdn.co/images/3099b3803ad9496896c43f22fe9be8c4.png" class="img-fluid rounded-start" alt="..." style="width: 65%">
                        </div>
                        <div class="col-md-8" style="margin-top: 100px">
                            <div class="card-body">
                                <h5 class="card-title text-white">Playlist</h5>
                                <p class="card-text text-white fw-bold" style="font-size:60px">Bài hát đã thích</p>
                                <div class="d-flex text-white">
                                    <a href="" class="mx-1 text-white hover_a">
                                        <?php echo $data['users'][0]->getUsername() ?></a>
                                    <p class="mx-1"> • <?php echo count($data['songs']) ?> bài hát</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fuild" style="background-color: #20183d">
                <div class="container d-flex align-items-center py-5" style="background-color: #20183d; height:50px">
                    <a href="" class="rounded-circle me-3 p-2 fs-3" style="background-color: #1fdf64;">
                        <i class="niand-icon-spotify-play text-dark"></i>
                    </a>
                </div>
            </div>
            <div id="chua_dat_ten">
                <div class="container-fuild">
                    <div class="container data-row py-1" style="background-color: #2b2b2b">
                        <div class="row my_row">
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <span class="text-white">#</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left ps-0">
                                <span class="text-white">Tiêu đề</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left ps-0 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                                <span class="text-white">Album</span>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-left ps-0 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                                <span class="text-white">Ngày thêm</span>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="niand-icon-spotify-clock text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $counter = 1; ?>
                <?php foreach ($data['songs'] as $song) { ?>
                    <div class="container mt-2 data-row">
                        <div class="container-fuild">
                            <div class="row my_row">
                                <div class="col-1 d-flex align-items-center justify-content-center">
                                    <span class="text-white"><?php echo $counter++; ?></span>
                                </div>
                                <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                    <img src="<?php echo $song->getSongImageUrl() ?>" class="py-2 img-fluid rounded-start" alt="..." style="height: 75px">
                                    <div class="ms-3">
                                        <div class="">
                                            <a href="" class="card-title fw-bold mt-2 hover_a text-white" style="font-size:13px"><?php echo $song->getSongTitle() ?></a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="" class="card-text hover_a" style="font-size:13px; color: #6b6b6b"><?php echo $song->getSongArtist()->getArtistName() ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                    <div class="card-body">
                                        <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">
                                            <?php echo $song->getSongAlbum()->getAlbumTitle() ?>
                                        </a><br>
                                    </div>
                                </div>
                                <div class="col-3 d-flex align-items-center justify-content-left px-0">
                                    <div class="card-body">
                                        <a href="#" class="card-title mt-2 text-white hover_a d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" style="font-size:15px">2 tuần trước
                                        </a><br>
                                    </div>
                                </div>
                                <div class="col-2 d-flex align-items-center justify-content-center">
                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-end">
                                        <a href="" class="text-white me-4 icon_heart"><i class="niand-icon-spotify-heart"></i> </a>
                                        <span class="text-white"><?php echo sprintf("%d:%02d", floor($song->getSongDuration() / 60), $song->getSongDuration() % 60); ?></span>
                                        <a href="" class="text-white ms-4 icon_three_dot"><i class="niand-icon-spotify-three-dots"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php $counter++; ?>
                <?php } ?>
            </div>
        </main>

        <div id="side-bar" class="d-md-flex d-lg-flex d-xl-flex d-sm-none d-none d-flex flex-column">
            <?php require_once('./views/side-bar.php') ?>
        </div>
        <footer>
            <?php require_once('./views/playing-bar.php') ?>
        </footer>
    </div>
</body>
<?php require_once 'script.php' ?>

</html>