<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/simple.css" />
	<link rel="stylesheet" href="styles/custom.css" />
	<title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
</head>
<body>
<header class="header-with-background"  style="background-image: url('<?php echo $image ?>');">
	<h1>Culinary Cove</h1>
	<p>Your sanctuary for exceptional flavors</p>
	<nav>
		<a href="mission-page.php">Our mission</a>
		<a href="ingredients.php">Ingredients</a>
		<a href="menu.php">Menu</a>
	</nav>
</header>

<main>
