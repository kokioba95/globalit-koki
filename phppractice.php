<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first PHP page</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <?php
    echo "Hello World";
    $name = "Koki Oba";
    echo "My name is $name !";
    ?>

    <?php
        $blue = "blue";
        echo "My favorite color is $blue !";
    ?>
    <?php
    $Apples = 10;
    $Oranges = 15;
    echo $Apples+$Oranges;
    ?>

    <?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world <br>";
    echo "I'm about to learn PHP!<br>";
    echo "This","strinng","was","made","with multiple parameters.";

    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";
    ?>

    <?php
    echo "<h38>Rersonal Derails</h3><br>";
    $Name = "Ryan Dupay";
    echo "Name:$Name<br>";
    $age = "23";
    echo "Age:$age<br>";
    $_2030 = $age + 11;
    echo "In 2030,My age will be $_2030.";
    ?>


    <?php
     $string1 = "This is a text!";
     $string2= 'This is a text!';

     echo $string1;
     echo "<br>";
     echo $string2;
     ?>

     <br>

     <?php
     $int = 98543;
     var_dump($int);
     var_dump($string1);
     ?>

     <br>

     <?php
     $fl = 10.365;
     var_dump($fl);
     ?>

     <br>

     <?php
     $fl = "99.99.99";
     var_dump($fl);
     ?>

     <br>

     <?php
     $kuruma = array("Toyata","Honda","Nissam");
     var_dump($kuruma);
     ?>

     <br>

     <?php
     $hi = "Hello Hello";
     $hi = null;
     var_dump($hi);
     ?>

     <br>

     <?php
     $hi = "Hello Hello";
     $hi = "0";
     var_dump($hi);
     ?>

     <br>

     <?php
     echo strlen("Hello world");
     ?>

     <br>

     <?php
     echo str_word_count("Hello cebu Philippines!");
     ?>

     <br>

     <?php
     echo strrev("I want to reverse");
     ?>

     <br>

     <?php
    $bank = 5000;
    $web = 15000;
    $online = 25000;
    $money = $bank+$web+$online;
    echo $bank+$web+$online;
    $ipod = 20800;
    echo "<br>";
    echo $money-$ipod;
    echo "<br>";
    $salary = 30000*12;
    echo $salary;
    echo "<br>";
    $allowance =30000/2;
    echo $allowance;

    echo "<br>";



    $x = "5";
    $y = 5;
    var_dump($x==$y);

    echo"<br>";

    $x = "5";
    $y = 5;
    var_dump($x===$y);

    echo "<br>";

    $x = "Hi";
    $y = "HI";
    var_dump($x===$y);

    echo "<br>";

    $x = 5;
    $y = 5;
    var_dump($x===$y);

    echo "<br>";

    $x = 5;
    $y = 5;
    var_dump($x!=$y);

    echo "<br>";

    $x = 5;
    $y = 5;
    var_dump($x!==$y);

    echo "<br>";

    $x = 5;
    $y = 5;
    var_dump($x>$y);

    echo "<br>";

    $x = 55;
    $y = "5";
    var_dump($x>$y);

    echo "<br>";

    $x = 55;
    $y = 5;
    var_dump($x>$y);

    echo "<br>";

    $x = 55;
    $y = 555;
    var_dump($x>$y);

    echo "<br>";

    $x = 55;
    $y = 555;
    var_dump($x<$y);

    echo "<br>";

    $x = 55;
    $y = 55;
    var_dump($x>=$y);

    echo "<br>";

    $x = 55;
    $y = 56;
    var_dump($x>=$y);

    echo "<br>";

    $x = 55;
    $y = 8;
    var_dump($x<=$y);

    echo "<br>";

    $x = 5;
    $y = 8;
    var_dump($x<=$y);

    echo "<br>";

    $x = 8;
    $y = 8;
    var_dump($x<=$y);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $txt1 = "Hello";
    $txt2 = "Aubrey";
    echo $txt1 . $txt2;

    echo "<br>";

    $txt1 = "Hello";
    $txt2 = "Aubrey";
    echo $txt1 .= $txt2;
    

    echo "<br>";
    echo "<br>";
    echo "<br>";

    
    $my_name = "Koki";

    if ( $my_name == "Koki" ) {
	echo "Your name is Koki! <br>";
	}

    echo "Welcome to PHP Basics!";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    
    $my_name = "Ryan";

    if ( $my_name == "Koki" ) {
	echo "Your name is Koki! <br>";
	}

    echo "Welcome to PHP Basics!";

    
    $input1 = 5;
    $input2 = 5;
    if( $input1==$input2){
    echo "IT IS THE SAME! <br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";


    $number = 3;
    
    if ( $number == 3 ) {
        echo "The number is 3";
    } else {
        echo "The number is $number it is not 3";
}

    $number = 10;
    
    if ( $number == 3 ) {
        echo "The number is 3";
    } else {
        echo "The number is $number it is not 3";
}


   echo "<br>";
   echo "<br>";
   echo "<br>";

   $age = 30;
   
   if ( $age > 30 ) {
       echo "YOU ARE OLD";
    } else {
        echo "YOU ARE NOT YET OLD";
    }



   $number = 123;
   if ( $number == 3 ) {
       echo "The number is 3";
    } elseif ( $number == 123 ){ 
    echo "The number is 123";
    } else {
        echo "The number is $number it is not 3 or 123";
    }

    echo"<br>";


    $Scale = 85;
    if ($Scale<= 100 && $Scale >= 80 ) {
    echo " Yu $Scale ";
    } elseif ($Scale <= 79 && $Scale >= 70){ 
    echo " Ryo $Scale ";
    } elseif ($Scale <= 69 && $Scale >= 60){ 
    echo " Ka $Scale ";
    } elseif ($Scale <= 59 && $Scale>= 0 ){
    echo "Fuka $Scale ";
    } else{
        echo "NOT";
    }

    $Scale =  85;
    if (is_string($Scale)){
        echo "NOT";
    } elseif ($Scale<= 100 && $Scale >= 80 ) {
    echo " Yu $Scale ";
    } elseif ($Scale <= 79 && $Scale >= 70){ 
    echo " Ryo $Scale ";
    } elseif ($Scale <= 69 && $Scale >= 60){ 
    echo " Ka $Scale ";
    } elseif ($Scale <= 59 && $Scale>= 0 ){
    echo "Fuka $Scale ";
    } else {
        echo "NOT";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $favcoler = "blue";

    switch ($favcolor){
    case "red";
    echo "Your favorite color is red";
    break;
    case "blue";
    echo "Your favorite color is blue!";
    break;
    case "green";
    echo "Your favorite color is green!";
    break;
    default;
    echo "Your favorite color is neither red,blue,nor green!";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $favfood = "Sushi";

    switch ($favfood){
    case "Sushi";
    echo "Healthy and GOOD";
    break;
    case "French fries";
    echo "Oily but Yummy!";
    break;
    case "Salad";
    echo "No comment :D";
    break;
    case "Nori";
    echo "Is it food?";
    break;
    default;
    echo "Your food is $favfood !";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";


    $input1 = 5;
    $input2 = 5;
    $operator = "add";
    switch($operator){
     
     case "add";
      echo $input1+$input2;
    break;
     case "minus";
      echo $input1-$input2;
    break;
     case "multiphy";
      echo $input1*$input2;
    break;
    case "divide";
     echo $input1/$input2;
    break;
    default;
    echo "NOT";
    }

    echo"<br>";
    echo"<br>";
    
    $x = 1; 
    
    while($x <= 5) {
        
        echo "The number is: $x <br>";
        $x++;
    }

    echo"<br>";
    echo"<br>";

    $x = 1; 
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 4);

    echo"<br>";
    echo"<br>";

    for ($x = 1; $x <= 3; $x++) {
        echo "The number is: $x <br>";
    }

    $colors = array("red", "green", "blue", "yellow"); 
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    for ($x = 1; $x<=4; $x++) {
            echo $x ;
        }

    echo"<br>";
    echo"<br>";

    echo "<table border='1'><br />";
    for ($row = 0; $row < 6; $row ++) {
        echo ($row * 2),"<tr>";
    for ($col = 1; $col <= 2; $col ++) {
        echo "<td>", ($col * 1), "</td>";
        }
        
    echo "</tr>";
    }
    echo "</table>";
    ?>

    <html>
     <head>
     <boby>
      <table>
       <tr>
        <th>Number</th>
        <th>Description</th>
       </tr>
       <?php
        for ($rows = 1 ; $rows <= 4; $rows++){
            echo "<tr>";
            echo "<td>$rows</td>";
            echo "<td>This is Data $rows</td/>";
            echo "</tr>";
        }
        ?>

    
      </table>
     </boby>
     </head>
    </html>

<?php
    for ($row= 1 ; $row <=5; $row++) {
        for ($star = 1; $star <= $row;$star++) {
            echo "*";
        }
    echo "<br>";
    }
?>

<?php
function helloMsg() {
    echo "Hello world!";
}

helloMsg(); 

echo "<br>";
echo "<br>";
echo "<br>";


?>

<?php
function famname($firstname) {
    echo "$firstname Oba.<br>";
}

famname("Koki");
famname("Japhet");
famname("Abegail");
famname("Bernadine");
famname("Virgie");
?>

<?php
function famname1($firstname, $year) {
    echo "$firstname Oba.Born in $year. <br>";
}

famname1("Koki", "1989");
famname1("Japhet", "1993");
famname1("Abegail", "1991");
famname1("Bernadine", "1987");
famname1("Virgie", "1965");

 echo"<br>";
 echo"<br>";

?>

<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 9 = " . sum(5, 9) . "<br>";
echo "9 + 13 = " . sum(9, 13) . "<br>";
echo "4 + 4 = " . sum(4, 4);

echo "<br>"
?>


<?php
$x = 10;

function myCheck() {
    echo "Variable x inside function is: $x";
} 
myCheck();
echo "Variable x outside function is: $x";
 
echo"<br>"

?>



<?php
$x = 10;

function myCheck1() {
    global $x;
    echo "Variable x inside function is: $x";
} 
myCheck1();
echo "Variable x outside function is: $x";

echo "<br>";
echo "<br>";

?>

<?php
$cars = array("Toyota", "Nissan", "Honda");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo"<br>";
?>

<?php
$cars = array("Toyota", "Nissan", "Honda");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo"<br>";
?>

<?php
$cars = array("Toyota", "Nissan", "Honda");
sort($cars);
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

<?php
$number = array("10", "17", "22","2", "7", "1","11",);
sort($number);
$arrlength = count($number);

for($x = 0; $x < $arrlength; $x++) {
    echo $number[$x];
    echo "<br>";
}
echo "<br>"
?>

<?php
$number = array("10", "17", "22","2", "7", "1","11",);
rsort($number);
$arrlength = count($number);

for($x = 0; $x < $arrlength; $x++) {
    echo $number[$x];
    echo "<br>";
}

?>



















































 












    

</body>
</html>