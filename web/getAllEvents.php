<?php

  if (isset($_SESSION["events"])) {
    echo json_encode($_SESSION["events"]);
  ;
  }
  else {
      $arr = array("message" => "No events found!");
      echo json_encode($arr);
  } 
 
?>
