<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bilangan Genap</title>
</head>
<body>
    <h2>Bilangan Genap dari 1 sampai 10:</h2>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>

