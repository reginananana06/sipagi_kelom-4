<!DOCTYPE html>
<?php include 'header.html'; ?>


<body>
<section id="tes_asma">
<div class="inner_wrapper">
<div class="container">
<table border="3" align="center" width="850.2" style="border-color:#FF0.20.20.20.2; background-color:white;">
  <tr>
  </tr>
    <tr>
      <td style="color:#0.20.20.20.20.20.2;"> 
      
<?php
$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
$ttl = isset($_POST['ttl']) ? $_POST['ttl'] : "";
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
$input1 = isset($_POST['input1']) ? $_POST['input1'] : "";
$input2 = isset($_POST['input2']) ? $_POST['input2'] : "";
$input3 = isset($_POST['input3']) ? $_POST['input3'] : "";
$input4 = isset($_POST['input4']) ? $_POST['input4'] : "";
$input5 = isset($_POST['input5']) ? $_POST['input5'] : "";
$input7 = isset($_POST['input7']) ? $_POST['input7'] : "";
$input6 = isset($_POST['input6']) ? $_POST['input6'] : "";
$input8 = isset($_POST['input8']) ? $_POST['input8'] : "";
$input9 = isset($_POST['input9']) ? $_POST['input9'] : "";
$input10 = isset($_POST['input10']) ? $_POST['input10'] : "";
$input11 = isset($_POST['input11']) ? $_POST['input11'] : "";
$input12 = isset($_POST['input12']) ? $_POST['input12'] : "";
$input13 = isset($_POST['input13']) ? $_POST['input13'] : "";
$input14 = isset($_POST['input14']) ? $_POST['input14'] : "";
$input15 = isset($_POST['input15']) ? $_POST['input15'] : "";
$input16 = isset($_POST['input16']) ? $_POST['input16'] : "";
$input17 = isset($_POST['input17']) ? $_POST['input17'] : "";

$malnutrisi = 0.6;
$stunting = 0.3;

#===========1==============
$y1m = 0.45;
$y1s = 0.55;

$t1m = 0.4;
$t1s = 0.6;
#=============2=================
$y2m = 0.25;
$y2s = 0.75;

$t2m = 0.2;
$t2s = 0.8;
#==============3===================
$y3m = 0.15;
$y3s = 0.85;

$t3m = 0.2;
$t3s = 0.8;
#===========4================
$y4m = 0.45;
$y4s = 0.55;

$t4m = 0.9;
$t4s = 0.1;
#============5===============
$y5m = 0.15;
$y5s = 0.85;

$t5m = 0.8;
$t5s = 0.2;
#===========6================
$y6m = 0.45;
$y6s = 0.55;

$t6m = 0.15;
$t6s = 0.85;
#===========7================
$y7m = 0.6;
$y7s = 0.4;

$t7m = 0.2;
$t7s = 0.8;
#===========8================
$y8m = 0.15;
$y8s = 0.85;

$t8m = 0.9;
$t8s = 0.1;
#===========9================
$y9m = 0.6;
$y9s = 0.4;

$t9m = 0.4;
$t9s = 0.6;
#===========10================
$y10m = 0.45;
$y10s = 0.55;

$t10m = 0.2;
$t10s = 0.8;
#===========11================
$y11m = 0.3;
$y11s = 0.7;

$t11m = 0.2;
$t11s = 0.8;
#===========12================
$y12m = 0.25;
$y12s = 0.75;

$t12m = 0.3;
$t12s = 0.7;
#===========13================
$y13m = 0.65;
$y13s = 0.35;

$t13m = 0.6;
$t13s = 0.4;
#===========14================
$y14m = 0.15;
$y14s = 0.85;

$t14m = 0.8;
$t14s = 0.2;
#===========15================
$y15m = 0.15;
$y15s = 0.85;

$t15m = 0.8;
$t15s = 0.2;
#===========16================
$y16m = 0.45;
$y16s = 0.55;

$t16m = 0.5;
$t16s = 0.5;
#===========17================
$y17m = 0.1;
$y17s = 0.9;

