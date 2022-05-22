
<?php 
class Apt10Parent {
    function __construct($list) {

        $this->showMedianValue($list);
        $this->showLargestValue($list);
    }

    function showMedianValue($list) {
        $size = count($list)-1;
        for ($i=0; $i<$size; $i++) {
            for ($j=0; $j<$size-$i; $j++) {
                $k = $j+1;
                if ($list[$k] < $list[$j]) {
                    list($list[$j], $list[$k]) = array($list[$k], $list[$j]);
                }
            }
        }
        $listCount = count($list);
        $middleVal = floor(($listCount - 1) / 2);
        if ($listCount % 2){
            echo "Median value: ".$list[$middleVal]."<br>";
        }
        else {
            $lowMid = $list[$middleVal];
            $highMid = $list[$middleVal + 1];
            echo "Median value: ".(($lowMid + $highMid) / 2)."<br>";;
        }
    }

    function showLargestValue($list) {
        $maxValue = $maxValue = 0;
        $listCount = sizeof($list);

        $maxValue = $list[0];
        for($i = 0; $i < $listCount; $i++) {
            for($j = 0; $j < $listCount; $j++) {
                if ($maxValue < $list[$j]) {
                    $maxValue = $list[$j];
                }
            }
            
        }
        echo "Largest value; $maxValue";
    }
}

class Apt10 extends Apt10Parent {
}
?>