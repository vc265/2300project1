<?php $pageCurrent="HOME"; ?>

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
        <img src="images/index.png" alt="Vicky Chou"> <!-- This photo was taken by my mom. -->
      </div> <!-- end of descriptionImage div -->

      <div id="descriptionText">
        <p>My name is Vicky Chou, and I am currently a junior at Cornell University,
          majoring in Information Science with concentrations in (a) Digital Culture
          and Production and (b) User Experience and minoring in Psychology. I was
          born and raised in Queens, NY, and aspire to work in East Asia one day.
          <br><br>While I am still exploring various interests, I find great enjoyment
          in ideating creations that stimulate discussions on societal values. Rather
          than sitting alone at a desk all day, then, I anticipate meeting diverse
          users and professionals to better understand the world that we live in and
          the ways in which we can make it more creative, lively, and unified – together.
          <br><br>So connect me with someone who's hiring – I'd love to chat! (Yes,
          shameless plug for myself :P Thanks!)</p>
      </div> <!-- end of descriptionText div -->
    </div> <!-- end of content div -->
  </div> <!-- end of container div -->
</body>
</html>
