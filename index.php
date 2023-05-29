<?php

$whatsapp = 'btns/whatsapp.html';
$email = 'btns/email.html';

$facebook = 'btns/facebook.html';
$instagram = 'btns/instagram.html';
// $youtube = 'btns/youtube.html';
// $tiktok = 'btns/tiktok.html';
//$telegram = 'btns/telegram.html';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bio - TravelVip</title>
</head>
<body>

<div class="container">

    <div class="btns_container">

        <div class="contatos_btn">
            <h2 class="btns_titulo">Fale Conosco</h2>
            
            <?php (isset($whatsapp))? include($whatsapp) : '';?>

            <?php (isset($email))? include($email) : '';?>

        </div>

        <div class="redes_btn">
            <h2 class="btns_titulo">Redes Sociais</h2>

            <?php (isset($instagram))? include($instagram) : '';?>

            <?php (isset($facebook))? include($facebook) : '';?>

            <?php (isset($youtube))? include($youtube) : '';?>

            <?php (isset($tiktok))? include($tiktok) : '';?>

            <?php (isset($telegram))? include($telegram) : '';?>

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