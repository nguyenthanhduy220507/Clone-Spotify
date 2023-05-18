<script>
    var navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(function(link) {
        link.addEventListener("click", function() {
            // Xóa lớp active từ tất cả các li > a
            navLinks.forEach(function(navLink) {
                navLink.classList.remove("active");
            });

            // Thêm lớp active vào li > a được click
            this.classList.add("active");
        });
    });
</script>