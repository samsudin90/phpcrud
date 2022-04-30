<?php
   if (isset($_POST['update'])) {
       echo "<pre>";
       print_r($_POST);

      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $jumlah_tanggungan = $_POST['jumlah_tanggungan'];
      $keterangan = $_POST['keterangan'];

      $conn = mysqli_connect('localhost','database','asawawuh','zakatfitrah');
      $sql = "UPDATE muzakki SET nama='$nama',jumlah_tanggungan='$jumlah_tanggungan',keterangan='$keterangan' WHERE id =  $id ";
      $result = mysqli_query($conn,$sql);
      if($result === TRUE)
      {

          header('location: admin.php');

      }else{
      	  echo "Error:".mysql_errno($conn);
      }
   }

?>