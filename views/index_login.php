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
        echo "<base href='".$url."'>";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/spotify.ico">
    <meta property="og:image" content="./assets/images/spotify.png">
    <title>Spotify - Trình phát trên web</title>
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
    <link rel="stylesheet" href="./assets/css/index_login.css">
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
            <div class="  text-white my-5" id="chon">
                <div class="row">
                    <div>
                      <span  class="fw-bold fs-4 mx-3" style="margin-left: 1%;">Chào buổi sáng</span> 
                    </div>
                    <div class="col-md-6 col-lg-6  col-xl-4 ">
                      <div class="m-1">
                        <div class="card bg-bg">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <div class="card-body">
                                <img class="card-img-top img-fluid" src="/image/home/jazzvibes.jpg" alt="Card image">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <div class="play-btn-wrapper2" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <h5 class="card-title my-4">Peaceful piano</h5>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 col-xl-4">
                      <div class="m-1">
                        <div class="card bg-bg">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <div class="card-body">
                                <img class="card-img-top img-fluid" src="/image/home/jazzvibes.jpg" alt="Card image">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <div class="play-btn-wrapper2" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <h5 class="card-title my-4">Peaceful piano</h5>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                      <div class="m-1">
                        <div class="card bg-bg">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <div class="card-body">
                                <img class="card-img-top img-fluid" src="/image/home/jazzvibes.jpg" alt="Card image">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <div class="play-btn-wrapper2" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <h5 class="card-title my-4">Peaceful piano1</h5>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                      <div class="m-1">
                        <div class="card bg-bg">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <div class="card-body">
                                <img class="card-img-top img-fluid" src="/image/home/jazzvibes.jpg" alt="Card image">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <div class="play-btn-wrapper2" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <h5 class="card-title my-4">Peaceful piano</h5>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 col-xl-4">
                      <div class="m-1">
                        <div class="card bg-bg">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <div class="card-body">
                                <img class="card-img-top img-fluid" src="/image/home/jazzvibes.jpg" alt="Card image">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <div class="play-btn-wrapper2" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <h5 class="card-title my-4">Peaceful piano</h5>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                      <div class="m-1">
                        <div class="card bg-bg">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <div class="card-body">
                                <img class="card-img-top img-fluid" src="/image/home/jazzvibes.jpg" alt="Card image">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <div class="play-btn-wrapper2" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <h5 class="card-title my-4">Peaceful piano</h5>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
                  
                   <!-- Dong 1 -->
                   
                  <div class="row">
                    <div class="row">
                      <div class="col-xs-12 col-sm-9 col-lg-10">
                        <span  class="fw-bold fs-4 hightlightWord mx-3 " >Danh cho ....</span>
                      </div>
                      <div class="col-sm-3 col-lg-2 col-md-2 col-lg-2">
                        <span  class="fw-bold fs-6  hightlightWord d-flex justify-content-end " >Hiện tất cả</span> 
                      </div>
                      
                    </div>
                    <br><br>   
  
                    <?php foreach($data['playlists'] as $playlist) { ?>
                      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column ">
                        <div class="m-1 flex-grow-1">
                          <div class="card  bg-bg h-100" >
                            <div class="card-body" >
                              <a href="/base.html" style="color: white;">
                                <img class="card-img-top img-fluid" src="<?php echo $playlist->getPlaylistImageUrl()  ?>" alt="Card image">
                              </a>
                            
                            </div>
                            <div class="card-body">
                              <div class="play-btn-wrapper" style="text-align: center;">
                                <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                              </div>
                              <a href="/base.html" style="color: white;">
                                <h6 class="card-title"> <?php echo $playlist->getPlaylistName()  ?> </h6>
                                <p class="card-text" ><?php echo $playlist->getPlaylistDescription()  ?> </p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php } ?>

                    
                     
                  
                  </div>  
                    <!-- Tuyển tập hàng đầu của bạn -->
                      <div class="row my-3">
                        <div class="row">
                          <div class="col-xs-12 col-sm-9 col-lg-10">
                            <span  class="fw-bold fs-4 hightlightWord mx-2" >Tuyển tập hàng đầu của bạn</span>
                          </div>
                          <div class="col-sm-3 col-lg-2 col-md-2 col-lg-2">
                            <span  class="fw-bold fs-6  hightlightWord d-flex justify-content-end" >Hiện tất cả</span> 
                          </div>
                          
                        </div>
                        <br><br>   
                       
                        <div class="d-flex flex-column col-sm-6 col-md-4 col-lg-3 col-xl-2">
                          <div class="m-1 flex-grow-1">
                            <div class="card  bg-bg h-100" >
                              <div class="card-body" >
                                <a href="#" style="color: white;">
                                  <img class="card-img-top img-fluid" src="/image/home/top_hit.jpg" alt="Card image">
                                </a>
                               
                              </div>
                              <div class="card-body">
                                <div class="play-btn-wrapper" style="text-align: center;">
                                  <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                                </div>
                                <a href="#" style="color: white;">
                                  <h6 class="card-title">Today's Top Hits</h6>
                                  <p class="card-text">The Weeknd is on top of the Hottest 50! </p>
                                </a>
                               
                               
                              </div>
                            </div>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column col-sm-6 col-md-4 col-lg-3 col-xl-2">
                          <div class="m-1 flex-grow-1">
                            <div class="card bg-bg h-100">
                              <div class="card-body">
                                <a href="#" style="color: white;">
                                  <img class="card-img-top img-fluid" src="/image/home/rap_caviar.jpg" alt="Card image">
                                </a>
                              </div>
                              <div class="card-body">
                                <div class="play-btn-wrapper" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <a href="#" style="color: white;">
                                  <h6 class="card-title">TRapCaviar</h6>
                                  <p class="card-text">Music from Lil Uzi Vert, Drake and Moneybagg Yo.</p>
                                </a>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="d-flex flex-column col-sm-6 col-md-4 col-lg-3 col-xl-2">
                          <div class="m-1 flex-grow-1">
                            <div class="card bg-bg h-100">
                              <div class="card-body">
                                <a href="#" style="color: white;">
                                  <img class="card-img-top img-fluid" src="/image/home/all_out.jpg" alt="Card image">
                                </a>
                              
                              </div>
                              <div class="card-body">
                                <div class="play-btn-wrapper" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <a href="#" style="color: white;">
                                  <h6 class="card-title">All Out 2010s</h6>
                                  <p class="card-text">The biggest songs of the 2010s.</p>
                                </a>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        
                            
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                          <div class="m-1 flex-grow-1">
                            <div class="card  bg-bg h-100" >
                              <div class="card-body">
                                <a href="#" style="color: white;">
                                  <img class="card-img-top img-fluid" src="/image/home/rock_classics.jpg" alt="Card image">
                                </a>
                              </div>
                              <div class="card-body">
                                <div class="play-btn-wrapper" style="text-align: center;">
                                  <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                                </div>
                                <a href="#" style="color: white;">
                                  <h6 class="card-title">Rock Classics</h6>
                                  <p class="card-text">Rock legends & epic songs that continue to inspire generations. Cover: Foo Fighters </p>
                                 
                                </a>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                        
                          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                            <div class="m-1 flex-grow-1">
                              <div class="card  bg-bg h-100" >
                                <div class="card-body">
                                  <a href="#" style="color: white;">
                                    <img class="card-img-top img-fluid" src="/image/home/chill_hits.jpg" alt="Card image">
                                  </a>
                                </div>
                                <div class="card-body">
                                  <div class="play-btn-wrapper" style="text-align: center;">
                                    <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                                  </div>
                                  <a href="#" style="color: white;">
                                    <h6 class="card-title">Chill Hits</h6>
                                    <p class="card-text">Kick back to the best new and recent chill hits.</p>
                                  </a>
                                
                                 
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                            <div class="m-1 flex-grow-1">
                              <div class="card  bg-bg h-100" >
                                <div class="card-body">
                                  <a href="#" style="color: white;">
                                    <img class="card-img-top img-fluid" src="/image/home/viva.jpg" alt="Card image">
                                  </a>
                                </div>
                                <div class="card-body">
                                  <div class="play-btn-wrapper" style="text-align: center;">
                                    <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                                  </div>
                                  <a href="#" style="color: white;">
                                    <h6 class="card-title">Viva Latino</h6>
                                    <p class="card-text">Today's top Latin hits, elevando nuestra música. Cover: Grupo Frontera & Bad Bunny </p>
                                  </a>
                                 
                                 
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <!-- Moi phat gan day -->
                      <div class="row my-3">
                        <div class="row">
                          <div class="col-xs-12 col-sm-9 col-lg-10">
                            <span  class="fw-bold fs-4 hightlightWord mx-2" >Mới phát gần đây</span>
                          </div>
                          <div class="col-sm-3 col-lg-2 col-md-2 col-lg-2">
                            <span  class="fw-bold fs-6  hightlightWord d-flex justify-content-end" >Hiện tất cả</span> 
                          </div>
                          
                        </div>
                        <br><br>   
                       
                        <div class="d-flex flex-column col-sm-6 col-md-4 col-lg-3 col-xl-2">
                          <div class="m-1 flex-grow-1">
                            <div class="card  bg-bg h-100" >
                              <div class="card-body" >
                                <a href="#" style="color: white;">
                                  <img class="card-img-top img-fluid" src="/image/home/top_hit.jpg" alt="Card image">
                                </a>
                               
                              </div>
                              <div class="card-body">
                                <div class="play-btn-wrapper" style="text-align: center;">
                                  <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                                </div>
                                <a href="#" style="color: white;">
                                  <h6 class="card-title">Today's Top Hits</h6>
                                  <p class="card-text">The Weeknd is on top of the Hottest 50! </p>
                                </a>
                               
                               
                              </div>
                            </div>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column col-sm-6 col-md-4 col-lg-3 col-xl-2">
                          <div class="m-1 flex-grow-1">
                            <div class="card bg-bg h-100">
                              <div class="card-body">
                                <a href="#" style="color: white;">
                                  <img class="card-img-top img-fluid" src="/image/home/rap_caviar.jpg" alt="Card image">
                                </a>
                              </div>
                              <div class="card-body">
                                <div class="play-btn-wrapper" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <a href="#" style="color: white;">
                                  <h6 class="card-title">TRapCaviar</h6>
                                  <p class="card-text">Music from Lil Uzi Vert, Drake and Moneybagg Yo.</p>
                                </a>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="d-flex flex-column col-sm-6 col-md-4 col-lg-3 col-xl-2">
                          <div class="m-1 flex-grow-1">
                            <div class="card bg-bg h-100">
                              <div class="card-body">
                                <a href="#" style="color: white;">
                                  <img class="card-img-top img-fluid" src="/image/home/all_out.jpg" alt="Card image">
                                </a>
                              
                              </div>
                              <div class="card-body">
                                <div class="play-btn-wrapper" style="text-align: center;">
                                  <a href="#" class="btn play-btn"><i class="niand-icon-spotify-play text-black fs-5 hightlight1"></i></a>
                                </div>
                                <a href="#" style="color: white;">
                                  <h6 class="card-title">All Out 2010s</h6>
                                  <p class="card-text">The biggest songs of the 2010s.</p>
                                </a>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        
                            
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                          <div class="m-1 flex-grow-1">
                            <div class="card  bg-bg h-100" >
                              <div class="card-body">
                                <a href="#" style="color: white;">
                                  <img class="card-img-top img-fluid" src="/image/home/rock_classics.jpg" alt="Card image">
                                </a>
                              </div>
                              <div class="card-body">
                                <div class="play-btn-wrapper" style="text-align: center;">
                                  <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                                </div>
                                <a href="#" style="color: white;">
                                  <h6 class="card-title">Rock Classics</h6>
                                  <p class="card-text">Rock legends & epic songs that continue to inspire generations. Cover: Foo Fighters </p>
                                 
                                </a>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                        
                          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                            <div class="m-1 flex-grow-1">
                              <div class="card  bg-bg h-100" >
                                <div class="card-body">
                                  <a href="#" style="color: white;">
                                    <img class="card-img-top img-fluid" src="/image/home/chill_hits.jpg" alt="Card image">
                                  </a>
                                </div>
                                <div class="card-body">
                                  <div class="play-btn-wrapper" style="text-align: center;">
                                    <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                                  </div>
                                  <a href="#" style="color: white;">
                                    <h6 class="card-title">Chill Hits</h6>
                                    <p class="card-text">Kick back to the best new and recent chill hits.</p>
                                  </a>
                                
                                 
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column">
                            <div class="m-1 flex-grow-1">
                              <div class="card  bg-bg h-100" >
                                <div class="card-body">
                                  <a href="#" style="color: white;">
                                    <img class="card-img-top img-fluid" src="/image/home/viva.jpg" alt="Card image">
                                  </a>
                                </div>
                                <div class="card-body">
                                  <div class="play-btn-wrapper" style="text-align: center;">
                                    <a href="#" class="btn   play-btn" ><i class="niand-icon-spotify-play text-black fs-5 hightlight1"  > </i></a>
                                  </div>
                                  <a href="#" style="color: white;">
                                    <h6 class="card-title">Viva Latino</h6>
                                    <p class="card-text">Today's top Latin hits, elevando nuestra música. Cover: Grupo Frontera & Bad Bunny </p>
                                  </a>
                                 
                                 
                                </div>
                              </div>
                            </div>
                          </div>
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
    <script src="/assets/js/script.js"></script>
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