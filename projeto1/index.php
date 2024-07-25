<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--metatag-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="author" content="Deivid">
    <meta name="description" content="Descrição do meu website">
    <!--links-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo INCLUDE_PATH; ?>css/style.css" rel="stylesheet">
    <!--title-->
    <title>Projeto 01</title>
</head>
<body>
    
<?php
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;
        
        case 'servicos';
            echo '<target target="servicos" />';
            break;
    }

?>
    
    <header>
        <div class="center">
            <div class="logo left"><a href="">Logomarca</a></div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fa fa-bars"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <div class="container-principal">

    <?php

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
            include('pages/404.php');
            }else{
                include('pages/home.php');
            }
            
        }

    ?>
    
</div><!--container-principal-->

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados!</p>
        </div><!--center-->
    </footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
<?php
    if($url == 'home' || $url == ''){
?>
<script src="<?php echo INCLUDE_PATH; ?>js/slide.js"></script>
<?php } ?>


</body>
</html>