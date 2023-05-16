<?php
require_once "./config/controller.php";
require_once "./models/Album.php";
require_once "./models/Artist.php";
require_once "./models/Playlist.php";
require_once "./models/Song.php";
class Admin extends Controller
{
    public function dashboard()
    {
        $this->view('admin/admin-dashboard', [

        ]);
    }

    public function management($type)
    {
        switch ($type) {
            case 'albums':
                $table_header = ['album id', 'album title', 'album artist', 'album release date', 'album image', 'actions'];
                $DB = $this->model("AlbumModel");
                $this->view('admin/admin-management', [
                    "title"=>'Albums',
                    "table-header"=>$table_header,
                    "table-body"=>$DB->getAll(),
                    "url"=>"albums"
                ]);
                break;
            case 'artists':
                $table_header = ['artist id', 'artist name', 'artist description', 'artist image', 'actions'];
                $DB = $this->model("ArtistModel");
                $this->view('admin/admin-management', [
                    "title"=>'Artists',
                    "table-header"=>$table_header,
                    "table-body"=>$DB->getAll(),
                    "url"=>"artists"
                ]);
                break;
            case 'playlists':
                $table_header = ['playlist id', 'playlist name', 'playlist description', 'playlists_user', 'playlist image', 'actions'];
                $DB = $this->model("PlaylistModel");
                $this->view('admin/admin-management', [
                    "title"=>'Playlists',
                    "table-header"=>$table_header,
                    "table-body"=>$DB->getAll(),
                    "url"=>"playlists"
                ]);
                break;
            case 'songs':
                $table_header = ['song id', 'song title', 'song artist', 'song album','artist image', 'song url', 'song duration', 'actions'];
                $DB = $this->model("SongModel");
                $this->view('admin/admin-management', [
                    "title"=>'Songs',
                    "table-header"=>$table_header,
                    "table-body"=>$DB->getAll(),
                    "url"=>"songs"
                ]);
                break;
            case 'song_listen_history':
                break;
            case 'song_playlist':
                break;
            case 'users':
                break;
        }
    }

    public function add_form($type)
    {
        switch ($type) {
            case 'albums':
                $artistDB = $this->model("ArtistModel");
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
                $userDB = $this->model("UserModel");
                $this->view('admin/form/form-playlist', [
                    "type"=>"add",
                    "users"=>$userDB->getAll()
                ]);
                break;
            case 'songs':
                $artistDB = $this->model("ArtistModel");
                $albumDB = $this->model("AlbumModel");
                $this->view('admin/form/form-song', [
                    "type"=>"add",
                    "artists"=>$artistDB->getAll(),
                    "albums"=>$albumDB->getAll()
                ]);
                break;
            case 'song_listen_history':
                break;
            case 'song_playlist':
                break;
            case 'users':
                break;
        }
    }

    public function update_form($type, $id)
    {
        switch ($type) {
            case 'albums':
                $albumDB = $this->model("AlbumModel");
                $artistDB = $this->model("ArtistModel");
                $this->view('admin/form/form-album', [
                    "type"=>"update",
                    "artists"=>$artistDB->getAll(),
                    "album"=>$albumDB->getById($id)
                ]);
                break;
            case 'artists':
                $artistDB = $this->model("ArtistModel");
                $this->view('admin/form/form-artist', [
                    "type"=>"update",
                    "artist"=>$artistDB->getById($id)
                ]);
                break;
            case 'playlists':
                $playlistDB = $this->model("PlaylistModel");
                $userDB = $this->model("UserModel");
                $this->view('admin/form/form-playlist', [
                    "type"=>"update",
                    "users"=>$userDB->getAll(),
                    "playlist"=>$playlistDB->getById($id)
                ]);
                break;
            case 'songs':
                $songDB = $this->model("SongModel");
                $artistDB = $this->model("ArtistModel");
                $albumDB = $this->model("AlbumModel");
                $this->view('admin/form/form-song', [
                    "type"=>"update",
                    "artists"=>$artistDB->getAll(),
                    "albums"=>$albumDB->getAll(),
                    "song"=>$songDB->getById($id)
                ]);
                break;
            case 'song_listen_history':
                break;
            case 'song_playlist':
                break;
            case 'users':
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
            case 'song_playlist':
                break;
            case 'users':
                $DB = $this->model("UserModel");
                break;
        }
        if ($DB != null) {
            $DB->delete($id);
            header('Location: ?url=admin/management/'.$type);
        }
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

    public function setting()
    {
        $this->view('admin/admin-settings-user', [

        ]);
    }
}