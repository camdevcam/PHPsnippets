<?php
echo '<script language="javascript">';
echo 'alert("This is a functional PHP page, if your stuck here its an error.")';
echo '</script>';

function getUserIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;  
}
function CompareIP() { 
    if (strpos($ipaddress, '127.0' || '192.168') !== false) {
        echo 'true';
        header("Location: local.php");   
    }
    else { 
        echo 'false';    
        header("Location: faraway.php");                
    }
}  
function MessageIT() { 
    $host = $_SERVER['REQUEST_URI'];
    
    if($host == 'http://www.website.com/local.php') {
        echo $this->__('Hi User! ..the application is complete, the page will a search of the catalog database. Thank you!');
    }
    if($host == 'http://www.website.com/faraway.php') {
        echo $this->__('..A message informing the visitor that when the application is complete, the page will calculate the adjustments which must be made as a result of the visitors latitude.');
    }  
}

getUserIP();
CompareIP();
MessageIT(); 
   
?>