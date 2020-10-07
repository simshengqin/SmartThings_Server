<?php
  if (isset($_GET["newEvent"])) {
    $event = $_GET["newEvent"];
    echo "Processed" . $event;
  }
?>
