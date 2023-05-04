
    <?php
        echo "Triangle Upside Left :<br><br>";
        triUpleft(5, "*");
        echo "<br>";
        echo "Triangle Downside Left :<br><br>";
        triDwleft(5, "*");
        echo "<br>";
        echo "Triangle Upside Right :<br>";
        triUpright(5, "*");
        echo "<br>";
        echo "Triangle Downside Right :<br><br>";
        triDwright(5, "*");
        echo "<br>";
        echo "Choose Triangle Function :<br><br>";
        allInone(3, 7, "$");

        function allInone($pattern, $row, $symbol){
            
            switch($pattern){
            case 1:
                triUpleft($row, $symbol);
                break;
            case 2:
                triDwleft($row, $symbol);
                break;
            case 3:
                triUpright($row, $symbol);
                break;
            case 4:
                triDwright($row, $symbol);
                break;
            default:
                echo "The Function does not work properly, please input pattern, row & symbol";
            
            }
        }

            function triUpleft($row, $symbol)
            {
                for ($i=1; $i<=$row; $i++) {
                     for ($j=5; $j>=$i; $j--) {
                          echo " ";
                      }for ($k=1; $k<=$i; $k++) {
                           echo " $symbol";
                       }echo "<br>";
                }
             }
            
            function triDwleft($row, $symbol)
            {
                for ($i=1; $i<=$row; $i++) {
                    for ($j=$row; $j>=$i; $j--) {
                        echo " $symbol";
                    }for ($k=1; $k<=$i; $k++) {
                        echo " ";
                    }echo "<br>";
                }
            }

            function triUpright($row, $symbol)
            {
                for($i = 0; $i <= $row; $i++) {
                    for($j = 1; $j <= $row - $i; $j++) {
                        echo " &nbsp&nbsp";
                    }for($j = 1; $j <= $i; $j++) {
                        echo " $symbol";
                    }echo "<br>";
                }
            }

            function triDwright($row, $symbol)
            {
                for ($i = $row; $i > 0; $i--)
                {
                    for($k = $i; $k < $row; $k++ ){
                        echo " &nbsp&nbsp";
                    }for($j = 0; $j < $i; $j++ ){
                        echo " $symbol";
                    }echo "<br>";
                }
            }
            
        
    ?>
