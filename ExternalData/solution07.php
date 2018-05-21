<?php

if (!empty($_POST)){
    
    $starID = $_POST['starID'];
    $MAG = $_POST['MAG'];

    $pageBody = file_get_contents('./solution07.txt');
    
    // Random
    $newMessage = str_replace("$starID", "$MAG", $pageBody);
    
    // Hypothetical application? Starting with letter s, replace with B
    $replaceMsg = preg_replace(/s[^\s]*/, $starID, $pageBody);
    $updatedMessage = preg_replace(/b[^\s]*/, $MAG, $replaceMsg);

}
    
?>