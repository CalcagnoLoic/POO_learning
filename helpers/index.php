<!DOCTYPE html>
<html lang="en">
<?php
require "elem.php";
$html = new html();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $html->meta("Author", "Loïc Calcagno")?>
    <?php echo $html->meta("Content", "Création d'un formulaire")?>
    <title>Document</title>
    <?php echo $html->link('style.css')?>
</head>
<body>
    <?php
    require 'form.php';

    echo $html->img('img.jpg', 'Test de balise img');

    $form = new Form();
    echo $form->form();
    echo $form->input();
    echo $form->select();
    echo $form->textarea();
    echo $form->radio();
    echo $form->checkbox();
    echo $form->submit();
    echo $form->formEnding();

    echo $html->a('https://becode.org/fr/apprendre/developpeur-web-junior/');

    echo $html->script('script.js');
    ?>

</body>
</html>