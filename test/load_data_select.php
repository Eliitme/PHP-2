<?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "trangwebbanhang");  
 function fill_brand($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM quanlihieusanpham";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_hieu"].'">'.$row["ten_hieu"].'</option>';  
      }  
      return $output;  
 }  
 function fill_product($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM quanliloaisanpham";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
          $output .= '<option value="'.$row["id_loai"].'">'.$row["ten_loai"].'</option>';
      }  
      return $output;  
 }  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Multiple Image Upload</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3>  
                     <select name="brand" id="brand">  
                          <option value="">Hiệu</option>  
                          <?php echo fill_brand($connect); ?>  
                     </select>  
                     <br /><br />  
                     <select name="show_product" id="show_product">  
                          <option value="">Loại</option>  
                          <?php echo fill_product($connect); ?>  
                     </select>  
                </h3>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#brand').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>  