<?php
  if (isset($_GET["action"])) {
    $event = $_GET["action"];
    echo '{
      "args": {}, 
      "headers": {
        "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", 
        "Accept-Encoding": "gzip, deflate", 
        "Accept-Language": "en-US,en;q=0.9", 
        "Host": "httpbin.org", 
        "Upgrade-Insecure-Requests": "1", 
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36", 
        "X-Amzn-Trace-Id": "Root=1-5f7dacb1-06faca8c4ef3b97261913d97"
      }, 
      "origin": "49.245.55.45", 
      "url": "http://httpbin.org/get"
    }
    '
  }
?>
