

<!DOCTYPE html>
<html>
    <head>
    <title>  Welcome to the game   </title>
    <style type="text/css">
        .flex_img {
            display: flex;
            margin: 0 auto;
        }
        
        .img1{
            flex: 1;
            width: 20%;
            margin: 10px;
            height: auto;
        }
        body{
            background-color: black;
        }
        h1{
            color: white;
        }
    </style>
     </head>
    <body>
     <h1> Rock, Paper, Scrisor<h1> 
     <section class="flex_img">
     
     </section>
     <?php
     //random_img();
     //random_img();
     play();
     ?>
 </body>

<?php
    function random_img() {
        $random_img = rand(0,2);
        
        if($random_img == 0) {
            $img_name = 'paper';
        }
        else if($random_img == 1) {
            $img_name = 'rock';
        }
        else {
            $img_name = 'scissors';
        }
        echo "Player 1";
        echo " <img src='img/rps/$img_name.png' alt='$img_name' />";

    }
    
    function play(){
        for($i=0; $i<2; $i++){
        ${"random_img" . $i} = rand(0,2);
        random_img(${"random_img" . $i},$i);
}
        
        if($random_img1==$random_img2){
             echo "Tie Game";
            
        }
    }
    
    
    
?>