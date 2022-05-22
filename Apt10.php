
<?php 
class Apt10Parent {
    function __construct($list) {

        $this->showMedianValue($list);
        $this->showLargestValue($list);
    }

    function showMedianValue($list) {
        $minValue = $maxValue = 0;
        $listCount = sizeof($list);

        $minValue = $list[0];
        for($i = 0; $i < $listCount; $i++) {
            for($j = 0; $j < $listCount; $j++) {
                if ($minValue > $list[$j]) {
                    $minValue = $list[$j];
                }
            }
            
        }
        echo "Median value; $minValue<br>";
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