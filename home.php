<?php
session_start();

// array
    $colors = array("red", "green", "blue"); 

// associative array
    $friends = array(
        "boys" => array("wim", "paul", "jens"),
        "girls" => array("eef", "liesbeth", "mieke")
    );

// object
class Car {
    var $color = "black";
    var $model = "Skoda";
};

$Mycar = new Car();

// for loop that adds item to the above
for($i = 0; $i <= 3; $i++){
    if($i === 1){
        array_push($colors, "yellow");
    } else if($i === 2){
        array_push($friends["boys"], "johan");
        array_push($friends["girls"], "lena");
        $friends["BFF"] = array("wim", "liesbeth");
    } else($i === 3){
        $Mycar->type = "sport"
    };
};

// store array in session variable
$_SESSION['SimpleArr'] = $colors;
$_SESSION['AssocArr'] = $friends;
$_SESSION['Object'] = $Mycar;



// if statement that has 20% chance of editing random item of the above
$number = rand(1, 5); 

if($number === 1){
    switch(rand(1,3)){
        case 1:
            $colors[array_rand($colors)] = "replaced";
            $_SESSION['SimpleArr'] = $colors;
            break;
        case 2:
            $rand = array_rand($friends);
            $friends[$rand] [array_rand($friends[$rand])] = "replaced";
            $_SESSION['AssocArr'] = $friends;
            break;
        case 3:
            $MycarArray = (array)$Mycar; // convert object to array
            $rand = array_rand($MycarArray); // select random key
            $MycarArray[$rand] = "replaced"; // replace random value
            $Mycar = new Car(); // Mycar variable as new object
            foreach($MycarArray as $key => $value){
                $Mycar->$key = $value; // push array variables into new object
            };
            $_SESSION['Object'] = $Mycar;
            break;
    };
};

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
    <h1>Blackjack game</h1>
    <form action="game.php" method="POST">
        <button type="submit">Start blackjack game</button>
    </form>
</body>
</html>