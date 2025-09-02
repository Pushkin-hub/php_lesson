<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/js/bootstrap.min.js">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>Сщздать массив из 10 элементов (чисел). Вывести:</p>
                <ul style="list-style-type: lower-alpha;">
                    <li>четные элементы;</li>
                    <li>максимальный и минимальный элемент;</li>
                    <li>отсортировать массив по возрастанию.</li>
                </ul>
                <p>
                    <?php

                    $array = [];
                    for ($i = 0; $i < 10; $i++) {
                        $array[] = rand(1, 100);
                    }

                    echo "<strong>Исходный массив:</strong> " . implode(', ', $array) . "<br>";

                    $even_elements = array_filter($array, function ($num) {
                        return $num % 2 === 0;
                    });
                    echo "<strong>Четные элементы:</strong> " . (empty($even_elements) ? 'Нет четных элементов' : implode(', ', $even_elements)) . "<br>";

                    $max = max($array);
                    $min = min($array);
                    echo "<strong>Максимальный элемент:</strong> $max<br>";
                    echo "<strong>Минимальный элемент:</strong> $min<br>";

                    sort($array);
                    echo "<strong>Отсортированный массив:</strong> " . implode(', ', $array);
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    создать 2 массива с числами по 10 элементов. Создать скрипт, который объединит
                    уникальные значения из двух массивов в один.
                </p>
                <p>
                    <?php
                    $array1 = [];
                    $array2 = [];

                    for ($i = 0; $i < 10; $i++) {
                        $array1[] = rand(1, 50);
                        $array2[] = rand(1, 50);
                    }

                    $merged_unique = array_unique(array_merge($array1, $array2));

                    echo "<strong>Массив 1:</strong> " . implode(', ', $array1) . "<br>";
                    echo "<strong>Массив 2:</strong> " . implode(', ', $array2) . "<br>";

                    echo "<strong>Объединенные уникальные значения:</strong> " . implode(', ', $merged_unique);
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>Создать массив из 10 элементов. посчитать количество повторов
                    каждого числа в массиве (цвет цифр, в которых нет повторов - красный,
                    цвет тех чисел, в которых есть повторы - синий). Размер текста 20px. Число
                    в каждой строке выделять жирным.
                </p>
                <style>
                    .red {
                        color: red;
                    }

                    .blue {
                        color: blue;
                    }

                    .bold {
                        font-weight: bold;
                    }

                    .large {
                        font-size: 20px;
                    }
                </style>
                <p>
                    <?php

                    $array = [1, 2, 3, 4, 2, 5, 6, 1, 7, 8];

                    $counts = array_count_values($array);

                    foreach ($array as $number) {
                        if ($counts[$number] > 1) {
                            echo "<span class='blue large bold'>" . $number . "</span><br>";
                        } else {
                            echo "<span class='red large bold'>" . $number . "</span><br>";
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    <?php
                    $fruits = [
                        [ 'name' => 'Apfel', 'type' => 'zirusfruchte', 'prise' => 80, 'amount' => 3],
                        [ 'name' => 'Kirche', 'type' => 'garten', 'prise' => 200, 'amount' => 2],
                        [ 'name' => 'Melone', 'type' => 'melone', 'prise' => 100, 'amount' => 1],
                        [ 'name' => 'Orange', 'type' => 'winder', 'prise' => 180, 'amount' => 3],
                        [ 'name' => 'Wasser melone', 'type' => 'melone', 'prise' => 120, 'amount' => 2],
                        [ 'name' => 'Zitrone', 'type' => 'zirusfruchte', 'prise' => 50, 'amount' => 1],
                    ];

                    $zirusfruchte = array_filter($fruits, fn($value) => $value['type'] == 'zirusfruchte');
                    $fruitsCount = array_map(fn($value) => $value['prise'] * $value['amout'], $fruits);
                    $total = array_reduce($fruits, fn($carry, $value) => $carry + $value['prise'] * $value['amout'], 0)
                    ?>
                </p>
                <p>
                    <?= implode(', ', array_column($zirusfruchte,'name')) ?>
                </p>
                <p>
                    <?= implode(', ',  $fruitsCount); ?>
                </p>
                <p>
                    <?= $total ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>