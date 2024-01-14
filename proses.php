<?php
include 'config.php';
 
  $nama = $_POST['nama'];
 $ttl = $_POST['ttl'];
 $alamat = $_POST['alamat'];
 $total_malnutrisi = $_POST['total_malnutrisi'];
 $total_stunting = $_POST['total_stunting'];
 $max = $_POST['max'];

  $query = "INSERT INTO konsul value ('$nama','$ttl','$alamat','$total_malnutrisi','$total_stunting','$max')";
   $result= mysqli_query($conn,$query)or die (mysqli_error($conn));
   if ($result) {
      echo "
      <script>
        alert('Data Berhasil Di Tambahkan');
        document.location.href='perhitungan.php';
      </script>
      ";
    } else {
      echo "
      <script>
        alert('Data Gagal Di Tambahkan');
        document.location.href='perhitungan.php';
      </script>
      ";
    }
    mysqli_close($conn);
 
?>