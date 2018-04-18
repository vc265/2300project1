<?php $pageCurrent = "INFO4240"; ?>

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
        <img src="images/4240.png" alt="Design Exercise"> <!-- This drawing was created
          and edited by me. -->
      </div> <!-- end of descriptionImage div -->

      <div id="descriptionText">
        <p>An ideation in a series of design exercises that target societal issues
          and values to encourage discussion of possible reform, the <i>Splashing Chair</i>
          intends to spray water on sleeping students to wake them up in class. It
          senses for the presence of both body heat and movement from seated students
          and is activated when the latter is absent. A critical design, the Splashing
          Chair provokes people into thinking about and questioning the current
          motivation for students to attend class, is plausible but not realistic, and
          is ambiguous and demands resolution, only resolving half of the issue of
          falling asleep in class by waking students up.</p>
        </div> <!-- end of descriptionText div -->
    </div> <!-- end of content div -->
  </div> <!-- end of container div -->
</body>
</html>
