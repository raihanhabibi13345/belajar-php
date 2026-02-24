<?php
$Nama_Lengkap = "Raihan Yusuf Habibi";
$nama_panggilan = "Habibi";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 03;
$bulan_lahir = "November";
$tahun_lahir = 2009;
$alamat = "Lempongsari 1 RT 04 RW 03";
$gender = "Laki-laki";
$kewarganegaraan = "Indonesia";
$no_wa = "0881 2415 058";
$email = "habibi031109@gmail.com";
$motto = "Jangan pernah merendahkan ataupun menghina orang yang sedang berproses, karena kamu tidak tahu seberapa besar usaha yang mereka lakukan untuk mencapai tujuan mereka.";

$hobi = ["Gambar", "muncak", "Futsal"];
$makanan = ["Nasi Goreng", "Bakso", "Ayam Geprek"];
$minuman = ["Matcha", "Jus Alpukat", "Kopi"];
$skills = ["HTML"=>60, "CSS"=>50, "PHP"=>45, "JavaScript"=>50];

$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;
$tahun_10 = $tahun_sekarang + 10;
$umur_10 = $umur + 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata <?= $nama_panggilan ?></title>
    <link rel="stylesheet" href="style.css">
    <script src ="script.js"></script>
    <script src="https://kit.fontawesome.com/4d7d1d4b9c.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="biodata">
    <h1><i class="fa fa-user"></i> BIODATA DIRI</h1>
</div>
<div class="card-1">
    
    <img src="1000263348.jpg" class="foto">

    <p><b>Nama Lengkap:</b> <?= $Nama_Lengkap?></p>
    <p><b>Nama Panggilan:</b> <?= $nama_panggilan ?></p>
    <p><b>Agama:</b> <?= $agama ?></p>
    <p><b>Tempat, Tanggal Lahir:</b> <?= "$tempat_lahir, $tanggal_lahir $bulan_lahir $tahun_lahir" ?></p>
    <p><b>Umur:</b> <?= $umur ?> tahun</p>
    <p><b>Alamat:</b> <?= $alamat ?></p>
    <p><b>Gender:</b> <?= $gender ?></p>
    <p><b>Kewarganegaraan:</b> <?= $kewarganegaraan ?></p>
    <p><b>No WA:</b> <?= $no_wa ?></p>
    <p><b>Email:</b> <?= $email ?></p>
</div>

<div class="card-2">
    <h2>Keinginan 10 Tahun Lagi</h2>
    <p>
        Hai namaku <?= $nama_panggilan ?>, saat ini tahun <?= $tahun_sekarang ?>,
        aku adalah siswa yang berumur <?= $umur ?> tahun.
        10 tahun lagi di tahun <?= $tahun_10 ?>, di umur <?= $umur_10 ?> tahun
        aku adalah seorang programmer sukses. Aku ingin memiliki Usaha sendiri yang bisa ku kembangkan karena aku suka dengan tantangan dan hal yang baru,
        rencana yang akan aku tempuh adalah kuliah di UDINUS Semarang jurusan IT dan sambil bekerja untuk mencari pengalaman yang lebih dalam tentanng dunia luar.
    </p>
</div>

<div class="card-3">
    <h2>Hobi</h2>
    <ol>
        <?php foreach($hobi as $h){ echo "<li>$h</li>"; } ?>
    </ol>
</div>

<div class="card-4">
    <h2>Skills</h2>
    <?php foreach($skills as $skill=>$nilai){ ?>
        <label><?= $skill ?></label>
        <input type="range" value="<?= $nilai ?>" disabled>
        <br>
    <?php } ?>
</div>

<div class="card-5">
    <h2>Makanan Favorit</h2>
    <ul type="square">
        <?php foreach($makanan as $m){ echo "<li>$m</li>"; } ?>
    </ul>
</div>

<div class="card-6">
    <h2>Minuman Favorit</h2>
    <ol type="A">
        <?php foreach($minuman as $m){ echo "<li>$m</li>"; } ?>
    </ol>
</div>

<div class="card-7">
    <h2>Riwayat Pendidikan</h2>
    <table>
        <tr>
            <th>Tingkat</th>
            <th>Nama Sekolah</th>
            <th>Tahun Mulai</th>
            <th>Tahun Lulus</th>
        </tr>
        <tr>
            <td>SD</td>
            <td>SDN Petompon 02</td>
            <td>2016</td>
            <td>2022</td>
        </tr>
        <tr>
            <td>SMP</td>
            <td>SMPN 13 Semarang</td>
            <td>2022</td>
            <td>2025</td>
        </tr>
        <tr>
            <td>SMK</td>
            <td>SMKN 8 Semarang</td>
            <td>2025</td>
            <td>2028</td>
        </tr>
    </table>
</div>

<div class="motto">
    <marquee><?= $motto ?></marquee>
</div>

<div class="button">
    <button onclick="window.location.href='jadwal.php'" class="btn">Lihat Jadwal Habibi</button>
</div>

<script src="script.js"></script>
</body>
</html>