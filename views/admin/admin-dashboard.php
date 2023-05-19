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
    <link rel="stylesheet" href="./assets/css/weather.css">
    <link rel="stylesheet" href="./assets/css/user.css">
</head>

<body class="d-flex justify-content-center align-items-center">
    <main class="d-flex rounded-5">
        <section id="nav-side" class="d-flex gap-5 flex-column p-2">
            <div id="logo" class="d-flex flex-column justify-content-center align-items-center">
                <img class="img-fluid" src="../assets/images/logo-coyote.png" alt="logo">
                <span class="fw-semibold">Coyote</span>
            </div>
            <nav id="nav-bar" class="my-3 my-scroll flex-grow-1 h-100" aria-labelledby="navigation sidebar">
                <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center gap-5 m-0">
                    <li><a class="d-flex flex-column gap-2 active-nav justify-content-center align-items-center text-decoration-none fs-6" href="#">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="niand-icon-star"></i>
                            </div>
                            <span class="text-capitalize">overview</span>
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
                        <li><a class="text-decoration-none text-uppercase active fw-medium" href="?url=admin/dashboard">dashboard</a></li>
                        <li><a class="text-decoration-none text-uppercase fw-medium" href="?url=admin/management/albums/1">management</a></li>
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
                <h2 class="text-black mb-3">Admin</h2>
                <div class="row">
                    <div class="col-6">
                        <div class="card-weather m-auto">
                            <div class="container">
                                <div class="cloud front">
                                    <span class="left-front"></span>
                                    <span class="right-front"></span>
                                </div>
                                <span class="sun sunshine"></span>
                                <span class="sun"></span>
                                <div class="cloud back">
                                    <span class="left-back"></span>
                                    <span class="right-back"></span>
                                </div>
                            </div>
                            <div class="card-header">
                                <span>Messadine, Susah<br>Tunisia</span>
                                <span>March 13</span>
                            </div>
                            <span class="temp">23°</span>
                            <div class="temp-scale">
                                <span>Celcius</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-user m-auto">
                            <div class="icon">
                                <i class="niand-icon-user"></i>
                            </div>

                            <div class="content">
                                <h3>Title</h3>
                                <p>
                                    <span class="fw-semibold">Name: </span>NianD<br>
                                    <span class="fw-semibold">Email: </span>nguyenquocduong380@gmail.com<br>
                                    <span class="fw-semibold">Birthday: </span>2002-05-16<br>
                                    <span class="fw-semibold">Gender: </span>Nam<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
</body>

</html>