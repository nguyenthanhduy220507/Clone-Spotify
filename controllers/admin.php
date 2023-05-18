<?php
require_once "./config/controller.php";
require_once "./models/Album.php";
require_once "./models/Artist.php";
require_once "./models/Playlist.php";
require_once "./models/Song.php";
require_once "./models/SongListenHistory.php";
require_once "./models/SongPlaylist.php";
require_once "./models/User.php";
class Admin extends Controller
{
    public function dashboard()
    {
        $this->view('admin/admin-dashboard', [

        ]);
    }

    public function management($type, $page)
    {
        switch ($type) {
            case 'albums':
                $table_header = ['album id', 'album title', 'album artist', 'album release date', 'album image', 'actions'];
                $DB = $this->model("AlbumModel");
                $list = $DB->getAll();
                $list_in_page = [];
                $total_items = count($list);
                $total_pages = ceil($total_items / 10); // Số lượng trang
                for ($i = 0; $i < $total_items; $i++) {
                    if ($i < ($page * 10) && $i >= (($page - 1) * 10)) {
                        $list_in_page[] = $list[$i];
                    }
                }
                $this->view('admin/admin-management', [
                    "title"=>'Albums',
                    "table-header"=>$table_header,
                    "table-body"=>$list_in_page,
                    "total-pages"=>$total_pages,
                    "current-page"=>$page,
                    "url"=>"albums"
                ]);
                break;
            case 'artists':
                $table_header = ['artist id', 'artist name', 'artist description', 'artist image', 'actions'];
                $DB = $this->model("ArtistModel");
                $list = $DB->getAll();
                $list_in_page = [];
                $total_items = count($list);
                $total_pages = ceil($total_items / 10); // Số lượng trang
                for ($i = 0; $i < $total_items; $i++) {
                    if ($i < ($page * 10) && $i >= (($page - 1) * 10)) {
                        $list_in_page[] = $list[$i];
                    }
                }
                $this->view('admin/admin-management', [
                    "title"=>'Artists',
                    "table-header"=>$table_header,
                    "table-body"=>$list_in_page,
                    "total-pages"=>$total_pages,
                    "current-page"=>$page,
                    "url"=>"artists"
                ]);
                break;
            case 'playlists':
                $table_header = ['playlist id', 'playlist name', 'playlist description', 'playlists_user', 'playlist image', 'add song', 'clear all', 'actions'];
                $DB = $this->model("PlaylistModel");
                $list = $DB->getAll();
                $list_in_page = [];
                $total_items = count($list);
                $total_pages = ceil($total_items / 10); // Số lượng trang
                for ($i = 0; $i < $total_items; $i++) {
                    if ($i < ($page * 10) && $i >= (($page - 1) * 10)) {
                        $list_in_page[] = $list[$i];
                    }
                }
                $this->view('admin/admin-management', [
                    "title"=>'Playlists',
                    "table-header"=>$table_header,
                    "table-body"=>$list_in_page,
                    "total-pages"=>$total_pages,
                    "current-page"=>$page,
                    "url"=>"playlists"
                ]);
                break;
            case 'songs':
                $table_header = ['song id', 'song title', 'song artist', 'song album', 'artist image', 'song url', 'song duration', 'actions'];
                $DB = $this->model("SongModel");
                $list = $DB->getAll();
                $list_in_page = [];
                $total_items = count($list);
                $total_pages = ceil($total_items / 10); // Số lượng trang
                for ($i = 0; $i < $total_items; $i++) {
                    if ($i < ($page * 10) && $i >= (($page - 1) * 10)) {
                        $list_in_page[] = $list[$i];
                    }
                }
                $this->view('admin/admin-management', [
                    "title"=>'Songs',
                    "table-header"=>$table_header,
                    "table-body"=>$list_in_page,
                    "total-pages"=>$total_pages,
                    "current-page"=>$page,
                    "url"=>"songs"
                ]);
                break;
            case 'song_listen_history':
                $table_header = ['listen id', 'user', 'song', 'listen date', 'actions'];
                $DB = $this->model("SongListenHistoryModel");
                $list = $DB->getAll();
                $list_in_page = [];
                $total_items = count($list);
                $total_pages = ceil($total_items / 10); // Số lượng trang
                for ($i = 0; $i < $total_items; $i++) {
                    if ($i < ($page * 10) && $i >= (($page - 1) * 10)) {
                        $list_in_page[] = $list[$i];
                    }
                }
                $this->view('admin/admin-management', [
                    "title"=>'Song Listen History',
                    "table-header"=>$table_header,
                    "table-body"=>$list_in_page,
                    "total-pages"=>$total_pages,
                    "current-page"=>$page,
                    "url"=>"song_listen_history"
                ]);
                break;
            case 'song_playlist':
                $table_header = ['song', 'playlist', 'order', 'actions'];
                $DB = $this->model("SongPlaylistModel");
                $list = $DB->getAll();
                $list_in_page = [];
                $total_items = count($list);
                $total_pages = ceil($total_items / 10); // Số lượng trang
                for ($i = 0; $i < $total_items; $i++) {
                    if ($i < ($page * 10) && $i >= (($page - 1) * 10)) {
                        $list_in_page[] = $list[$i];
                    }
                }
                $this->view('admin/admin-management', [
                    "title"=>'Song Playlist',
                    "table-header"=>$table_header,
                    "table-body"=>$list_in_page,
                    "total-pages"=>$total_pages,
                    "current-page"=>$page,
                    "url"=>"song_playlist"
                ]);
                break;
            case 'users':
                $table_header = ['user id', 'username', 'email', 'day of birth', 'gender', 'type', 'actions'];
                $DB = $this->model("UserModel");
                $list = $DB->getAll();
                $list_in_page = [];
                $total_items = count($list);
                $total_pages = ceil($total_items / 10); // Số lượng trang
                for ($i = 0; $i < $total_items; $i++) {
                    if ($i < ($page * 10) && $i >= (($page - 1) * 10)) {
                        $list_in_page[] = $list[$i];
                    }
                }
                $this->view('admin/admin-management', [
                    "title"=>'Users',
                    "table-header"=>$table_header,
                    "table-body"=>$list_in_page,
                    "total-pages"=>$total_pages,
                    "current-page"=>$page,
                    "url"=>"users"
                ]);
                break;
        }
    }

