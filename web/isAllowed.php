<?php
  if (isset($_GET["action"])) {
    $event = $_GET["action"];
    echo "Processed" . $event;
  }
?>
