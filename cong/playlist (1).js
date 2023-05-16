// Lấy tất cả các phần tử có class là 'hightlight1'
var highlightElements = document.querySelectorAll('.hightlight1');

// Định dạng màu chữ ban đầu bằng CSS
highlightElements.forEach(function(highlightElement) {
  highlightElement.style.color = "#6c757d";
});

// Tạo function để xử lý sự kiện hover
function highlightOnHover(highlightElement) {
  highlightElement.onmouseover = function() {
    highlightElement.style.color = "white"; // Thay đổi màu chữ khi hover
  };

  highlightElement.onmouseout = function() {
    highlightElement.style.color = "#6c757d"; // Đặt lại màu chữ khi không hover
  };
}

// Áp dụng function cho tất cả các phần tử có class là 'hightlight1'
highlightElements.forEach(function(highlightElement) {
  highlightOnHover(highlightElement);
});


// lưu trữ đường dẫn ảnh cho mỗi bài hát
var imagePaths = {
  "Tjärnheden": "/image/song/Tjärnheden1.jpg",
  "Quand vous souriez": "/image/song/Quand_vous_souriez1.jpg",
  "Allena": "/image/song/Allena1.jpg",
  "Saying Things": "/image/song/Saying_Things1.jpg"
};

// hien nút play khi hover
var elements = document.getElementsByClassName("detailHover");

for (var i = 0; i < elements.length; i++) {
  let originalContent = elements[i].querySelector(".col-1").innerHTML;

  elements[i].addEventListener("mouseover", function() {
    if (!this.getAttribute("data-isContentChanged")) {
      this.querySelector(".col-1").innerHTML = '<i style="cursor: pointer;" class="niand-icon-spotify-play text-white hightlight1"></i>';
      this.setAttribute("data-isContentChanged", "true");
    }
  });

  elements[i].addEventListener("mousedown", function() {
    // lấy đường dẫn ảnh tương ứng và đặt nó cho thẻ ảnh trong popup
    var songName = this.querySelector("a").innerHTML.trim();
    var imagePath = imagePaths[songName];
    var popupImg = document.getElementById("popup-content").querySelector("img");
    popupImg.setAttribute("src", imagePath);

    // hiển thị popup
    var popup = document.getElementById("popup");
    popup.style.display = "flex";
  });

  elements[i].addEventListener("mouseup", function() {
    // restore original content when play button is released
    this.querySelector(".col-1").innerHTML = originalContent;
    this.removeAttribute("data-isContentChanged");
  });

  elements[i].addEventListener("mouseleave", function() {
    // var popup = document.getElementById("popup");
    // popup.style.display = "none";
    // restore original content when mouse leaves the element
    if (this.getAttribute("data-isContentChanged")) {
      this.querySelector(".col-1").innerHTML = originalContent;
      this.removeAttribute("data-isContentChanged");
    }
  });
}

var closePopupBtn = document.getElementById("close-popup");
closePopupBtn.addEventListener("click", function() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
});
//popover
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="popover"]'))
const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl, {
    trigger: 'click',
    html: true,
    content: popoverTriggerEl.getAttribute('data-content')
  })
})

$(function() {
  $('[data-toggle="popover"]').popover({
    container: 'body'
  }).on('shown.bs.popover', function() {
    $('[data-toggle="popover"]').not(this).popover('hide');
  });
});
//hieu ung nút search setting
function toggleSearchContainer() {
  var searchContainer = document.getElementById("search-container");
  searchContainer.classList.toggle("show");
}



const cardBodies = document.querySelectorAll(".card-body");

// Lặp qua từng phần tử
cardBodies.forEach((cardBody) => {
  // Gán sự kiện "mouseover" vào phần tử hiện tại
  cardBody.addEventListener("mouseover", () => {
    // Chọn nút "play" và thêm lớp "show" vào nó
    const playBtn = cardBody.querySelector(".play-btn");
    playBtn.classList.add("show");
  });

  // Gán sự kiện "mouseout" vào phần tử hiện tại
  cardBody.addEventListener("mouseout", () => {
    // Chọn nút "play" và xóa lớp "show" khỏi nó
    const playBtn = cardBody.querySelector(".play-btn");
    playBtn.classList.remove("show");
  });
});

//set mouseover && mouseout cho cac the
let card = document.querySelector(".bg-bg");

card.addEventListener("mouseover", function () {
  this.classList.add("active");
});

card.addEventListener("mouseout", function () {
  this.classList.remove("active");
});