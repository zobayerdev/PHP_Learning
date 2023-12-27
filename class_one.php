<html>

<body>

    <?php

    echo "<h1>Zobayer Hasan Nayem</h1>";
    $a = 10;
    $b = 25;

    //operation
    echo $c = $a + $b;

    echo "this inputed number:- $a";
    var_dump($a);

    // variable define
    // start with "$" sign
    $name = "Nayem";
    var_dump($name);

    //camel case variable declear
    //first letter er pore second letter asle second letter er first character hobe boro hater.
    $smallLetter = "Zobayer";

    //super global variable
    //$_POST $_GET $_PUT $_DELETE

    // phone number decelar as string
    $number = "01777614837";
    echo $number;
    var_dump($number);

    //concat
    $name   = "Zobayer Hasan Nayem";
    $add    = "Tongi";
    $occ    = "Business";

    echo "Personally know about Mr." . $name . ", and he lives " . $add . ", and also he work" . $occ;

    // condintion rules
    $n = 50;

    if ($n % 2 == 0) {
        echo "fuck you";
    } else {
        echo "not fuck you";
    }

    $username = "admin@gmail.com";
    $pass = 12345;

    if ($username == "admin@gmail.com") {
        echo "Welcome Admin";
        if ($pass == 12345) {
            echo "pass word matched";
        } else {
            echo "pass word dosen't matched";
        }
    } else {
        echo "welcome user";
    }

    ?>

</body>

</html>