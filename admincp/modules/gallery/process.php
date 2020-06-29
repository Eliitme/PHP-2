<?php
include('../config.php');
if (isset($_FILES['files'])) {

    $name_array = $_FILES['files']['name'];
    $tmp_name_array = $_FILES['files']['tmp_name'];
    // Number of files
    $count_tmp_name_array = count($tmp_name_array);
    $static_final_name = date('dmY-' . time(), time());

    for ($i = 0; $i < $count_tmp_name_array; $i++) {
        // Get extension of current file
        $extension = pathinfo($name_array[$i], PATHINFO_EXTENSION);

        $ten_anh = $static_final_name . $i . "." . $extension;
        $url = "upload/" . $ten_anh;
        // Pay attention to $static_final_name 
        $sql = "insert into gallery (ten_anh, url) values ('$ten_anh', '$url')";

        $rs = mysqli_query($conn, $sql);

        if ($rs) {
            if (move_uploaded_file($tmp_name_array[$i], "upload/" . $ten_anh)) {
                echo $name_array[$i] . " upload is complete<br>";
            } else {
                echo "move_uploaded_file function failed for " . $name_array[$i] . "<br>";
            }
        }
    }
}
?>

<script>
    history.back();
</script>