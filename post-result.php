<?php
$pageTitle = "Post result";
include "view-header.php";
?>
    <h1>Post result</h1>
  <?php
echo getDisplay('my-name'); 
include "view-footer.php";

function getDisplay('my-name'){
    if (isset($_POST['my-name'])) {
          return "<p>The value sent is:</p>" $_POST['my-name'];
   }
    else {
    return 
    "<p>Nothing posted to the page. </p>";
    }
}
?>
