<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>
    <form method="post">
        <label for="first_number">Pierwsza liczba:</label>
        <input type="number" name="first_number" required>
        <br>
        <label for="second_number">Druga liczba:</label>
        <input type="number" name="second_number" required>
        <br>
        <label for="operation">Wybierz działanie:</label>
        <select name="operation">
            <option value="add">Dodawanie</option>
            <option value="subtract">Odejmowanie</option>
            <option value="multiply">Mnożenie</option>
            <option value="divide">Dzielenie</option>
            <option value="mod">Modulo</option>
        </select>
        <br>
        <button type="submit">Wykonaj działanie</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_number = $_POST['first_number'];
        $second_number = $_POST['second_number'];
        $operation = $_POST['operation'];
        $result = 0;
        
        switch ($operation) {
            case 'add':
                $result = $first_number + $second_number;
                break;
            case 'subtract':
                $result = $first_number - $second_number;
                break;
            case 'multiply':
                $result = $first_number * $second_number;
                break;
            case 'divide':
                $result = $second_number != 0 ? $first_number / $second_number : 'Błąd: dzielenie przez zero';
                break;
            case 'mod':
                $result = $second_number != 0 ? $first_number % $second_number : 'Błąd: dzielenie przez zero';
                break;
        }
        echo "<h2>Wynik: $result</h2>";
    }
    ?>
</body>
</html>
