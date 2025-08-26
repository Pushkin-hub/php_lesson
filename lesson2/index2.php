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
            <div class="col-6 offset-3 mt-3 p-3">
                <div class="row">
                    <div class="col border rounded p-3">
                        <p>Проверить переменную на честность</p>
                        <p>
                            <?php
                            if (isset($_POST["var"])) {
                            $var = $_POST["var"];
                            if ($var % 2) {
                                echo "var - нечетное число";
                            } else {
                                echo "$var - четное число";
                            }
                            } else {

                            ?>
                           <?php
                           /*
                                $var = $_POST['var'] ?? null;
                                if ($var !== null) {
                                    $num = (int)$var;
                                    if ($num < 1) {
                                    echo "<p class='text-danger'>Число должно быть натуральным!</p>";
                                        } elseif ($num % 2 === 0) {
                                    echo "<p>{$num} — чётное число.</p>";
                                        } else {
                                    echo "<p>{$num} — нечётное число.</p>";
                                    }
                                }
                                    */
                            ?> 
                            <form action="/index2.php" class="row" method="post">
                                <div class="col-7">
                                    <label for="var" class="form-label">
                                        Введите любое натуральное число
                                    </label>
                                </div>
                                <div class="col-5">
                                    <input type="number" name="var" id="var" class="form-control">
                                </div>
                                <div class="d-grid mt-3">
                                    <button class="btn btn-primary">Определить</button>
                                </div>
                            </form>
                            <?php }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>