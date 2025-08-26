<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm" >
                <p>
                    Вывести первые 10 четных чисел
                </p>
                    <ul class="list-group">
                    <?php

                        $sum = 0;
                        for ($i = 0; $i < 10; $i++) {
                            $evenNumber = $i * 2;
                            echo '<li class="list-group-item">' .$evenNumber . '</li>';
                            $sum += $evenNumber;
                        }
                        echo 'Sun of elements: ' . $sum;
                        $average = $sum / 10;
                        echo '<br>Average value: ' . $average;
                    ?>
                </ul>
                <p>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="simpleNumber" class="form-label">Введите любое натуральное число</label>
                            <input class="form-control" id="simpleNumber" name="simpleNumber">
                        </div>
                        <?php
                        $flag = false;
                           if (isset($_POST['simpleNumber'])) {
                                $simpleNumber = (int)$_POST['simpleNumber'];
                                for ($i = 2; $i <= $simpleNumber / 2; $i++) {
                                    if ($simpleNumber % $i == 0) {
                                        $flag = true;
                                        break;
                                    }
                                }
                                echo $simpleNumber . ' - ' . ($flag ? 'is simple' : 'is not simple');
                            }
                        ?>
                    </form>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm" >
                <div style="position: relative; height: <?= 20 + 15 * 9 ?>px;" >
                    <?php
                    $ellipsSize = 20;
                        for ($i = 0; $i < 10; $i++) :
                        echo '<div style="'
                            . "width: {$ellipsSize}px;" 
                            . "height: {$ellipsSize}px;" 
                            . 'border-radius: 50%; border: solid 2px red; position: absolute;"></div>';
                        $ellipsSize += 15;
                    endfor;
                    ?>
                </div>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm" >
                <?php
                    $count_different = 0;
                    for ($i = 1000; $i <= 9999; $i++) {
                        $digits = str_split((string) $i);
                        if (count(array_unique($digits)) == 4) {
                            $count_different++;
                        }
                    }
                    $count_same = 0;
                    for ($i = 1000; $i <= 9999; $i++) {
                        $digits = str_split((string) $i);
                        if (count(array_unique($digits)) == 1) {
                            $count_same++;
                        }
                    }
                    echo "Количество 4-значных чисел с разными цифрами: " . $count_different . "\n";
                    echo "Количество 4-значных чисел с одинаковыми цифрами: " . $count_same . "\n";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
