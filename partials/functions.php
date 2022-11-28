<?php
function passGenerate($length, $chars)
{
    //Temp password var
    $password = "";
    //Cicle password length
    for ($i = 0; $i < $length; $i++) {
        $randType = rand(0, 2);
        $randNumb = rand(0, strlen($chars[$randType]) - 1);
        $charToAdd = $chars[$randType][$randNumb];
        var_dump($randNumb);
        var_dump($charToAdd);
        $password .= $charToAdd;
    }
    // Return complete password
    // var_dump($password);
    return $password;
}
