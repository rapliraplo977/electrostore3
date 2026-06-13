<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroStore</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .hero{
            background:linear-gradient(135deg,#0f172a,#1e40af);
            color:white;
            padding:80px 0;
        }

        .product-card{
            transition:0.3s;
        }

        .product-card:hover{
            transform:translateY(-5px);
        }

        .price{
            color:#0d6efd;
            font-size:22px;
            font-weight:bold;
        }

        .card img{
            height:220px;
            object-fit:cover;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
<div class="container">

    <a class="navbar-brand fw-bold" href="index.php">
        ElectroStore
    </a>

    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">

        <!-- Search Bar -->
        <form class="mx-auto" style="width:450px;">

            <div class="input-group">

                <span class="input-group-text bg-white border-0">
                    🔍
                </span>

                <input
                    type="text"
                    class="form-control border-0"
                    placeholder="Cari Laptop, Monitor, Keyboard, Mouse..."
                    id="searchInput">

            </div>

        </form>

        <!-- Menu -->
        <ul class="navbar-nav me-3">

    <li class="nav-item">
        <a class="nav-link category-link active"
           href="#"
           data-category="all">
           Semua
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link category-link"
           href="#"
           data-category="Laptop">
           Laptop
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link category-link"
           href="#"
           data-category="Monitor">
           Monitor
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link category-link"
           href="#"
           data-category="Keyboard">
           Keyboard
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link category-link"
           href="#"
           data-category="Mouse">
           Mouse
        </a>
    </li>

</ul>

        <?php if(isset($_SESSION['user_id'])): ?>

            <div class="dropdown">

                <button class="btn btn-success dropdown-toggle"
                        data-bs-toggle="dropdown">

                    <?php echo $_SESSION['nama']; ?>

                </button>

                <ul class="dropdown-menu">

                    <li>
                        <a class="dropdown-item"
                           href="#">
                            Profil Saya
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item"
                           href="logout.php">
                            Logout
                        </a>
                    </li>

                </ul>

            </div>

        <?php else: ?>

            <a href="login.php"
               class="btn btn-primary">

                Login

            </a>

        <?php endif; ?>

    </div>

</div>
</nav>
<!-- HERO -->
<section class="hero">

    <div class="container text-center">

        <h1>Selamat Datang di ElectroStore-3</h1>

        <p>
            Toko Elektronik Modern dan Terpercaya
        </p>

    </div>

</section>

<<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3>Produk Elektronik</h3>

        <button
            class="btn btn-dark"
            data-bs-toggle="offcanvas"
            data-bs-target="#filterSidebar">

            ⚙️ Filter & Urutkan Produk  

        </button>

    </div>

    <div class="row">

        <!-- Produk 1 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Laptop"
             data-brand="ASUS"
             data-name="asus rog g16 laptop gaming"
             data-price="15999000">

            <div class="card shadow h-100">

                <img src="assets/images/asus-rog-g16.jpg"
                     class="card-img-top"
                     alt="ASUS ROG G16">

                <div class="card-body">

                    <h5 class="card-title">
                        ASUS ROG G16
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp15.999.000
                    </p>

                    <a href="product-detail.php?id=1"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

        <!-- Produk 2 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Monitor"
             data-brand="LG"
             data-name="lg monitor 24 monitor"
             data-price="2499000">

            <div class="card shadow h-100">

                <img src="assets/images/lg-monitor.jpg"
                     class="card-img-top"
                     alt="LG Monitor">

                <div class="card-body">

                    <h5 class="card-title">
                        LG Monitor 24"
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp2.499.000
                    </p>

                    <a href="product-detail.php?id=2"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

        <!-- Produk 3 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Keyboard"
             data-brand="Mechanical"
             data-name="mechanical keyboard rgb"
             data-price="699000">

            <div class="card shadow h-100">

                <img src="assets/images/keyboard-rgb.jpg"
                     class="card-img-top"
                     alt="Keyboard RGB">

                <div class="card-body">

                    <h5 class="card-title">
                        Keyboard RGB
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp699.000
                    </p>

                    <a href="product-detail.php?id=3"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

        <!-- Produk 4 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Mouse"
             data-brand="Logitech"
             data-name="logitech g102 mouse"
             data-price="399000">

            <div class="card shadow h-100">

                <img src="assets/images/logitech-g102.jpg"
                     class="card-img-top"
                     alt="Logitech G102">

                <div class="card-body">

                    <h5 class="card-title">
                        Logitech G102
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp399.000
                    </p>

                    <a href="product-detail.php?id=4"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

        <!-- Produk 5 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Laptop"
             data-brand="Lenovo"
             data-name="lenovo thinkpad e14 laptop bisnis"
             data-price="12499000">

            <div class="card shadow h-100">

                <img src="assets/images/lenovo-thinkpad-e14.jpg"
                     class="card-img-top"
                     alt="Lenovo ThinkPad E14">

                <div class="card-body">

                    <h5 class="card-title">
                        Lenovo ThinkPad E14
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp12.499.000
                    </p>

                    <a href="product-detail.php?id=5"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

        <!-- Produk 6 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Monitor"
             data-brand="Samsung"
             data-name="samsung curved monitor 27 inch"
             data-price="3999000">

            <div class="card shadow h-100">

                <img src="assets/images/samsung-monitor.jpg"
                     class="card-img-top"
                     alt="Samsung Monitor">

                <div class="card-body">

                    <h5 class="card-title">
                        Samsung Curved 27"
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp3.999.000
                    </p>

                    <a href="product-detail.php?id=6"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

        <!-- Produk 7 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Keyboard"
             data-brand="Rexus"
             data-name="rexus daxa m71 mechanical keyboard"
             data-price="899000">

            <div class="card shadow h-100">

                <img src="assets/images/rexus-daxa-m71.jpg"
                     class="card-img-top"
                     alt="Rexus Daxa M71">

                <div class="card-body">

                    <h5 class="card-title">
                        Rexus Daxa M71
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp899.000
                    </p>

                    <a href="product-detail.php?id=7"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

        <!-- Produk 8 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Mouse"
             data-brand="Razer"
             data-name="razer deathadder essential mouse gaming"
             data-price="599000">

            <div class="card shadow h-100">

                <img src="assets/images/razer-deathadder.jpg"
                     class="card-img-top"
                     alt="Razer DeathAdder">

                <div class="card-body">

                    <h5 class="card-title">
                        Razer DeathAdder
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp599.000
                    </p>

                    <a href="product-detail.php?id=8"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

        <!-- Produk 9 -->
        <div class="col-lg-3 col-md-6 mb-4 product-item"
             data-category="Laptop"
             data-brand="Acer"
             data-name="acer nitro 5 laptop gaming"
             data-price="13999000">

            <div class="card shadow h-100">

                <img src="assets/images/acer-nitro-5.jpg"
                     class="card-img-top"
                     alt="Acer Nitro 5">

                <div class="card-body">

                    <h5 class="card-title">
                        Acer Nitro 5
                    </h5>

                    <p class="text-primary fw-bold">
                        Rp13.999.000
                    </p>

                    <a href="product-detail.php?id=9"
                       class="btn btn-primary w-100">
                        Detail Produk
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<footer class="bg-dark text-white text-center p-3">
    © 2026 ElectroStore

<section class="container my-5">

<div class="row g-4">

    <!-- MAP TOKO -->

    <div class="col-lg-6">

        <div class="card shadow border-0 h-100">

            <div class="card-body">

                <h3 class="mb-3">
                    📍 Lokasi Toko
                </h3>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.312246447478!2d109.0203851!3d-7.260400099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8f6ac3f1e19b%3A0x5027a76e35679a0!2sKalierang%2C%20Kec.%20Bumiayu%2C%20Kabupaten%20Brebes%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1781300908537!5m2!1sid!2sid" 
                    width="100%"
                    height="550"
                    style="border:0;border-radius:15px;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

            </div>

        </div>

    </div>

    <!-- REVIEW -->

    <div class="col-lg-6">

        <div class="card shadow border-0 h-100">

            <div class="card-body">

                <h3 class="mb-4">
                    ⭐ ElectroStore-3
                </h3>

                <div class="text-center mb-4">

    <h1 id="avgRating" class="display-4 fw-bold text-warning">
        5.0
    </h1>

    <div id="avgStars" class="fs-3 text-warning">
        ⭐⭐⭐⭐⭐
    </div>

    <p class="text-muted">
        Berdasarkan
        <span id="totalReview">1</span>
        ulasan pelanggan
    </p>

</div>

                <div id="reviewList">

    <div class="review-item">

        <h6>Rafli</h6>

        <div class="text-warning">
            ⭐⭐⭐⭐⭐
        </div>

        <p>
            Produk original dan pengiriman cepat.
        </p>

        <hr>

    </div>

</div>

                <hr>

                <h5>Berikan Ulasan</h5>

                <input
                    type="text"
                    id="reviewName"
                    class="form-control mb-3"
                    placeholder="Nama Anda">

                <select
                    id="reviewRating"
                    class="form-select mb-3">

                    <option value="5">⭐⭐⭐⭐⭐ (5)</option>
                    <option value="4">⭐⭐⭐⭐ (4)</option>
                    <option value="3">⭐⭐⭐ (3)</option>
                    <option value="2">⭐⭐ (2)</option>
                    <option value="1">⭐ (1)</option>

                </select>

                <textarea
                    id="reviewText"
                    class="form-control mb-3"
                    rows="3"
                    placeholder="Tulis ulasan Anda">
                </textarea>

                <button
type="button"
class="btn btn-primary w-100"
onclick="tambahReview()">

Kirim Ulasan

</button>

            </div>

        </div>

    </div>

</div>

</section>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

const searchInput =
document.getElementById("searchInput");

searchInput.addEventListener("keyup", function(){

    let keyword =
    this.value.toLowerCase();

    let products =
    document.querySelectorAll(".product-item");

    let found = false;

    products.forEach(function(product){

        let name =
        product.dataset.name.toLowerCase();

        if(name.includes(keyword)){

            product.style.display = "block";
            found = true;

        }else{

            product.style.display = "none";

        }

    });

    document.getElementById("notFound").style.display =
        found ? "none" : "block";

});

</script>

<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="filterSidebar">

<div class="offcanvas-header">

    <h4>⚙️ Filter & Urutkan</h4>

    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas">
    </button>

</div>

<div class="offcanvas-body">

    <h5>Urutkan</h5>

    <div class="form-check">
        <input class="form-check-input"
               type="radio"
               name="sort"
               value="newest">
        <label class="form-check-label">
            Terbaru
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input"
               type="radio"
               name="sort"
               value="low">
        <label class="form-check-label">
            Harga Terendah
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input"
               type="radio"
               name="sort"
               value="high">
        <label class="form-check-label">
            Harga Tertinggi
        </label>
    </div>

    <hr>

    <h5>Kategori</h5>

    <select id="categoryFilter"
            class="form-select">

        <option value="all">
            Semua Kategori
        </option>

        <option value="Laptop">
            Laptop
        </option>

        <option value="Monitor">
            Monitor
        </option>

        <option value="Keyboard">
            Keyboard
        </option>

        <option value="Mouse">
            Mouse
        </option>

    </select>

    <hr>

    <h5>Brand</h5>

    <select id="brandFilter"
            class="form-select">

        <option value="all">
            Semua Brand
        </option>

        <option value="ASUS">
            ASUS
        </option>

        <option value="LG">
            LG
        </option>

        <option value="Mechanical">
            Mechanical
        </option>

        <option value="Logitech">
            Logitech
        </option>

    </select>

    <div class="mt-4 d-grid gap-2">

        <button
            id="applyFilter"
            class="btn btn-primary">

            Terapkan Filter

        </button>

        <button
            id="resetFilter"
            class="btn btn-outline-secondary">

            Hapus Semua Filter

        </button>

    </div>

</div>

</div>

<script>

document
.getElementById("applyFilter")
.addEventListener("click", function(){

    let category =
    document.getElementById("categoryFilter").value;

    let brand =
    document.getElementById("brandFilter").value;

    let products =
    document.querySelectorAll(".product-item");

    products.forEach(product => {

        let show = true;

        if(category !== "all" &&
           product.dataset.category !== category){

            show = false;
        }

        if(brand !== "all" &&
           product.dataset.brand !== brand){

            show = false;
        }

        product.style.display =
            show ? "block" : "none";

    });

});

document
.getElementById("resetFilter")
.addEventListener("click", function(){

    document.getElementById("categoryFilter").value =
    "all";

    document.getElementById("brandFilter").value =
    "all";

    document
    .querySelectorAll(".product-item")
    .forEach(product => {

        product.style.display = "block";

    });

});

</script>



<script>

let daftarRating = [5]; // rating awal Rafli

function tambahReview(){

    let nama = document.getElementById("reviewName").value;
    let rating = parseInt(document.getElementById("reviewRating").value);
    let ulasan = document.getElementById("reviewText").value;

    if(nama.trim() === "" || ulasan.trim() === ""){

        alert("Lengkapi data terlebih dahulu!");
        return;

    }

    let stars = "";

    for(let i = 0; i < rating; i++){
        stars += "⭐";
    }

    let reviewHTML = `
        <div class="review-item">

            <h6>${nama}</h6>

            <div class="text-warning">
                ${stars}
            </div>

            <p>${ulasan}</p>

            <hr>

        </div>
    `;

    document
        .getElementById("reviewList")
        .insertAdjacentHTML("beforeend", reviewHTML);

    // Simpan rating baru
    daftarRating.push(rating);

    // Hitung total rating
    let total = 0;

    daftarRating.forEach(function(nilai){

        total += nilai;

    });

    // Hitung rata-rata
    let rataRata =
        (total / daftarRating.length).toFixed(1);

    document.getElementById("avgRating")
        .innerText = rataRata;

    document.getElementById("totalReview")
        .innerText = daftarRating.length;

    // Tampilkan bintang rata-rata
    let starDisplay = "";

    let bulat = Math.round(rataRata);

    for(let i = 0; i < bulat; i++){

        starDisplay += "⭐";

    }

    document.getElementById("avgStars")
        .innerText = starDisplay;

    // Reset form
    document.getElementById("reviewName").value = "";
    document.getElementById("reviewRating").value = "5";
    document.getElementById("reviewText").value = "";

    alert("Ulasan berhasil ditambahkan!");

}

</script>

</script>
<script>

document.addEventListener("DOMContentLoaded", function(){

    const links =
    document.querySelectorAll(".category-link");

    const products =
    document.querySelectorAll(".product-item");

    links.forEach(link => {

        link.addEventListener("click", function(e){

            e.preventDefault();

            let category =
            this.dataset.category;

            links.forEach(item => {

                item.classList.remove("active");

            });

            this.classList.add("active");

            products.forEach(product => {

                if(
                    category === "all" ||
                    product.dataset.category === category
                ){

                    product.style.display = "";

                }else{

                    product.style.display = "none";

                }

            });

        });

    });

});

</script>
</body>
</html>