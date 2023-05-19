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
    <title>User</title>
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="d4x95j5y8f6pv0s"></script>
    <script src="./assets/js/dropboxapi.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div class="container mt-3 mb-5">
        <h2>User</h2>
        <form method="post" id="form">
            <div class="mb-3 mt-3">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="id" value="<?php if (isset($data['user'])) echo $data['user']->getUserId(); ?>" placeholder="Id" name="id" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" value="<?php if (isset($data['user'])) echo $data['user']->getUsername(); ?>" placeholder="Enter username" name="username" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" value="<?php if (isset($data['user'])) echo $data['user']->getPassword(); ?>" <?php if (isset($data['user'])) echo 'disabled'; ?> placeholder="Enter password" name="password" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value="<?php if (isset($data['user'])) echo $data['user']->getEmail(); ?>" placeholder="Enter email" name="email" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="day_of_birth">Birthday:</label>
                <input type="date" class="form-control" id="day_of_birth" value="<?php if (isset($data['user'])) echo $data['user']->getDayOfBirth(); ?>" placeholder="Enter birthday" name="day_of_birth" required>
            </div>
            <div class="mb-3 mt-3">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="male" <?php if (isset($data['user']))
                                                                                if ($data['user']->getGender() == 'Nam') echo 'checked';
                                                                            ?> name="gender" value="Nam" required>Nam
                    <label class="form-check-label" for="male"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="female" <?php if (isset($data['user']))
                                                                                    if ($data['user']->getGender() == 'Nữ') echo 'checked';
                                                                                ?> name="gender" value="Nữ" required>Nữ
                    <label class="form-check-label" for="female"></label>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="type_">Type:</label>
                <select class="form-select" id="type_" name="type_" value="<?php if (isset($data['user'])) echo $data['user']->getType(); ?>">
                    <option <?php if (isset($data['user'])) {
                                if ($data['user']->getType() == 'admin') echo 'selected';
                            } ?>>admin</option>
                    <option <?php if (isset($data['user'])) {
                                if ($data['user']->getType() == 'normal') echo 'selected';
                            } ?>>normal</option>
                </select>
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
                var username = $('#username').val();
                var password = $('#password').val();
                var email = $('#email').val();
                var day_of_birth = $('#day_of_birth').val();
                var gender = $('input[name="gender"]:checked').val();
                var type = $('#type_').val();
                $.ajax({
                    url: '?url=admin/auth_user_form/<?php echo $data['type'] ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        username: username,
                        password: password,
                        email: email,
                        day_of_birth: day_of_birth,
                        gender: gender,
                        type: type
                    },
                    success: function(response) {
                        if (response.success) {
                            // authentication succeeds, redirect to dashboard or home page
                            window.location.href = '?url=admin/management/users/1';
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