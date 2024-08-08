<?php
    $mysqli = new mysqli("localhost","root","","doan1");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Kết Nối Bị Lỗi" . $mysqli -> connect_error;
    exit();
    }
?>