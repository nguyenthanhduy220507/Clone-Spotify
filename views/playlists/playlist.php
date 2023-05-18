<?php
    require_once "./config/basehref.php";
    $url = getUrl();
    if (isset($_SESSION['username'])) {
        header("Location: ?url=playlists/playlist_login/".$data['id']);
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
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
    <link rel="stylesheet" href="./assets/css/playlist.css">
    <?php
        if (isset($css)) {
            echo $css;
        }
    ?>
</head>

<body>
    <div id="main" class="d-grid">
      <header id="top-bar" >
        <div class="d-flex align-items-center justify-content-between gap-3">
            <div id="action-buttons" class="d-flex flex-shrink-1">
              <button type="button" title="Quay lại" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center ">
                <i class="niand-icon-spotify-left "></i>
            </button>
            <button type="button" title="Tiếp theo" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-center align-items-center ">
                <i class="niand-icon-spotify-right"></i>
            </button>
            <button type="button" title="Tiếp theo" id="open-btn" class="d-md-none d-block d-flex justify-content-center align-items-center ">
              <i class="niand-icon-spotify-heart"></i>
          </button>
            </div>
            <div class="btn-nav flex-shrink-1"><a href="#" class="text-white t1">Premium</a></div>
            <div class="btn-nav flex-shrink-1"><a href="#" class="text-white t1">Hỗ trợ</a></div>
            <div class="btn-nav flex-shrink-1"><a href="#" class="text-white t1">Tải xuống</a></div>
            <div id="vertical-line" class="t1"></div>
            <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                <button id="sign-up" type="button" class="text-white  me-4">Đăng ký</button>
                <button id="sign-in" type="button" class="rounded-5 me-4">Đăng nhập</button>
            </div>
        </div>
    </header>

        <main id="main-view">
            <!-- TODO Nội dung của trang con -->
            <div class="  text-white " id="chon">
              <div class="row">
               
                <div class="row " style="background-color: rgb(144, 168, 192);">
                       
                    <div class="col-md-12 col-lg-12 col-xl-3 d-flex align-items-center justify-content-center anh">
                        <img src="<?php echo $data['playlist']->getPlaylistImageUrl(); ?>" alt="error" class="img-fluid w-45 mx-3 my-5"> 
                    </div>
                    <div class="col-lg-12 col-xl-9 my-5 text-white fw-bold" id="title">
                      <div  class="my-5">
                        Playlist
                       <div  style="font-size: 6rem;"><?php echo $data['playlist']->getPlaylistName(); ?></div>
                       <div ><?php echo $data['playlist']->getPlaylistDescription(); ?></div>
                       <div> 
                        <img src="/assets/images/spotify.png" alt="error"  style="width: 25px; height: 25px;"> Spotify, 
                        <?php echo $data['songplaylists_num'] . " bài hát" ?> 
                        <span><?php
                        $totalDuration = 0; 

                        foreach ($data['songplaylists'] as $songplaylist) {
                            $seconds = $songplaylist->getSong()->getSongDuration();
                            $minutes = floor($seconds / 60); 
                            $remainingSeconds = $seconds % 60; 

                            $formattedTime = sprintf("%d:%02d", $minutes, $remainingSeconds);
                            

                            $totalDuration += $seconds; 
                        }

                        $totalMinutes = floor($totalDuration / 60); 
                        $totalRemainingSeconds = $totalDuration % 60; 

                        $totalFormattedTime = sprintf("%d:%02d", $totalMinutes, $totalRemainingSeconds);
                        echo ", khoảng " . $totalFormattedTime . " phút";
                        ?></span>
                         </div>
                      </div>
                    </div>
                  </div>

                
                
                 
                
               
               
                     <div class="row " >
                        
                       <div class="col-6">
                        <button class="btn play-bttt" > <i class="niand-icon-spotify-play text-black fs-5 "  > </i></button>
                        <button class="btn " style="border: 1px solid black; "><i class="niand-icon-spotify-heart-empty  hightlight1 my-5 fs-4"  > </i></button>
                        <button class="btn dropdown-toggle " data-bs-toggle="dropdown" style="border: 1px solid black; "><i class="niand-icon-spotify-three-dots  hightlight1 my-5 fs-4"  > </i></button>
                        <ul class="dropdown-menu " style="background-color: #242424">
                          <li><a class="dropdown-item text-white" href="#">Thêm vào thư viện</a></li>
                          <li><a class="dropdown-item text-white" href="#">Giới thiệu về nội dung đề xuất</a></li>
                          
                        </ul>
                      </div>
                      </div>
                  <div class="row my-3 mx-3">
                        <div class=" col-1 d-flex">
                          # 
                        </div>
                        <div class=" col-4">
                        <span > Tiêu đề</span> 
                        </div>
                        <div class=" col-3 ">
                            
                        </div>
                        <div class=" col-3 album">
                            Album
                        </div>
                        <!-- <div class=" col-3 xemthem">
                         
                      </div> -->
                        <div class=" col-1 thoigian">
                           <i class="niand-icon-spotify-clock"></i>
                        </div>
                </div>
               
              
                <!-- Bai 1 -->
                <?php
             $counter = 1; 
              foreach ($data['songplaylists'] as $songplaylists) { ?>
                     <div class="row my-3 mx-3  detailHover">
                  <div class=" col-1 d-flex align-items-center">
                  <?php echo $counter;?>
                  </div>
                  <div class=" col-1 d-flex align-items-center">
                    <img src="<?php echo $songplaylists->getSong()->getSongImageUrl() ?> " alt="error" class="img-fluid " id="fix_img"  >
                  </div>
                  <div class="  col-3">
                    <div class="my-1 hightlightWord">
                      <a href="#"> <?php echo $songplaylists->getSong()->getSongTitle() ?></a> 
                     </div>
                     <div class="my-1 hightlightWord">
                      <a href="#">  <?php echo $songplaylists->getSong()->getSongArtist()->getArtistName() ?></a> 
                     </div>
                  </div>
                  <div class="col-3 d-flex align-items-center xemthem">
                
                </div>
                  <div class="  col-3 d-flex align-items-center hightlightWord">
                  <?php echo $songplaylists->getSong()->getSongAlbum()->getAlbumTitle() ?>
                  </div>
                  <!-- <div class="col-3 d-flex align-items-center xemthem">
                
                </div> -->
                  <div class=" col-1 d-flex align-items-center thoigian">
                  <span class="text-white">
              <?php
    $seconds = $songplaylists->getSong()->getSongDuration();
    $minutes = floor($seconds / 60); // Lấy phần nguyên của số phút
    $remainingSeconds = $seconds % 60; // Lấy số giây còn lại

    // Định dạng chuỗi phút:giây
    $formattedTime = sprintf("%d:%02d", $minutes, $remainingSeconds);

    echo $formattedTime;
    $counter++;
    ?>
              </span>
                  </div>
              </div>
                <?php } ?>
              </div>  
                 
              </div>  
              <hr style="color: aliceblue; margin-top: 50px;">
              
              <br><br><br> <br><br>
        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
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
    <script src="./assets/js/playlist.js"></script>
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