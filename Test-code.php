

<!DOCTYPE html>
<html lang="en">
<style type="text/css">

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test-code</title>
    
</head>
<body>
    <h3>1. Chess Board</h3>
    <div class="chessboard">

    <?php
    for($x = 1; $x <=8; $x++){
        echo "<tr>";
    for($y = 1; $y <= 4; $y++){
        echo "<td></td>";
        if(($x % 1 == 1 && $y % 1 == 1 ) || ($y % 2 == 2 && $x % 2 == 2)){
            echo '<td bgcolor="#000000"></td>';   
        }
        else{
            echo '<td bgcolor="#FFFFFF"></td>';
        }
    }
    echo '</tr>';
}
?>

    </div>

    <br>
    <br>

    <h3>2. Calculator</h3>
    <?php
    if (isset($_REQUEST['button'])) {
        $x = $_POST["value_1"];
        $y = $_POST["value_2"];
    }
    //関数
    function sum(){
        global $x, $y;
        $z = $x + $y;
        return $z;  
    }
    function minus(){
        global $x, $y;
        $z = $x - $y;
        return $z;  
    }
    function product(){
        global $x, $y;
        $z = $x * $y;
        return $z;  
    }
    function quotient(){
        global $x, $y;
            if ($y == 0) {
                $z = "Zero Divide";
                return $z;
            }else{
            $z = $x / $y;
            return $z;
        }
    }
    ?>

<form action="" method="post">
    <p><input type="number" name="value_1" value="1"></p>
    <select name="Arithmetic" class="selectpicker form-control">
        <option>+</option>
        <option>-</option>
        <option>÷</option>
        <option>×</option>
    </select>
    <p><input type="number" name="value_2" value="1"></p>
    <input type="submit" name="button" value="Calculate">
    <?php
    $Arithmetic = $_POST["Arithmetic"];
    switch ($Arithmetic) {
        case "+":
            $result = sum();
            break;
        case "-":
            $result = minus();
            break;
        case "÷":
            $result = quotient();
            break;
        default:
            $result = product();
            break;
    }
    echo "<p>Result : ".$result.".</p>"
    ?>
</form>

    <h3>3. color number</h3>
    <div class="sequence">
        <p>
    <?php
    for ($sq = 1; $sq <= 500 ; $sq++) { 
        if ($sq <= 10) {
            echo "<span style='color:red;'>".$sq." </span>";
        }elseif ($sq > 10 && $sq <= 50) {
            echo "<span style='color:yellow;'>".$sq." </span>";
        }elseif ($sq > 50 && $sq <= 100) {
            echo "<span style='color:green;'>".$sq." </span>";
        }elseif ($sq > 100 && $sq <= 500) {
            echo "<span style='color:blue;'>".$sq." </span>";
        }
    }
    ?>
        </p>
    </div>

    <h3>4. asterisk</h3>
    <?php
    for ($Triangle = 1; $Triangle <= 6; $Triangle++) { 
       for ($Triangle_ast = 6; $Triangle_ast >= 0 ; $Triangle_ast--) { 
           if ($Triangle_ast > $Triangle ) {
                echo "&nbsp;&nbsp;";
           }elseif ($Triangle_ast > 0 && $Triangle_ast <= $Triangle) {
               echo "*";
           }else{
               echo "<br>";
           }
       }
    }
    ?>

<h3>5. Square</h3>
<?php
    for ($square = 1; $square <= 5; $square++) {
        if ($square == 1 || $square == 5 ) {
            echo "※※※※※";
        }else{
            echo "※　　　※";
        }
        echo "<br>";
    } 
?>




</body> 
</html>








</body> 
</html>



    
</body>
</html>