<?php

$secretnumber = 7;

if (isset($_POST['guess'])) {
    $guess = intval($_POST['guess']);

    if ($guess == $secretnumber) {
        echo "Congratulations You guessed the number";
    } else {
        echo "Sorry, try again!";
    }
}

?>

<form action="" method="post">
    <label for="guess">Guess a number between 1 & 10:</label>
    <input type="number" id="guess" name="guess">
    <input type="submit" value="Guess">
</form>