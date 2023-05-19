<?php
require_once "./config/basehref.php";
$url = getUrl();
if (isset($_SESSION['username'])) {
    header("Location: ?url=home/index_login");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/spotify.ico">
    <title>Login - Spotify</title>
    <!-- Icon Css -->
    <link rel="stylesheet" href="../assets/fonts/style.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="../assets/fonts/ie7/ie7.css">
    <!--<![endif]-->
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center w-50 m-auto">
            <div class="p-3 mt-4">
                <a class="text-dark text-decoration-none fs-1" href="index.php">
                    <i class="niand-icon-spotify-logo"></i>
                </a>
            </div>
            <h2 class="h2 fw-bolder mb-4" style="letter-spacing: -1px;">Đăng ký miễn phí để bắt đầu nghe.</h2>
            <a class="
                btn rounded-pill p-2 pe-5 ps-5 bg-primary w-50 text-white
                d-flex justify-content-center align-items-center">
                <style>
                    .niand-icon-facebook:before {
                        color: #FFF;
                    }
                </style>
                <i class="niand-icon-facebook text-white pe-2"></i>
                <span class="text-uppercase">Continue with facebook</span>
            </a>
            <a class="
                btn rounded-pill p-2 pe-5 ps-5 bg-dark w-50 text-dark
                d-flex justify-content-center align-items-center
                mt-3 border border-2 border-dark">
                <i class="niand-icon-apple pe-2"></i>
                <span class="text-uppercase text-white">Continue with apple</span>
            </a>
            <a class="
                btn rounded-pill p-2 pe-5 ps-5 bg-white w-50 text-dark
                d-flex justify-content-center align-items-center
                mt-3 border border-2 border-dark">
                <i class="niand-icon-google pe-2"></i>
                <span class="text-uppercase">Continue with Google</span>
            </a>
            <form class="
                mt-3 d-flex flex-column justify-content-center
                align-items-center w-50 was-validated" method="post" id="login-form">
                <div class="mb-3 mt-3 w-100">
                    <label for="username" class="form-label fw-bold">Email address or username</label>
                    <input type="text" class="form-control border-dark" id="username" placeholder="Enter username" name="username">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 w-100">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control border-dark" id="password" placeholder="Password" name="password">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <a href="#" class="text-decoration-underline mb-2">Forgot your password?</a>
                <div class="form-check mb-2">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn rounded-pill p-2 pe-5 ps-5 fw-bolder w-50" style="background-color: #1fdf64;">Login</button>
            </form>
            <div id="response-message">
                <!-- TODO -->
            </div>
            <p class="mt-4 mb-1 p-0">Don't have an account?</p>
            <a href="?url=auth/register_view" class="mb-5 btn rounded-pill
                p-2 pe-5 ps-5 bg-white w-50 text-dark d-flex justify-content-center
                align-items-center mt-3 border border-2 border-dark-subtle">
                <span class="text-uppercase">sign up for spotify</span>
            </a>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault(); // prevent form submission
                var username = $('#username').val();
                var password = $('#password').val();
                $.ajax({
                    url: '?url=auth/auth_login',
                    type: 'POST',
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(response) {
                        if (response.success) {
                            if (response.type == 'admin') {
                                window.location.href = '?url=admin/dashboard';
                            } else {
                                window.location.href = '?url=home/index_login';
                            }
                        } else {
                            // authentication fails, display error message
                            let html = `<div class="alert alert-danger mt-2">
                                            <strong>Failed!</strong> Failed to login. Please try again.
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