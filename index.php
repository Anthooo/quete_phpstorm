<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<p>
<?php
/**
 * Created by PhpStorm.
 * User: anthonymenet
 * Date: 18/09/2016
 * Time: 10:13
 */


$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$somme = 0;

foreach ($students as $key => $age)
{
    echo $key." = ".$age."<br>";
    $somme = $somme + $age;
}

$moyenne = $somme / count($students);

echo "<br> La moyenne des ages est de ".$moyenne;

?>
</p>

</body>
</html>
