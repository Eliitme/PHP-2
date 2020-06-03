-- Tạo bảng admin
CREATE TABLE trangwebbanhang.admin (
    id_admin INT NOT NULL AUTO_INCREMENT , 
    ten_dang_nhap VARCHAR(50) NOT NULL , 
    mat_khau VARCHAR(50) NOT NULL , 
    cap_do BOOLEAN NOT NULL , 
    PRIMARY KEY (id_admin)
    ) ENGINE = InnoDB;
