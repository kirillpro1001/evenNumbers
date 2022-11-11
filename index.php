<!-- Найдите все четные числа и выведите их, разделяя пробелами. Порядок чисел должен быть таким же, как и на входе. -->
<?php

function evenNumbers ($num) { 
	foreach ($num as $value) {
	if ($value % 2 === 0) {
		$newArr[] = $value;
	}
}
return $newArr;
}

$listNumbers = [132,124,21,51,21];
$evenNumbers = evenNumbers($listNumbers);
echo "Четные числа: <br>";

foreach ($evenNumbers as $value) {
	echo "{$value}<br>";
}
?>