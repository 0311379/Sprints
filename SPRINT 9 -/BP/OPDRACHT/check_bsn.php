<!DOCTYPE html>
<head>
<title>qrFileONEZES</title>
</head>
<body>
<form method="post">
    <input type="text" maxlength="9"  name="bsn" pattern="\d*" >
    <br><br>
    <input type="submit" name="submit2" value="enter">

</form>
<?php

if (isset($_POST['submit2']))
{
    $bsn = $_POST['bsn'];
}
else
{
echo "niks";
}
function kleinmaker($bsn){
        $kleintje = $bsn;
        $returntje[0] = substr($kleintje,0,1);
        $returntje[1] = substr($kleintje,1,1);
        $returntje[2] = substr($kleintje,2,1);
        $returntje[3] = substr($kleintje,3,1);
        $returntje[4] = substr($kleintje,4,1);
        $returntje[5] = substr($kleintje,5,1);
        $returntje[6] = substr($kleintje,6,1);
        $returntje[7] = substr($kleintje,7,1);
        $returntje[8] = substr($kleintje,8,1);   
    elfproef($returntje); 
}
function elfproef($returntje)
{
    $nummer1 = $returntje[0] * 9;
    $nummer2 = $returntje[1] * 8;
    $nummer3 = $returntje[2] * 7; 
    $nummer4 = $returntje[3] * 6;
    $nummer5 = $returntje[4] * 5;
    $nummer6 = $returntje[5] * 4;
    $nummer7 = $returntje[6] * 3;
    $nummer8 = $returntje[7] * 2;
    $nummer9 = $returntje[8] * 1;

    $geldigheid = $nummer1 + $nummer2 + $nummer3 + $nummer4 + $nummer5 + $nummer6 + $nummer7 + $nummer8 - $nummer9;
    echo "<br>" . floor($geldigheid  / 11);
    if(floor($geldigheid / 11) == $geldigheid / 11)
        echo "<br>Het is geldig!";
    else
    echo"<br>Het is niet geldig!";    
}


echo "<Br>Uw BSN-Nummer is: " . $bsn;
kleinmaker($bsn);


?>
</body>
</html>