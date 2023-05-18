<?php
require_once "./config/basehref.php";
$url = getUrl();
// if (isset($_SESSION['username'])) {
// 	header("Location: ?url=searchss/search");
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
    <title>Search-Login</title>
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
    <link rel="stylesheet" href="/assets/css/seach_login.css">
    <?php
if (isset($css)) {
	echo $css;
}
?>
    
</head>

<body>
    <div id="main" class="d-grid">
      <header id="top-bar" style="background-color:#34343a">
        <div class="d-flex align-items-center justify-content-between gap-3">
            <div id="action-buttons" class="d-flex flex-shrink-1">
                <button type="button" title="Quay lại" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center">
                    <i class="niand-icon-spotify-left"></i>
                </button>
                <button type="button" title="Tiếp theo" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center">
                    <i class="niand-icon-spotify-right"></i>
                </button>
                <button type="button" title="Tiếp theo" id="open-btn" class="d-md-none d-block d-flex justify-content-center align-items-center ">
                  <i class="niand-icon-spotify-heart"></i>
              </button>
              <button type="button" title="Tiếp theo" id="search-btn" class="d-md-none d-block d-flex justify-content-center align-items-center ">
                <i class="niand-icon-spotify-search"></i>
            </button>
            <div class="searchbar" style="background-color: #242424;">
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
          
                      <input type="text" class="searchbar-input" style="background-color: #242424;" maxlength="2048" name="q" autocapitalize="off" autocomplete="off" title="Search" role="combobox" placeholder="Bạn muốn nghe gì?">
                  </div>
              </div>
          </div>
            </div>
            <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                <button id="sign-up" type="button" class="text-black rounded-5 ms-2">Nâng cấp</button>
                <button id="sign-in" type="button" class="rounded-5 ms-2"><i class="znake-icon-spotify-install"></i>
                    Cài đặt ứng dụng</button>
                <button id="icon" type="button" class="rounded-5 ms-2 dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="znake-icon-spotify-user"></i></button>
                <ul class="dropdown-menu">
                    <li>
                        <div class="d-flex dropdown-item">
                            <a class="text-dark flex-grow-1" href="#">Tài khoản</a>
                            <i class="znake-icon-spotify-share-user text-dark"></i>
                        </div>
                    </li>
                    <li><a class="dropdown-item text-dark" href="#">Hồ sơ</a></li>
                    <li>
                        <div class="d-flex dropdown-item">
                            <a class="text-dark flex-grow-1" href="#">Nâng cấp lên Premium</a>
                            <i class="znake-icon-spotify-share-user text-dark"></i>
                        </div>
                    </li>
                    <li><a class="dropdown-item text-dark" href="#">Hỗ trợ</a></li>
                    <li>
                        <div class="d-flex dropdown-item">
                            <a class="text-dark flex-grow-1" href="#">Tải xuống</a>
                            <i class="znake-icon-spotify-share-user text-dark"></i>
                        </div>
                    </li>
                    <li><a class="dropdown-item text-dark" href="#">Cài đặt</a></li>
                    <li>
                        <hr class="dropdown-divider" style="border-top-color: #000000;">
                    </li>
                    <li><a class="dropdown-item text-dark" href="">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </header>

        <main id="main-view">
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
               <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column "   >
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card  " id="top_hit">
                      <h5 class="card-title hightlightWord mx-2 my-1  ">Peaceful piano</h5>
                      <div class="card-body lean" >
                        <img class="card-img-top img-fluid" src="/image/search/top_global.jpg" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>  
              </div>
             
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="forYou" >
                      <h5 class="card-title hightlightWord mx-2 my-1  ">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/forYou.png" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="post_cast" >
                      <h5 class="card-title hightlightWord mx-2 my-1 ">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/postcast.jpg" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>
                
              </div>
              
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="new_music">
                      <h5 class="card-title hightlightWord mx-2 my-1 ">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/new_music.jpg" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>
                
              </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                  <a href="#" class="text-decoration-none">
                    <div class="m-1">
                      <div class="card" id="discovery" >
                        <h5 class="card-title hightlightWord mx-2 my-1 ">Peaceful piano</h5>
                        <div class="card-body lean">
                          <img class="card-img-top img-fluid" src="/image/search/discoveryjpeg.jpeg" alt="Card image">
                        </div>
                        <div class="card-body">
                        </div>
                      </div>
                    </div>
                  </a>
                  
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                  <a href="#" class="text-decoration-none">
                    <div class="m-1">
                      <div class="card" id="events" >
                        <h5 class="card-title hightlightWord mx-2 my-1 ">Peaceful piano</h5>
                        <div class="card-body lean">
                          <img class="card-img-top img-fluid" src="/image/search/live_events.jpg" alt="Card image">
                        </div>
                        <div class="card-body">
                        </div>
                      </div>
                    </div>
                  </a>
                  
                </div>
            </div>  
             <!-- bang 2 -->
             <div class="row">
              <div>
              </div>
              <br><br>   
             
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="vietnam">
                      <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                      <div class="card-body lean" >
                        <img class="card-img-top img-fluid" src="/image/search/viet_namjpeg.jpeg" alt="Card image">
                      </div>
                      <div class="card-body"> 
                      </div>
                    </div>
                  </div>
                </a>
                
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="kpop" >
                      <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/k_pop.jpg" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>
                
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="pop" >
                      <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/pop.jpg" alt="Card image">
                      </div>
                      <div class="card-body"> 
                      </div>
                    </div>
                  </div>
                </a>
               
              </div>
                  
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="mood" >
                      <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/mood.jpg" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>
               
              </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                  <a href="#" class="text-decoration-none">
                    <div class="m-1">
                      <div class="card" id="allthesleep" >
                        <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                        <div class="card-body lean">
                          <img class="card-img-top img-fluid" src="/image/search/All_The_Sleepjpg.jpg" alt="Card image">
                        </div>
                        <div class="card-body">
                          <div class="play-btn-wrapper" style="text-align: center;">
                            <a href="#" class="btn   play-btn" ><i class="icon-play text-black fs-5 hightlight1"  > </i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                  <a href="#" class="text-decoration-none">
                    <div class="m-1">
                      <div class="card" id="pride" >
                        <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                        <div class="card-body lean">
                          <img class="card-img-top img-fluid" src="/image/search/pride.jpg" alt="Card image">
                        </div>
                        <div class="card-body">
                          <div class="play-btn-wrapper" style="text-align: center;">
                            <a href="#" class="btn   play-btn" ><i class="icon-play text-black fs-5 hightlight1"  > </i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                 
                </div>
            </div>
            <!-- dong 3 -->
            <div class="row">
              <div>
              </div>
              <br><br>   
             
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="fresh" >
                      <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                      <div class="card-body lean" >
                        <img class="card-img-top img-fluid" src="/image/search/fresh_finds.jpeg" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>
                
              </div>
              
            
            
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="rockears" >
                      <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/rockpear.jpg" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>
                
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="heart" >
                      <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/heart.jpg" alt="Card image">
                      </div>
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </a>
               
              </div>
                  
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                <a href="#" class="text-decoration-none">
                  <div class="m-1">
                    <div class="card" id="rock" >
                      <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                      <div class="card-body lean">
                        <img class="card-img-top img-fluid" src="/image/search/rock.jpg" alt="Card image">
                      </div>
                      <div class="card-body"> 
                      </div>
                    </div>
                  </div>
                </a>
                
              </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                  <a href="#" class="text-decoration-none">
                    <div class="m-1">
                      <div class="card" id="hit_hop" >
                        <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                        <div class="card-body lean">
                          <img class="card-img-top img-fluid" src="/image/search/hip_hop.jpg" alt="Card image">
                        </div>
                        <div class="card-body">
                        </div>
                      </div>
                    </div>
                  </a>
                 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                  <a href="#" class="text-decoration-none">
                    <div class="m-1">
                      <div class="card" id="soul" >
                        <h5 class="card-title hightlightWord mx-2 my-1">Peaceful piano</h5>
                        <div class="card-body lean">
                          <img class="card-img-top img-fluid" src="/image/search/soul.jpg" alt="Card image">
                        </div>
                        <div class="card-body">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            </div>
            <hr style="color: aliceblue; margin-top: 50px;">

            <br><br><br> <br><br>

        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none  d-flex flex-column">
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
            <div id="now-playing-bar" class="pe-2 ps-2">
                <div class="row row-cols-3 m-auto">
                    <div id="now-playing-bar-left" class="col d-flex align-items-center">
                        <div class="d-flex gap-3 justify-content-start align-items-center">
                            <div  id="anh">
                                <img class="img-fluid rounded-1"  src="https://i.scdn.co/image/ab67616d0000485170cb943c9a67b7eda3414366" alt="">
                            </div>
                            <div class="word">
                                <div class="title">
                                    không nói ai mà biết
                                </div>
                                <div class="authors">
                                    <a href="#">14 Casper</a>
                                    <a href="#">Bon Nghiêm</a>
                                </div>
                            </div>
                            <div>
                                <i class="niand-icon-spotify-heart-empty d-lg-flex d-md-flex d-sm-none d-none"></i>
                            </div>
                            <div>
                                <i class="niand-icon-spotify-picture-in-picture d-lg-flex d-md-flex d-sm-none d-none"></i>
                            </div>
                        </div>
                    </div>
                    <div id="now-playing-bar-center" class="col d-flex align-items-center">
                        <div class="d-flex flex-column w-100 gap-2">
                            <div class="player-controls d-xl-flex  d-flex align-items-center justify-content-center gap-4">
                                <div class="player-controls-left d-lg-flex d-md-flex d-sm-none d-none   d-flex align-items-center justify-content-center gap-4">
                                    <button type="button" >
                                        <i class="niand-icon-spotify-mix "></i>
                                    </button>
                                    <button type="button" class="">
                                        <i class="niand-icon-spotify-prev "></i>
                                    </button>
                                </div>
                                <div class="player-controls-center">
                                    <button type="button" class="bg-white m-0 p-1 rounded-circle d-flex justify-content-center align-items-center">
                                        <i class="niand-icon-spotify-play text-black"></i>
                                    </button>
                                </div>
                                <div class="player-controls-right  d-flex align-items-center justify-content-center gap-4">
                                    <button type="button">
                                        <i class="niand-icon-spotify-next d-lg-flex d-md-flex d-sm-none d-none"></i>
                                    </button>
                                    <button type="button">
                                        <i class="niand-icon-spotify-loop d-lg-flex d-md-flex d-sm-none d-none"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="playback-bar  d-flex align-items-center justify-content-center gap-2">
                                <div class="playback-position">
                                    0:00
                                </div>
                                <div class="progress-bar w-100 rounded-2">
                                </div>
                                <div class="playback-duration">
                                    4:34
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="now-playing-bar-right" class="col d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-end align-items-center gap-3">
                        <div>
                            <i class="niand-icon-spotify-mic"></i>
                        </div>
                        <div>
                            <i class="niand-icon-spotify-playlist"></i>
                        </div>
                        <div>
                            <i class="niand-icon-spotify-loudspeaker"></i>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="niand-icon-spotify-volumn"></i>
                            <div class="volumn-bar rounded-2"></div>
                        </div>
                    </div>
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