<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/simple.css" />
	<link rel="stylesheet" href="styles/custom.css" />
	<title>Culinary cove<?php if(!empty($title)): ?> &bull; <?php echo $title; endif; ?></title>
</head>
<body>
<header class="header-with-background"  style="background-image: url('<?php echo $image ?>');">
	<h1>Culinary Cove</h1>
	<p>Your sanctuary for exceptional flavors</p>
	<nav>
		<a class="<?php echo !empty($pageKey) && $pageKey ==="mission" ? "active" : "";?>" href="mission-page.php">Our mission</a>
		<a class="<?php echo isset($pageKey) && $pageKey==='ingredients' ? "active" : "";?>" href="ingredients.php">Ingredients</a>
		<a class="<?php echo isset($pageKey) && $pageKey==='menu' ? "active" : "";?>" href="menu.php">Menu</a>
	</nav>
</header>
<main>