    public function add_form($type)
    {
        $userDB = $this->model("UserModel");
        $artistDB = $this->model("ArtistModel");
        $songDB = $this->model("SongModel");
        $albumDB = $this->model("AlbumModel");
        switch ($type) {
            case 'albums':
                $this->view('admin/form/form-album', [
                    "type"=>"add",
                    "artists"=>$artistDB->getAll()
                ]);
                break;
            case 'artists':
                $this->view('admin/form/form-artist', [
                    "type"=>"add"
                ]);
                break;
            case 'playlists':
                $this->view('admin/form/form-playlist', [
                    "type"=>"add",
                    "users"=>$userDB->getAll()
                ]);
                break;
            case 'songs':
                $this->view('admin/form/form-song', [
                    "type"=>"add",
                    "artists"=>$artistDB->getAll(),
                    "albums"=>$albumDB->getAll()
                ]);
                break;
            case 'song_listen_history':
                $this->view('admin/form/form-listenhistory', [
                    "type"=>"add",
                    "users"=>$userDB->getAll(),
                    "songs"=>$songDB->getAll()
                ]);
                break;
            case 'users':
                $this->view('admin/form/form-user', [
                    "type"=>"add"
                ]);
                break;
        }
    }

    public function update_form($type, $id)
    {
        $userDB = $this->model("UserModel");
        $artistDB = $this->model("ArtistModel");
        $songDB = $this->model("SongModel");
        $albumDB = $this->model("AlbumModel");
        $playlistDB = $this->model("PlaylistModel");
        $songlsDB = $this->model("SongListenHistoryModel");
        switch ($type) {
            case 'albums':
                $this->view('admin/form/form-album', [
                    "type"=>"update",
                    "artists"=>$artistDB->getAll(),
                    "album"=>$albumDB->getById($id)
                ]);
                break;
            case 'artists':
                $this->view('admin/form/form-artist', [
                    "type"=>"update",
                    "artist"=>$artistDB->getById($id)
                ]);
                break;
            case 'playlists':
                $this->view('admin/form/form-playlist', [
                    "type"=>"update",
                    "users"=>$userDB->getAll(),
                    "playlist"=>$playlistDB->getById($id)
                ]);
                break;
            case 'songs':
                $this->view('admin/form/form-song', [
                    "type"=>"update",
                    "artists"=>$artistDB->getAll(),
                    "albums"=>$albumDB->getAll(),
                    "song"=>$songDB->getById($id)
                ]);
                break;
            case 'song_listen_history':
                $this->view('admin/form/form-listenhistory', [
                    "type"=>"update",
                    "users"=>$userDB->getAll(),
                    "songs"=>$songDB->getAll(),
                    "ls"=>$songlsDB->getById($id)
                ]);
                break;
            case 'song_playlist':
                $parts = explode(".", $id);
                $this->view('admin/form/form-songplaylist', [
                    "type"=>"update",
                    "song_id"=>$parts[0],
                    "id"=>$parts[1]
                ]);
                break;
            case 'users':
                $this->view('admin/form/form-user', [
                    "type"=>"update",
                    "user"=>$userDB->getById($id)
                ]);
                break;
        }
    }

