<?php
$conn = mysqli_connect("localhost","root","tucontreseña","sample");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}