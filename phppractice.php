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
    echo "Your food is <other input>!";
    }




















 
 ?> 















    

</body>
</html>