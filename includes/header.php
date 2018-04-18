<?php
$pageList = array(
  "index" => "HOME",
  "info4240" => "INFO4240",
  "info3450" => "INFO3450",
  "info4320" => "INFO4320"
);
?>

<header>
  <?php
  foreach($pageList as $pageFile => $pageTitle) { //checks to see what the current page is
    if ($pageTitle == $pageCurrent) { //the current page should be delinked and greyed out in the navigation bar
      $navigationLink = "class='navigationUnstyle'";
      echo "<span " . $navigationLink . ">" . $pageTitle . "</span>";
    }
    else { //the other pages should be linked in the navigation bar
      $navigationLink = "class='navigationStyle'";
      echo "<span " . $navigationLink . "><a href ='" . $pageFile . ".php'>" . $pageTitle . "</a></span>";
    }
  }
  ?>
</header>

<?php
function titlePrint($titleCurrent) {
  $titleList = array(
    "HOME" => "HELLO. Welcome to my portfolio!",
    "INFO4240" => "INFO4240: Designing Technology for Social Impact",
    "INFO3450" => "INFO3450: Human Computer Interaction Design",
    "INFO4320" => "INFO4320: Rapid Prototyping and Physical Computing"
  );
  foreach ($titleList as $titleShort => $titleLong) { //checks to see what the current page is
    if ($titleCurrent == $titleShort) { //prints out the full name of the class
      echo $titleLong;
    }
  }
}
?>
