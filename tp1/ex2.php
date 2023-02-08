<?php
    $array = array(
        "samir" =>array("prenom"=>"chemkhi","ville"=>"tunis","age"=>"23"),
    );

    foreach ($array as $key => $value) {
        echo($key);
        foreach($value as $key1 => $value1)
        {        echo "{$key1} => {$value1} ";
    }
    }
?>