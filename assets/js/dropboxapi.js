function openDropboxChooser(callback) {
  Dropbox.choose({
    success: function (files) {
      // Xử lý thành công
      console.log(files);
      // Gọi callback và truyền giá trị files cho hàm gọi
      callback(files);
    },
    cancel: function () {
      // Xử lý khi người dùng hủy bỏ
      console.log("Hủy bỏ");
      // Gọi callback với giá trị null cho hàm gọi
      callback(null);
    },
    linkType: "direct", // Chỉ chọn file (không thư mục)
    multiselect: false, // Cho phép chọn một file duy nhất
  });
}
