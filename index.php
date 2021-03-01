<?php

echo 'Привет, мир!';

$dsn = "mysql:host=127.0.0.1:3307;dbname=tasks";
$user = "root";
$password = "root";

$pdo = new Pdo($dsn, $user, $password);




// $sql = 'SELECT name FROM test WHERE id = ?';
//$name = 'testuser'
//
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$name]);


//while($row = $stmt->fetch(PDO::FETCH_ASSOC))
//    {
//        echo "\r\n".$row['name'];
//    }

if(isset($_POST['submit_btn']))
    {
        $username = $_POST['username'];
        $sql = 'SELECT name FROM test WHERE username = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            if($row != null)
            {
                echo 'Найден пользователь с логином' . $username;
                echo '<br>' . 'Имя пользователя' . $row['name'];
            }
            else
            {
                echo 'Не найден пользователь' . $username;
            }
        }
    }
?>

<form method="post">
    <label for"username"> Имя пользователя </label>
    <input id="username" name="username">
    <br>
    <label for="password">Имя пользователя</label>>
    <input id"">

    <button type="submit" name="submit_btn">Найти пользователя</button>
</form>






