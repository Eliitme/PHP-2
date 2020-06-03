function formlogin(){
    var ten_dang_nhap = document.getElementById('ten-dang-nhap').value;
    var mat_khau = document.getElementById('mat-khau').value;

    if(ten_dang_nhap == null || ten_dang_nhap == ''){
        alert('Vui lòng nhập tên đăng nhập!');
        return false;
    } else if(mat_khau == null || mat_khau == ''){
        alert('Vui lòng nhập mật khẩu');
        return false
    } return true;
}