<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--This is the calculater we see on the website-->
    
      <p style="font-size: 30px"> Aldwin's Calcluator!</p>
      <p2 style="font-size: 20px">Use the calculator wisley...</p2>
     <body style = "background: url(https://cdn.wallpapersafari.com/77/83/sfO24Q.jpg)no-repeat center center fixed; background-size: 100% 100%;"></body>
      <body text="#F6EBE8"></body>
      <style>
          
          input{
             margin: 100px: auto;
              text-align: left;
          }
          button {
                text-align: center;
          }
          
          p{
              text-align: center;
              font-size: 25px;
          }
          body {
              text-align: center;
              font-size: 30px;
              
          }
     </style>
      <form align="center" method="get">
      <input type="text" name="num1" placeholder="Number 1">
      <input type="text" name="num2" placeholder="Number 2">
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
    <div style="width:10%; height:100%; solid; margin-left:auto;margin-right:auto;">
      <button type="submit" name="submit" value="submit">Calculate</button>
          </div>
        </form>

    <p>The answer is:</p>
    <?php
      //This is the PHP script that calculates in the background

      //First we check if the button has been clicked
      if (isset($_GET['submit'])) {
        //Then we get all the data from the form
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        //Here we check which operator the user chose, and we perform the calculation
        switch ($operator) {
          case "None":
            echo "You need to select an operator!";
            break;
          case "Add":
            echo $result1 + $result2;
            break;
          case "Subtract":
            echo $result1 - $result2;
            break;
          case "Multiply":
            echo $result1 * $result2;
            break;
          case "Divide":
            echo $result1 / $result2;
            break;
          default:
            echo "Error!";
            break;
        }
      }
    ?>
  </body>
</html>
