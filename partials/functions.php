<?php
function passGenerate($length, $chars)
{
    //Temp password var
    $password = "";
    //Cicle password length
    for ($i = 0; $i < $length; $i++) {
        $randNumb = rand(0, strlen($chars) - 1);
        $charToAdd = $chars[$randNumb];
        // var_dump($randNumb);
        // var_dump($charToAdd);
        $password .= $charToAdd;
    }
    // Return complete password
    // var_dump($password);
    return $password;
}
