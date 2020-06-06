function formLogin() {
  var ten_dang_nhap = document.getElementById("ten-dang-nhap").value;
  var mat_khau = document.getElementById("mat-khau").value;

  if (ten_dang_nhap == null || ten_dang_nhap == "") {
    alert("Vui lòng nhập tên đăng nhập!");
    return false;
  } else if (mat_khau == null || mat_khau == "") {
    alert("Vui lòng nhập mật khẩu");
    return false;
  }
  return true;
}

function formHieuSP() {
  var ma_hieu = document.getElementById("ma-hieu").value;
  var hieu_san_pham = document.getElementById("hieu-san-pham").value;

  if (ma_hieu == null || ma_hieu == "") {
    alert("Vui lòng nhập mã hiệu sản phẩm!");
    return false;
  } else if (hieu_san_pham == null || hieu_san_pham == "") {
    alert("Vui lòng nhập tên hiệu sản phẩm!");
    return false;
  }
  return true;
}
