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
    <link rel="stylesheet" href="./assets/css/setting.css">
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
            <div class="row">
              <div class="col-2">

              </div>
              <div class="col-8 my-5">
                  <div class="row">
                      <div class="col-6">
                          <span class="fw-bolder fs-5 text-white">Cài đặt  </span>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                          <button id="search-btn" onclick="toggleSearchContainer()">
                            <i class="niand-icon-spotify-search text-white"></i>
                          </button>
                          <div id="search-container" class="search-container">
                            <input type="text" id="search-input" placeholder="">
                          </div>
                        </div>
                        
                        
                  </div>
                  <div class="row">
                      <span class="fw-bolder my-5 fs-5 text-white">Ngôn ngữ</span>
                      <div class="col-8">
                          <span style="font-size:small" class="text-white">Chọn ngôn ngữ - Các thay đổi sẽ được áp dụng sau khi bạn khởi động lại ứng dụng  </span>
                      </div>
                      <div class="col-4 d-flex justify-content-end">
                         <select class="zrvvPyoxE6wQNqnu0yWA" id="desktop.settings.selectLanguage" dir="auto"><option value="system-language">System Default Language (Ngôn ngữ mặc định của hệ thống)</option><option value="en">English (English)</option><option value="af">Afrikaans (Afrikaans)</option><option value="am">አማርኛ (Amharic)</option><option value="ar">العَرَبِيَّة (Arabic)</option><option value="az">Azərbaycanca (Azerbaijani)</option><option value="bg">Български (Bulgarian)</option><option value="bho">भोजपुरी (Bhojpuri)</option><option value="bn">বাংলা (Bengali)</option><option value="ca">Català (Catalan)</option><option value="cs">Čeština (Czech)</option><option value="da">Dansk (Danish)</option><option value="de">Deutsch (German)</option><option value="el">Eλληνικά (Greek)</option><option value="es">Español de España (European Spanish)</option><option value="es-419">Español de Latinoamérica (Latin American Spanish)</option><option value="et">Eesti (Estonian)</option><option value="fa">فارسی (Persian)</option><option value="fi">Suomeksi (Finnish)</option><option value="fil">Filipino (Filipino)</option><option value="fr">Français (French)</option><option value="fr-CA">Français Canadien (Canadian French)</option><option value="gu">ગુજરાતી (Gujarati)</option><option value="he">עברית (Hebrew)</option><option value="hi">हिन्दी (Hindi)</option><option value="hr">Hrvatski (Croatian)</option><option value="hu">Magyar (Hungarian)</option><option value="id">Bahasa Indonesia (Indonesian)</option><option value="is">Íslenska (Icelandic)</option><option value="it">Italiano (Italian)</option><option value="ja">日本語 (Japanese)</option><option value="kn">ಕನ್ನಡ (Kannada)</option><option value="ko">한국어 (Korean)</option><option value="lt">Lietuvių (Lithuanian)</option><option value="lv">Latviešu (Latvian)</option><option value="ml">മലയാളം (Malayalam)</option><option value="mr">मराठी (Marathi)</option><option value="ms">Melayu (Malay)</option><option value="nb">Norsk (Norwegian)</option><option value="ne">नेपाली (Nepali)</option><option value="nl">Nederlands (Dutch)</option><option value="or">ଓଡ଼ିଆ (Odia)</option><option value="pa-IN">ਪੰਜਾਬੀ (Punjabi)</option><option value="pa-PK">پنجابی (Punjabi)</option><option value="pl">Polski (Polish)</option><option value="pt-BR">Português do Brasil (Brazilian Portuguese)</option><option value="pt-PT">Português (European Portuguese)</option><option value="ro">Română (Romanian)</option><option value="ru">Русский (Russian)</option><option value="sk">Slovenčina (Slovak)</option><option value="sl">Slovenski (Slovenian)</option><option value="sr">Srpski (Serbian)</option><option value="sv">Svenska (Swedish)</option><option value="sw">Kiswahili (Swahili)</option><option value="ta">தமிழ் (Tamil)</option><option value="te">తెలుగు (Telugu)</option><option value="th">ภาษาไทย (Thai)</option><option value="tr">Türkçe (Turkish)</option><option value="uk">Українська (Ukrainian)</option><option value="ur">اردو (Urdu)</option><option value="vi">Tiếng Việt (Vietnamese)</option><option value="zh-CN">简体中文 (Simplified Chinese)</option><option value="zh-TW">中文 (Traditional Chinese)</option><option value="zu">IsiZulu (Zulu)</option></select>
                       </div>
                  </div>
                 
                
              </div>
              <div class="col-2">
  
              </div>
            </div>
           
       
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