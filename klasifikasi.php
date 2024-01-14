<!DOCTYPE html>
<center><html>
<head>
  <?php include 'header.html'; ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 80%;
      margin: 0 auto;
    }

    .page-header {
      background-color: #5abdbf;
      color: #fff;
      
      border-radius: 1px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #5abdbf;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #5abdbf;
    }

    #tes_asma {
      margin-top: 20px;
    }

    h3 {
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-8">
      <div class="page-header">
        <h3>Konsultasi</h3>
      </div>

      <section id="tes_asma">
        <form method="post" action="perhitungan.php">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>

          <div class="form-group">
            <label for="ttl">Tempat Tanggal Lahir (Ex: Yogyakarta, 28 Oktober 2020)</label>
            <input type="text" class="form-control" id="ttl" name="ttl" required>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>

       <div class="form-group">
           <label class="kt">1.Apakah anak sangat kurus</label>
          <select class="form-control" name="input1">
            <option value="input1b">Tidak</option>
            <option value="input1a">Ya</option>
            
          </select>
        </td>
      </div>

      <div class="form-group">
           <label class="kt">2.Apakah rambut kusam, kering, tipis dan rambut rontok</label>
          <select class="form-control" name="input2">
             <option value="input2b">Tidak</option>
            <option value="input2a">Ya</option>  
           
          </select>
        </td>
      </div>

        <div class="form-group">
           <label class="kt">3.Apakah wajah terlihat lebih tua</label>
          <select class="form-control" name="input3">
             <option value="input3b">Tidak</option>
            <option value="input3a">Ya</option>  
           
          </select>
        </td>
      </div>
        <div class="form-group">
           <label class="kt">4.Apakah lemas secara terus menerus</label>
          <select class="form-control" name="input4">
            <option value="input4b">Tidak</option>
            <option value="input4a">Ya</option>  
            
          </select>
        </td>
      </div>
 <div class="form-group">
           <label class="kt">5.Apakah pertumbuhan gigi melambat</label>
          <select class="form-control" name="input5">
             <option value="input5b">Tidak</option>
            <option value="input5a">Ya</option>  
           
          </select>
        </td>
      </div>
       
        <div class="form-group">
           <label class="kt">6.Apakah Pandangan sayu</label>
          <select class="form-control" name="input6">
             <option value="input6b">Tidak</option>
            <option value="input6a">Ya</option>  
           
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">7.Apakah Kulit keriput, berubah warna, dan bersisik</label>
          <select class="form-control" name="input7">
            <option value="input7b">Tidak</option>
            <option value="input7a">Ya</option>  
            
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">8.Apakah Tinggi badan lebih pendek (tidak sesuai dengan usia)</label>
          <select class="form-control" name="input8">
            <option value="input8b">Tidak</option>
            <option value="input8a">Ya</option>  
            
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">9.Apakah Anak mudah lelah dan terlihat lesu</label>
          <select class="form-control" name="input9">
             <option value="input9b">Tidak</option>
            <option value="input9a">Ya</option>  
           
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">10.Apakah anak sering rewel</label>
          <select class="form-control" name="input10">
             <option value="input10b">Tidak</option>
            <option value="input10a">Ya</option>  
           
          </select>
        </td>
      </div>
       <div class="form-group">
           <label class="kt">11.Apakah anak Tidak nafsu makan</label>
          <select class="form-control" name="input11">
            <option value="input11b">Tidak</option>
            <option value="input11a">Ya</option>  
            
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">12.Apakah Mata dan pipi tampak cekung</label>
          <select class="form-control" name="input12">
            <option value="input12b">Tidak</option>
            <option value="input12a">Ya</option>  
            
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">13.Apakah mudah terserang berbagai penyakit infeksi</label>
          <select class="form-control" name="input13">
            <option value="input13b">Tidak</option>
            <option value="input13a">Ya</option>  
            
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">14.Apakah Rentan mengalami gangguan tulang </label>
          <select class="form-control" name="input14">
             <option value="input14b">Tidak</option>
            <option value="input14a">Ya</option>  
           
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">15.Apakah Wajah lebih muda dari anak seusianya</label>
          <select class="form-control" name="input14">
             <option value="input14b">Tidak</option>
            <option value="input14a">Ya</option>  
           
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">16.Apakah Memori belajar anak kurang baik</label>
          <select class="form-control" name="input14">
             <option value="input14b">Tidak</option>
            <option value="input14a">Ya</option>  
           
          </select>
        </td>
      </div>
      <div class="form-group">
           <label class="kt">17.Apakah Pertumbuhan tulang terhambat</label>
          <select class="form-control" name="input14">
             <option value="input14b">Tidak</option>
            <option value="input14a">Ya</option>  
           
          </select>
        </td>
      </div>
      </div> <button type="submit" value="Submit" class="btn btn-success"><i class="fas fa-calculator" style="margin-right: 5px;"></i>Kalkulasi</button>
    <br>
    <br>
  
</form>
</section>
    </div>
  </div>


</body>
</html></center>