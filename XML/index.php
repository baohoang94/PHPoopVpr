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


	$books = $domdoc->getElementsByTagName('Books')->item(0);
	$book = $books->getElementsByTagName('Book')->item(0);

	// thay doi gia tri
	// $book->getElementsByTagName('Title')->item(0)->nodeValue = 'Hoc do hoa photoshop';
	// $book->getElementsByTagName('Author')->item(0)->nodeValue = 'Trung tam vietbrother';

	// thay doi gia tri cua thuoc tinh
	$book->setAttribute('Id','000');
	// truy xuat den gia tri cua thuoc tinh
	$id = $book->getAttribute('Id');

	$title = $book->getElementsByTagName('Title')->item(0)->nodeValue;
	$auth = $book->getElementsByTagName('Author')->item(0)->nodeValue;
	// truy cap truc tiep
	// $title004 = $domdoc->getElementsByTagName('Title')->item(2)->nodeValue;
	echo $title;
	echo '<br>';
	echo $auth;
	echo '<br>';
	// echo $title004;
	echo $id;

	$domdoc->save('books.xml');

?>
</body>
</html>