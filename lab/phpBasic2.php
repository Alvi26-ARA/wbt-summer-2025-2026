<?php
$principle = 10000;
$rate = 5;
$time = 2;

$simpleInterest =($principle*$rate*$time)/100;

echo"1<br>Simple Interest = $simpleInterest<br><br>";

?>

<?php

$num = 17;
$isPrime = true;

if ($num <= 1) {
        $isPrime = false;
    }
    else
        {
        for($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) 
            {
            $isPrime = false;
            break;
            }
        }
    }
     if ($isPrime) {
        echo "2<br>$num  number is a prime number <br><br>";
    } else {
        echo  "2<br>$num number is not a prime number <br><br>";
    }
    ?>

    
    

<?php
$num = 7;
$factorial = 1;

    for ($i = 1; $i <= $num; $i++) {
        $factorial = $factorial * $i;
    }

    echo"3<br>Factorial = $factorial<br><br>";
    ?>
<?php
$num = array(10,20,30,40,50);

$sum =0;

for ($i=0; $i < count($num) ;$i++)
    {
        $sum = $sum + $num[$i];
    }

    $avg = $sum / count($num);

    echo "4<br>Sum= $sum<br>";
    echo "average = $avg<br><br>";
    ?>

  <?php
  
  for ($i = 1; $i <= 4; $i++)
    {
        for ($j = 1; $j <= $i; $j++)
            {
            echo $i;
            }
            
            echo "<br>";

    }
?>