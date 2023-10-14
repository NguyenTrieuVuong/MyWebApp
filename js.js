// Lấy giá trị của các trường input
var password = document.getElementById("password").value;
var email = document.getElementById("email").value;

// Kiểm tra xem các trường input có trống hay không
if (password === "" || email === "") {
  // Nếu trống, hiển thị thông báo lỗi
  document.getElementById("error").innerHTML = "Vui lòng nhập mật khẩu và email.";
} else {
  // Nếu không trống, ẩn thông báo lỗi
  document.getElementById("error").innerHTML = "";
}
