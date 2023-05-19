<div id="now-playing-bar" class="pe-2 ps-2">
    <div class="row row-cols-3 m-auto">
        <div id="now-playing-bar-left" class="col d-flex align-items-center">
            <div class="d-flex gap-3 justify-content-start align-items-center">
                <div id="anh">
                    <img class="img-fluid rounded-1" src="<?php echo $data['song']->getSongImageUrl(); ?>" alt="<?php echo $data['song']->getSongTitle(); ?>">
                </div>
                <div class="word">
                    <div class="title">
                        <?php echo $data['song']->getSongTitle(); ?>
                    </div>
                    <div class="authors">
                        <a href="?url=albums/album/<?php echo $data['song']->getSongAlbum()->getAlbumId(); ?>"><?php echo $data['song']->getSongAlbum()->getAlbumTitle(); ?></a>
                        <a href="?url=artists/artist/<?php echo $data['song']->getSongArtist()->getArtistId(); ?>"><?php echo $data['song']->getSongArtist()->getArtistName(); ?></a>
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
                <div class="player-controls d-xl-flex d-flex align-items-center justify-content-center gap-4">
                    <div class="player-controls-left d-lg-flex d-md-flex d-sm-none d-none d-flex align-items-center justify-content-center gap-4">
                        <button type="button">
                            <i class="niand-icon-spotify-mix"></i>
                        </button>
                        <button type="button">
                            <i class="niand-icon-spotify-prev"></i>
                        </button>
                    </div>
                    <div class="player-controls-center">
                        <button id="play-button" type="button" class="bg-white m-0 p-1 rounded-circle d-flex justify-content-center align-items-center">
                            <i class="niand-icon-spotify-play text-black"></i>
                        </button>
                    </div>
                    <div class="player-controls-right d-flex align-items-center justify-content-center gap-4">
                        <button type="button">
                            <i class="niand-icon-spotify-next d-lg-flex d-md-flex d-sm-none d-none"></i>
                        </button>
                        <button type="button">
                            <i class="niand-icon-spotify-loop d-lg-flex d-md-flex d-sm-none d-none"></i>
                        </button>
                    </div>
                </div>
                <div class="playback-bar d-flex align-items-center justify-content-center gap-2">
                    <div id="playback-position" class="playback-position">
                        0:00
                    </div>
                    <div class="progress border w-100" style="height: 4px;">
                        <div id="progress-bar-song" class="progress-bar bg-dark"></div>
                    </div>
                    <div class="playback-duration">
                        <?php
                        $seconds = $data['song']->getSongDuration();
                        $minutes = floor($seconds / 60); // Lấy phần nguyên của số phút
                        $remainingSeconds = $seconds % 60; // Lấy số giây còn lại
                        // Định dạng chuỗi phút:giây
                        $formattedTime = sprintf("%d:%02d", $minutes, $remainingSeconds);

                        echo $formattedTime;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <audio id="audio-player" src="<?php echo $data['song']->getSongUrl(); ?>"></audio>
        <div id="now-playing-bar-right" class="col d-lg-flex d-md-flex d-sm-none d-none d-flex justify-content-end align-items-center gap-3">
            <div>
                <i class="niand-icon-spotify-mic"></i>
            </div>
            <div onclick="window.location.href='?url=queues/queue'">
                <i class="niand-icon-spotify-playlist"></i>
            </div>
            <div>
                <i class="niand-icon-spotify-loudspeaker"></i>
            </div>
            <div class="d-flex align-items-center gap-2">
                <i class="niand-icon-spotify-volumn"></i>
                <div id="volume-bar" class="progress border" style="width: 100px; height: 4px;">
                    <div id="volume-progress" class="progress-bar bg-dark" style="width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var audio = document.getElementById("audio-player");
        var playButton = document.getElementById("play-button");
        var playbackPosition = document.getElementById("playback-position");
        // Hàm định dạng thời gian (giây -> mm:ss)
        function formatTime(time) {
            var minutes = Math.floor(time / 60);
            var seconds = Math.floor(time % 60);
            seconds = seconds < 10 ? "0" + seconds : seconds;
            return minutes + ":" + seconds;
        }
        playButton.addEventListener("click", function() {
            if (audio.paused) {
                audio.play();
                playButton.innerHTML = '<i class="niand-icon-spotify-pause text-black"></i>';
            } else {
                audio.pause();
                playButton.innerHTML = '<i class="niand-icon-spotify-play text-black"></i>';
            }
        });
        var progressBar = document.getElementById("progress-bar-song");

        // Đợi sự kiện 'canplay' được kích hoạt trước khi đính kèm sự kiện 'timeupdate'
        audio.addEventListener('canplay', function() {
            audio.addEventListener('timeupdate', function() {
                var duration = audio.duration; // Thời lượng của đoạn nhạc (tính theo giây)
                var currentTime = audio.currentTime; // Thời gian hiện tại (tính theo giây)
                var progress = (currentTime / duration) * 100; // Tính toán phần trăm hoàn thành
                progressBar.style.width = progress + "%"; // Cập nhật chiều rộng của thanh tiến trình

                // Cập nhật hiển thị thời gian hiện tại
                playbackPosition.innerHTML = formatTime(currentTime);
            });
        });
        audio.addEventListener('ended', function() {
            playButton.innerHTML = '<i class="niand-icon-spotify-play text-black"></i>'; // Thay đổi biểu tượng thành nút pause
        });
        var volumeBar = document.getElementById('volume-bar');
        var volumeProgress = document.getElementById('volume-progress');

        function setVolume(event) {
            var volumeBarWidth = volumeBar.offsetWidth;
            var mouseX = event.pageX - volumeBar.offsetLeft;
            var volume = mouseX / volumeBarWidth;

            // Giới hạn giá trị âm lượng từ 0 đến 1
            volume = Math.max(0, Math.min(1, volume));

            // Cập nhật âm lượng của audio
            audio.volume = volume;

            // Cập nhật chiều rộng của thanh tiến trình
            volumeProgress.style.width = (volume * 100) + '%';
        }

        volumeBar.addEventListener('mousedown', function(event) {
            setVolume(event);

            // Thêm sự kiện 'mousemove' để theo dõi việc kéo
            document.addEventListener('mousemove', setVolume);
        });

        document.addEventListener('mouseup', function() {
            // Loại bỏ sự kiện 'mousemove' khi ngừng kéo
            document.removeEventListener('mousemove', setVolume);
        });
    </script>
</div>