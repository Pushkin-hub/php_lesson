<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <?php
    function findLargestDivisor($number)
    {
        if (!is_numeric($number)) {
            return "Введено некорректное число.";
        }
        $number = (int) $number;
        if ($number < 100000 || $number % 2 == 0) {
            return "Число должно быть нечетным и содержать минимум 5 цифр.";
        }
        $largestDivisor = 1;
        for ($i = 1; $i <= $number / 2; $i++) {
            if ($number % $i == 0) {
                $largestDivisor = $i;
            }
        }
        return $largestDivisor;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = $_POST["number"];
        $result = findLargestDivisor($inputNumber);
        echo "<p>Наибольший делитель числа $inputNumber: <b>$result</b></p>";
    } else {
        ?>
        <form method="post">
            Введите нечетное число (минимум 5 цифр): <input type="text" name="number"><br><br>
            <input type="submit" value="Найти делитель">
        </form>
        <?php
    }
    ?>
</body>

</html>