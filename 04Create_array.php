<!DOCTYPE html>
<html lang="en">
<body>
    <pre>
    <?php 
    //Create array
    //01
    $car = array('Hundai','Maruti','BMW');
    var_dump ($car);
    echo "<br>";
    
    //shorter syntax
    //02
    $family = ['A','B','C'];
    echo ($family[0]);
    echo "<br><br>";
    var_dump($family);
    echo "<br><br>";

    //03  array keys / array mixing

    $Relation = [
        $Relation    [0] = 'Papa',
        $Relation   [1] = 'Mam',
        $Relation['Son'] = 'Ankit'
    ];
    var_dump($Relation);
    echo "<br>";
    echo ($Relation[2]);

    
    
    
    
    
    
    
    
    
    ?>

    </pre>
    
</body>
</html>