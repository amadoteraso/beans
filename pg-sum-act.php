<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Sum Activity</title>
</head>
<body>
   <form action="" method="post">
      <label for="num1">First Number</label>
      <input type="text" name="num1" id="num1">
      <br>
      <label for="num2">Second Number</label>
      <input type="text" name="num2" id="num2">
      <br>
      <label for="num3">Third Number</label>
      <input type="text" name="num3" id="num3">
      <br>
      <input type="submit" value="Submit" name="btn_submit">  
   </form>
</body>
</html>

<?php
if(isset($_POST['btn_submit'])){
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $num3 = $_POST['num3'];

   $sum = $num1 + $num2 + $num3;
   echo "Sum of 3 numbers is $sum.";
}
?>