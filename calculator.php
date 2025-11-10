<?php
// Simple Calculator (with Functions)
echo "Simple Calculator (with Functions)\n";

/**
 * Toont de prompt en retourneert de invoer als float.
 */
function getNumber(string $prompt): float {
    return (float)readline($prompt);
}

/**
 * Vraagt de gebruiker om een operatie en retourneert deze.
 */
function getOperation(): string {
    // trim() verwijdert spaties voor/na de invoer.
    return trim(readline("Enter operation (+, -, *, /): "));
}

/**
 * Voert de berekening uit op basis van de invoer.
 * Retourneert het resultaat (getal) of een foutmelding (string).
 */
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

// --- Hoofdprogramma ---

$num1 = getNumber("Enter first number: ");
$operation = getOperation();
$num2 = getNumber("Enter second number: ");

$result = calculate($num1, $num2, $operation);

echo "Result: $result\n"; 