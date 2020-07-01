<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"> 
        <input type="submit" name="dobbelen" value="dobbelen"/>
        <?php 
            $dobbel = array(rand(1,6),rand(1,6),rand(1,6),rand(1,6),rand(1,6));
            function dobbelen($dobbel){
                echo "<br>Eerste is: " . ($dobbel[0]) . " Gegooid";
                echo "<br>Tweede is: " . ($dobbel[1]) . " Gegooid";
                echo "<br>Derde is: " .  ($dobbel[2]) . " Gegooid";
                echo "<br>Vierde is: " . ($dobbel[3]) . " Gegooid";
                echo "<br>Vijfde is: " . ($dobbel[4]) . " Gegooid";
            }
            
            if(isset($_POST['dobbelen'])) {
                $aantalworpen =+ 1; 
                dobbelen($dobbel);
            }
            echo "<br>Aantal worpen: " . $aantalworpen;
            echo "<br>";

            print_r (array_count_values($dobbel));
        ?> 
    </form> 
    

</body>
</html>

