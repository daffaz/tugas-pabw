<?php
include('koneksi.php');
$nim = strtoupper($_POST['nim']);
$nama = ucfirst($_POST['nama']);
$jk = $_POST['jk'];
$agama = ucfirst($_POST['agama']);
// print_r($_POST);
$olahraga = array();
foreach($_POST['olahraga'] as $oyeah) {
    array_push($olahraga, $oyeah);
}
$fixed_olahraga = implode(" , ", $olahraga);
// $foto = $_FILES['foto']['name'];
echo $nim."<br>";
echo $nama."<br>";
echo $jk."<br>";
echo $agama."<br>";
echo $fixed_olahraga."<br>";
//Pengecekan gambar
// if($foto !="") {
//     $foto_ekstensi = array('png','jpg');
//     $x = explode('.',$foto_ekstensi);
//     $ekstensi = strtolower(end($x));
//     $file_tmp = $_FILES['foto']['tmp_name'];
//     $angka_acak = rand(1,999);
//     $nama_foto_baru = $angka_acak.'-'.$foto;
//     if(in_array($ekstensi, $foto_ekstensi) == true) {
//         move_uploaded_file($file_tmp, 'images/'.$nama_foto_baru); 
//         $query = "INSERT INTO mahasiswa2 (nim,nama,jeniskelamin,agama,olahraga,foto) VALUES ('$nim', '$nama', '$jk', '$agama', '$fixed_olahraga', '$nama_foto_baru')";
//         $result = mysqli_query($koneksi, $query);
//         //Jika query ada error
//         if(!$result) {
//             die("Query gagal dijalankan : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
//         }else {
//             echo "<script>alert('Data berhasil ditambahakan');window.location='index.php'</script>";
//         }
//     }else {
//         echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_data.php';</script>";
//     }
// }else {
//     $query = "INSERT INTO mahasiswa2 (nim,nama,jeniskelamin,agama,olahraga,foto) VALUES ('$nim', '$nama', '$jk', '$agama', '$fixed_olahraga', NULL)";
//     if(!$query) {
//         die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
//     } else {
//         //Balik ke index.php lagi
//         echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
//     }
// }
?>