<?php
 function getRandomColor(){
  echo "rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).",".rand(0,255).");";   
 }           
          
   ?> 
<!DOCTYPE html>
<html>
<title>Random Color</title>
<h1>WELCOME</h1><br>
<h2>RANDOM COLOR</h2>

<style>
    h1{
        <?php
            $red = rand(0,255);
            $green = rand(0,255);
            $blue = rand(0,255);
            $alpha= (rand(0,1)/10);
            echo "background-color: rgba($red,".rand(0,255).",".rand(0,255).",$alpha);";
            echo "color: rgba($red,".rand(0,255).",".rand(0,255).",$alpha);";
   ?> 
    }
       h2{
       background-color: <?= getRandomColor() ?>
       color: <?= getRandomColor() ?>
       
    }
         body{
         background-color: <?= getRandomColor() ?>
       color: <?= getRandomColor() ?> 
    }
</style>>
<body>
    <form>
        
        <input type="submit" value="reloadPage"/>
    </form>
</body>
</html>