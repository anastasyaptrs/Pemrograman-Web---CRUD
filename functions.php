<?php 

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_book");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;

	}
	return $rows;
}	



function tambah($data){
	global $conn;
	$title =  htmlspecialchars($data ["title"]);
	$category = htmlspecialchars($data ["category"]);
	$author = htmlspecialchars($data ["author"]);
	$date_published = htmlspecialchars($data ["date_published"]);
	$price = htmlspecialchars($data ["price"]);

	$query = "INSERT INTO buku
	VALUES 
	('', '$title', '$category', '$author',  '$date_published', '$price')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM buku WHERE id = $id " );
	return mysqli_affected_rows($conn);
}


function edit($data){
	global $conn;

	$id = $data["id"];
	$title =  htmlspecialchars($data ["title"]);
	$category = htmlspecialchars($data ["category"]);
	$author = htmlspecialchars($data ["author"]);
	$date_published = htmlspecialchars($data ["date_published"]);
	$price = htmlspecialchars($data ["price"]);

	$query = " UPDATE buku SET 

			title = '$title',
			category ='$category',
			author = '$author',
			date_published ='$date_published',
			price = '$price'

			WHERE id = $id

			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


 ?>


