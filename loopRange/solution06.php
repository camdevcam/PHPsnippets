<?php 

    $begin = $_POST['startpoint'];
    $end = $_POST['endpoint'];

    $current_start = $begin;

    $num1 = rand(1,360);
    $num2 = rand(1,360);

    while ($begin < $end && $begin >= 100000 && $begin <= 999998 && $end >= 100001 && $end <= 999999) { 

        for($i = $begin; $i <= $end; $i++) {
            echo '<span>Star SC ' . $i . ' mag ' . $num1 .', '. $num2;
        }

    }

    define('MIN_VALUE', '100000'); 
    define('MAX_VALUE', '999999'); 

    class Constants { 

      const MIN_VALUE = $begin; 
      const MAX_VALUE = $end;  

      public static function getMinValue() 
      { 
        return self::MIN_VALUE; 
      } 

      public static function getMaxValue() 
      { 
        return self::MAX_VALUE; 
      } 
    } 
?> 