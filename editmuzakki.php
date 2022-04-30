<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','database','asawawuh','zakatfitrah');
    $sql = "SELECT * FROM muzakki WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
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
			<form action="updatemuzakki.php" method="post">
				<?php
				echo $message;
				?>
    
    <p class="h4 mb-4"><h1>Update Muzakki</h1></p><br>
    <a href="admin.php">kembali</a>
    <!-- Name -->
    <div class="form-group">
    	<label>Nama :</label>
    	<input type="text" name="nama" class="form-control mb-4" placeholder="masukan nama" value="<?= $row['nama'] ?>">
    </div>

    <!-- Email -->
    <div class="form-group">
    	<label>jumlah_tanggungan:</label>
    	<input type="text" name="jumlah_tanggungan" class="form-control mb-4" placeholder="masukan jumlah tanggungan" value="<?= $row['jumlah_tanggungan'] ?>">
    </div>
     <div class="form-group">
    	<label>Keterangn :</label>
    	<input type="text" name="keterangan" class="form-control mb-4" placeholder="masukan keterangan" value="<?= $row['keterangan'] ?>">
    </div>

    <input type="hidden" name="id" value="<?= $row['id'] ?>" >

    <!-- Send button -->
    <button name="update" class="btn btn-info btn-success" type="submit">Update</button>

</form>
<!-- Default form contact -->
		</div>
	</div>
	
</div>
</body>
</html>