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
    <title>Listen History</title>
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="d4x95j5y8f6pv0s"></script>
    <script src="./assets/js/dropboxapi.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div class="container mt-3 mb-5">
        <h2>Listen History</h2>
        <form id="form" method="post">
            <div class="mb-3 mt-3">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="id" value="<?php if (isset($data['ls'])) echo $data['ls']->getListenId(); ?>" placeholder="Id" name="id" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="listen_date">Listen date:</label>
                <input type="datetime-local" class="form-control" value="<?php if (isset($data['ls'])) echo $data['ls']->getListenDate(); ?>" id="listen_date" placeholder="Enter listen date" name="listen_date" required>
            </div>
            <div class="mb-3">
                <label for="user" class="form-label">Select user:</label>
                <input class="form-control" list="users" value="<?php if (isset($data['ls'])) echo $data['ls']->getUser()->getUserId(); ?>" name="user" id="user" placeholder="Select user">
                <datalist id="users">
                    <?php
                    foreach ($data['users'] as $user) {
                        echo '<option value="' . $user->getUserId() . '">' . $user->getUsername() . '</option>';
                    }
                    ?>
                </datalist>
            </div>
            <div class="mb-3">
                <label for="song" class="form-label">Select song:</label>
                <input class="form-control" list="songs" value="<?php if (isset($data['ls'])) echo $data['ls']->getSong()->getSongId(); ?>" name="song" id="song" placeholder="Select song">
                <datalist id="songs">
                    <?php
                    foreach ($data['songs'] as $song) {
                        echo '<option value="' . $song->getSongId() . '">' . $song->getSongTitle() . '</option>';
                    }
                    ?>
                </datalist>
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
                var user = $('#user').val();
                var song = $('#song').val();
                var listen_date = $('#listen_date').val();
                $.ajax({
                    url: '?url=admin/auth_ls_form/<?php echo $data['type'] ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        user: user,
                        song: song,
                        listen_date: listen_date
                    },
                    success: function(response) {
                        if (response.success) {
                            // authentication succeeds, redirect to dashboard or home page
                            window.location.href = '?url=admin/management/song_listen_history/1';
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