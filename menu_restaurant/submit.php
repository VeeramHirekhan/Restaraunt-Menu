<?php

$wings= filter_input(INPUT_POST, 'Wings');
$nachos = filter_input(INPUT_POST, 'Nachos');
$cheesesticks = filter_input(INPUT_POST, 'CheeseSticks');
$caesar = filter_input(INPUT_POST, 'Caesar');
$tabouleh = filter_input(INPUT_POST, 'Tabouleh');
$fattoush = filter_input(INPUT_POST, 'Fattoush');
$coffee = filter_input(INPUT_POST, 'Coffee');
$hotchocolate = filter_input(INPUT_POST, 'HotChocolate');
$tea = filter_input(INPUT_POST, 'Tea');
$budlight = filter_input(INPUT_POST, 'Budlight');
$rollingrock = filter_input(INPUT_POST, 'Rollingrock');
$millerlite = filter_input(INPUT_POST, 'Millerlight');
$spicychicken = filter_input(INPUT_POST, 'Spicychicken');
$cheeseburger = filter_input(INPUT_POST, 'Cheeseburger');
$sloppyburger = filter_input(INPUT_POST, 'Sloppyburger');
$chocolatechip = filter_input(INPUT_POST, 'Chocolatechip');
$strawberry = filter_input(INPUT_POST, 'Strawberry');
$blueberry = filter_input(INPUT_POST, 'Blueberry');
$orderItems = "";
$price = filter_input(INPUT_POST, 'totalCost');
$numOfItems = 0;
$orderName = filter_input(INPUT_POST, 'orderName');

if($wings > 0){
    $orderItems = $orderItems . $wings . " wings\n";
    $numOfItems = $numOfItems + $wings;
}
if($nachos > 0){
    $orderItems = $orderItems . $nachos . " nachos\n";
    $numOfItems = $numOfItems + $nachos;
}
if($cheesesticks > 0){
    $orderItems = $orderItems . $cheesesticks . " cheesesticks\n";
    $numOfItems = $numOfItems + $cheesesticks;
}
if($caesar > 0){
    $orderItems = $orderItems . $caesar . " caesar\n";
    $numOfItems = $numOfItems + $caesar;
}
if($tabouleh > 0){
    $orderItems = $orderItems . $tabouleh . " tabouleh\n";
    $numOfItems = $numOfItems + $tabouleh;
}
if($coffee > 0){
    $orderItems = $orderItems . $coffee . " coffee\n";
    $numOfItems = $numOfItems + $coffee;
}
if($hotchocolate > 0){
    $orderItems = $orderItems . $hotchocolate . " hotchocolate\n";
    $numOfItems = $numOfItems + $hotchocolate;
}
if($tea > 0){
    $orderItems = $orderItems . $tea . " tee\n";
    $numOfItems = $numOfItems + $tea;
}
if($budlight > 0){
    $orderItems = $orderItems . $budlight . " budlight\n";
    $numOfItems = $numOfItems + $budlight;
}
if($rollingrock > 0){
    $orderItems = $orderItems . $rollingrock . " rollingrock\n";
    $numOfItems = $numOfItems + $rollingrock;
}
if($millerlight > 0){
    $orderItems = $orderItems . $millerlight . " millerlight\n";
    $numOfItems = $numOfItems + $millerlight;
}
if($spicychicken > 0){
    $orderItems = $orderItems . $spicychicken . " spicychicken\n";
    $numOfItems = $numOfItems + $spicychicken;
}
if($cheeseburger > 0){
    $orderItems = $orderItems . $cheeseburger . " cheeseburger\n";
    $numOfItems = $numOfItems + $cheeseburger;
}
if($sloppyburger > 0){
    $orderItems = $orderItems . $sloppyburger . " sloppyburger\n";
    $numOfItems = $numOfItems + $sloppyburger;
}
if($chocolatechip > 0){
    $orderItems = $orderItems . $chocolatechip . " chocolatechip\n";
    $numOfItems = $numOfItems + $chocolatechip;
}
if($strawberry > 0){
    $orderItems = $orderItems . $strawberry . " strawberry\n";
    $numOfItems = $numOfItems + $strawberry;
}
if($blueberry > 0){
    $orderItems = $orderItems . $blueberry . " blueberry\n";
    $numOfItems = $numOfItems + $blueberry;
}
if($fattoush > 0){
    $orderItems = $orderItems . $fattoush . " fattoush\n";
    $numOfItems = $numOfItems + $fattoush;
}



require('../model/database.php');
$query = 'INSERT INTO orders (price , Number_Of_Items, OrderName , OrderItems)
VALUES
(:price, :numOfItems, :orderName, :orderItems)';
$statement = $db->prepare($query);
$statement->bindValue(':price', $price);
$statement->bindValue(':numOfItems', $numOfItems);
$statement->bindValue(':orderName', $orderName);
$statement->bindValue(':orderItems', $orderItems);
$statement->execute();
$statement->closeCursor();

include('main.php');
?>


