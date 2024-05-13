<?php 
require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){

	
	//cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST)>0 ){
		echo "
		<script>
		alert('data berhasil ditambahkan !');
		document.location.href = 'index.php';
		</script>

		";
	}else{
		echo "
		<script>
		alert('data gagal ditambahkan !');
		document.location.href = 'index.php';
		</script>

		";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Menambah data buku</title>
</head>
<body>
	<div class="container">
		<h1>Menambah data buku</h1>

		<form action="" method="post">
			<div class="form">
				<label for="title"> Title : </label>
				<input type="text" name="title" id="title" required>
			</div>
			<div>
				<label for="category"> Category : </label>
				<input type="text" name="category" id="category">
			</div>	
			<div>
				<label for="author"> Author : </label>
				<input type="text" name="author" id="author" required>
			</div>
			<div>
				<label for="date_published"> Date Published : </label>
				<input type="text" name="date_published" id="date_published">
			</div>	
			<div>
				<label for="price"> Price : </label>
				<input type="text" name="price" id="price">
			</div>
			<div>
				<button type="submit" name="submit"> Tambah Data !</button>
			</div>

			
		</form> 
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</body>
</html>  