    public function delete($type, $id) {
        $DB = null;
        switch ($type) {
            case 'albums':
                $DB = $this->model("AlbumModel");
                break;
            case 'artists':
                $DB = $this->model("ArtistModel");
                break;
            case 'playlists':
                $DB = $this->model("PlaylistModel");
                break;
            case 'songs':
                $DB = $this->model("SongModel");
                break;
            case 'song_listen_history':
                $DB = $this->model("SongListenHistoryModel");
                break;
            case 'users':
                $DB = $this->model("UserModel");
                break;
        }
        if ($DB != null) {
            $DB->delete($id);
            header('Location: ?url=admin/management/'.$type.'/1');
        } else if ($type == 'song_playlist') {
            $parts = explode(".", $id);
            $DB = $this->model("SongPlaylistModel")->removeSongFromPlaylist($parts[0], $parts[1]);
            header('Location: ?url=admin/management/'.$type.'/1');
        }
    }

    public function add_song_to_playlist($id) {
        $playlistDB = $this->model('PlaylistModel');
        $songDB = $this->model('SongModel');
        $DB = $this->model('SongPlaylistModel');
        $this->view('admin/form/form-songplaylist', [
            'name'=>$playlistDB->getById($id)->getPlaylistName(),
            'id'=>$id,
            'songs'=>$songDB->getAll()
        ]);
    }

    public function clear_all_song_from_playlist($id) {
        $DB = $this->model('SongPlaylistModel');
        $DB->clearPlaylist($id);
        header('Location: ?url=admin/management/playlists/1');
    }

    public function auth_album_form($type)
    {
        if ($type == 'add') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $title = $_POST['title'];
                $artist_id = $_POST['artist'];
                $release_date = $_POST['release_date'];
                $image_url = $_POST['image_url'];
                $artist = $this->model("ArtistModel")->getById($artist_id);
                $album = new Album(0, $title, $artist, $release_date, $image_url);
                $success = $this->model("AlbumModel")->create($album);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
        else if ($type == 'update') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $artist_id = $_POST['artist'];
                $release_date = $_POST['release_date'];
                $image_url = $_POST['image_url'];
                $artist = $this->model("ArtistModel")->getById($artist_id);
                $album = new Album($id, $title, $artist, $release_date, $image_url);
                $success = $this->model("AlbumModel")->update($album);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
    }

    public function auth_artist_form($type)
    {
        if ($type == 'add') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $image_url = $_POST['image_url'];
                $artist = new Artist(0, $name, $description, $image_url);
                $success = $this->model("ArtistModel")->create($artist);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
        else if ($type == 'update') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $image_url = $_POST['image_url'];
                $artist = new Artist($id, $name, $description, $image_url);
                $success = $this->model("ArtistModel")->update($artist);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
    }

