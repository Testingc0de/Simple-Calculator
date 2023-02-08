<?php
$result = "0";
if (isset($_GET['operation'])){
   $x = $_GET['num1'];
   $y = $_GET['num2'];
   $op = $_GET['operation'];

   switch($op){
      case 'Add' : $result = $x + $y;
      break;
      case 'Sub' : $result = $x - $y;
      break;
      case 'Multi' : $result = $x * $y;
      break;
      case 'Div' : $result = $x / $y;
      break;
   };
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Calc</title>
   <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
   <div class="container">
      <div class="calculator">
         <form>
               <input type="number" name="num1" id="num1" placeholder="First Number">
               <input type="number" name="num2" id="num2" placeholder="Second Number">
               <input type="submit" value="Add" name="operation">
               <input type="submit" value="Sub" name="operation">
               <input type="submit" value="Multi" name="operation">
               <input type="submit" value="Div" name="operation">
         </form>
         <hr>
         <div id="result">
               <p>Result:</p>
               <input type="text" disabled value= "<?= $result ?>">
         </div>
      </div>
   </div>
</body>
</html>