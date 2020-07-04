function formLogin(){
  var x = document.getElementById("ten_dang_nhap").value;
  var y = document.getElementById("mat_khau");

  if(!x || !y){
      alert("Không để trống tên đăng nhập hoặc mật khẩu");
      return false;
  }
  return true;
}

function formRegister(){
    var x = document.getElementById("ho_va_ten").value;
    var y = document.getElementById("ten_dang_nhap").value;
    var z = document.getElementById("mat_khau").value;
    var t = document.getElementById("nhap_lai_mat_khau").value;

    if(!x || !y || !z || !t){
        alert("Không để trống trường hợp nào");
        return false;
    }

    if(z != t){
        alert("Nhập lại mật khẩu không chính xác!");
        return false
    }

    return true;
}

function validateFormUpdate(){
    var x = document.getElementById("ho_va_ten");
    var y = document.getElementById("dia_chi");
    var z = document.getElementById("so_dien_thoai");
    var t = document.getElementById("email");

    if(!x || !y || !z || !t){
        alert("Không được để trống trường hợp nào");
        return false;
    }
    return true;
}