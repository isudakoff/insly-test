<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insly - Test - 1</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div id="content">
            <?php
/*
                $name = "Ilya";
                $i = 0;

                while (mb_strlen($name) > $i) {
                    echo $name[$i];
                    $i++;
                }
*/

                $name = ['I', 'l', 'y', 'a'];

                foreach ($name as $char) {
                    echo $char;
                }

            ?>
        </div>
    </div>
</div>
</body>
</html>