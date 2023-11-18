<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <form action="calculator.php" method="post">
            <input type="text" name="num1" placeholder="Enter first number" required>
            <select name="operation">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="text" name="num2" placeholder="Enter second number" required>
            <button type="submit">Calculate</button>
        </form>

        <div class="result">
            <?php include 'calculator.php'; ?>
        </div>
    </div>
</body>
</html>