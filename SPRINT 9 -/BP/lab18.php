<?php

$GLOBALS['url'] = "www.mijndomeinnaam.nl";

global $email;
$email = "webmaster@mijndomeinnaam.nl";

define("BIJDRAGE",0.10);
function doneren($bedrag)
{
 
    $melding = "GIRO 555";
    echo "<br>" . $melding;
    echo "<br>URL: " . $GLOBALS["url"];
    echo "<br>Bedrag: " . $bedrag;
    global $email;
    echo "<br>E-mail:" . $email;
    $bijdrage = $bedrag * BIJDRAGE;
    $donatie = $bedrag + $bijdrage;
    echo "<br>Inclusief bijdrage: $donatie";
    static $pot;
    $pot = $pot + $donatie;
    echo "<br><span style='background-color: yellow'>
    Totaal bedrag in pot $pot</span><br>";
}
function hoogste($donatie1, $donatie2, $donatie3) {
    static $hoogste;
    $hoogste = max($donatie1, $donatie2, $donatie3);
    echo "<br>Hoogste donatie tot nu toe is: $hoogste<br>";
}

doneren(100);
doneren(1000);
doneren(33333);

hoogste(110, 1100, 36666.3);