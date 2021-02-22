<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<style>
h1{
    text-align:center;
}
input{
    width:30%;
    margin-top:2%;
    height:30px;
}
</style>
<body>
<h1>SIMPLE CALCULATOR</h1>
   <form action="">
   <input type="text" name="num1" placeholder="Number 1">
   <input type="text" name="num2" placeholder="Number 2">
   <!-- dropdown to select operators -->
   <select name="operators">
   <option>None</option>
   <option>Add</option>
   <option>Subtract</option>
   <option>Multiply</option>
   <option>Divide</option>
   </select> <br>
   <!-- calculate button -->
   <button type="submit" name="submit" value="submit">Calculate</button> 
   </form> 
   <h3>The answer is:</h3>
   <!-- php code starts here -->
   <?php
   if (isset($_GET['submit'])){
       $result1 = $_GET['num1'];
       $result2 = $_GET['num2'];
       $operator = $_GET['operators'];
    //    switch statements
       switch ($operator) {
           case "None":
               echo "You need to select a method!";
               break;
               case "Add":
                echo $result1 + $result2;
                break;
                case "Subtract":
                    echo  $result1 - $result2;
                    break;
                    case "Multiply":
                        echo $result1 * $result2;
                        break;
                    case "Divide":
                        echo $result1 / $result2;
                        break;
       }
   } 
   ?>
</body>
</html>





