<?php
     $message = '';
     if (isset($_POST['btn'])) {

     $kategori = $_POST['kategori'];
     $jumlah_hak = $_POST['jumlah_hak'];

     $conn = mysqli_connect('localhost','database','asawawuh','zakatfitrah');
     $sql = "INSERT INTO mustahik(kategori,jumlah_hak)VALUES('$kategori','$jumlah_hak')";
     $result = mysqli_query($conn,$sql);
     if ($result===TRUE) {
     	$message = "data mustahik berhasil ditambahkan";
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
    
    <p class="h4 mb-4"><h1>Tambah Mustahik</h1></p><br>
    <a href="adminmustahik.php">kembali</a>

    
    <div class="form-group">
 	   <label>kategori</label>
    <select name="kategori" class="browser-default custom-select mb-4">
        <option value="" >---Pilih----</option>
        <option value="Fakir">Fakir</option>
        <option value="Miskin">Miskin</option>
        <option value="Mu'alaf">Mu'alaf</option>
        <option value="Riqab">Riqab</option>
        <option value="Gharim">Gharim</option>
        <option value="Fi Sabilillah">Fi Sabilillah</option>
        <option value="Ibnu Sabil">Ibnu Sabil</option>
    </select>

 </div>
    <div class="form-group">
    	<label>jumlah_hak:</label>
    	<input type="text" name="jumlah_hak" class="form-control mb-4" placeholder="masukan jumlah hak">
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