$t17m = 0.5;
$t17s = 0.5;
#===============================
if ($input1 == 'input1a') {
    $temp1 = $input1;
    $malnutrisi1 = $y1m;
    $stunting1 = $y1s;
}
if ($input1 == 'input1b') {
    $temp1 = $input1;
    $malnutrisi1 = $t1m;
    $stunting1 = $t1s;
}
#===============================
if ($input2 == 'input2a') {
    $temp2 = $input2;
    $malnutrisi2 = $y2m;
    $stunting2 = $y2s;
}
if ($input2 == 'input2b') {
    $temp2 = $input2;
    $malnutrisi2 = $t2m;
    $stunting2 = $t2s;
}
#===============================
if ($input3 == 'input3a') {
    $temp3 = $input3;
    $malnutrisi3 = $y3m;
    $stunting3 = $y3s;
}
if ($input3 == 'input3b') {
    $temp3 = $input3;
    $malnutrisi3 = $t3m;
    $stunting3 = $t3s;
}
#===============================
if ($input4 == 'input4a') {
    $temp4 = $input4;
    $malnutrisi4 = $y4m;
    $stunting4 = $y4s;
}
if ($input4 == 'input4b') {
    $temp4 = $input4;
    $malnutrisi4 = $t4m;
    $stunting4 = $t4s;
}
#===============================
if ($input5 == 'input5a') {
    $temp5 = $input5;
    $malnutrisi5 = $y5m;
    $stunting5 = $y5s;
}
if ($input5 == 'input5b') {
    $temp5 = $input5;
    $malnutrisi5 = $t5m;
    $stunting5 = $t5s;
}
#==============================
if ($input6 == 'input6a') {
    $temp6 = $input6;
    $malnutrisi6 = $y6m;
    $stunting6 = $y6s;
}
if ($input6 == 'input6b') {
    $temp6 = $input6;
    $malnutrisi6 = $t6m;
    $stunting6 = $t6s;
}
#===============================
if ($input7 == 'input7a') {
    $temp7 = $input7;
    $malnutrisi7 = $y7m;
    $stunting7 = $y7s;
}
if ($input7 == 'input7b') {
    $temp7 = $input7;
    $malnutrisi7 = $t7m;
    $stunting7 = $t7s;
}
#===============================
if ($input8 == 'input8a') {
    $temp8 = $input8;
    $malnutrisi8 = $y8m;
    $stunting8 = $y8s;
}
if ($input8 == 'input8b') {
    $temp8 = $input8;
    $malnutrisi8 = $t8m;
    $stunting8 = $t8s;
}
#===============================
if ($input9 == 'input9a') {
    $temp9 = $input9;
    $malnutrisi9 = $y9m;
    $stunting9 = $y9s;
}
if ($input9 == 'input9b') {
    $temp9 = $input9;
    $malnutrisi9 = $t9m;
    $stunting9 = $t9s;
}
#===============================
if ($input10 == 'input10a') {
    $temp10 = $input10;
    $malnutrisi10 = $y10m;
    $stunting10 = $y10s;
}
if ($input10 == 'input10b') {
    $temp10 = $input10;
    $malnutrisi10 = $t10m;
    $stunting10 = $t10s;
}
#===============================
if ($input11 == 'input11a') {
    $temp11 = $input11;
    $malnutrisi11 = $y11m;
    $stunting11 = $y11s;
}
if ($input11 == 'input11b') {
    $temp11 = $input11;
    $malnutrisi11 = $t11m;
    $stunting11 = $t11s;
}
#===============================
if ($input12 == 'input12a') {
    $temp12 = $input12;
    $malnutrisi12 = $y12m;
    $stunting12 = $y12s;
}
if ($input12 == 'input12b') {
    $temp12 = $input12;
    $malnutrisi12 = $t12m;
    $stunting12 = $t12s;
}
#===============================
if ($input13 == 'input13a') {
    $temp13 = $input13;
    $malnutrisi13 = $y13m;
    $stunting13 = $y13s;
}
if ($input13 == 'input13b') {
    $temp13 = $input13;
    $malnutrisi13 = $t13m;
    $stunting13 = $t13s;
}
#===============================
if ($input14 == 'input14a') {
    $temp14 = $input14;
    $malnutrisi14 = $y14m;
    $stunting14 = $y14s;
}
if ($input14 == 'input14b') {
    $temp14 = $input14;
    $malnutrisi14 = $t14m;
    $stunting14 = $t14s;
}
#===============================
if ($input15 == 'input15a') {
    $temp15 = $input15;
    $malnutrisi15 = $y15m;
    $stunting15 = $y15s;
}
if ($input15 == 'input15b') {
    $temp15 = $input15;
    $malnutrisi15 = $t15m;
    $stunting15 = $t15s;
}
#===============================
if ($input16 == 'input16a') {
    $temp16 = $input16;
    $malnutrisi16 = $y16m;
    $stunting16 = $y16s;
}
if ($input16 == 'input16b') {
    $temp16 = $input16;
    $malnutrisi16 = $t16m;
    $stunting16 = $t16s;
}
#===============================
if ($input17 == 'input17a') {
    $temp17 = $input17;
    $malnutrisi17 = $y17m;
    $stunting17 = $y17s;
}
if ($input17 == 'input17b') {
    $temp17 = $input17;
    $malnutrisi17 = $t17m;
    $stunting17 = $t17s;
}
#===============================

