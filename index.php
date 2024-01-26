<?php
    $siswa = [
     ["nama" => "Budi", "kelas" => "XI", "jurusan" => "IPA"],
     ["nama" => "Sinta", "kelas" => "XI", "jurusan" => "IPS"],
     ["nama" => "Jojo", "kelas" => "XI", "jurusan" => "Bahasa"],
     ["nama" => "Toni", "kelas" => "XI", "jurusan" => "Seni"],
     ["nama" => "Santi", "kelas" => "XI", "jurusan" => "Drama"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<style>
     table{
          border-collapse:collapse;
     }
</style>
<body>
     <h2>List Siswa</h2>
     Pakai Foreach
     <table border=1>
          <tr>
               <th>Nama</th>
               <th>Kelas</th>
               <th>Jurusan</th>
          </tr>
          <?php foreach($siswa as $key=>$v){
          ?>
               <tr>
                   <td> <?php echo $v['nama']; ?> </td>
                   <td> <?php echo $v['kelas']; ?> </td>
                   <td> <?php echo $v['jurusan']; ?> </td>
               </tr>
          <?php
          }?>
     </table>

     <br/>
     Pakai While
     <table border=1>
          <tr>
               <th>Nama</th>
               <th>Kelas</th>
               <th>Jurusan</th>
          </tr>
          <?php 
               $a = 0;
               while($a < count($siswa)){
          ?>
               <tr>
                   <td> <?php echo $siswa[$a]['nama']; ?> </td>
                   <td> <?php echo $siswa[$a]['kelas']; ?> </td>
                   <td> <?php echo $siswa[$a]['jurusan']; ?> </td>
               </tr>
          <?php
               $a++;
               }
          ?>
     </table>
</body>
</html>
