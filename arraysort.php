<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(40, 61, 2, 22, 13);
$numbers2 = array(40, 61, 2, 22, 13);
sort($numbers);
rsort($numbers2);

$arrlength = count($numbers);
echo "Ascending:";
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
	echo $numbers[$x];
	echo "<br>";
    }
   
   
//$arrlength = count($numbers);
echo "Descending:";
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
	echo $numbers2[$x];
    echo "<br>";
	   
}
?>

</body>
</html>






