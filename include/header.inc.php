<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/simple.css"/>
    <link rel="stylesheet" href="styles/custom.css"/>
  <?php
  if (!empty($title)):
    ?>
      <title>Culinary cove &bull; <?php echo $title; ?></title>
  <?php else: ?>
      <title>Culinary cove</title>
  <?php endif; ?>
  <?php /*
	<title>Culinary cove<?php if(!empty($title)): ?> &bull; <?php echo $title; endif; ?></title>
 */ ?>
</head>
<body>
<?php
if (empty($image)) {
  $image = 'images/img_placeholder.png';
}
?>
<header class="header-with-background" style="background-image: url('<?php echo $image ?>');">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <?php if (!isset($pageKey)) echo $pageKey = '' ?>
      <?php if (!empty($pageKey) && $pageKey === "mission"): ?>
          <a class="active" href="mission-page.php">Our mission</a>
      <?php else: ?>
          <a href="mission-page.php">Our mission</a>
      <?php endif; ?>

        <a
          <?php if (!empty($pageKey) && $pageKey === 'ingredients'): ?>
              class="active"
          <?php endif; ?>
                href="ingredients.php">
            Ingredients
        </a>

        <a
          <?php if (!empty($pageKey) && $pageKey === 'menu'): ?>
              class="active"
          <?php endif; ?>
                href="menu.php">
            Menu
        </a>
    </nav>
</header>
<main>
