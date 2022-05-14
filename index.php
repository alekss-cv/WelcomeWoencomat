<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0 ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon.png" type="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <title>onlyonly</title>
</head>
<body>

<h1>HELLO WORLD</h1>

<?php
if(isset($_POST['name_age'])) {
    echo ' Рост ' . $_POST[' :rise'] . ' , Возраст ' . $_POST[' :age'] . '<br>';
} else {
    echo 'Заполняй данные для военкомата сучек';
}
?>
<form method = "post" action = "for_form.php" enctype="multipart/form-data">
    <input placeholder="имя " type="text" name="name">
    <br><br>

    <input placeholder="Фамилия" type="text" name="surname">
    <br><br>

    <button name="name_age">Отправить!</button>
</form>
<br>
<?php
    if ($_POST['age'] == true ){
    if ($_POST['age'] < 18  |   $_POST['age'] > 27) {
        echo ' Тебе  ' . $_POST['age'] . ' лет  , к твоему счастью к  службе не пригоден ';
    }else echo ' Тоби пизда...';}
?>


</body>
</html>