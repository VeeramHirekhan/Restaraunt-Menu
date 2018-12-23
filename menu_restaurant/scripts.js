//calculate the total cost
var Wings = 11.99;
var Nacho = 12.99;
var CheeseSticks = 9.99;
var Caesar= 10.99;
var Tabouleh = 11.99;
var Fattoush = 13.99;
var Coffee = 6.99;
var HotChocolate = 5.99;
var Tea = 6.99;
var Budlight = 8.99;
var Rollingrock = 7.99;
var Millerlight = 10.99;
var Spicychicken = 13.99;
var Cheeseburger = 12.99;
var Sloppyburger = 14.99;
var Chocolatechip = 8.99;
var Blueberry = 9.99;
var Strawberry = 9.99;
var sum; 

function CalculateTotal(){

   
    sum = (Wings*document.getElementById("Wings").value) + (Nacho*document.getElementById("Nachos").value) + (CheeseSticks*document.getElementById("CheeseSticks").value) +
    (Caesar*document.getElementById("Caesar").value) + (Tabouleh*document.getElementById("Tabouleh").value) + (Fattoush*document.getElementById("Fattoush").value) +
    (Coffee*document.getElementById("Coffee").value) + (HotChocolate*document.getElementById("HotChocolate").value) + (Tea*document.getElementById("Tea").value) +
    (Budlight*document.getElementById("Budlight").value) + (Rollingrock*document.getElementById("Rollingrock").value) + (Millerlight*document.getElementById("Millerlight").value) +
    (Spicychicken*document.getElementById("Spicychicken").value)+(Cheeseburger*document.getElementById("Cheeseburger").value) + (Sloppyburger*document.getElementById("Sloppyburger").value) +
    (Chocolatechip*document.getElementById("Chocolatechip").value)+(Blueberry*document.getElementById("Blueberry").value) + (Strawberry*document.getElementById("Strawberry").value);
    
    document.getElementById("totalCost").value = sum;
}
