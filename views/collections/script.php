<script>
    // Lấy tất cả các phần tử card-body
    var cardBodies = document.querySelectorAll('.card-body');
    if (cardBodies != null) {
        // Lặp qua từng phần tử card-body
        cardBodies.forEach(function(cardBody) {
            // Lấy phần tử chứa nút "play" của từng card-body
            var playBtn = cardBody.querySelector('.play-btn');
            if (cardBody != null) {
                // Khi hover vào card-body
                cardBody.addEventListener('mouseover', function() {
                    // Thêm lớp "show" vào phần tử chứa nút "play"
                    if (playBtn != null) playBtn.classList.add('show');
                });

                // Khi rời chuột khỏi card-body
                cardBody.addEventListener('mouseout', function() {
                    // Loại bỏ lớp "show" khỏi phần tử chứa nút "play"
                    if (playBtn != null) playBtn.classList.remove('show');
                });
            }
        });
    }

    window.onload = function() {
        document.getElementById("open-btn").addEventListener('click', function() {
            document.getElementById("side-bar").classList.toggle('d-sm-none');
            document.getElementById("side-bar").classList.toggle('d-none');
            document.getElementById("side-bar").style.width = '85vw';
            document.getElementById("main-view").classList.toggle('d-none');
        })
    }
</script>