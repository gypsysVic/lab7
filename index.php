<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7</title>
</head>
<body>
    <p>Date: <?php echo date('d.m.Y h:i');?></p>
    <h4>Variables</h4>
    <?php
    $string = "My name is";
    $secstring = "I`m ";
    $number = 21;
    $float = 2.2;
    $array = array(
'Mary',
'Ann',
'Johny'
    );
    $asarray = array(
        'name' => 'Victoria',
        'age'=> 21,
        'education' => array('school in 2016', 'university in 2020'),
        'married' => false
    );
    echo $string . ' ' . $array[2];
    echo '<br>';
    echo ((5 + 10) * 4)/2;
    echo '<br>';
    echo "Graduated:".' '.$asarray['education'][1];
    ?>
    <h4>Ifelse</h4>
    <?php
    $weather = "sun";
    if ($weather == "snow") {
        echo "Stay home<br>";
    } elseif ($weather == "sun") {
        echo "Picnic time<br>";
    } elseif ($weather == "cloudy") {
        echo "It`s ok<br>";
    }

    $age = 21; 
    if (age > 20) {
        echo "You can go<br>";
    } elseif (age <= 19 ) {
        echo "Stop<br>";
    }
     $name = "Ann";
     if (name != "Ann") {
         echo "You`re not Ann! <br>";
     } else {
         echo "Hello Ann! <br>";
     }

     if (age < 20 and $name != "Ann") {
         echo "Go away <br>";
     } else {
         echo "HI!";
     }

     $rating = 10;
     if ($rating >= 25 and $rating <=75) {
    
             echo "Good enought <br>";
     }
         else {
            echo "Not good enought <br>";
         }

    ?>
    <h4>Loops</h4>
    <?php
    $a = 1;
    for ($i = 0; $i < 4; $i++) {
    $a++;
    echo $a."<br>";
    }

while ($a > 2) {
    $a--;
    echo "Smth<br>";
}

foreach($array as $value) {
echo $value."<br>";
}
    ?>
     <h4>Functions</h4> 
     <?php
     function myfunk($a, $b) {
         if ($a > $b) {
             echo $a."<br>";
         } elseif ($b > $a) {
             echo $b."<br>";
         }
     }
     myfunk(32, 33);
     myfunk(105, 33);
     myfunk(14, 21);
     ?>
</body>
</html>