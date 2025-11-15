<?php

echo "Simple Calculator (with Functions)\n";

function getNumber(string $prompt): float {
    return (float)readline($prompt);
}

function getOperation(): string {
    return trim(readline("Enter operation (+, -, *, /): "));
}

function calculate(float $num1, float $num2, string $operation): float|string {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: Division by zero!";
            }
        default:
            return "Invalid operation!";
    }
}

while (true) { 

    $num1 = getNumber("Enter first number: ");
    $operation = getOperation();
    $num2 = getNumber("Enter second number: ");

    $result = calculate($num1, $num2, $operation);

    echo "Result: $result\n";

    echo "\n----------------------------------\n";
    $antwoord = readline("Wilt u nog een berekening maken? (ja/nee): ");

    if (trim(strtolower($antwoord)) !== 'ja') {
        break; 
    }
}

echo "\nBedankt voor het gebruiken van de rekenmachine. Tot ziens!\n";

?>
