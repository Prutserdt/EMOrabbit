<meta http-equiv="refresh" content="0.5">
<?php
    //NOTE: de Arrays hebben soms dubbele entries, anders bewegen de oren teveel
    $oren= array("&nbsp&nbsp()_(}&nbsp&nbsp",
                 "&nbsp&nbsp{)_[)&nbsp&nbsp",
                 "&nbsp&nbsp(}_()&nbsp&nbsp",
                 "&nbsp&nbsp{)_()&nbsp&nbsp",
                 "&nbsp&nbsp()_()&nbsp&nbsp");

    //Af en toe een stapje zetten, het is namelijk een loop konijn
    $poten= array('&nbsp(") (.)&nbsp',
                  '&nbsp(.) (")&nbsp');

    //Dubbele entries om niet te vaak te knipperen.
    $lichaam= array("&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(o.<)&nbsp&nbsp",
                    "&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(o.o)&nbsp&nbsp",
                    "&nbsp&nbsp(>.o)&nbsp&nbsp");
    $aantalbunnies= count($lichaam)-1;
    echo "<br>", $oren[rand(0,4)];
    echo "<br>", $lichaam[rand(0,$aantalbunnies)];
    echo "<br>", $poten[rand(0,1)];
    echo "<br>";
?>
