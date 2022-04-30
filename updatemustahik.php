<?php
   if (isset($_POST['update'])) {
       echo "<pre>";
       print_r($_POST);

      $id = $_POST['id'];
      $kategori = $_POST['kategori'];
      $jumlah_hak = $_POST['jumlah_hak'];

      $conn = mysqli_connect('localhost','database','asawawuh','zakatfitrah');
      $sql = "UPDATE mustahik SET kategori='$kategori',jumlah_hak='$jumlah_hak' WHERE id =  $id ";
      $result = mysqli_query($conn,$sql);
      if($result === TRUE)
      {

          header('location: adminmustahik.php');

      }else{
      	  echo "Error:".mysql_errno($conn);
      }
   }

?>