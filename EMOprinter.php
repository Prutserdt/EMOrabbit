<?php
//Printen van twee rijen van 15 EMOkonijnen

    function kleurSelect($string){
        // Print normale kleur of in rood
        // Gebruikt voor oren/poten/asterix
        global $ArrayA;
        global $ArrayB;
        for ($x = 0; $x <= (14); $x++) {
            if ($ArrayA[$x]===$ArrayB[$x]){
                echo '<span style="color: #E06C75 ;">' . $string.  '</span>';
            } else {
            echo $string;
            }
        }
    echo "*<br>";
    }

    function konijnSelecter($arraySelect){
        // Printen van het konijnen lichaam (rood/wit)
        // Function should be called ONLY by: konijnselecter($ArrayA) or
        //                                    konijnselecter($ArrayB)
        global $lichaam;
        global $ArrayA;
        global $ArrayB;
        for ($x = 0; $x <= (14); $x++) {
        $selection=$arraySelect[$x];
            if ($ArrayA[$x]===$ArrayB[$x]){
               echo "*&nbsp&nbsp",'<span style="color: #E06C75;">' . $lichaam[$selection].  '</span>',"&nbsp&nbsp";
            } else {
            echo "*&nbsp&nbsp",$lichaam[$selection],"&nbsp&nbsp";
            }
        }
    echo "*<br>";
    }

    function EMOrij($select){
        //Functies die gebruikt worden om een rij EMOkonijnen aan te maken
        global $oren;
        global $poten;
        kleurSelect("**********");                 // Sterren rij
        kleurSelect("*&nbsp&nbsp$oren&nbsp&nbsp"); // Oren rij
        KonijnSelecter($select);                   // lichaam rij
        kleurSelect("*&nbsp$poten&nbsp");          // Poten rij
        kleurSelect("**********");                 // Sterren rij
    }

    echo "<br>";        
    $aantalbunnies= count($lichaam); // Tellen van het aantal unieke konijnen
    EMOrij($ArrayA);                 // Eerste rij van EMOkonijnen printen
    EMOrij($ArrayB);                 // Tweede rij EMOkonijnen printen
?>
