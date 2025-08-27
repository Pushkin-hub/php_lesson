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
    <div class="container">
        <div class="row">
            <div class="col-6 offset-1 mt-3 p-3">
                <table class="table table-bordered">
                    <tbody>
                        <?php
                        $cellCounter = 0;
                        for ($i = 0; $i < 2025; $i++) {
                            $leap = date('L', strtotime("$i-01-01"));
                            if ($leap == '0')
                                continue;
                            if ($cellCounter % 20 == 0) {
                                echo '<tr>';
                            }
                            echo "<td>{$i}</td>";
                            $cellCounter++;
                            if ($cellCounter % 20 == 0) {
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-1 mt-3 p-3 border rounded shadow-sm">
                <?php
                function printFilledPyramid($rows)
                {
                    for ($j = 1; $j <= $rows; $j++) {
                        $spaces = str_repeat(" ", $rows - $j);
                        $stars = str_repeat("*", 2 * $j - 1);
                        echo $spaces . $stars . "<br>";
                    }
                }
                function printHollowPyramid($rows)
                {
                    for ($j = 1; $j <= $rows; $j++) {
                        $spaces = str_repeat(" ", $rows - $j);
                        $innerSpaces = str_repeat(" ", 2 * $j - 3);
                        if ($j > 2) {
                            echo $spaces . "*<br>";
                        } elseif ($j == $rows) {
                            echo str_repeat("*", $j - 2) . "<br>";
                        } else {
                            $innerSpaces = max(0, $j - 2);
                            echo $spaces . "*" . str_repeat(" ", $innerSpaces) . "*" . "<br>";
                        }
                    }
                }
                echo "<b>Заполненная пирамида:</b><br>";
                printFilledPyramid(15);
                echo "<br><br>";
                echo "<b>Пустая пирамида:</b><br>";
                printHollowPyramid(15);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-1 mt-3 p-3 border rounded shadow-sm">
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
            </div>
        </div>
    </div>
</body>

</html>