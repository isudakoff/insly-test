<!doctype html>
<html lang="<?= $language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title ?></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="menu">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link <?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $_SERVER['REQUEST_URI'] === '/calculator' ? 'active' : '' ?>" href="/calculator">Calculator</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="content">
        <h1><?= $page_header ?></h1>
        <?= $content ?>
    </div>
</div>
</body>
</html>