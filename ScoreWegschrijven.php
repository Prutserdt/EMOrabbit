<?php
    global $score;
    $fh = fopen("data_log.txt", 'a') or die("Failed to create file"); // a voor append to file
    fwrite($fh, $score );
    fwrite($fh, "\n");
    fclose($fh);
//  echo "<br><br>De score is weggeschreven in bestand 'data_log.txt'.";
?>
