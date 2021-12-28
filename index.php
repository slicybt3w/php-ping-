<?php
    $elements = [];


    for ($i = 0; $i < 10000; $i++) {
            $elements[] = (string) rand(0, 0);
    }

    $numberOfElements = count($elements);
    $numberOfElements2 = $numberOfElements;
    
    // for test
    $timeStart = microtime(true);
    
    for ($i = 0; $i < $numberOfElements; $i++) { }

    $timeEnd = microtime(true);
    $for_time = $timeEnd - $timeStart;

    // foreach test
    $timeStart = microtime(true);

    foreach ($elements as $element) { }

    $timeEnd = microtime(true);
    $foreach_time = $timeEnd - $timeStart;

    // while test
    $timeStart = microtime(true);

    while ($numberOfElements-- > 0) { }

    $timeEnd = microtime(true);
    $whileTime = $timeEnd - $timeStart;
    
    // do-while test
    $timeStart = microtime(true);

    do { }
    while ($numberOfElements2-- > 0);

    $timeEnd = microtime(true);
    $d0WhileTime = $timeEnd - $timeStart;
    
    echo "For took: " . number_format($for_time * 1000, 3) . "ms <br>";
    echo "Foreach took: " . number_format($foreach_time * 1000, 3) . "ms <br>";
    echo "While took: " . number_format($whileTime * 1000, 3) . "ms <br>";
    echo "Do-while took: " . number_format($d0WhileTime * 1000, 3) . "ms <br>";
