<?php
function bubblesort($array){
	$count = sizeof($array)-1;
	for($i = 0; $i < sizeof($array); $i++){
		for($j = 0; $j < $count; $j++){
			if($array[$j]>$array[$j+1]){
				$tmp = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $tmp;
			}
		}
		$count = $count-1;
	}
	return $array;
}

echo "array ordinato: ";
print_r(bubblesort(array(3,7,1,2,9)));
?>