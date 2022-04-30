<?php
    
     if (isset($_GET['id'])) {
     	$id = $_GET['id'];
        $conn = mysqli_connect('localhost','database','asawawuh','zakatfitrah');
     	$sql = "DELETE FROM muzakki WHERE id = $id ";

     	$result = mysqli_query($conn,$sql);
     	if ($result==TRUE) {

     		header('location: admin.php');
     	}else{
     	    echo "Error:".mysql_errno($conn);	
     	}
     }
?>