<?php 

foreach($_SERVER as $x =>$y){ 
 
    echo  $x .'_';
 
    echo "<br>";

    if(!is_array($y)){
        echo  $y;
    }
    echo "<br>";
}
$_ENV = getenv();
foreach($_ENV as $a =>$b){ 
 
    echo  $a;
 
    echo "<br>";

        echo  $b;
    
    echo "<br>";
}

?>
