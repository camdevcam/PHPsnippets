<?php
        $title = "Sensational Constellation Star Catalog"; 
        $starID = 'SC123456';
        $magnitude = 2;

        class Specs
        {
            const EYE = '3';
            const BINOC = '9';
            const TOO_FAINT = '<span style="color:black">You need a telescope to see this star<span>';
            const MID_BRIGHT = '<span style="color:red">You will be able to see this star with binoculars</span>';
            const VERY_BRIGHT = '<span style="color:red">You should be able to see this star anywhere.</span>';
            const STARS_ZERO = '5';
            const STAR_INCR = '10';

            static function getConstants() {
                $oClass = new ReflectionClass(__CLASS__);
                return $oClass->getConstants();
            }

        } 
        $message = TOO_FAINT;
        $consts = Specs::getConstants();

        foreach ($consts as $constname => $constvalue) {
            if($constvalue=="2") {
               echo $constname;
            }
//            echo $constname." : ".$constvalue."\n";
            
            if ($magnitude <= 3) {
              $message = Specs::VERY_BRIGHT;
            }
            else if ($magnitude <= 9) {
              $message = Specs::MID_BRIGHT;
            }
            $nrBrighter = STARS_ZERO * pow(STAR_INCR, $magnitude);                
        }
?>
<html>
  <head>
    <?php echo "<title>$title</title>";?>
    <style>
      body {font-family:Arial;font-size:16pt}
      h1 {text-align:center;color:blue}
      h5 {text-align:center;color:blue}         
    </style>
  </head>
  <body>
    <?php echo "<h1>$title</h1>";?>
    <h5><?php echo date("F j, Y");?></h5>
    <center>
      Star Catalog Results.
      <p>Star ID: <?php echo $starID?></p>
      <p>Matching magnitude: <?php echo $constname?></p>    
      <p>Star magnitude: <?php echo $magnitude?></p>
      <p>Star visibility: <?php echo $message?></p>
      <p>Stars brighter than <?php echo $starID?>: <?php echo $nrBrighter?></p><p></p>
      <p><a href="#">Return to Home Page</a></p>
    </center>
  </body>
</html>