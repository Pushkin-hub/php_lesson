<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>
            <?php echo "Hello, world!\n" ?>
        </p>
    </div>
    <div>
        <li><?php echo "Hello\nWorld!\n" ?></li>
        <li><?php echo "Hello\n\tworld!" ?></li>
        <li><?php echo "Hello, world. \"It's my page!\"" ?></li>
        <p>
            <?php echo "Hello\nWorld!\n" ?>
        </p>
    </div>
        <div>
        <p>
            <?php 
                $input = 5;
                $output = $input;
                echo "input\"$input\",output \"-$output\"";
            ?>
        </p>
        <p>
            <?php 
                $a = 5;
                $b = 7;
                $c = $a + $b;
                $d = $a - $b;
                $e = $a * $b;
                $f = $a / $b;
                echo "a = \"$a\", b = \"$b\"";
                echo "a + b = \"$c\", a - b = \"$d\"";
                echo "a * b = \"$e\", a / b = \"$f\"";
            ?>
        </p>
    </div>
    <div>
        <p>
            <?php
            $x = 12;
            $y = 34;

            $x = $x + $y;
            $y = $x - $y;
            $x = $x - $y;

            echo "x = {$x}, y = {$y}";?>
        </p>
        <p>
            <?php
                $username = "User1";
                $password = "Secret";
            ?>
            <form action="text">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" name="username" placeholder="username" value="<?= $username ?>">
                <label for="password" class="form-label">Password:</label>
                <input type="text" class="form-control" name="password" placeholder="password" value="<?= $password ?>">
            </form>
        </p>
    </div>
</body>
</html>