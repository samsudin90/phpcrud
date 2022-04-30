<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','database','asawawuh','zakatfitrah');
    $sql = "SELECT * FROM mustahik WHERE id = $id";
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
			<form action="updatemustahik.php" method="post">
				<?php
				echo $message;
				?>
    
    <p class="h4 mb-4"><h1>Update Mustahik</h1></p><br>
    <a href="adminmustahik.php">kembali</a>

    
    <div class="form-group">
 	   <label>kategori</label>
    <select name="kategori" class="browser-default custom-select mb-4" >
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
    	<input type="text" name="jumlah_hak" class="form-control mb-4" placeholder="masukan jumlah hak" value="<?= $row['jumlah_hak'] ?>">
    </div>
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <!-- Send button -->
    <button name="update" class="btn btn-info btn-success" type="submit">Update</button>

</form>
<!-- Default form contact -->
		</div>
	</div>
	
</div>
</body>
</html>