<?php  
 //load_data.php  
 include('modules/config.php');
 $output = '';  
 if(isset($_POST["id_hieu"]))  
 {  
      if($_POST["id_hieu"] != '')  
      {  
           $sql = "SELECT * FROM quanliloaisanpham WHERE id_hieu = '".$_POST["id_hieu"]."'";  
      }  
      else  
      {     
           $sql = "SELECT * FROM quanliloaisanpham";  
      }  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
          $output .= '<option value="'.$row["id_loai"].'">'.$row["ten_loai"].'</option>';  
      }  
      echo $output;  
 }  
 ?>