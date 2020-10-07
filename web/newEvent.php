<?php
  if (isset($_GET["newEvent"])) {
    $event = $_GET["newEvent"];
    $result_arr = [
      "newEvent" => $newEvent,
      "status" => "success"
    ];
    echo json_encode($result_arr);
  ;
?>
