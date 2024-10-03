<?php
$test = 'ok';
$defult_input = "We wants it. We needs it. Must have the precioussss. They stole it from
us. Sneaky little hobbitsesss. Wicked, trickssssy, falssse! No! Not Master.
Yes, precious. False. They will cheat you, hurt you, lie. Master's my
friend. (taunting) You don't have any friends. Nobody likes YOU ... Not
listening. Not listening. You're a liar and a thief. (shaking his head) Nope.
Mur ... derer ...! (starts to cry and whimper) Go away. Go away! (cackles)
Hahahahaha! (cries, whispering) I hate you, I hate you. (fiercely) Where
would you be without me? Gollum, Gollum. I saved us. It was me. We
survived because of me! (resolute) Not anymore. (surprised) What did
you say? Master looks after us now. We don't need you. What? Leave
now and never come back. No !!! (louder) Leave now and never come
back! (bares teeth, growling) Arghhhh! LEAVE NOW AND NEVER COME
BACK. (Smeagol pants and looks around for Gollum) We ... we told him
to go away! And away he goes, preciousss. (dances around, happily)
Gone, gone, gone! Smeagol is free. 
Lords of the rings, Gollum/Smeagol Monologue"

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

<form action="./form_reply.php" method="GET">
<div>
<label for="word">Word:</label>
<textarea id="word" type="text" name="word">
<?php echo $defult_input ?>
</textarea>
</div>
<button type="submit">Send</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
