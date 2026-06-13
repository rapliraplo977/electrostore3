<?php

include 'koneksi.php';

$id = $_GET['id'] ?? 1;

$produk = [];

switch($id){

    case 1:
        $produk = [
            'nama' => 'ASUS ROG G16',
            'kode' => 'ASUS-ROG-G16-01',
            'harga' => 'Rp15.999.000',
            'gambar' => 'asus-rog-g16.jpg',
            'deskripsi' => 'Laptop gaming performa tinggi untuk kebutuhan gaming dan produktivitas.',
            'spesifikasi' => [
                'Intel Core i7',
                'RAM DDR5',
                'SSD NVMe',
                'NVIDIA RTX 4060',
                'Layar 16 Inch 165Hz'
            ],
            
            'variasi' => [
                'RAM' => ['8 GB', '16 GB', '32 GB'],
                'SSD' => ['512 GB', '1 TB', '2 TB']
            ]
        ];
    break;

    case 2:
        $produk = [
            'nama' => 'LG Monitor 24"',
            'kode' => 'LG-MONITOR-24-01',
            'harga' => 'Rp2.499.000',
            'gambar' => 'lg-monitor.jpg',
            'deskripsi' => 'Monitor IPS Full HD dengan warna tajam dan nyaman untuk bekerja maupun bermain game.',
            'spesifikasi' => [
                'IPS Panel',
                'Resolusi Full HD',
                'Refresh Rate 75Hz',
                'HDMI & VGA',
                'Anti Flicker'
            ],
            
            'variasi' => [
                'Ukuran' => ['24 Inch', '27 Inch', '32 Inch']
            ]
        ];
    break;

    case 3:
        $produk = [
            'nama' => 'Mechanical Keyboard RGB',
            'kode' => 'KEYBOARD-RGB-01',
            'harga' => 'Rp699.000',
            'gambar' => 'keyboard-rgb.jpg',
            'deskripsi' => 'Keyboard gaming mekanikal dengan lampu RGB dan performa responsif.',
            'spesifikasi' => [
                'Mechanical Switch',
                'RGB Backlight',
                'USB Type-C',
                'Anti Ghosting',
                'Full Size Keyboard'
            ],
            
            'variasi' => [
                'Switch' => ['Red Switch', 'Blue Switch', 'Brown Switch']
            ]
        ];
    break;

    case 4:
        $produk = [
            'nama' => 'Logitech G102',
            'kode' => 'LOGITECH-G102-01',
            'harga' => 'Rp399.000',
            'gambar' => 'logitech-g102.jpg',
            'deskripsi' => 'Mouse gaming presisi tinggi dengan sensor akurat dan RGB Light Sync.',
            'spesifikasi' => [
                '8000 DPI',
                'RGB Light Sync',
                '6 Tombol Programmable',
                'USB Wired',
                'Gaming Sensor'
            ],
            
            'variasi' => [
                'Warna' => ['Hitam', 'Putih']
            ]
        ];
    break;
    case 5:
        $produk = [
            'nama' => 'Lenovo ThinkPad E14',
            'kode' => 'LENOVO-TP-E14-01',
            'harga' => 'Rp12.499.000',
            'gambar' => 'lenovo-thinkpad-e14.jpg',
            'deskripsi' => 'Laptop bisnis profesional dengan performa tinggi dan desain elegan.',
            'spesifikasi' => [
                'Intel Core i5',
                'RAM 8GB / 16GB',
                'SSD NVMe',
                'Layar 14 Inch Full HD',
                'Windows 11'
            ],

            'variasi' => [
                'RAM' => ['8 GB', '16 GB'],
                'SSD' => ['256 GB', '512 GB']
            ]
        ];
    break;

    case 6:
        $produk = [
            'nama' => 'Samsung Curved Monitor 27"',
            'kode' => 'SAMSUNG-MONITOR-27-01',
            'harga' => 'Rp3.999.000',
            'gambar' => 'samsung-monitor.jpg',
            'deskripsi' => 'Monitor curved premium dengan tampilan luas dan nyaman untuk gaming maupun multimedia.',
            'spesifikasi' => [
                'Curved Display',
                'Resolusi Full HD',
                'Refresh Rate 75Hz',
                'HDMI & DisplayPort',
                'Eye Saver Mode'
            ],

            'variasi' => [
                'Ukuran' => ['27 Inch', '32 Inch']
            ]
        ];
    break;

    case 7:
        $produk = [
            'nama' => 'Rexus Daxa M71',
            'kode' => 'REXUS-DAXA-M71-01',
            'harga' => 'Rp899.000',
            'gambar' => 'rexus-daxa-m71.jpg',
            'deskripsi' => 'Mechanical keyboard premium dengan RGB dan switch berkualitas tinggi.',
            'spesifikasi' => [
                'Mechanical Switch',
                'RGB Backlight',
                'Hot Swap Switch',
                'USB Type-C',
                'Compact Layout'
            ],

            'variasi' => [
                'Switch' => ['Red Switch', 'Blue Switch', 'Brown Switch']
            ]
        ];
    break;

    case 8:
        $produk = [
            'nama' => 'Razer DeathAdder Essential',
            'kode' => 'RAZER-DEATHADDER-01',
            'harga' => 'Rp599.000',
            'gambar' => 'razer-deathadder.jpg',
            'deskripsi' => 'Mouse gaming ergonomis dengan sensor akurat dan nyaman digunakan dalam waktu lama.',
            'spesifikasi' => [
                '6400 DPI',
                'Gaming Sensor',
                'Ergonomic Design',
                'USB Wired',
                '5 Tombol'
            ],

            'variasi' => [
                'Warna' => ['Hitam', 'Putih']
            ]
        ];
    break;

    case 9:
        $produk = [
            'nama' => 'Acer Nitro 5',
            'kode' => 'ACER-NITRO5-01',
            'harga' => 'Rp13.999.000',
            'gambar' => 'acer-nitro-5.jpg',
            'deskripsi' => 'Laptop gaming modern dengan performa tinggi untuk bermain game dan produktivitas.',
            'spesifikasi' => [
                'Intel Core i7',
                'RAM DDR5',
                'SSD NVMe',
                'RTX 4050',
                'Layar 15.6 Inch 144Hz'
            ],

            'variasi' => [
                'RAM' => ['8 GB', '16 GB', '32 GB'],
                'SSD' => ['512 GB', '1 TB']
            ]
        ];
    break;

    default:
        $produk = [
            'nama' => 'Produk Tidak Ditemukan',
            'kode' => 'UNKNOWN',
            'harga' => '-',
            'gambar' => 'no-image.jpg',
            'deskripsi' => 'Produk tidak tersedia.',
            'spesifikasi' => [],
            'variasi' => []
        ];
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
<title><?php echo $produk['nama']; ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body{
    background:linear-gradient(
        135deg,
        #95b1f3,
        #1e293b,
        #334155
    );
    min-height:100vh;
}>

<div class="container py-4">

    <!-- Tombol Kembali -->
    <a href="index.php"
       class="btn btn-outline-secondary mb-4">

        ← Kembali ke Produk

    </a>

    <?php

    $ratingQuery = mysqli_query(
        $conn,
        "SELECT
            COUNT(*) AS total_review,
            ROUND(AVG(rating),1) AS rata_rating
         FROM reviews
         WHERE product_id='$id'"
    );

    $ratingData = mysqli_fetch_assoc($ratingQuery);

    $totalReview = $ratingData['total_review'] ?? 0;
    $rataRating = $ratingData['rata_rating'] ?? 0;

    ?>

    <!-- CARD PRODUK -->
    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body p-5">

            <div class="row align-items-center">

                <!-- DETAIL KIRI -->
                <div class="col-lg-6">

                    <h1 class="fw-bold mb-3">
                        <?php echo $produk['nama']; ?>
                    </h1>

                    <div class="mb-3">

                        <span class="text-warning fs-5">
                            ⭐⭐⭐⭐⭐
                        </span>

                        <strong>
                            <?php echo $rataRating ?: '0.0'; ?>/5
                        </strong>

                        <span class="text-muted">
                            (<?php echo $totalReview; ?> Review)
                        </span>

                    </div>

                    <h2 class="text-primary fw-bold mb-4">

                        <?php echo $produk['harga']; ?>

                    </h2>

                    <p class="text-muted mb-4">

                        <?php echo $produk['deskripsi']; ?>

                    </p>

                    <!-- KODE PRODUK -->
                    <div class="mb-4">

                        <strong>Kode Produk:</strong><br>

                        <span class="text-secondary">

                            <?php echo $produk['kode']; ?>

                        </span>

                    </div>

                    <!-- VARIASI -->
                    <?php

                    if(isset($produk['variasi'])){

                        foreach($produk['variasi'] as $namaVariasi => $opsi){

                    ?>

                    <div class="mb-3">

                        <label class="form-label fw-semibold">

                            <?php echo $namaVariasi; ?>

                        </label>

                        <select class="form-select">

                            <?php

                            foreach($opsi as $pilihan){

                            ?>

                            <option>

                                <?php echo $pilihan; ?>

                            </option>

                            <?php

                            }

                            ?>

                        </select>

                    </div>

                    <?php

                        }

                    }

                    ?>

                    <?php

                    $nomorWA = "62882003708103";

                    $pesan = "Halo, saya tertarik dengan produk ".
                              $produk['nama'].
                              " (".$produk['kode']."). ".
                              "Apakah produk ini masih tersedia?";

                    ?>

                    <!-- WHATSAPP -->
                    <a href="https://wa.me/<?php echo $nomorWA; ?>?text=<?php echo urlencode($pesan); ?>"
                       target="_blank"
                       class="btn btn-success btn-lg w-100 mt-4">

                        Hubungi Penjual via WhatsApp

                    </a>

                </div>

                <!-- GAMBAR KANAN -->
                <div class="col-lg-6 text-center">

                    <img src="assets/images/<?php echo $produk['gambar']; ?>"
                         class="img-fluid rounded-4 shadow"
                         style="max-height:500px;">

                </div>

            </div>

        </div>

    </div>

    <!-- SPESIFIKASI -->
    <div class="card border-0 shadow mt-5 rounded-4">

        <div class="card-body p-4">

            <h3 class="fw-bold mb-4">

                Spesifikasi Produk

            </h3>

            <div class="row">

                <?php

                foreach($produk['spesifikasi'] as $spec){

                ?>

                <div class="col-md-6 mb-3">

                    <div class="border rounded-3 p-3 bg-light">

                        ✅ <?php echo $spec; ?>

                    </div>

                </div>

                <?php

                }

                ?>

            </div>

        </div>

    </div>
<hr class="my-5">

<div class="card border-0 shadow rounded-4">

    <div class="card-body p-4">

        <h3 class="fw-bold mb-4">

            Ulasan Produk

        </h3>

        <!-- Ringkasan Rating -->

        <div class="mb-4">

            <h4 class="text-warning">

                ⭐ <?php echo $rataRating ?: '0.0'; ?>/5

            </h4>

            <p class="text-muted">

                Berdasarkan <?php echo $totalReview; ?> ulasan

            </p>

        </div>

        <!-- Form Review -->

        <div class="card bg-light border-0 mb-4">

            <div class="card-body">

                <div class="mb-3">

                    <label class="form-label">

                        Nama

                    </label>

                    <input type="text"
                           id="reviewName"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Rating

                    </label>

                    <select id="reviewRating"
                            class="form-select">

                        <option value="5">⭐⭐⭐⭐⭐</option>
                        <option value="4">⭐⭐⭐⭐</option>
                        <option value="3">⭐⭐⭐</option>
                        <option value="2">⭐⭐</option>
                        <option value="1">⭐</option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Ulasan

                    </label>

                    <textarea
                        id="reviewText"
                        class="form-control"
                        rows="4"></textarea>

                </div>

                <button
                    type="button"
                    class="btn btn-primary"
                    onclick="tambahReview()">

                    Kirim Ulasan

                </button>

            </div>

        </div>

        <!-- Daftar Review -->

        <div id="reviewList">

            <?php

            $reviewQuery = mysqli_query(

                $conn,

                "SELECT *
                 FROM reviews
                 WHERE product_id='$id'
                 ORDER BY id DESC"

            );

            while($review = mysqli_fetch_assoc($reviewQuery)){

            ?>

            <div class="card mb-3 border-0 shadow-sm">

                <div class="card-body">

                    <h6 class="fw-bold">

                        <?php echo $review['nama']; ?>

                    </h6>

                    <div class="text-warning">

                        <?php

                        for(
                            $i=0;
                            $i<$review['rating'];
                            $i++
                        ){

                            echo "⭐";

                        }

                        ?>

                    </div>

                    <p class="mt-2 mb-0">

                        <?php echo $review['ulasan']; ?>

                    </p>

                </div>

            </div>

            <?php

            }

            ?>

        </div>

    </div>

</div>

<?php


?>

</div>

<script>

function tambahReview(){

    let nama =
    document.getElementById("reviewName").value;

    let rating =
    document.getElementById("reviewRating").value;

    let ulasan =
    document.getElementById("reviewText").value;

    if(nama === "" || ulasan === ""){

        alert(
            "Lengkapi data terlebih dahulu!"
        );

        return;

    }

    fetch("save-review.php", {

        method: "POST",

        headers: {

            "Content-Type":
            "application/x-www-form-urlencoded"

        },

        body:

        "product_id=<?php echo $id; ?>" +

        "&nama=" +

        encodeURIComponent(nama) +

        "&rating=" +

        rating +

        "&ulasan=" +

        encodeURIComponent(ulasan)

    })

    .then(response => response.text())

    .then(data => {

        if(data.trim() === "success"){

            alert(
                "Review berhasil ditambahkan!"
            );

            location.reload();

        }else{

            alert(
                "Gagal menyimpan review!"
            );

        }

    });

}

</script>

</body>

</html>