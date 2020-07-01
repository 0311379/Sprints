<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kaarten</title>
</head>
<body>
<?php

$nummer = array('1','2','3','4','5','6','7','8','9','10','boer','vrouw','heer');
$type = array('Klaveren', 'Schoppen','Ruiten', 'Harten', );


$trandom = random_int(0,3);
$nrandom = randomint(0,12);

$filepath = "kaarten" . "\" . $type[$trandom] . "" . $nummer[$nrandom] . ".svg";

    ?>
    <img src="<?php echo $filepath; ?>" alt="">

</body>
</html>