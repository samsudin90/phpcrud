<?php

$conn = mysqli_connect('localhost','database','asawawuh','zakatfitrah');
$sql = "SELECT * FROM muzakki";
$result = mysqli_query($conn,$sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>zakat</title>
  </head>
  <body>
      <div class="container mt-3">

      <ul class="nav justify-content-center nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="">Muzakki</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="adminmustahik.php">Mustahik</a>
  </li>
</ul>
<a href="addMuzakki.php" class="btn btn-primary">Tambah muzakki</a>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">tanggungan</th>
      <th scope="col">keterangan</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>

  	<?php
  	    while($rows = $result->fetch_assoc()){
 	?>
    <tr>
      <th scope="row"><?php echo $rows['id']; ?></th>
      <td><?php echo $rows['nama']; ?></td>
      <td><?php echo $rows['jumlah_tanggungan']; ?></td>
      <td><?php echo $rows['keterangan']; ?></td>
      <td>
          <a href="deletemuzakki.php?id=<?= $rows['id'] ?>" class="btn btn-danger" >hapus</a>
          <a href="editmuzakki.php?id=<?= $rows['id'] ?>" class="btn btn-success" >ubah</a>
      </td>
    </tr>
<?php   } ?>
  </tbody>
</table>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>