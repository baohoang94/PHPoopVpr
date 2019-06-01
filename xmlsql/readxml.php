<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doc co so du lieu xml</title>
</head>
<body>
	<?php 
		$domdoc = new DOMDocument('1.0', 'utf-8');
		$domdoc->formatOutput = TRUE;
		$domdoc->preserveWhiteSpace = FALSE;
		// TAI FILE XML VAO
		$domdoc->load('bookshop.xml');

		foreach ($domdoc->getElementsByTagName('Book') as $book) {
			$title = $book->getElementsByTagName('Title')->item(0)->nodeValue;
			$author = $book->getElementsByTagName('Author')->item(0)->nodeValue;
			$price = $book->getElementsByTagName('Price')->item(0)->nodeValue;
			$img = $book->getElementsByTagName('Img')->item(0)->nodeValue;
	 ?>
	 <img style="float: left" src="<?php echo $img ?>" alt="" width="120px">
	 Tac gia: <?php echo $author ?><br>
	 Tieu de: <?php echo $title ?><br>
	 Gia: <?php echo $price ?><br>
	 <hr style="clear: both">
	<?php } ?>
</body>
</html>