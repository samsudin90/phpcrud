<?php
     $message = '';
     if (isset($_POST['btn'])) {

     $nama = $_POST['nama'];
     $jumlah_tanggungan = $_POST['jumlah_tanggungan'];
     $keterangan = $_POST['keterangan'];

     $conn = mysqli_connect('localhost','database','asawawuh','zakatfitrah');
     $sql = "INSERT INTO muzakki(nama,jumlah_tanggungan,keterangan)VALUES('$nama','$jumlah_tanggungan','$keterangan')";
     $result = mysqli_query($conn,$sql);
     if ($result===TRUE) {
     	$message = "data muzakki berhasil ditambahkan";
     }else{
     	echo "Data gagal ditambahkan";
     }

     }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add muzakki</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<!-- Default form contact -->
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-8">
			<form action="" method="post">
				<?php
				echo $message;
				?>
    
    <p class="h4 mb-4"><h1>Tambah Muzakki</h1></p><br>
    <a href="admin.php">kembali</a>
    <!-- Name -->
    <div class="form-group">
    	<label>Nama :</label>
    	<input type="text" name="nama" class="form-control mb-4" placeholder="masukan nama">
    </div>

    <!-- Email -->
    <div class="form-group">
    	<label>jumlah_tanggungan:</label>
    	<input type="text" name="jumlah_tanggungan" class="form-control mb-4" placeholder="masukan jumlah tanggungan">
    </div>
     <div class="form-group">
    	<label>Keterangn :</label>
    	<input type="text" name="keterangan" class="form-control mb-4" placeholder="masukan keterangan">
    </div>

    <!-- Send button -->
    <button name="btn" class="btn btn-info btn-success" type="submit">Submit</button>

</form>
<!-- Default form contact -->
		</div>
	</div>
	
</div>
</body>
</html>