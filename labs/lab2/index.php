<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>


<?php
function displaySymbol($random_value){
    




    //$random_value = rand(0,3); //generates a random value from 1-4
   // echo $random_value . "<br>"; //dot is to concadanate with variable
    if($random_value==0){
        $symbol = "seven";
        
    }else if($random_value==1){
        $symbol = "cherry";
        
    }else if($random_value==2){
        $symbol = "orange";
    }else{
        $symbol = "lemon";
    }
 
    echo  "<img src='img/$symbol.png' alt='$symbol' title='$symbol'>";
}//display symbol function  
    $randomValue1= rand(0,3);// generates a random num from 0-3
    $randomValue2= rand(0,3);
    $randomValue3= rand(0,3);
    
    displaySymbol($randomValue1);//calling a function
    displaySymbol($randomValue2);
    displaySymbol($randomValue3);
    
    echo "<br>Random Value 1:" . $randomValue1. "<br >";
    echo "Random Value 2:" . $randomValue2. "<br >";
    echo "Random Value 3:" . $randomValue3. "<br >";
    
     if($randomValue1==$randomValue2 AND $randomValue2==$randomValue3){
    echo "Jackpot!";        
    }
    
?>

    
    </body>
</html>