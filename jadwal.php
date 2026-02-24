<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Pembelajaran</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="card">
    <h1>JADWAL PELAJARAN & JADWAL PIKET</h1>

    <table>
        <tr>
            <th>Hari</th>
            <?php for($i=1; $i<=10; $i++){ ?>
                <th>Jam <?php echo $i; ?></th>
            <?php } ?>
        </tr>
<?php
$jadwal = [
    "Senin" => ["MTK","MTK","SJR","PABP","PABP","PABP","BNG","BNG","BIN","BIN"],
    "Selasa" => ["IPAS","IPAS","IPAS","IPAS","PPS","PPS","BJW","BJW","SNM","SNM"],
    "Rabu" => ["PGD","PGD","PGD","PGD","PGD","PGD","GIM","GIM","GIM","GIM"],
    "Kamis" => ["POR","POR","POR","SJR","BNG","BNG","MTK","MTK","BIN","BIN"],
    "Jumat" => ["INF","INF","KKA","KKA","IPAS","IPAS","PGD","PGD","Kosong","Kosong"]
];
?>

<?php
foreach($jadwal as $hari => $mapel){
    echo "<tr>";
    echo "<td>$hari</td>";

    foreach($mapel as $m){
        echo "<td>$m</td>";
    }

    echo "</tr>";
}
?>


<?php
$jadwal_piket = [
    "Senin" => ["Cindy","Rasya","Nata","Tsabita","Naila","Kartika","Yusuf","Habibi"],
    "Selasa" => ["Keisha","Shafanira","Aurora","Sila","Syauqi","Nail","Wahyu"],
    "Rabu" => ["Anin","Shifa","Dzaky","Vino","Tania","Fasya","Eka"],
    "Kamis" => ["Aida","Maharani","Alya","Denia","Ravid","Ibnu","Tegar"],
    "Jumat" => ["Aqila","Alais","Gendhis","Cloudya","Aziz","Raka","Rayhan"]
];
?>

<table>
    <tr>
        <th>Hari</th>
        <th>Petugas Piket</th>
    </tr>

    <?php
    foreach($jadwal_piket as $hari => $nama_list){
        echo "<tr>";
        echo "<td>$hari</td>";
        echo "<td>";

        foreach($nama_list as $nama){
            if($nama == "Habibi"){
                echo "<span class='highlight'>$nama</span>, ";
            } else {
                echo "$nama, ";
            }
        }

        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
</div>
<div class="button">
    <br></br>
    <button onclick="window.location.href='index.php'" class="btn">Kembali ke Biodata</button>
</div>

<script src="js/script.js"></script>
</body>
</html>