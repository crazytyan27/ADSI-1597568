<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <body>
        <h2>cristian rengifo's calculator</h2>
        <form action="calc.php" method="get">
            <input class="number1" type="number" name="number1">
            <br>
            <br>
            <select class="color" name="operation">
                <option value="">Select an operation</option>
                <option value="1">Sum</option>
                <option value="2">Subtract</option>
                <option value="3">Multiply</option>
                <option value="4">Divide</option>
                <option value="5">Module of the division</option>
                <option value="6">Logarithm</option>
                <option value="7">x²</option>
                <option value="8">x^y</option>
                <option value="9">Divide between zero</option>
                <option value="10">²&radic;x</option>
                <option value="11">y&radic;x</option>

            </select>
            <br>
            <br>
            <input class="number2" type="number" name="number2">
            <br>
            <br>
            <button class="btn" type="submit">Operate</button>
        </form>
        <p>
            <?php if (isset($message) === true): ?>
                <?php echo $message ?>
            <?php endif ?>
        </p>
    </body>
</html>
