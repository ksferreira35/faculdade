<?php

$num = $_POST["numero"];

echo "<h1>Tabuada do $num</h1>";

for ($x = 0; $x <= 10; $x++) {
    echo $num . " * " . $x . " = " . ($num * $x) . "<br>";
}

?>