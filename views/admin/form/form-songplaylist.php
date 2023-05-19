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
        <h2>Playlist "<?php if (isset($data['name'])) echo $data['name']; ?>"</h2>
        <form id="form" method="post">
            <input type="number" value="<?php echo $data['id']; ?>" id="id" class="d-none">
            <div class="mb-3 mt-3">
                <label for="order">Order:</label>
                <input type="number" class="form-control" id="order" placeholder="Enter order" name="order" required>
            </div>
            <?php if (!isset($data['type'])) { ?>
                <div class="mb-3">
                    <label for="song" class="form-label">Select song:</label>
                    <input class="form-control" list="songs" name="song" id="song" placeholder="Select song">
                    <datalist id="songs">
                        <?php
                        foreach ($data['songs'] as $song) {
                            echo '<option value="' . $song->getSongId() . '">' . $song->getSongTitle() . '</option>';
                        }
                        ?>
                    </datalist>
                </div>
            <?php } else { ?>
                <input type="number" value="<?php echo $data['song_id']; ?>" id="song" class="d-none">
            <?php } ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="response-message"></div>
    </div>
    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
                e.preventDefault(); // prevent form submission
                var id = $('#id').val();
                var order = $('#order').val();
                var song = $('#song').val();
                $.ajax({
                    url: '?url=admin/auth_sp_form/<?php if (isset($data['type'])) {echo $data['type']; } else { echo "add";} ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        order: order,
                        song: song
                    },
                    success: function(response) {
                        if (response.success) {
                            // authentication succeeds, redirect to dashboard or home page
                            window.location.href = '?url=admin/management/playlists/1';
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