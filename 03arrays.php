<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$car = array('Brand' => 'Hundai','Model' => 'Verna','Year' => 2020);
echo $car['Model'];
echo '<br>';
$car1 = array('Brand' => 'Maruti','Model' => 800,'Year' => 2040);
var_dump ($car1);
$car1['Year'] = 2020;
var_dump($car1);

//using foreach loop
$car2 = array('Brand' => 'BmW','Model' => 'X5','Year' => 2021);
foreach($car2 as $x=> $y){
    echo "$x : $y <br>";
}
 echo "<hr>";
$machine = array("Brand" => "Honda","Model" => "City","Year" => 1999);
echo $machine["Model"];
echo "<br>";

$machine["Model"] = "Bolero";
echo $machine["Model"];
echo "<br>";
var_dump ($machine);
echo "<br>";

//using foreach loop;
foreach($machine as $x => $y){
echo "$x : $y <br>" ;
}
?>



</pre>
</body>
</html>