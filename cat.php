<html>
<head>


</head>
<body>


<form>
  <input type="text" name="num1" placeholder="enter number 1" required>
<input type="text" name="num2" placeholder="enter number 2" required>
<select name="operator">
  <option>None</option>
<option>Add</option>
  <option>Subtraction</option>
  <option>Multiplication</option>
  <option>Divide</option>
</select>
<input type="submit" name="submit" value="Calculate">
</form>
<p>The Result is =</p>
</br>
<?php
if  (isset($_GET['submit'])){
  $number1=$_GET['num1'];
  $number2=$_GET['num2'];
  $operator=$_GET['operator'];
    switch($operator){
      case "None":
      echo "Select the operators";
      break;
      case "Add":
      echo $number1 + $number2;
      break;
      case "Subtraction":
      echo $number1 - $number2 ;
      break;
      case "Multiplication":
      echo $number1 * $number2;
      break;
         case "Divide":
      echo $number1 / $number2;
      break;
    }
  }

?>
</body>
</html>
