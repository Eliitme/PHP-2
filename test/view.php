<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');

$rs = mysqli_query($conn, "select * from test");



while($row = mysqli_fetch_array($rs)){
    echo $row['nd'];
    echo "<br>";
}