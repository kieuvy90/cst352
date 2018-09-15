<?php
function getLuckyNumber(){


        $lucky= rand (1,10);

    if ($lucky == 4){
        $lucky = 11;
    }
    return $lucky;

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> My Lucky Number </title>
    </head>
    <body>

<h1>
    MY LUCKY NUMBER IS:
<?php
    $lucky = getLuckyNumber();
    echo $lucky *2;
?>
</h1>