function validateFormUpdate() {
  var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
  var mobile = document.getElementById("so_dien_thoai");
  if (mobile != "") {
    if (vnf_regex.test(mobile) == false) {
      alert("Số điện thoại của bạn không đúng định dạng!");
      return false;
    } else {
      alert("Số điện thoại của bạn hợp lệ!");
      return true;
    }
  } else {
    alert("Bạn chưa điền số điện thoại!");
    return false;
  }
}
