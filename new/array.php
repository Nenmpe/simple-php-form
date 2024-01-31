<?php
$student=array(array(1, "ram", "banepa"),array(2, "sita", "nala"),array(3, "hari", "bhaktapur"));
    for($i=0; $i<3; $i++){
        for($j=0;$j<3;$j++){
            echo $student[$i][$j]." ";
        }
        echo"<br>";
    }
    ?>
