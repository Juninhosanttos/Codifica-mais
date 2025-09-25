<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $soma = $num1 + $num2;

        echo "<h3>A soma de $num1 + $num2 é: $soma</h3>";
    }
    ?>