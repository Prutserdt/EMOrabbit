<?php
// Bereken de scores van de huidige run, en haal scores uit het textfile.

    function maxScore(){
        $fs = fopen("data_log.txt", 'r') or die("Failed to create file"); // r: read only
        global $ft;
        global $maxScore;
        $tempScore = 0;
        $temp=0;
        global $ScoreNr;
        while (! feof ($fs)){
            global $temp;
            $tempf=fgets($fs);      // temp: de waarde van huidige regel
            $temp= (int) $tempf;    // getal is een integer
            if ($temp>$maxScore){   // Als ScoreNr gevonden wordt dan score tellen
                global $maxScore;
                global $temp;
                $maxScore= $temp;
            }
            global $temp;
            global $ScoreNr;
        }
    }


    $score=0;      // Beginnen met het zoeken van Score 0 in textfile
    global $score;
   // Berekend de score van de huidige twee runs.
    global $ArrayA;
    global $ArrayB;
    for ($x = 0; $x <= (14); $x++) {
        if ($ArrayA[$x]===$ArrayB[$x]){
            $score++;
        }
    }


    maxScore();
    // Printen van de score statistieken op de webpagina
    echo "<br><br>Score: &nbsp&nbsp&nbsp&nbsp&nbsp", $score;
    echo "<br>High score: ", $maxScore;
    echo '<br><br><span style="color: #E06C75;">' . "Hoe vaak komen de scores voor?".'</span><br>';

    $ScoreNr=0;      // Beginnen met het zoeken van Score 0 in textfile
    global $ScoreNr;

    do{
        $fs = fopen("data_log.txt", 'r') or die("Failed to create file"); // r: read only
        global $ft;
        global $tempScore;
        $tempScore = 0;
        $temp=0;
        global $ScoreNr;
        while (! feof ($fs)){
            global $temp;
            $tempf=fgets($fs);      // temp: de waarde van huidige regel
            $temp= (int) $tempf;    // getal is een integer
            if ($temp===$ScoreNr){  // Als ScoreNr gevonden wordt dan score tellen
                global $ScoreNr;
                global $temp;
                $tempScore= $tempScore + 1;
            }
            global $temp;
            global $ScoreNr;
        }
        echo "Score ", $ScoreNr, " komt ", $tempScore, " keer voor.<br>";
        fclose($fs);
        $ScoreNr++;
    } while ($ScoreNr <= $maxScore);
?>
