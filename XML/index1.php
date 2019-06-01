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

	// xac dinh vi tri element goc
	$books = $domdoc->documentElement;
	$book_item = $books->childNodes->item(1);

	// tao element tu do
	$book = $domdoc->createElement('Book');
	$books->appendChild($book);
	// them thuoc tinh
	$att = $domdoc->createAttribute('Id');
	$att->appendChild($domdoc->createTextNode('004'));
	$book->appendChild($att);

	$title = $domdoc->createElement('Title');
	$title->appendChild($domdoc->createTextNode('Hoc Lap trinh CC'));
	$book->appendChild($title);

	$author = $domdoc->createElement('Author');
	$author->appendChild($domdoc->createTextNode('Vietpro Khon Nan'));
	$book->appendChild($author);

	// chen element vao
	$books->insertBefore($book, $book_item);

	$domdoc->save('books.xml');

?>
</body>
</html>