<?php

include 'koneksi.php';

$product_id = $_POST['product_id'];
$nama = $_POST['nama'];
$rating = $_POST['rating'];
$ulasan = $_POST['ulasan'];

mysqli_query(

    $conn,

    "INSERT INTO reviews
    (product_id,nama,rating,ulasan)

    VALUES

    ('$product_id',
     '$nama',
     '$rating',
     '$ulasan')"

);

echo "success";

?>