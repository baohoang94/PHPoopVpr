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
	$books = $domdoc->createElement('Books');
	$domdoc->appendChild($books);
	// Book 001
	$book = $domdoc->createElement('Book');
	$books->appendChild($book);

	// them thuoc tinh
	$att = $domdoc->createAttribute('Id');
	$att->appendChild($domdoc->createTextNode('001'));
	$book->appendChild($att);
	// end them thuoc tinh

	$title = $domdoc->createElement('Title');
	$title->appendChild($domdoc->createTextNode('Hoc Lap trinh PHP'));
	$book->appendChild($title);

	$author = $domdoc->createElement('Author');
	$author->appendChild($domdoc->createTextNode('Vietpro Education'));
	$book->appendChild($author);
	// end book 001	

	// begin Book 002
	$book = $domdoc->createElement('Book');
	$books->appendChild($book);

	// them thuoc tinh
	$att = $domdoc->createAttribute('Id');
	$att->appendChild($domdoc->createTextNode('002'));
	$book->appendChild($att);
	// end them thuoc tinh

	$title = $domdoc->createElement('Title');
	$title->appendChild($domdoc->createTextNode('Hoc Lap trinh Jav'));
	$book->appendChild($title);

	$author = $domdoc->createElement('Author');
	$author->appendChild($domdoc->createTextNode('Vietpro Academy'));
	$book->appendChild($author);
	// end book 002

	$domdoc->save('books.xml');

?>
</body>
</html>