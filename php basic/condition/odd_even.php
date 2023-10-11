<?php
$number = [];

for($i=1; $i<=20; $i++){
    echo $number[$i] = $i;
}
foreach($number as $N){
    if($N %2 == 0){
        echo "number $N is even \n";
    }else{
    echo "$N is odd.\n";
}
}
?>

            
<?php
$destination = 0;
$number = [];

for($i= 0; $i < $destination; $i++){
    $number[$i]= $i + 1;
}

foreach($number as $n){
    $odd_count =0;
    $even_count =0;
    if($n % 2 == 0){
        $even_count+=$even_count;

    } else{
        $odd_count+=$odd_count;
    }

    echo "Total even number : $even_count";
    echo "Total even number : $_count";
    
}

?>







