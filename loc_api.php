<?php
  $opts = [
      "http" => [
          "method" => "GET",
          "header" => "Accept-language: en\r\n" .
              "X-Api-Key: HBqzfroSyQom6L9fVphJwg==K5ofz2WJJab57Bgc\r\n"
      ]
  ];

  $context = stream_context_create($opts);
  $city = $_GET["city"];
  $state = $_GET["state"] ?? "";
  if ($state != "") {
    $state = "&state=" . urlencode($state);
  }
  
  $url = "https://api.api-ninjas.com/v1/geocoding?city=" . urlencode($city) . $state . "&country=US";
  $response = file_get_contents($url, false, $context);
  echo $response;
?>