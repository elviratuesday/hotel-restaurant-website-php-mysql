<?php require_once('../private/initialize.php'); ?>

<!DOCTYPE HTML>
<html lang="nl">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Academy Hotel en Restaurant <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
  <script src="js/navbar.js" defer></script>

    <?php if ($page_title == "Index") { ?>
        <script src="js/clock.js" defer></script>
    <?php } ?>

    <?php if ($page_title == "Restaurant") { ?>
        <script src="js/tabs.js" defer></script>
    <?php } ?>

    <?php if ($page_title == "Kamer reserveren") { ?>
        <script src="js/rooms.js" defer></script>
        <script src="js/controle.js" defer></script>
        <script src="js/counter.js" defer></script>
        <script src="js/modal.js" defer></script>
    <?php } ?>

    <?php if ($page_title == "Contact") { ?>
        <script src="js/geolocation.js" defer></script>
    <?php } ?>

    <?php if ($page_title == "Succes") { ?>
        <script src="js/getreservation.js" defer></script>
    <?php } ?>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header role="banner">
        <nav class="mainNav">
            <ul>
            <li><a href="index.php" class="navLink" title="Home">Home</a></li>
            <li><a href="restaurant.php" class="navLink" title="Restaurant">Restaurant</a></li>
            <li><a href="kamer_reserveren.php" class="navLink" title="Reserveren">Kamers reserveren</a></li>
            <li><a href="contact.php" class="navLink" title="Contact">Contact</a></li>
          </ul>
        </nav>
