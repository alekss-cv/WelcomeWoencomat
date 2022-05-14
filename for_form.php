<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0 ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon.png" type="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <title>for form</title>
</head>
<body>

<h1>WELCOME TO DEATH !</h1><h2>Зарегистрируйтесь</h2>
<?php
if(isset($_POST['form'])) {
    echo $_POST['name'] . ' ' . $_POST['surname'] . ' введите свои данные  ' . '<br>';
} else {
    echo 'Заполни поля';
}
?>
<form method = "post" action = "index.php" enctype="multipart/form-data">
    <p>Рост: <input type="text" name = "rise"></p>
    <p>Возраст: <input type="text" name = "age"></p>
    <p><input name="form"  type="submit"></p>
</form>


</body>
</html>