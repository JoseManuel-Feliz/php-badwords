<?php
$test = 'ok' 
?>
<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
<h1><?php echo $test ?></h1>

<form action="./form_reply" method="GET">
    <div>
<label for="word">Word:</label>
        <input id="word" type="text" name="parola" placeholder="inserisci una parola">
    </div>
    <button type="submit">Send</button>
    <button type="reset">Reset</button>
    </form>
</body>
</html>
