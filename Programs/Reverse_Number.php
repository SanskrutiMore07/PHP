<?php

$num = 1234;
$rev =0;

echo "Number :1234";
echo "<br>";
while($num > 1){
    $rem = $num %10;
    $rev = ($rev *10)+$rem;

    $num =$num /10;

}
echo "Reverse Number is : ".$rev;
?>