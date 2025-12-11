<?php
echo "For Loop Output:<br>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
    if ($i == 5) {
        break;
    }
}
echo "<br>";

echo "While Loop Output (Even Numbers):<br>";
$count = 0;
$num = 1;

while ($num <= 20) {
    if ($num % 2 == 0) {
        echo $num . " ";
        $count++;

        if ($count == 5) {
            break;
        }
    }
    $num++;
}

echo "<br>";

$fruits = [
    "apple" => "red",
    "banana" => "yellow",
];
echo "Foreach Loop Output:<br>";
foreach ($fruits as $fruit => $color) {
    echo ($fruit) . " --> " . $color . "<br>";
}
?>
