<?php ?>
<!DOCTYPE <!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="scripts.js"></script>
      <meta charset="UTF-8">
      <title>Quick Bites</title>
  </head>

<body>
  <div id="menu">
    <img src="menupic.png" alt="menu picture"  height="200" width="400" id="menupic">
    <center>  <img src="hat.png" alt="chef hat" width="100" height="100" id="hat">
    <img src="fork.png" alt="fork" width="100" height="100" id="fork"></center>
    <!--<img src="cup.png" alt="cup" width="100" height="100"id="cup">-->
    <hr>
    <form action="submit.php">
    <div id="header" class="ribbon">
             <h1><a>Appetizers</a></h1>
             <p>Wings...............$11.99 <input type="number" id="Wings" name="Wings" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Nachos..............$12.99 <input type="number" id="Nachos" name="Nachos" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Cheese Sticks....$9.99 <input     type="number" id="CheeseSticks" name="CheeseSticks" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             
    </div>

    <div id="header" class="ribbon">
             <h1><a>Salad</a></h1>
             <p>Caesar..........$10.99 <input type="number" id="Caesar"  name="Caesar" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Tabouleh........$11.99 <input type="number"  id="Tabouleh" name="Tabouleh" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Fattoush.........$13.99 <input type="number" id="Fattoush" name="Fattoush" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             
    </div>

    <div id="header" class="ribbon">
             <h1><a>Hot Drinks</a></h1>
             <p>Coffee..................$6.99 <input type="number"   id="Coffee"       name="Coffee"       min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Hot Chocolate......$5.99 <input type="number"        id="HotChocolate" name="HotChocolate" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Tea.......................$6.99 <input type="number" id="Tea"          name="Tea"          min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             
    </div>

    <div id="header" class="ribbon">
             <h1><a>Cold Drinks</a></h1>
             <p>Bud light................$8.99 <input type="number" id="Budlight"    name="Budlight"    min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Rolling Rock..........$7.99 <input type="number"    id="Rollingrock" name="Rollingrock" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Miller Light..........$10.99 <input type="number"   id="Millerlight" name="Millerlight" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             
    </div>

    <div id="header" class="ribbon">
             <h1><a>Burgers</a></h1>
             <p>Spicy Chicken.........$13.99 <input type="number" id="Spicychicken" name="Spicychicken" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Cheese Burger.........$12.99 <input type="number" id="Cheeseburger" name="Cheeseburger" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Sloppy Burger.........$14.99 <input type="number" id="Sloppyburger" name="Sloppyburger" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             
    </div>

    <div id="header" class="ribbon">
             <h1><a>Pancakes</a></h1>
             <p>Chocolate Chip......$8.99 <input type="number"     id="Chocolatechip" name="Chocolatechip" min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Blueberry...............$9.99 <input type="number" id="Blueberry"     name="Blueberry"     min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             <p>Strawberry.............$9.99 <input type="number"  id="Strawberry"    name="Strawberry"    min="0" max="50" onclick="CalculateTotal()" value="0"></p>
             
    </div>
  </div>
  <p>Total Cost:<input type="text" id="totalCost" value="0" readonly> </p>

  <div id="submit">
  Name:<br>
  <input id = "orderName" type="text" name="firstname" value="">
  <br><br>
  <input type="submit" value="Submit">
</form>
</div>
<br>
  <button type="button">Previous Order</button>
</body>
</html>
