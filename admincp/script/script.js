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

function valiadate() {
  var mat_khau = document.getElementById("mat_khau").value;

  if (mat_khau.length < 6) {
    alert("Mật khẩu phải lớn hơn 6 kí tự");
    return false;
  }
  return true;
}

function valiadate2() {
  var mat_khau_moi = document.getElementById("mat_khau_moi").value;
  var nhap_lai_mat_khau = document.getElementById("nhap_lai_mat_khau").value;

  if (mat_khau_moi.length < 6) {
    alert("Mật khẩu phải lớn hơn 6 kí tự");
    return false;
  } else if (mat_khau_moi != nhap_lai_mat_khau) {
    alert("Nhập lại mật khẩu không đúng");
    return false;
  }
  return true;
}
