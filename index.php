<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
    h1{
        position: fixed; left:150px; top:100px;
      }
    #calcu1{
        position: fixed; left:500px; top: 110px;
      }
    #gcd2{
        position: fixed; left:800px; top:110px;
    }
    </style>

    </style>
    <title>assign_one</title>
  </head>
  <body>
    <h1>Lenard Llacer</h1>

    <form class="form" method="post" id="calcu1">
      <h2>Calculator</h2><br>
      Input first number:<br><br>
      <input type="number" name="num1" required><br><br>
      Input second number:<br><br>
      <input type="number" name="num2" required><br><br>
      <input type="submit" name="add" value="+">
      <input type="submit" name="minus" value="-">
      <input type="submit" name="multiply" value="*">
      <input type="submit" name="divide" value="/"><br><br>
      <textarea name="name" rows="1" cols="20" readonly="readonly">
        <?php
          if (isset($_POST['add'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $add = $num1 + $num2;
            echo $add;
          }
          if (isset($_POST['minus'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $minus = $num1 - $num2;
            echo $minus;
          }
          if (isset($_POST['multiply'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $multiply = $num1 * $num2;
            echo $multiply;
          }
          if (isset($_POST['divide'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $divide = $num1 / $num2;
            echo $divide;
          }
         ?>
      </textarea>
    </form>

    <form class="form" method="post" id="gcd2">
      <h2>Finding GCD</h2><br>
      Input first integer:<br><br>
      <input type="number" name="number1" required><br><br>
      Input second integer:<br><br>
      <input type="number" name="number2" required><br><br>
      <input type="submit" name="gcd" value="Submit"><br><br>
      <textarea name="name" rows="1" cols="20" readonly="readonly">
        <?php
          if (isset($_POST['gcd'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $gcd = $_POST['gcd'];
            if ($number1 > $number2) {
              $temp = $number1;
              $number1 = $number2;
              $number2 = $temp;
            }
            for($i = 1; $i < ($number1+1); $i++ ){
              if ($number1%$i == 0 and $number2%$i == 0)
              $gcd = $i;
            }
            echo $gcd;
          }
         ?>
      </textarea>
    </form>

  </body>
</html>
