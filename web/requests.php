<?php

  if (isset($_GET["newEvent"])) {
    $newEvent = $_GET["newEvent"];
    $events_arr = $_SESSION["events"];
    array_push($events_arr,$newEvent);
    $_SESSION["events"] = $events_arr;
    $result_arr = [
      "newEvent" => $newEvent,
      "status" => "success"
    ];
    echo json_encode($result_arr);
  ;
  } 
  else if (isset($_GET["action"])) {
    $action = $_GET["action"];
    $result_arr = [
      "action" => $action,
      "is_allowed" => "true"
    ];
    echo json_encode($result_arr);
  ;
    
  }
  else {
    if (isset($_SESSION["events"])) {
      echo json_encode($_SESSION["events"]);
    ;
    }
    else {
        $arr = array("message" => "No events found!");
        echo json_encode($arr);
    } 
  }

?>
