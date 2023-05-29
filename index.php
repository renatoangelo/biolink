<?php

$whatsapp = 'btns/whatsapp.html';
$email = 'btns/email.html';
$linkedin = 'btns/linkedin.html';


//$facebook = 'btns/facebook.html';
$instagram = 'btns/instagram.html';
// $youtube = 'btns/youtube.html';
// $tiktok = 'btns/tiktok.html';
//$telegram = 'btns/telegram.html';
$twitter = 'btns/twitter.html';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bio - Renato Angelo - Links Úteis</title>

    <meta name="description" content="Renato Angelo - Software Developer - Chief Marketing Office - Entrepreneur">
    <meta name="author" content="Renato Angelo">
    <meta name="msapplication-TileImage" content="https://renatoangelo.com.br/bio/assets/img/thumb.jpg" />
    <meta property="og:image" content="https://renatoangelo.com.br/bio/assets/img/thumb.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:description" content="Links Úteis para Renato Angelo - Software Developer - Chief Marketing Office - Entrepreneur">
    <meta property="og:url" content="https://renatoangelo.com.br/" >
    <meta property="og:site_name" content="Renato Angelo - Software Sênior Developer" >
    <meta property="og:title" content="Renato Angelo - Software Sênior Developer" >


    <link rel="manifest" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">




</head>
<body>

<div class="container">

    <div class="btns_container">

        <div class="contatos_btn">
            <h2 class="btns_titulo">Fale Conosco</h2>
            
            <?php (isset($whatsapp))? include($whatsapp) : '';?>

            <?php (isset($email))? include($email) : '';?>

            <?php (isset($linkedin))? include($linkedin) : '';?>

        </div>

        <div class="redes_btn">
            <h2 class="btns_titulo">Redes Sociais</h2>

            <?php (isset($instagram))? include($instagram) : '';?>

            <?php (isset($facebook))? include($facebook) : '';?>

            <?php (isset($youtube))? include($youtube) : '';?>

            <?php (isset($tiktok))? include($tiktok) : '';?>

            <?php (isset($telegram))? include($telegram) : '';?>

            <?php (isset($twitter))? include($twitter) : '';?>

        </div>

        <!-- Exemplo de como criar novas seções -->
        <!-- Class btns_titulo e btn são obrigatórias para manter o estilo do css.-->
         
        <!-- <div class="cursos_btn">
            <h2 class="btns_titulo">Meus Cursos</h2>
            
            <div class="btn">
                <a href="">Física para leigos</a>
            </div>
            ]
        </div>  -->

    </div>

</div>
    
</body>
</html>