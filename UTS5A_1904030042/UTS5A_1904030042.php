<!DOCTYPE html>
<html>
<head>
	<title>utswebprograming</title>
</head>
<body>
	<h3>1. Array dapat menyimpan lebih dari 1 nilai dengan dengan nama yang sama,
          Sedangkan variabel biasa hanya dapat menampung 1 data saja. Array dapat diakses berdasarkan indeksnya, sedangkan variabel langsung diakses lewat nama variabelnya  </h3>
   <hr>
   <h3>2. Map Array</h3>
	<?php 
   $mahasiswa = array(
   	"nama" => "Septian" ,
   	"prodi" => "teknik informatika" ,
   	"fakultas" => "tekniik"
   );
   var_dump($mahasiswa);
   echo "<br>";
   $septian =[
   	         "nim" => "1904030042",
   	         "nama" => "septian agus nurfajri",
               "alamat" => "cikupa",
               "hobby" => "olahraga",
               "no HP" => "081398627254",
               "agama" => "islam",
   	         "umur" => 20

            ];

   var_dump($septian);
   echo "<br>";
   echo ("nim       :  " . $septian["nim"]);
   echo "<br>";
   echo ("nama      :  " . $septian["nama"]);
   echo "<br>";
   echo ("alamat    :  " . $septian["alamat"]);
   echo "<br>";
   echo ("hobby     :  " . $septian["hobby"]);
   echo "<br>";
   echo ("no HP     :  " . $septian["no HP"]);
   echo "<br>";
   echo ("agama    :  " . $septian["agama"]);
   echo "<br>";
   echo ("umur      :  " . $septian["umur"]);

	 ?>
    <hr>
    <h3>3. Array Multidimensi</h3>
    <?php
    $mahasiswa= [
    [
      "nama" => "septian",
      "nim " => "1904030042",
      "jurusan" => "informatika",
      "email" => "1904030042@students.unis.ac,id"
   ],
   [
      "nama" => "maulana",
      "nim " => "1904030043",
      "jurusan" => "informatika",
      "email" => "1904030043@students.unis.ac,id"
   ],
   [
      "nama" => "fikri",
      "nim " => "1904030044",
      "jurusan" => "informatika",
      "email" => "1904030044@students.unis.ac,id"
   ]

];

   

    ?> 
    <!DOCTYPE html>
    <html>
    <head>
       <title>array multidimensi</title>
       <style >
          body{
            background: aliceblue;

          }
          h1{
            text-align: center;
            font-size: 20px;
          }
       </style>
    </head>
    <body>
      <h4>Daftar Mahasiswa</h4>
      <?php foreach ($mahasiswa as $mhs) : ?>
         <ul>
            <li>Nama :<?php echo $mhs["nama"] ?></li>
            <li>Jurusan :<?php echo $mhs["jurusan"] ?></li>
            <li>E-mail :<?php echo $mhs["email"] ?></li>
         </ul>
      <?php endforeach ?>
    
    </body>
    </html>
    <hr>
    <h3>4. Else if</h3>
    <!DOCTYPE html>
    <html>
    <head>
       <title>IF 1</title>
    </head>
    <body>
      <h4>Paket Kursus</h4>
      <form action=""method="post">
         <input type="text" name="post">
         <input type="submit" name="nilai">
      </form>
    
    </body>
    </html>
    <?php 
       $kursus=$_POST['kursus'];
       if ($kursus = 301){
         echo "Kode Kursus : $kursus<br>";
         echo "Biaya       : 350000 <br> Nama paket : Kursus Microsoft Office <br>";
      } 
      if ($kursus = 302){
         echo "Kode Kursus : $kursus<br>";
         echo "Biaya       : 450000 <br> Nama paket : Visual Basic <br>";
      } 
      if ($kursus = 303){
         echo "Kode Kursus : $kursus<br>";
         echo "Biaya       : 400000 <br> Nama paket : Visual Foxpro <br>";
      }

     ?>


</body>
</html>