<?php
    $N = $_GET["range"];
    $i=1;
    $next; $n1=0; $n2=1; $total = 1;
    echo $n1 . " " . $n2 . " ";
    for($i; $i<$N; $i++){
        $next= $n1+$n2;
        $total=$total+$next;
        echo $next . " ";
        $n1 = $n2;
        $n2 = $next;
        
    }
    echo "<br>The Sum of the seriese = " . $total;
    
?>

