<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<style>
     label {
          display:block;
     }
</style>
<body>
     <h3>Input siswa baru</h3>

     <form action="proses.php" method="post">
          <div>
               <label for="nama">Nama</label>
               <input type="text" name="nama" id="nama">
          </div>
          <div>
               <label for="jurusan">Jurusan</label>
               <input type="text" name="jurusan" id="jurusan">
          </div>
          <div>
               <button type="submit" name="buttonKirim" value= "kirim"> Kirim</button>
          </div>
     </form>
</body>
</html>

