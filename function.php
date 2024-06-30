<?php

for ($i=1; $i <= 5 ; $i++) { 
    echo $i ."<br>";
}

$count=0;

while ($count < 5) {
    echo "hello world".PHP_EOL;
    $count++;
}

$colors=["red","green","blue","Pink","Purple"];
foreach ($colors as $color) {
    echo $color ."<br>";
}

for ($i=1; $i <= 10; $i++) { 
    if ($i==5) {
        break;
    }echo $i,"";
    }

for ($i=0; $i < 10 ; $i++) { 
    if ($i % 2==0) {
        continue;
    }echo $i,"<br>";
}

for ($i=1; $i < 20; $i++) { 
    if ($i==11) {
        break;
    }echo $i,"<br>";
}

// $password="";

// do{
//     echo "enter a password (minimum 8 characters):";
//     $password= rtrim(fgets(STDIN));
// }while (strlen ($password)<8);

//     echo"your password is set".PHP_EOL;



$password = "";

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.";
    } else {
        echo "Your password is set.";
    }
} else {
    ?>
    <form method="post">
        <label for="password">Enter a password (minimum 8 characters):</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
}




?>
