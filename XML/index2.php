<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	
	$domdoc = new DOMDocument('1.0', 'utf-8');
	$domdoc->formatOutput = TRUE;
	$domdoc->preserveWhiteSpace = FALSE;
	// TAI FILE XML VAO
	$domdoc->load('books.xml');

	// tinh vi tri phan tu
	// $books = $domdoc->documentElement;
	// $book_item = $books->childNodes->item(1);
	// xoa element con
	// $books->removeChild($book_item);

	$books = $domdoc->documentElement;
	$book003 = $books->childNodes->item(1);
	// vi tri title
	$title = $book003->childNodes->item(0);
	$book003->removeChild($title);

	$domdoc->save('books.xml');

?>
</body>
</html>