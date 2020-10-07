<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function rekenen($getal1, $getal2, $getal3){
            $uitkomst = $getal1 + $getal2 + $getal3;
            echo "als je $getal1 $getal2 en $getal3 bij elkaar optelt, krijg je $uitkomst";
            return $uitkomst;
        }?>
     <?php rekenen(3,6,9);?><br>
       <?php rekenen(3,55,1);?><br>
      <?php rekenen(23,323,354);?><br>
    
</body>
</html>