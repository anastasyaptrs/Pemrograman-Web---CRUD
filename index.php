<?php 
require 'functions.php';

$buku = query ("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Halaman Admin</title>
</head>
<body>
	<div class="container">
		<h1> Daftar Buku </h1>
		<div >
			<a href="add.php"  aria-pressed="true">Menambahkan Data Buku</a>
		</div>
		<div class="table" >
			<table class="table" border="1" cellpadding="1" cellspacing="1">
				<tr>

					<th>ID</th>
					<th>Title.</th>
					<th>Category</th>
					<th>Author</th>
					<th>Date Published</th>
					<th>Price</th>
					<th>Action</th>

				</tr>
				<?php foreach ( $buku as $row ) :?>
					<tr>

						<td><?= $row["id"]; ?></td>
						<td><?= $row["title"]; ?></td>
						<td><?= $row["category"]; ?></td>
						<td><?= $row["author"]; ?></td>
						<td><?= $row["date_published"]; ?></td>
						<td><?= $row["price"]; ?></td>
						<td>
							<a href="edit.php?id=<?= $row["id"]; ?>"> Edit</a>
							<a href="delete.php?id=<?= $row["id"]; ?>"onclick =" return confirm(' Yakin ingin dihapus? ')">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</body>
</html>