
<?php
$suite = ['♥️', '♠️', '♣️', '♦️'];
$values = [
        'ace' => 11,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'jack' => 10,
        'queen' => 10,
        'king' => 10
    ];

//Shuffle cards

function shufffleCards($values){
shuffle($values);
foreach($values as $value){
    $shuffledArray[] = $value;
    $sliceFour = array_slice($shuffledArray, 0, 2);
}
    return $sliceFour;
}

//Get 2 random cards from pack

$player1 = shufffleCards($values);
$player2 = shufffleCards($values);

//Total of random 2 cards

$total1 = $player1[0] + $player1[1];
$total2 = $player2[0] + $player2[1];

//Declare winner
function winner($total1, $total2){
if($total1 > $total2){
  return 'PLAYER 1!';
} else {
return 'PLAYER 2!';
}
}
$end = winner($total1, $total2);


//Shuffle Suits 

function shuffleSuit($suite){
$mixSuite = array_rand($suite);
$getSuite =  $suite[$mixSuite];
return $getSuite;
}

$shuffle1 = shuffleSuit($suite);
$shuffle2 = shuffleSuit($suite);
$shuffle3 = shuffleSuit($suite);
$shuffle4 = shuffleSuit($suite);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <h1>BLACK JACK</h1>
<div class="container">

<div class=" card player1">
        <h4>PLAYER 1: </h4>
        <p> <?php echo "$player1[0] $shuffle1"; ?></p>
        <p> <?php echo "$player1[1] $shuffle2"; ?></p>
        <p>Total: <?php echo "$total1"; ?></p>
    
    </div>
<div class="card player2">
    <h4>PLAYER 2: </h4>
        <p> <?php echo "$player2[0] $shuffle3"; ?></p>
        <p> <?php echo "$player2[1] $shuffle4"; ?></p>
        <p>Total: <?php echo "$total2"; ?></p>
    </div>
        </div>
    
    <h1>And the winner is <?php echo "$end" ?></h1>

</body>
</html>
