<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Belajar PHP</h1>

    <?php 
    print "<h3>Ini versi PHP di dalam html</h3>";

    //Belajar variable
    $nama = "Nabillah Aletha";
    $angka1 = 25;
    $angka2 = 29.25;

    define("PI", 22/7);

    print "nama saya $nama<br>";
    echo 'nama saya $nama';
    echo "<hr>";

    echo PI;
    echo "<br>";
    define("pi", 3.14);
    echo pi;

    ?>

</body>
</html>