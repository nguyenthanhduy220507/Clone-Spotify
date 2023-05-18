<?php
require_once "./config/basehref.php";
$url = getUrl();
// if (isset($_SESSION['username'])) {
// 	header("Location: ?url=searchss/search_login");
// }
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
    <title>Search</title>
    <link rel="stylesheet" href="/css/style.css">
    <!-- Icon Css -->
    <link rel="stylesheet" href="./assets/fonts/style.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="./assets/fonts/ie7/ie7.css">
    <!--<![endif]-->
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
    <!-- CSS - SCSS -->
    <link rel="stylesheet" href="./assets/css/seach.css">
    <?php
if (isset($css)) {
	echo $css;
}
?>

</style>
  </head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar" >
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div id="action-buttons" class="d-flex flex-shrink-1 t1" style="display: none;">
                    <button type="button" title="Quay lại" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center ">
                        <i class="niand-icon-spotify-left "></i>
                    </button>
                    <button type="button" title="Tiếp theo" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center ">
                        <i class="niand-icon-spotify-right"></i>
                    </button>
                    <button type="button" title="Tiếp theo" id="open-btn" class="d-md-none d-block d-flex justify-content-center align-items-center ">
                      <i class="niand-icon-spotify-heart"></i>
                  </button>
                  <button type="button" title="Tiếp theo" id="search-btn" class="d-md-none d-block d-flex justify-content-center align-items-center ">
                    <i class="niand-icon-spotify-search"></i>
                </button>
                  <div class="searchbar">
                    <div class="searchbar-wrapper ">
                        <div class="searchbar-left">
                            <div class="search-icon-wrapper">
                                <span class="search-icon searchbar-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                
                        <div class="searchbar-center">
                            <div class="searchbar-input-spacer"></div>
                
                            <input type="text" class="searchbar-input" maxlength="2048" name="q" autocapitalize="off" autocomplete="off" title="Search" role="combobox" placeholder="Bạn muốn nghe gì?">
                        </div>
                    </div>
                </div>
                </div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white t1">Premium</a></div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white t1">Hỗ trợ</a></div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white t1">Tải xuống</a></div>
                <div id="vertical-line" class="t1"></div>
                <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                    <button id="sign-up" type="button" class="text-white  me-2 ">Đăng ký</button>
                    <button id="sign-in" type="button" class="rounded-5 ">Đăng nhập</button>
                </div>
            </div>
        </header>

        <main  id="main-view">
            <!-- TODO Nội dung của trang con -->
            <div id="popup">
                <div id="popup-content">
                  <div class="row">
                    
                    <input type="text" class="form-control" placeholder="Bạn muốn nghe gì?" aria-label="Bạn muốn nghe gì?" aria-describedby="basic-addon2">
                  </div>
                 
                  <button id="close-popup" class="btn rounded-pill fw-bold">Close</button>
                </div>
              </div>
            <!-- Dong 1 -->
            <div class="row">
                <div>
                  <span  class="fw-bold fs-4 hightlightWord mx-1 text-white my-5" >Duyệt tất cả</span> 
                </div>
                <br><br>     

                <?php foreach ($data['playlist'] as $playlist) { ?>
                      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column "   >
                      <a href="#" class="text-decoration-none" >
                        <div class="m-1">
                          <div class="card  " id="top_hit">
                            <h5 class="card-title hightlightWord mx-2 my-1  "><?php echo $playlist->getPlaylistName(); ?></h5>
                            <div class="card-body lean" >
                              <img class="card-img-top img-fluid" src="<?php echo $playlist->getPlaylistImageUrl(); ?>" alt="Card image">
                            </div>
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </a>  
                    </div>
                    <?php } ?>

              </div>  
               <!-- bang 2 -->
               <div class="row">
               <div>
                  <span  class="fw-bold fs-4 hightlightWord mx-1 text-white my-5" >Album</span> 
                </div>
                <br><br>     

                <?php foreach ($data['album'] as $album) { ?>
                      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column "   >
                      <a href="#" class="text-decoration-none">
                        <div class="m-1" >
                          <div class="card  " style="height: 200px;"id="top_hit">
                            <h5 class="card-title hightlightWord mx-2 my-1  "><?php echo $album->getAlbumTitle(); ?></h5>
                            <div class="card-body lean" >
                              <img class="card-img-top img-fluid" src="<?php echo $album->getAlbumImageUrl(); ?>" alt="Card image">
                            </div>
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </a>  
                    </div>
                    <?php } ?>
  
               
                
              </div>
              <!-- dong 3 -->
              <div class="row">
              <div>
                  <span  class="fw-bold fs-4 hightlightWord mx-1 text-white my-5" >Artist</span> 
                </div>
                <br><br>     

                <?php foreach ($data['artist'] as $artist) { ?>
  <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column card-container">
    <a href="#" class="text-decoration-none">
      <div class="m-1">
        <div class="card" style="height: 200px;"id="top_hit">
          <h5 class="card-title hightlightWord mx-2 my-1"><?php echo $artist->getArtistName(); ?></h5>
          <div class="card-body lean">
            <img class="card-img-top img-fluid" src="<?php echo $artist->getArtistImageUrl(); ?>" alt="Card image">
          </div>
          <div class="card-body">
          </div>
        </div>
      </div>
    </a>  
  </div>
<?php } ?>
              </div>
              <hr style="color: aliceblue; margin-top: 50px;">
  
              <br><br><br> <br><br>
  
        </main>

        <div id="side-bar"  class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
            <div id="logo">
                <div class="w-100">
                    <a href="#" class="text-white">
                        <i class="niand-icon-spotify-logo"></i>
                    </a>
                </div>
            </div>
            <nav id="menu" class="w-100">
                <ul>
                    <li>
                        <a href="#" class="active text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-home"></i>
                            <span>Trang chủ</span></a>
                    </li>
                    <li>
                        <a href="#" class="text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-search"></i>
                            <span>Tìm kiếm</span></a>
                    </li>
                    <li>
                        <a href="#" class="text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-library"></i>
                            <span>Thư viện</span></a>
                    </li>
                </ul>
            </nav>
            <div id="user-actions" class="d-flex flex-column flex-grow-1">
                <div class="mt-4">
                    <div class="w-100 action-button">
                        <button type="button" class="d-flex align-items-center">
                            <span class="playlist-add">
                                <i class="niand-icon-spotify-add"></i>
                            </span>
                            <span>Tạo playlist</span>
                        </button>
                    </div>
                    <div class="w-100 action-button">
                        <button type="button" class="d-flex align-items-center">
                            <span class="liked-song">
                                <i class="niand-icon-spotify-heart"></i>
                            </span>
                            <span>Bài hát đã thích</span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="user-settings">
                <div class="cookie w-100">
                    <a href="#" class="text-white">Cookie</a>
                </div>
                <div class="languages">
                    <button type="button" class="d-flex align-items-center">
                        <i class="niand-icon-spotify-internet"></i>
                        <span>Tiếng Việt</span>
                    </button>
                </div>
            </div>
        </div>

        <footer>
            <div id="now-playing-bar" class="d-flex align-items-center">
                <div id="data">
                    <h6>xem trước spotify</h6>
                    <p>Đăng ký để nghe không giới hạn các bài hát và podcast với quảng cáo không thường xuyên. Không cần
                        thẻ tín dụng.</p>
                </div>
                <div id="btn-sign-up">
                    <button type="button" class="rounded-5">Đăng ký miễn phí</button>
                </div>
            </div>
        </footer>
    </div>
    <script src="/js/playlist.js"></script>
    <script>
      
      window.onload = function () {
        document.getElementById("open-btn").addEventListener('click', function () {
            document.getElementById("side-bar").classList.toggle('d-sm-none');
            document.getElementById("side-bar").classList.toggle('d-none');
            document.getElementById("side-bar").style.width = '85vw';
            document.getElementById("main-view").classList.toggle('d-none');
        })
      }

    </script>
</body>

</html>