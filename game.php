<?php
require("start.php");
session_start();

$player = new blackjack();
$dealer = new blackjack();

$_SESSION["player"] = $player;
$_SESSION["dealer"] = $dealer;

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>start</title>
  <link rel="stylesheet" href="start.css">
</head>

<body>
  
</body>
</html>