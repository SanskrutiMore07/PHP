<?php
$N =5;
for($i = 1 ; $i <= $N ; $i++){
    for($j = 1 ; $j<=(2*$N)-1;$j++){
        if($j>=$N-($i-1)  && $j<=$N+($i-1)) {
            echo "*";
        } 
        else{
            echo "&nbsp;&nbsp";
        }
    }
    echo "<br/>";
}

?>