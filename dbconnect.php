<?php
$link = mysqli_connect("localhost","ttt","ttt","dbtest") or die("Error " . mysqli_error($link));
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>