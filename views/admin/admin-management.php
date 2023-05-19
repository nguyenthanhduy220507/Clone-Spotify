<?php
require_once "./config/basehref.php";
$url = getUrl();
if (!isset($_SESSION['username'])) {
    header("Location: ?url=home/index");
} else {
    if (!isset($_SESSION['type']) || !$_SESSION['type'] == 'admin') {
        header("Location: ?url=home/index");
    }
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
    <title>Admin Page</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/niand-admin-v1.0/style.css">
    <link rel="stylesheet" href="./assets/css/admin-index.css">
    <link rel="stylesheet" href="./assets/css/search-box.css">
    <style>
        img {
            height: 120px;
            max-height: 120px;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center">
    <main class="d-flex rounded-5">
        <section id="nav-side" class="d-flex gap-5 flex-column p-2">
            <div id="logo" class="d-flex flex-column justify-content-center align-items-center">
                <img class="img-fluid" src="./assets/images/logo-coyote.png" alt="logo">
                <span class="fw-semibold">Coyote</span>
            </div>
            <nav id="nav-bar" class="my-3 my-scroll flex-grow-1 h-100" aria-labelledby="navigation sidebar">
                <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center gap-5 m-0">
                    <li><a class="d-flex flex-column gap-2 <?php if ($data['title'] == 'Albums') echo 'active-nav'; ?> justify-content-center align-items-center text-decoration-none fs-6" href="?url=admin/management/albums/1">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="niand-icon-music-album"></i>
                            </div>
                            <span class="text-capitalize">albums</span>
                        </a></li>
                    <li><a class="d-flex flex-column gap-2 <?php if ($data['title'] == 'Artists') echo 'active-nav'; ?> justify-content-center align-items-center text-decoration-none fs-6" href="?url=admin/management/artists/1">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="niand-icon-group"></i>
                            </div>
                            <span class="text-capitalize">artists</span>
                        </a></li>
                    <li><a class="d-flex flex-column gap-2 <?php if ($data['title'] == 'Playlists') echo 'active-nav'; ?> justify-content-center align-items-center text-decoration-none fs-6" href="?url=admin/management/playlists/1">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="niand-icon-playlist"></i>
                            </div>
                            <span class="text-capitalize">playlists</span>
                        </a></li>
                    <li><a class="d-flex flex-column gap-2 <?php if ($data['title'] == 'Songs') echo 'active-nav'; ?> justify-content-center align-items-center text-decoration-none fs-6" href="?url=admin/management/songs/1">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="niand-icon-music"></i>
                            </div>
                            <span class="text-capitalize">songs</span>
                        </a></li>
                    <li><a class="d-flex flex-column gap-2 <?php if ($data['title'] == 'Song Listen History') echo 'active-nav'; ?> justify-content-center align-items-center text-decoration-none fs-6" href="?url=admin/management/song_listen_history/1">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="niand-icon-music"></i>
                            </div>
                            <span class="text-capitalize">history</span>
                        </a></li>
                    <li><a class="d-flex flex-column gap-2 <?php if ($data['title'] == 'Song Playlist') echo 'active-nav'; ?> justify-content-center align-items-center text-decoration-none fs-6" href="?url=admin/management/song_playlist/1">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="niand-icon-music"></i>
                            </div>
                            <span class="text-capitalize">SP</span>
                        </a></li>
                    <li><a class="d-flex flex-column gap-2 <?php if ($data['title'] == 'Users') echo 'active-nav'; ?> justify-content-center align-items-center text-decoration-none fs-6" href="?url=admin/management/users/1">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="niand-icon-user"></i>
                            </div>
                            <span class="text-capitalize">users</span>
                        </a></li>
                </ul>
            </nav>
        </section>
        <section id="main-content" class="d-flex flex-column flex-grow-1 p-2">
            <header class="d-flex mx-5 my-3 gap-3 justify-content-center align-items-center">
                <section>
                    <a class="d-flex gap-2 justify-content-center align-items-center text-decoration-none text-white" href="javascript:history.back()">
                        <i class="niand-icon-chevron-left"></i>
                        <span class="fw-semibold text-capitalize" style="color: #c2e1eb">Back</span>
                    </a>
                </section>
                <nav class="flex-grow-1" aria-labelledby="navigation header">
                    <ul class="list-unstyled d-flex justify-content-center align-items-center gap-5 m-0">
                        <li><a class="text-decoration-none text-uppercase fw-medium" href="?url=admin/dashboard">dashboard</a></li>
                        <li><a class="text-decoration-none text-uppercase active fw-medium" href="?url=admin/management/albums/1">management</a></li>
                        <li><a class="text-decoration-none text-uppercase fw-medium" href="?url=admin/setting">settings user</a></li>
                    </ul>
                </nav>
                <section>
                    <a class="d-flex gap-2 justify-content-center align-items-center text-decoration-none text-white" href="?url=home/index">
                        <i class="niand-icon-user"></i>
                        <span class="fw-semibold" style="color: #c2e1eb"><?php echo $_SESSION['username']; ?></span>
                    </a>
                </section>
            </header>
            <section id="content" class="my-scroll flex-grow-1 m-1 p-5 bg-white rounded-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-black mb-3"><?php echo $data["title"] ?></h2>
                    <button onclick="window.location.href='?url=admin/add_form/<?php echo $data['url'] ?>'" class="btn <?php if ($data['title'] == 'Song Playlist') {
                                                                                                                            echo 'd-none';
                                                                                                                        } ?> btn-dark">Create new</button>
                </div>
                <div class="input-container my-3 mx-auto">
                    <input type="text" name="text" class="input" placeholder="search...">
                    <span class="icon">
                        <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                </div>
                <table class="table table-responsive">
                    <caption class="d-none"><?php echo $data["title"] ?></caption>
                    <thead class="table-success">
                        <tr>
                            <?php foreach ($data["table-header"] as $th) {
                                echo '<th class="text-capitalize">' . $th . '</th>';
                            } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        switch ($data['title']) {
                            case 'Albums':
                                foreach ($data["table-body"] as $tb) {
                                    echo '<tr>
                                            <td>' . $tb->getAlbumId() . '</td>
                                            <td>' . $tb->getAlbumTitle() . '</td>
                                            <td>' . $tb->getAlbumArtist()->getArtistName() . '</td>
                                            <td>' . $tb->getAlbumReleaseDate() . '</td>
                                            <td><img class="img-fluid" src="' . $tb->getAlbumImageUrl() . '" alt="' . $tb->getAlbumTitle() . '"></td>
                                            <td>
                                                <a class="text-decoration-none text-black" href="?url=admin/update_form/albums/' . $tb->getAlbumId() . '">
                                                    <i class="niand-icon-edit"></i>
                                                </a>
                                                <a class="text-decoration-none text-black" href="?url=admin/delete/albums/' . $tb->getAlbumId() . '">
                                                    <i class="niand-icon-delete"></i>
                                                </a>
                                            </td>
                                        </tr>';
                                }
                                break;
                            case 'Artists':
                                foreach ($data["table-body"] as $tb) {
                                    echo '<tr>
                                            <td>' . $tb->getArtistId() . '</td>
                                            <td>' . $tb->getArtistName() . '</td>
                                            <td>' . $tb->getArtistDescription() . '</td>
                                            <td><img class="img-fluid" src="' . $tb->getArtistImageUrl() . '" alt="' . $tb->getArtistName() . '"></td>
                                            <td>
                                                <a class="text-decoration-none text-black" href="?url=admin/update_form/artists/' . $tb->getArtistId() . '">
                                                    <i class="niand-icon-edit"></i>
                                                </a>
                                                <a class="text-decoration-none text-black" href="?url=admin/delete/artists/' . $tb->getArtistId() . '">
                                                    <i class="niand-icon-delete"></i>
                                                </a>
                                            </td>
                                        </tr>';
                                }
                                break;
                            case 'Playlists':
                                foreach ($data["table-body"] as $tb) {
                                    echo '<tr>
                                            <td>' . $tb->getPlaylistId() . '</td>
                                            <td>' . $tb->getPlaylistName() . '</td>
                                            <td>' . $tb->getPlaylistDescription() . '</td>
                                            <td>' . $tb->getPlaylistUser()->getUserId() . '</td>
                                            <td><img class="img-fluid" src="' . $tb->getPlaylistImageUrl() . '" alt="' . $tb->getPlaylistName() . '"></td>
                                            <td>
                                                <a href="?url=admin/add_song_to_playlist/' . $tb->getPlaylistId() . '" class="btn btn-outline-dark">Add Song</a>
                                            </td>
                                            <td>
                                                <a href="?url=admin/clear_all_song_from_playlist/' . $tb->getPlaylistId() . '" class="btn btn-outline-dark">Clear</a>
                                            </td>
                                            <td>
                                                <a class="text-decoration-none text-black" href="?url=admin/update_form/playlists/' . $tb->getPlaylistId() . '">
                                                    <i class="niand-icon-edit"></i>
                                                </a>
                                                <a class="text-decoration-none text-black" href="?url=admin/delete/playlists/' . $tb->getPlaylistId() . '">
                                                    <i class="niand-icon-delete"></i>
                                                </a>
                                            </td>
                                        </tr>';
                                }
                                break;
                            case 'Songs':
                                foreach ($data["table-body"] as $tb) {
                                    echo '<tr>
                                            <td>' . $tb->getSongId() . '</td>
                                            <td>' . $tb->getSongTitle() . '</td>
                                            <td>' . $tb->getSongArtist()->getArtistId() . '</td>
                                            <td>' . $tb->getSongAlbum()->getAlbumId() . '</td>
                                            <td><img class="img-fluid" src="' . $tb->getSongImageUrl() . '" alt="' . $tb->getSongTitle() . '"></td>
                                            <td><audio src="' . $tb->getSongUrl() . '" controls></audio></td>
                                            <td>' . $tb->getSongDuration() . '</td>
                                            <td>
                                                <a class="text-decoration-none text-black" href="?url=admin/update_form/songs/' . $tb->getSongId() . '">
                                                    <i class="niand-icon-edit"></i>
                                                </a>
                                                <a class="text-decoration-none text-black" href="?url=admin/delete/songs/' . $tb->getSongId() . '">
                                                    <i class="niand-icon-delete"></i>
                                                </a>
                                            </td>
                                        </tr>';
                                }
                                break;
                            case 'Song Listen History':
                                foreach ($data["table-body"] as $tb) {
                                    echo '<tr>
                                            <td>' . $tb->getListenId() . '</td>
                                            <td>' . $tb->getUser()->getUsername() . '</td>
                                            <td>' . $tb->getSong()->getSongTitle() . '</td>
                                            <td>' . $tb->getListenDate() . '</td>
                                            <td>
                                                <a class="text-decoration-none text-black" href="?url=admin/update_form/song_listen_history/' . $tb->getListenId() . '">
                                                    <i class="niand-icon-edit"></i>
                                                </a>
                                                <a class="text-decoration-none text-black" href="?url=admin/delete/song_listen_history/' . $tb->getListenId() . '">
                                                    <i class="niand-icon-delete"></i>
                                                </a>
                                            </td>
                                        </tr>';
                                }
                                break;
                            case 'Song Playlist':
                                foreach ($data["table-body"] as $tb) {
                                    echo '<tr>
                                            <td>' . $tb->getSong()->getSongTitle() . '</td>
                                            <td>' . $tb->getPlaylist()->getPlaylistName() . '</td>
                                            <td>' . $tb->getSongOrder() . '</td>
                                            <td>
                                                <a class="text-decoration-none text-black" href="?url=admin/update_form/song_playlist/' . $tb->getSong()->getSongId() . '.' . $tb->getPlaylist()->getPlaylistId() . '">
                                                    <i class="niand-icon-edit"></i>
                                                </a>
                                                <a class="text-decoration-none text-black" href="?url=admin/delete/song_playlist/' . $tb->getSong()->getSongId() . '.' . $tb->getPlaylist()->getPlaylistId() . '">
                                                    <i class="niand-icon-delete"></i>
                                                </a>
                                            </td>
                                        </tr>';
                                }
                                break;
                            case 'Users':
                                foreach ($data["table-body"] as $tb) {
                                    echo '<tr>
                                            <td>' . $tb->getUserId() . '</td>
                                            <td>' . $tb->getUsername() . '</td>
                                            <td>' . $tb->getEmail() . '</td>
                                            <td>' . $tb->getDayOfBirth() . '</td>
                                            <td>' . $tb->getGender() . '</td>
                                            <td>' . $tb->getType() . '</td>
                                            <td>
                                                <a class="text-decoration-none text-black" href="?url=admin/update_form/users/' . $tb->getUserId() . '">
                                                    <i class="niand-icon-edit"></i>
                                                </a>
                                                <a class="text-decoration-none text-black" href="?url=admin/delete/users/' . $tb->getUserId() . '">
                                                    <i class="niand-icon-delete"></i>
                                                </a>
                                            </td>
                                        </tr>';
                                }
                                break;
                        }
                        ?>
                    </tbody>
                </table>
                <div class="pagination">
                    <?php
                    for ($i = 1; $i <= $data['total-pages']; $i++) {
                        if ($i == $data['current-page']) {
                            echo '<a href="?url=admin/management/' . $data['url'] . '/' . $i . '" class="active-pag">' . $i . '</a> ';
                        } else {
                            echo '<a href="?url=admin/management/' . $data['url'] . '/' . $i . '">' . $i . '</a> ';
                        }
                    }
                    ?>
                </div>
                <style>
                    .pagination {
                        display: inline-block;
                    }

                    .pagination a {
                        color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                    }

                    .pagination a.active-pag {
                        background-color: #4CAF50;
                        color: white;
                    }

                    .pagination a:hover:not(.active-pag) {
                        background-color: #ddd;
                    }
                </style>
            </section>
        </section>
    </main>
</body>

</html>