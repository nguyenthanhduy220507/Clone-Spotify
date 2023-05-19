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
    <meta property="og:image" content="../assets/images/spotify.png">
    <title>Song</title>
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="d4x95j5y8f6pv0s"></script>
    <script src="./assets/js/dropboxapi.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div class="container mt-3 mb-5">
        <h2>Song</h2>
        <form id="form" method="post">
            <div class="mb-3 mt-3">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="id" value="<?php if (isset($data['song'])) echo $data['song']->getSongId(); ?>" placeholder="Id" name="id" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" value="<?php if (isset($data['song'])) echo $data['song']->getSongTitle(); ?>" placeholder="Enter title" name="title" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="song_duration">Song duration:</label>
                <input type="number" class="form-control" value="<?php if (isset($data['song'])) echo $data['song']->getSongDuration(); ?>" id="song_duration" placeholder="Enter song duration" name="song_duration" required>
            </div>
            <div class="mb-3">
                <label for="artist" class="form-label">Select artist:</label>
                <input class="form-control" list="artists" value="<?php if (isset($data['song'])) echo $data['song']->getSongArtist()->getArtistId(); ?>" name="artist" id="artist" placeholder="Select artist">
                <datalist id="artists">
                    <?php
                    foreach ($data['artists'] as $artist) {
                        echo '<option value="' . $artist->getArtistId() . '">' . $artist->getArtistName() . '</option>';
                    }
                    ?>
                </datalist>
            </div>
            <div class="mb-3">
                <label for="album" class="form-label">Select album:</label>
                <input class="form-control" list="albums" value="<?php if (isset($data['song'])) echo $data['song']->getSongAlbum()->getAlbumId(); ?>" name="album" id="album" placeholder="Select album">
                <datalist id="albums">
                    <?php
                    foreach ($data['albums'] as $album) {
                        echo '<option value="' . $album->getAlbumId() . '">' . $album->getAlbumTitle() . '</option>';
                    }
                    ?>
                </datalist>
            </div>
            <div class="mb-3 mt-3">
                <label for="image-url">Image url:</label>
                <input type="url" class="form-control" value="<?php if (isset($data['song'])) echo $data['song']->getSongImageUrl(); ?>" id="image-url" placeholder="Enter image url" name="image-url" required>
                <!-- <input id="chooser-image" class="btn btn-success mt-1" type="button" value="Chooser"> -->
                <div style="height: 500px;" id="screen-image"></div>
                <script>
                    var options = {
                        // Shared link to Dropbox file
                        link: "https://www.dropbox.com/scl/fo/fj4zbvtfjaz38d1a6laxh/h?dl=0&rlkey=3di3qqnglaadmjq2br7f5oggq",
                        file: {
                            // Sets the zoom mode for embedded files. Defaults to 'best'.
                            zoom: "best" // or "fit"
                        },
                        folder: {
                            // Sets the view mode for embedded folders. Defaults to 'list'.
                            view: "list", // or "grid"
                            headerSize: "normal" // or "small"
                        }
                    }
                    Dropbox.embed(options, document.getElementById('screen-image'));
                </script>
            </div>
            <div class="mb-3 mt-3">
                <label for="song-url">Song url:</label>
                <input type="url" class="form-control" value="<?php if (isset($data['song'])) echo $data['song']->getSongUrl(); ?>" id="song-url" placeholder="Enter song url" name="song-url" required>
                <!-- <input id="chooser-audio" class="btn btn-success mt-1" type="button" value="Chooser"> -->
                <div style="height: 500px;" id="screen-audio"></div>
                <script>
                    var options = {
                        // Shared link to Dropbox file
                        link: "https://www.dropbox.com/scl/fo/2ojgz37lercc1djeobmfq/h?dl=0&rlkey=eyyjx1geiav4m2rf2iasvwtnw",
                        file: {
                            // Sets the zoom mode for embedded files. Defaults to 'best'.
                            zoom: "fit" // or "fit"
                        },
                        folder: {
                            // Sets the view mode for embedded folders. Defaults to 'list'.
                            view: "list", // or "grid"
                            headerSize: "normal" // or "small"
                        }
                    }
                    Dropbox.embed(options, document.getElementById('screen-audio'));
                </script>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="response-message"></div>
    </div>
    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
                e.preventDefault(); // prevent form submission
                var id = $('#id').val();
                var title = $('#title').val();
                var artist = $('#artist').val();
                var album = $('#album').val();
                var image_url = $('#image-url').val();
                var song_url = $('#song-url').val();
                var song_duration = $('#song_duration').val();
                $.ajax({
                    url: '?url=admin/auth_song_form/<?php echo $data['type'] ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        title: title,
                        artist: artist,
                        album: album,
                        image_url: image_url,
                        song_url: song_url,
                        song_duration: song_duration
                    },
                    success: function(response) {
                        if (response.success) {
                            // authentication succeeds, redirect to dashboard or home page
                            window.location.href = '?url=admin/management/songs/1';
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
</body>

</html>