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
  if (isset($_GET["action"])) {
    $action = $_GET["action"];
    $result_arr = [
      "action" => $action,
      "is_allowed" => "true"
    ];
    echo json_encode($result_arr);
  ;
    
  }

 
?>
