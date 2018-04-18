<?php $pageCurrent = "INFO3450"; ?>

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
        <img src="images/3450.png" alt="SecureMe – Feel Safe Be Safe"> <!-- This
          image was created on and screenshotted from InVision by me and my groupmates
          from INFO3450 and edited by me. -->
      </div> <!-- end of descriptionImage div -->

      <div id="descriptionText">
        <p>A semester-long group project, <i>SecureMe – Feel Safe Be Safe</i> is an
          interactive wireframe for a mobile application that aims to address the growing
          concerns Cornell University students have toward safety and security. Many
          reports of assault have occurred within just the past year, and even students
          who do not feel as if the incidents have any direct influence on their own
          safety believe that the administration should better address such events as well
          as people's general feelings of insecurity particularly when commuting alone at
          night. In knowing these concerns, then, we designed <i>SecureMe – Feel Safe Be Safe</i>
          in such a way to address these issues by providing ways for users to avoid
          possible danger, get help in imminent danger, and provide ways to help their peers
          feel more secure as well.</p>
      </div> <!-- end of descriptionText div -->
    </div> <!-- end of content div -->
  </div> <!-- end of container div -->
</body>
</html>
