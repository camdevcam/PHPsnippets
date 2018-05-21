<?php

if(isset($_POST['submit']){ 

    $con = mysqli_connect('localhost','[retracted]','[retracted]');

    if(!$con){
        echo 'Not connected to server!';
    }

    if(!mysqli_select_db($con,'tutorial')) {
        echo 'Database not selected!';
    }

    // via table 1
    $starID = $_POST['starID'];
    $magnitude = $_POST['mag'];

    $sql = "INSERT INTO table (starID,mag) VALUES ('$starID','$mag')";

    // via table 2
    $commonNamesID = $_POST['commonNamesID'];
    $otherNames = $_POST['otherNames'];

    $sql = "INSERT INTO table (commonNamesID,otherNames) VALUES ('$commonNamesID','$otherNames')";

    if(!mysqli_query($con,$sql)){
        echo 'Data not inserted';
    } else {
        echo 'Data inserted';
    }

    //Check whether $_POST-value is empty, form 1

    if("" == trim($_POST['starID'])){
       echo 'This value is empty for form 1';
    }      
    else if("" == trim($_POST['mag'])){
       echo 'This value is empty for form 1';    
    }      
    //Check whether $_POST-value is empty, form 2

    if("" == trim($_POST['commonNamesID'])){
       echo 'This value is empty for form 2';        
    }      
    else if("" == trim($_POST['otherNames'])){
       echo 'This value is empty for form 2';        
    }   
}
?>