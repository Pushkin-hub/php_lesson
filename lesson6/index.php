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
                <p>
                    Имеется массив из 10 элементов, структура элемента:
                    name, company, position. Вывести на экран массив в следующем формате:
                    'name' is working in 'company' as: 'position'
                </p>
                <p>
                    <?php
                    $employees = [
                        ["name" => "Сергей", "company" => "Microsoft", "position" => "developer"],
                        ["name" => "Олег", "company" => "Apple", "position" => "QA"],
                        ["name" => "Ольга", "company" => "Amazone", "position" => "PM"],
                        ["name" => "Оксана", "company" => "IT step", "position" => "teacher"],
                        ["name" => "Андрей", "company" => "Apple", "position" => "SA"],
                        ["name" => "Игорь", "company" => "Samsung", "position" => "egenner"],
                        ["name" => "Олеся", "company" => "Samsung", "position" => "developer"],
                        ["name" => "Роман", "company" => "Microsoft", "position" => "PM"],
                        ["name" => "Юрий", "company" => "Microsoft", "position" => "QA"],
                        ["name" => "Ирина", "company" => "IT step", "position" => "teacher"],
                    ];

                    foreach ($employees as $employee) {
                        echo "'" . htmlspecialchars($employee['name']) . "' is working in '" .
                            htmlspecialchars($employee['company']) . "' as: '" .
                            htmlspecialchars($employee['position']) . "'<br>";
                    }
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    Отфильтровать массив из задания 1 и вывести работников в зависимости
                    от компаний в виде списка.
                </p>
                <p>
                    <?php
                    $groupedByCompany = [];

                    foreach ($employees as $employee) {
                        $company = $employee['company'];
                        if (!isset($groupedByCompany[$company])) {
                            $groupedByCompany[$company] = [];
                        }
                        $groupedByCompany[$company][] = $employee;
                    }

                    foreach ($groupedByCompany as $company => $employeesList) {
                        echo "<strong>" . htmlspecialchars($company) . "</strong><br>";
                        echo "<ul>";
                        foreach ($employeesList as $emp) {
                            echo "<li>" . htmlspecialchars($emp['name']) . " — " . htmlspecialchars($emp['position']) . "</li>";
                        }
                        echo "</ul>";
                    }
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    Создать массив из 10 чисел. В первый элемент записать
                    число 1. Каждое следующее число генерируется случайно
                    и записывается в массив при условии, если оно больше
                    предыдущего. Результат массива вывести на страницу.
                </p>
                <p>
                    <?php
                    $numbers = [1];

                    while (count($numbers) < 10) {
                        $next = rand($numbers[count($numbers) - 1] + 1, 100);
                        $numbers[] = $next;
                    }
                    echo implode(', ', $numbers);
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    Создать массив из 10 элементов. Элементов массива является массив 5 цифр.
                    Заполнить элементы случайными числами от 10 до 100. Вывести массив,
                    минимальные значения в каждом столбце выделить красным цветом.
                    Найти сумму минимальных элементов в каждом столбце и их среднее значение.
                </p>
                <p>
                    <?php
                    $data = [];
                    $rows = 10;
                    $cols = 5;

                    for ($i = 0; $i < $rows; $i++) {
                        $row = [];
                        for ($j = 0; $j < $cols; $j++) {
                            $row[] = rand(10, 100);
                        }
                        $data[] = $row;
                    }

                    $minValues = [];
                    for ($col = 0; $col < $cols; $col++) {
                        $colValues = array_column($data, $col);
                        $minValues[$col] = min($colValues);
                    }

                    echo '<table class="table table-bordered text-center">';
                    echo '<thead><tr>';
                    for ($col = 0; $col < $cols; $col++) {
                        echo "<th>Столбец " . ($col + 1) . "</th>";
                    }
                    echo '</tr></thead><tbody>';

                    for ($row = 0; $row < $rows; $row++) {
                        echo '<tr>';
                        for ($col = 0; $col < $cols; $col++) {
                            $value = $data[$row][$col];
                            $style = ($value === $minValues[$col]) ? 'style="color: red; font-weight: bold;"' : '';
                            echo "<td $style>$value</td>";
                        }
                        echo '</tr>';
                    }
                    echo '</tbody></table>';

                    $sumMin = array_sum($minValues);
                    $avgMin = $sumMin / $cols;

                    echo "<p>Сумма минимальных значений по столбцам: <strong>$sumMin</strong></p>";
                    echo "<p>Среднее минимальных значений по столбцам: <strong>" . number_format($avgMin, 2) . "</strong></p>";
                    ?>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>

                </p>
                <p>

                </p>
            </div>
        </div>
    </div>
</body>

</html>