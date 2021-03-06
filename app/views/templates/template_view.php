<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title ?></title>
</head>

<body>
    <div class="container">

        <header>
            <div>
                <div class="h1"><h1>Our Company</h1></div>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a class="nav-link" href="/">Home</a></li>
                    <li><a class="nav-link" href="/portfolio">Portfolio</a></li>
                    <li><a class="nav-link" href="/about">About</a></li>
                    <li><a class="nav-link" href="/contacts">Contacts</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div>
                <?= $output ?>
            </div>
        </main>

        <footer>
            <div>&copy; «Our Company», 2020&#8722;<?=date("Y")?></div>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>

</html>