<?php


$array = array(10, 20, 30, 40, 50, 60, 70);

		$searchElement = 30;
		$found = false; 


	for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $searchElement) {
        echo "Element " . $searchElement . " found at index " . $i . ".";
        $found = true;
        break; 
    }
}

if (!$found) {
    echo "Element " . $searchElement . " not found in the array.";
}
?>
