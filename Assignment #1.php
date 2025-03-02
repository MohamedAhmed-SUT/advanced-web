<?php
// Name: Mohamed Ahmed Mohamed,
// ID: 230104844

# Assignment 1

# exercise 1

$x=10;
$y=7;

echo "$x + $y =".($x+$y)."<br>";
echo "$x - $y =".($x-$y)."<br>";
echo "$x * $y =".($x*$y)."<br>";
echo "$x / $y =".($x/$y)."<br>";
echo "$x % $y =".($x%$y)."<br>";

echo "<br>";
echo "<hr>";

# exercise 2

if(date('F',time())==="August"){
    echo "It's August, so it's really hot.";
}
else{
    echo "Not August, so at least not in the peak of the heat.";
}
echo "<br>";
echo "<hr>";

# exercise 3

for($i=1;$i<=12;$i++){
    echo"$i * $i =".($i*$i)."<br>";
}

echo "<br>";
echo "<hr>";
?>

<html>
    <head>
        <title>exercise 4</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
            }
            td {
                border: 1px solid blue;
                text-align: center;
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <h2>Multiplication Table</h2>
        <table>
            <?php
            for ($i = 1; $i <= 7; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 7; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>