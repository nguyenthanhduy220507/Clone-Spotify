<?php
require_once "./config/basehref.php";
$url = getUrl();
if (!isset($_SESSION['username'])) {
    header("Location: ?url=home/index");
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
    <title>Spotify - Trình phát trên web</title>
    <!-- Icon Css -->
    <link rel="stylesheet" href="./assets/fonts/style.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="./assets/fonts/ie7/ie7.css">
    <!--<![endif]-->
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- CSS - SCSS -->
    <link rel="stylesheet" href="./assets/css/setting.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- include jQuery library -->
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <?php require_once('./views/header-bar-login.php') ?>
        </header>

        <main id="main-view">
            <!-- TODO Nội dung của trang con -->
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8 my-5">
                    <div class="row">
                        <div class="col-6">
                            <span class="fw-bolder fs-5 text-white">Cài đặt </span>
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
                            <span style="font-size:small" class="text-white">Chọn ngôn ngữ - Các thay đổi sẽ được áp dụng sau khi bạn khởi động lại ứng dụng </span>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <select class="zrvvPyoxE6wQNqnu0yWA" id="desktop.settings.selectLanguage" dir="auto">
                                <option value="system-language">System Default Language (Ngôn ngữ mặc định của hệ thống)</option>
                                <option value="en">English (English)</option>
                                <option value="af">Afrikaans (Afrikaans)</option>
                                <option value="am">አማርኛ (Amharic)</option>
                                <option value="ar">العَرَبِيَّة (Arabic)</option>
                                <option value="az">Azərbaycanca (Azerbaijani)</option>
                                <option value="bg">Български (Bulgarian)</option>
                                <option value="bho">भोजपुरी (Bhojpuri)</option>
                                <option value="bn">বাংলা (Bengali)</option>
                                <option value="ca">Català (Catalan)</option>
                                <option value="cs">Čeština (Czech)</option>
                                <option value="da">Dansk (Danish)</option>
                                <option value="de">Deutsch (German)</option>
                                <option value="el">Eλληνικά (Greek)</option>
                                <option value="es">Español de España (European Spanish)</option>
                                <option value="es-419">Español de Latinoamérica (Latin American Spanish)</option>
                                <option value="et">Eesti (Estonian)</option>
                                <option value="fa">فارسی (Persian)</option>
                                <option value="fi">Suomeksi (Finnish)</option>
                                <option value="fil">Filipino (Filipino)</option>
                                <option value="fr">Français (French)</option>
                                <option value="fr-CA">Français Canadien (Canadian French)</option>
                                <option value="gu">ગુજરાતી (Gujarati)</option>
                                <option value="he">עברית (Hebrew)</option>
                                <option value="hi">हिन्दी (Hindi)</option>
                                <option value="hr">Hrvatski (Croatian)</option>
                                <option value="hu">Magyar (Hungarian)</option>
                                <option value="id">Bahasa Indonesia (Indonesian)</option>
                                <option value="is">Íslenska (Icelandic)</option>
                                <option value="it">Italiano (Italian)</option>
                                <option value="ja">日本語 (Japanese)</option>
                                <option value="kn">ಕನ್ನಡ (Kannada)</option>
                                <option value="ko">한국어 (Korean)</option>
                                <option value="lt">Lietuvių (Lithuanian)</option>
                                <option value="lv">Latviešu (Latvian)</option>
                                <option value="ml">മലയാളം (Malayalam)</option>
                                <option value="mr">मराठी (Marathi)</option>
                                <option value="ms">Melayu (Malay)</option>
                                <option value="nb">Norsk (Norwegian)</option>
                                <option value="ne">नेपाली (Nepali)</option>
                                <option value="nl">Nederlands (Dutch)</option>
                                <option value="or">ଓଡ଼ିଆ (Odia)</option>
                                <option value="pa-IN">ਪੰਜਾਬੀ (Punjabi)</option>
                                <option value="pa-PK">پنجابی (Punjabi)</option>
                                <option value="pl">Polski (Polish)</option>
                                <option value="pt-BR">Português do Brasil (Brazilian Portuguese)</option>
                                <option value="pt-PT">Português (European Portuguese)</option>
                                <option value="ro">Română (Romanian)</option>
                                <option value="ru">Русский (Russian)</option>
                                <option value="sk">Slovenčina (Slovak)</option>
                                <option value="sl">Slovenski (Slovenian)</option>
                                <option value="sr">Srpski (Serbian)</option>
                                <option value="sv">Svenska (Swedish)</option>
                                <option value="sw">Kiswahili (Swahili)</option>
                                <option value="ta">தமிழ் (Tamil)</option>
                                <option value="te">తెలుగు (Telugu)</option>
                                <option value="th">ภาษาไทย (Thai)</option>
                                <option value="tr">Türkçe (Turkish)</option>
                                <option value="uk">Українська (Ukrainian)</option>
                                <option value="ur">اردو (Urdu)</option>
                                <option value="vi">Tiếng Việt (Vietnamese)</option>
                                <option value="zh-CN">简体中文 (Simplified Chinese)</option>
                                <option value="zh-TW">中文 (Traditional Chinese)</option>
                                <option value="zu">IsiZulu (Zulu)</option>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="col-2">

                </div>
            </div>


        </main>

        <div id="side-bar" class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none d-flex flex-column">
            <?php require_once('./views/side-bar.php') ?>
        </div>

        <footer>
            <?php require_once('./views/playing-bar.php') ?>
        </footer>
    </div>
    <script src="/assets/js/script.js"></script>
    <script>
        window.onload = function() {
            document.getElementById("open-btn").addEventListener('click', function() {
                document.getElementById("side-bar").classList.toggle('d-sm-none');
                document.getElementById("side-bar").classList.toggle('d-none');
                document.getElementById("side-bar").style.width = '85vw';
                document.getElementById("main-view").classList.toggle('d-none');
            })
        }
    </script>
</body>

</html>