<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Divia Ghiza Wilya</title>
    <!-- Menghubungkan ke file style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    // Variabel Data Pribadi
    $nama = "Divia Ghiza Wilya";
    $nim = "102042500007";
    $jenis_kelamin = "Perempuan";
    $email = "diviaghiza@gmail.com";
    $telepon = "089763532426";
    $alamat = "Bekasi, Jawa Barat";
    $kampus = "Telkom University Jakarta";
    $prodi = "S1 Sistem Informasi";
?>

<div class="container">
    <!-- Header CV -->
    <header>
        <h1><?php echo $nama; ?></h1>
        <p>Email: <?php echo $email; ?> | Telp: <?php echo $telepon; ?> | Lokasi: <?php echo $alamat; ?></p>
    </header>

    <!-- Informasi Pribadi -->
    <div class="section">
        <h2>Informasi Pribadi</h2>
        <div class="info-grid">
            <div class="info-label">Nama Lengkap</div>
            <div><?php echo $nama; ?></div>

            <div class="info-label">NIM</div>
            <div><?php echo $nim; ?></div>
            
            <div class="info-label">Jenis Kelamin</div>
            <div><?php echo $jenis_kelamin; ?></div>
            
            <div class="info-label">Alamat</div>
            <div><?php echo $alamat; ?></div>
        </div>
    </div>

    <!-- Pendidikan -->
    <div class="section">
        <h2>Pendidikan</h2>
        <ul>
            <li><strong><?php echo $prodi; ?></strong> — <?php echo $kampus; ?></li>
        </ul>
    </div>

    <!-- Keahlian -->
    <div class="section">
        <h2>Keahlian & Pemrograman</h2>
        <ul>
            <li>Pemrograman: HTML, CSS, PHP, C#, Java</li>
            <li>Database: Relational Database & MySQL Workbench</li>
            <li>Jaringan Komputer: Cisco Packet Tracer</li>
        </ul>
    </div>

    <!-- Pengalaman & Prestasi -->
    <div class="section">
        <h2>Pengalaman & Prestasi</h2>
        <ul>
            <li>Juara Harapan 2 — Lomba Ratoh Jaroe Tingkat Provinsi (2024)</li>
            <li>Volunteer — Pengabdian Masyarakat di Desa (2024)</li>
        </ul>
    </div>
</div>

</body>
</html>