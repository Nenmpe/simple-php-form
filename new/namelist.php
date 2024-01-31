<?php
$name=array("Manisha", "is", "an", "idiot");
foreach($name as $a){
    echo $a."<br>";
}


// Associative array 

function namelist(){
    $namel=array(1=>"Ram", 2=>"Sita", 3=>"Hari");
    return $namel;
}

$stdlist=namelist();
foreach($stdlist as $key=>$value){
    echo "Roll is ".$key." and name is ".$value."<br>";
}
?>