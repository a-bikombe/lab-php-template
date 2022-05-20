<?php
// title - page title
$title = 'Template Lab';
// author - any name or identification text
$author = 'Arianna';
// content - an arbitrary string
$content = "Hello, my name is $author and this page is called $title.";
// height - an integer image height, in pixels
$height = 287;
// width - an integer image width, in pixels
$width = 408;
// image - a placeholder image URL which includes height and width
$image = 'https://placekitten.com/408/287';
// border
$border = '5px dashed pink';
// ensure height and width are numeric and within 50-500 (if height or width is out of range, set them to default values of your choice)
if (!is_numeric($height) || !is_numeric($width) || $height < 50 || $height > 500 || $width < 50 || $width > 500) {
	$height = 100;
	$width = 200;
}
?>
<!doctype html>
<html>

<head>
	<meta author="author" content="<?= $author ?>">
	<title><?= $title ?></title>
</head>

<body>
	<header>
		<h1><?= $title ?></h1>
		<img src=<?= $image ?> height="<?= $height ?>px" width="<?= $width ?>px" id="kittenImage">
		<style>
			#kittenImage { border: <?= $border ?> }
		</style>
	</header>

	<main>
		<p><?= $content ?></p>
	</main>

	<footer>
		<p>&copy; 2022 <?= $author ?></p>
	</footer>
</body>

</html>