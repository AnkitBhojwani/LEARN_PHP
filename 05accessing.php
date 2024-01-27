<!DOCTYPE html>
<html lang="en">
<body>
    <pre>
    <?php 
   //01 accessing array item.
   $car = ['Maruti','BMW','Hundai'];
   echo $car[2]; 
   echo("<br>");
   //02 to access item from an accosiative array

   $Bike = ['Brand' => 'Honda','color' => 'black','model' => 'activa'];
 var_dump($Bike);
   echo("<br>");
   echo $Bike['color'];
   
   //03execuiting a function
   function Ankit(){
    echo "Hare Krishna";
   }
   $Wishing = array("Ram","Shyam","Ankit");
//    echo("<br>");
   echo $Wishing[2]();
   //04 executing a function with associative array;
   echo("<br>");
   function myarray(){
    echo "Hare Rama !";
   }
   $myarray2 = ["Hare Krishna","myarray"];
   echo $myarray2[1](); 
   echo("<br>");
   var_dump($myarray2);
   
//05loop through an index array
$scooty = ['activa','pleasure','iqube'];
foreach($scooty as $x) {
 echo "$x <br>";
}

    //06 Loop Through an Associative Array

    $a = ['ankit','mohan','Shyam'];
    foreach($a as $x){
        echo "$x <br>";
    }
    
    
    ?>
    </pre>
    
</body>
</html>