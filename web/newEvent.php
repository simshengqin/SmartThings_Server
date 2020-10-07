<?php
  if (isset($_GET["newEvent"])) {
    $newEvent = $_GET["newEvent"];
    $result_arr = [
      "newEvent" => $newEvent,
      "status" => "success"
    ];
    echo json_encode($result_arr);
  ;
  }
?>
