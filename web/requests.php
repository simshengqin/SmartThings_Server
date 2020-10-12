<?php
  if (isset($_GET["newEvent"])) {
    $newEvent = $_GET["newEvent"];
    if (isset($_COOKIE['events'])) {
      $events_arr = $_COOKIE["events"];
      array_push($events_arr,$newEvent);
      setcookie("events", $events_arr);
    }
    else {
      setcookie("events", [$newEvent]);
    }

    $result_arr = [
      "newEvent" => $newEvent,
      "status" => "success"
    ];
    echo json_encode($result_arr);
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
    if (isset($_COOKIE["events"])) {
      echo json_encode($_COOKIE["events"]);
    ;
    }
    else {
        $arr = array("message" => "No events found!");
        echo json_encode($arr);
    } 
  }

?>
