<?php $pageCurrent = "INFO4320"; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <title>
    <?php echo $pageCurrent; ?>
  </title>
</head>

<body>
  <div id="stickyHeader">
    <div id="navigationBar">
      <?php include("includes/header.php"); ?>
    </div> <!-- end of navigationBar div -->
  </div> <!-- end of stickyHeader div -->

  <div id="container">
    <div id="content">
      <h1 id="titleStyle">
        <?php titlePrint($pageCurrent); ?>
      </h1> <!-- end of titleStyle div -->

      <div id="descriptionImage">
        <img src="images/4320.png" alt="Scents of Smell"> <!-- This photo was taken
          and edited by me. -->
      </div> <!-- end of descriptionImage div -->

      <div id="descriptionText">
        <p>A semester-long group project, <i>Scents of Smell</i> is an interactive
          gamified scent diffuser powered by an Arduino board that allows users to
          test their senses of smell by guessing which two (of eight) randomly
          emitted scents they detect. Currently, many existing smelling games are for pets,
          but humans’ olfactory senses are just as important. Realizing this shortcoming,
          then, we created <i>Scents of Smell</i>. With just the press of a button,
          two randoms scent are emitted from the house-shaped prototype for players to
          guess what they smell, and a flash of light will automatically provide feedback
          on whether or not the guess was right. With this prototype, we hope that
          people of all ages can have a simpler, more technologically advanced, and
          funner device to test their senses of smell with.</p>
      </div> <!-- end of descriptionText div -->
    </div> <!-- end of content div -->
  </div> <!-- end of container div -->
</body>
</html>
