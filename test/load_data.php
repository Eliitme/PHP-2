<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "trangwebbanhang");  
 $output = '';  
 if(isset($_POST["brand_id"]))  
 {  
      if($_POST["brand_id"] != '')  
      {  
           $sql = "SELECT * FROM quanliloaisanpham WHERE id_hieu = '".$_POST["brand_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM quanliloaisanpham";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
          $output .= '<option value="'.$row["id_loai"].'">'.$row["ten_loai"].'</option>';  
      }  
      echo $output;  
 }  
 ?>