$total_stunting = $stunting1 * $stunting2 * $stunting3 * $stunting5 * $stunting6 * $stunting7
                     * $stunting9 * $stunting10 * $stunting11 * $stunting12 * $stunting;
$total_malnutrisi = $malnutrisi4 * $malnutrisi5 * $malnutrisi8 * $malnutrisi13 * $malnutrisi14 * $malnutrisi;


echo "Nama : $nama <br>";
echo "Tempat Tanggal Lahir : $ttl <br>";
echo "Alamat : $alamat <br>";
echo "<br>";

echo "Hasil Probabilitas gizi ( P[ malnutrisi ] ) : $total_malnutrisi <br>";
echo "Hasil Probabilitas gizi ( P[ stunting ] ) : $total_stunting <br>";

$arr = [$total_malnutrisi, $total_stunting];
$max = max($arr);

for ($i = 0; $i < count($arr); $i++) {

}

echo '<br> Nilai Terbesar dari array di atas ialah ' . $max;

if ($total_malnutrisi == $max) {
    echo "<b> Jadi Probabilitas gizi terklasifikasi <b>Malnutrisi<br>";
    echo "Solusi : Memenuhi kebutuhan nutrisi lengkap, termasuk karbohidrat, protein, vitamin, mineral, dan serat sesuai kebutuhan anak" . '</br>' . '</br>';
} elseif ($total_stunting == $max) {
    echo "<b> Jadi Probabilitas gizi terklasifikasi <b>Stunting<br>";
    echo "Solusi : <br>
    1.Membawa anak untuk kontrol rutin ke dokter jika ia menderita penyakit kronis<br>
    2. Memeriksakan tinggi dan berat badan anak secara berkala <br>
    3. Memperbaiki sanitasi di rumah dan menerapkan perilaku hidup bersih dan sehat (PHBS)<br>
    4.Memberikan nutrisi yang berupa makanan yang kaya protein hewani, lemak, dan kalori" . '</br>' . '</br>';
} else {
    echo "<b>Tidak Terdeteksi";
}

echo '
  <form action="create_pdf.php" method="get" style="text-align: right; margin-top: 20px;">
    <input type="hidden" name="nama" value="' . $nama . '">
    <input type="hidden" name="ttl" value="' . $ttl . '">
    <input type="hidden" name="alamat" value="' . $alamat . '">
    <input type="hidden" name="total_malnutrisi" value="' . $total_malnutrisi . '">
    <input type="hidden" name="total_stunting" value="' . $total_stunting . '">
    <input type="submit" value="Cetak PDF" style="padding: 10px 20px; margin-right: 20px;">
  </form>
';

?>
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Ambil data dari form
//     $nama = $_POST['nama'];
//     $ttl = $_POST['ttl'];
//     $alamat = $_POST['alamat'];
//     $total_berminyak = $_POST['total_berminyak'];
//     $total_sensitif = $_POST['total_sensitif'];
//     $total_kombinasi = $_POST['total_kombinasi'];
//     $total_kering = $_POST['total_kering'];

//     // Lakukan proses pembuatan file PDF dengan data yang didapat dari form
//     // Redirect ke create_pdf.php untuk membuat PDF
//     header("Location: create_pdf.php?nama=$nama&ttl=$ttl&alamat=$alamat&total_berminyak=$total_berminyak&total_sensitif=$total_sensitif&total_kombinasi=$total_kombinasi&total_kering=$total_kering");
//     exit();
// }
?>

  </td>
  </tr>
  </div>
  </div>
  <br>
<table>
  <br><br><br><br><br>
  <br><br><br>
</table>
</section>

</body>
<!--Footer-->
<footer class="footer_wrapper" id="contact">

</footer>

<br>

</html>

