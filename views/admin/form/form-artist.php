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
    <title>Artist</title>
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="d4x95j5y8f6pv0s"></script>
    <script src="./assets/js/dropboxapi.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div class="container mt-3 mb-5">
        <h2>Artist</h2>
        <form method="post" id="form">
            <div class="mb-3 mt-3">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="id" value="<?php if (isset($data['artist'])) echo $data['artist']->getArtistId(); ?>" placeholder="Id" name="id" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" value="<?php if (isset($data['artist'])) echo $data['artist']->getArtistName(); ?>" placeholder="Enter name" name="name" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" value="<?php if (isset($data['artist'])) echo $data['artist']->getArtistDescription(); ?>" placeholder="Enter description" name="description" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="image-url">Image url:</label>
                <input type="url" class="form-control" id="image-url" value="<?php if (isset($data['artist'])) echo $data['artist']->getArtistImageUrl(); ?>" placeholder="Enter image url" name="image-url" required>
                <!-- <input id="chooser" class="btn btn-success mt-1" type="button" value="Chooser"> -->
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="response-message"></div>
    </div>
    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
                e.preventDefault(); // prevent form submission
                var id = $('#id').val();
                var name = $('#name').val();
                var description = $('#description').val();
                var image_url = $('#image-url').val();
                $.ajax({
                    url: '?url=admin/auth_artist_form/<?php echo $data['type'] ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        name: name,
                        description: description,
                        image_url: image_url
                    },
                    success: function(response) {
                        if (response.success) {
                            // authentication succeeds, redirect to dashboard or home page
                            window.location.href = '?url=admin/management/artists/1';
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