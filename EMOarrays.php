<?php
//Aanmaken van twee arrays met willekeurige nummers met die gebruikt worden voor de twee rijen met EMOkonijnen.

    $aantalbunnies= count($lichaam)-1;
    // Aanmaken van willekeurige array A. Gebaseerd op het aantal aangemaakte bunnies ($lichaam)
    for ($x = 0; $x <= (14); $x++) {
        $ArrayA[$x]=rand(0,$aantalbunnies-1); //ArrayA wordt gebruikt voor de bovenste rij
    }

    // Aanmaken van willekeurige array B. Gebaseerd op het aantal aangemaakte bunnies ($lichaam)
    for ($x = 0; $x <= (14); $x++) {
        $ArrayB[$x]=rand(0,$aantalbunnies-1); //ArrayB wordt gebruikt voor de onderste rij
    }
?>
