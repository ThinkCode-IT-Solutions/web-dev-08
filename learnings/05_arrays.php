<?php

    echo "Arrays in PHP";
    /**
     * Arrays are the collection of same type of data
     * simple array (identified by index)
     * associative array (identified by key)
     * add an item to an array
     * remove an item to an array
     */
    $friends = ["Shahzad" , "Zaid" , "Muhtshim" , "Abdullah"];


    $friendName = [
        'name' => "Shahzad",
        'age' => 22,
        'isMarried' => true,
        'money' => null,
    ];

    $marks = [12,23,45,67];
    echo "<br>";
    array_push($friends,"Tahir");
    array_push($friends,"aali");
    array_pop($friends);
    echo array_sum($marks);
    echo array_unshift($friends,"Latif");
    echo array_shift($friends);

    $newArray =  array_keys($friendName);echo var_dump($newArray);
    echo var_dump($friends);
    echo "<br>";
    echo $friendName["isMarried"];
    // if(!$friendName['isMarried']){
    //     echo "shahzad is not married";
    // }else {
    //     echo "shahzad is  married";
    // }
















?>