<?php
$test = 'ok';
$word = $_GET["word"];
$replace_word = str_ireplace('precious', '***', $word);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <div>
        <p>
            <?php echo $word ?>
        </p>
        <p>
            <?php echo 'il testo ha lunghezza ' . strlen($word) ?>
    </div>
    <div>
        <?php echo $replace_word ?>

    </div>
    </p>
</body>

</html>