    public function auth_playlist_form($type)
    {
        if ($type == 'add') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $user_id = $_POST['user'];
                $image_url = $_POST['image_url'];
                $user = $this->model("UserModel")->getById($user_id);
                $playlist = new Playlist(0, $name, $description, $user, $image_url);
                $success = $this->model("PlaylistModel")->create($playlist);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
        else if ($type == 'update') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $user_id = $_POST['user'];
                $image_url = $_POST['image_url'];
                $user = $this->model("UserModel")->getById($user_id);
                $playlist = new Playlist($id, $name, $description, $user, $image_url);
                $success = $this->model("PlaylistModel")->update($playlist);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
    }

    public function auth_song_form($type)
    {
        if ($type == 'add') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $title = $_POST['title'];
                $artist_id = $_POST['artist'];
                $album_id = $_POST['album'];
                $image_url = $_POST['image_url'];
                $song_url = $_POST['song_url'];
                $song_duration = $_POST['song_duration'];
                $artist = $this->model("ArtistModel")->getById($artist_id);
                $album = $this->model("AlbumModel")->getById($album_id);
                $song = new Song(0, $title, $artist, $album, $image_url, $song_url, $song_duration);
                $success = $this->model("SongModel")->create($song);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
        else if ($type == 'update') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $artist_id = $_POST['artist'];
                $album_id = $_POST['album'];
                $image_url = $_POST['image_url'];
                $song_url = $_POST['song_url'];
                $song_duration = $_POST['song_duration'];
                $artist = $this->model("ArtistModel")->getById($artist_id);
                $album = $this->model("AlbumModel")->getById($album_id);
                $song = new Song($id, $title, $artist, $album, $image_url, $song_url, $song_duration);
                $success = $this->model("SongModel")->update($song);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
    }

    public function auth_ls_form($type)
    {
        if ($type == 'add') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $user_id = $_POST['user'];
                $song_id = $_POST['song'];
                $listen_date = $_POST['listen_date'];
                $user = $this->model("UserModel")->getById($user_id);
                $song = $this->model("SongModel")->getById($song_id);
                $songls = new SongListenHistory(0, $user, $song, $listen_date);
                $success = $this->model("SongListenHistoryModel")->create($songls);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
        else if ($type == 'update') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $id = $_POST['id'];
                $user_id = $_POST['user'];
                $song_id = $_POST['song'];
                $listen_date = $_POST['listen_date'];
                $user = $this->model("UserModel")->getById($user_id);
                $song = $this->model("SongModel")->getById($song_id);
                $songls = new SongListenHistory($id, $user, $song, $listen_date);
                $success = $this->model("SongListenHistoryModel")->update($songls);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
    }

    public function auth_sp_form($type)
    {
        if ($type == 'add') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $id = $_POST['id'];
                $order = $_POST['order'];
                $song_id = $_POST['song'];
                $playlist = $this->model("PlaylistModel")->getById($id);
                $song = $this->model("SongModel")->getById($song_id);
                $sp = new SongPlaylist($song, $playlist, $order);
                $success = $this->model("SongPlayListModel")->addSongToPlaylist($sp);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
        else if ($type == 'update') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $id = $_POST['id'];
                $order = $_POST['order'];
                $song_id = $_POST['song'];
                $success = $this->model("SongPlayListModel")->updateSongOrder($song_id, $id, $order);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
    }

    public function auth_user_form($type)
    {
        if ($type == 'add') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $options = [
                    'cost' => 12,
                    'max_cost' => 12
                ];
                $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);
                $email = $_POST['email'];
                $day_of_birth = $_POST['day_of_birth'];
                $gender = $_POST['gender'];
                $type = $_POST['type'];
                $success = $this->model("UserModel")->create($username, $hashed_password, $email, $day_of_birth, $gender, $type);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
        else if ($type == 'update') {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
                && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $day_of_birth = $_POST['day_of_birth'];
                $gender = $_POST['gender'];
                $type = $_POST['type'];
                $user = new User($id, $username, $password, $email, $day_of_birth, $gender, $type);
                $success = $this->model("UserModel")->update($user);
                // return JSON response
                header('Content-Type: application/json');
                echo json_encode(array('success' => $success));
            }
        }
    }

    public function setting()
    {
        $this->view('admin/admin-settings-user', [

        ]);
    }
}