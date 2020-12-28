<?php

    echo "hello how are you"."i am fine.";

    $number_one;
    $number_two;

    $number_one = 10;
    $number_two = 50.50;

    echo "<h1>$number_one</h1>";


    echo "<h1>";
    echo "$number_two";
    echo "</h1>";
    
    echo $number_one . $number_two;

    echo "<br>sum: ". ($number_one + $number_two);

    printf('<br>hi this is print');
    echo "<br>";
    printf('<br>hi this is print %d + %.2f = %.2f', $number_one,$number_two,$number_one+$number_two);

    print "this is form print";
    
    echo "<br>";

    $data_type = array("blue", "green", 10, 15.68 );
    echo "<br>";
    print_r($data_type);
    echo "<br>";
    var_dump($data_type);

    echo "<pre>";
        var_dump($data_type);
    echo "</pre>";

    $my_name = "Sulaiman Biswas";

    echo $my_name;
    
?>