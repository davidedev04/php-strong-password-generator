<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input type="number" name="pws_leng">
        <input type="submit" value="GENERARE">
    </form>

    <?php

    $pws_leng = $_GET["pws_leng"] ?? -1;
    echo "lenght: " . $pws_leng;
    echo "<br><br>";

    $charSet = "";
    for ($x = ord("a"); $x <= ord("z"); $x++) {
        $charSet .= chr($x);
    }
    for ($x = ord("A"); $x <= ord("Z"); $x++) {
        $charSet .= chr($x);
    }
    for ($x = ord("0"); $x <= ord("9"); $x++) {
        $charSet .= chr($x);
    }
    for ($x = ord("!"); $x <= ord("/"); $x++) {
        $charSet .= chr($x);
    }

    $pws = "";
    for ($x = 0; $x < $pws_leng; $x++) {

        $randomChar = rand(0, strlen($charSet) - 1);
        $randChar = $charSet[$randomChar];

        $pws .= $randChar;

    }

    ?>

    <h2 style="color: blue;">
        La tua password è:
        <?php echo $pws ?>
    </h2>


</body>

</html>