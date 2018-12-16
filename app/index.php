<?php 
$result = "";

require "Addition.php";
require "Substraction.php";
require "Multiply.php";
require "Divide.php";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
                $addition = new \App\Addition;
                $addition->setOperands([$this->a, $this->b]);
                return $addition->calc();
//            return $this->a + $this->b;
            break;

            case '-':
                $substraction = new \App\Substraction;
                $substraction->setOperands([$this->a, $this->b]);
                return $substraction->calc();
//            return $this->a - $this->b;
            break;

            case '*':
                $multiply = new \App\Multiply;
                $multiply->setOperands([$this->a, $this->b]);
                return $multiply->calc();
//            return $this->a * $this->b;
            break;

            case '/':
                if ($this->b == 0){
                    return "Begalybe. Bet siaip dalinti is nulio negalima";
                }
//                else{
//                    return $this->a / $this->b;
//                }
                $divide = new \App\Divide;
                $divide->setOperands([$this->a, $this->b]);
                return $divide->calc();

            
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Calculator</title>
<!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../npm.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<!-- <form method="post">
<table align="center">
    
    <tr>
        <td>Pirmas skaičius</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Antras skaičius</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Veiksmas</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>

</table>
</form> -->

<div style="margin-top: 5%; width: 60%;" class="container">
    <form method="post">
      <div class="form-group">
        <label for="n1">Pirmas skaičius:</label>
        <input type="text" class="form-control" id="n1" name="n1">
      </div>
      <div class="form-group">
        <label for="n2">Antras skaičius:</label>
        <input type="text" class="form-control" id="n2" name="n2">
      </div>
      <div class="form-group">
        <label for="op">Veiksmas:</label>
          <select class="form-control" id="op" name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
          </select>
      </div>
      <!-- <button type="submit" class="btn btn-default">=</button> -->
      <input type="submit" class="btn btn-primary btn-block" name="submit" value="                =                ">
      <br>
      <strong><?php echo $result; ?><strong>
    </form>
</div>




</body>
</html>