<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Nilai Akhir</title>
  <style>
    body{
      background-image: url(img/1.jpeg);
      background-repeat: no-repeat;
      background-size: 100%;
        padding: 0;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
     .menu {
      text-align: center;
      padding: 20px;
      background: linear-gradient(45deg, #3498db, #e74c3c, #2ecc71, #f39c12);
      background-size: 400% 400%;
      text-transform: uppercase;
      animation: gradientAnimation 10s ease infinite;
      font-size: 40px;
  }
  
  @keyframes gradientAnimation {
      0% {
          background-position: 0% 50%;
      }
      25% {
          background-position: 100% 50%;
      }
      50% {
          background-position: 0% 50%;
      }
      75% {
          background-position: 100% 50%;
      }
      100% {
          background-position: 0% 50%;
      }
  }
  @keyframes waveAnimation {
      0%, 100% {
          transform: translateY(0);
      }
      50% {
          transform: translateY(-10px);
      }
  }
  a.tbl-pink {
    display: inline-block;
    padding: 10px 10px;
    border: 2px solid #fff;
    text-decoration: none;
    color: #070707;
    background: none;
    box-shadow: 0 2px 4px rgb(34, 33, 33);
    cursor: pointer;
  }
  
  a.tbl-pink:hover {
    background: #f8fced;
    text-decoration: none;
  }
   h1 {
    font-size: 30px;
    text-transform: uppercase;
    text-align:center;
   }
   img {
    float:left;
    background: none;
    height: 100px;
    margin: 20px;
  }
  </style>
</head>
<body>
<img src="img/logo.png" alt="">
  <div class="menu">
    <a href="index.html" class="tbl-pink">MENU</a>
    <a href="soal1.html" class="tbl-pink">SOAL 1</a>
    </div>
  <h1>Kalkulator Nilai Akhir</h1>
  <div class="container">
  <form method="post">
    <div class="container-box">
      <label>Nama Mata Pelajaran:</label>
      <input type="text" name="namaMapel"><br>
    </div>
    <div class="container-box">
      <label>KKM:</label>
      <input type="number" name="kkm"><br>
      </div>
      <div class="container-box">
        <label>Tugas Kognitif:</label>
        <input type="number" name="tugasKognitif"><br>
        </div>
        <div class="container-box">
          <label>Tugas Keterampilan:</label>
          <input type="number" name="tugasKeterampilan"><br>
          </div>
          <div class="container-box">
            <label>UH Kognitif:</label>
            <input type="number" name="uhKognitif"><br>
            </div>
            <div class="container-box">
              <label>UH Keterampilan:</label>
              <input type="number" name="uhKeterampilan"><br>
              </div>
              <div class="container-box">
                <label>UTS:</label>
                <input type="number" name="uts"><br>
                </div>
                <div class="container-box">
                  <label>UAS:</label>
                  <input type="number" name="uas"><br>
                  </div>
    <input type="submit" name="hitung" value="Hitung">
  </form>
  </div>

   <?php
  if (isset($_POST['hitung'])) {
    $tugasKognitif = $_POST['tugasKognitif'];
    $tugasKeterampilan = $_POST['tugasKeterampilan'];
    $uhKognitif = $_POST['uhKognitif'];
    $uhKeterampilan = $_POST['uhKeterampilan'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $naKognitif = ($tugasKognitif + $uhKognitif + (2 * $uts) + (2 * $uas)) / 6;
    $naKeterampilan = ($tugasKeterampilan + $uhKeterampilan + (2 * $uts) + (2 * $uas)) / 6;
    $nilaiAkhir = ($naKognitif + $naKeterampilan) / 2;

    $grade = '';
    if ($nilaiAkhir >= 80) {
      $grade = 'A';
    } elseif ($nilaiAkhir >= 70) {
      $grade = 'B';
    } elseif ($nilaiAkhir >= 60) {
      $grade = 'C';
    } elseif ($nilaiAkhir >= 50) {
      $grade = 'D';
    } else {
      $grade = 'E';
    }

    $kkm = $_POST['kkm'];
    $tuntas = ($nilaiAkhir >= $kkm) ? 'Tuntas' : 'Tidak Tuntas';

    echo "<h2>Hasil Perhitungan:</h2>";
    echo "Nilai Akhir Kognitif: $naKognitif<br>";
    echo "Grade Nilai Akhir Kognitif: $grade<br>";
    echo "Nilai Akhir Keterampilan: $naKeterampilan<br>";
    echo "Grade Nilai Akhir Keterampilan: $grade<br>";
    echo "Nilai Akhir: $nilaiAkhir<br>";
    echo "Grade Tuntas / Tidak Tuntas: $tuntas";
  }
  ?>
</body>
</html>