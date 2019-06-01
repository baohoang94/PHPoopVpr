<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xml Sql</title>
</head>
<body>
	<?php 
		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';
		$db_name = 'bookshop';

		$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
		$setLang = mysqli_query($conn, "SET NAMES 'utf8'");

		$sql = "SELECT * FROM books";
		$query = mysqli_query($conn, $sql);

		$domdoc = new DOMDocument('1.0', 'utf-8');
		$domdoc->formatOutput = TRUE;
		$domdoc->preserveWhiteSpace = FALSE;

		$books = $domdoc->createElement('Books');
		$domdoc->appendChild($books);

		while ($row = mysqli_fetch_array($query)) {
			$row_id = $row['id'];
			$row_title = $row['title'];
			$row_author = $row['author'];
			$row_price = $row['price'];
			$row_img = $row['img'];

			$book = $domdoc->createElement('Book');
			$books->appendChild($book);

			$id = $domdoc->createAttribute('Id');
			$id->appendChild($domdoc->createTextNode($row_id));
			$book->appendChild($id);

			$title = $domdoc->createElement('Title');
			$title->appendChild($domdoc->createTextNode($row_title));
			$book->appendChild($title);

			$author = $domdoc->createElement('Author');
			$author->appendChild($domdoc->createTextNode($row_author));
			$book->appendChild($author);

			$price = $domdoc->createElement('Price');
			$price->appendChild($domdoc->createTextNode($row_price));
			$book->appendChild($price);

			$img = $domdoc->createElement('Img');
			$img->appendChild($domdoc->createTextNode($row_img));
			$book->appendChild($img);
		}
		$domdoc->save('bookshop.xml');
	 ?>
</body>
</html>