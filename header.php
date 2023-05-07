<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <meta name="keywords" content="assistência técnica,manuteção, conserto, computadores,notebooks,redes,servidores">
	<meta name="description" content="Manutenção em desktops, notebooks, vídeo games, instalações e configuração de redes.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" href="logo-site.ico" type="image/x-icon" />
    <title>Marrone Nóbrega</title>
</head>
<body>
    <?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				break;

			case 'habilidades':
				echo '<target target="habilidades" />';
				break;

                case 'projetos':
                    echo '<target target="projetos" />';
                    break;
		}
	?>
    <section class="topo">
       
       
        <div class="center">
        <header>
            <div class="logo"><h2>Portfólio</h2></div>
        </header>
        
            <ul class="menu-desktop">
               
                <li><a href="sobre"><h3>Sobre Mim</h3></a></li>
                <li><a href="habilidades"><h3>Habilidades</h3></a></li>
                <li><a href="projetos"><h3>Projetos</h3></a></li>
            </ul>
        <div class="menu-mobile">
        <i class="fa-solid fa-bars"></i>
        <ul>
           
            <li><a href="sobre"><h3>Sobre Mim</h3></a></li>
            <li><a href="habilidades"><h3>Habilidades</h3></a></li>
            <li><a href="projetos"><h3>Projetos</h3></a></li>
        </ul> 
        </div>
        <div class="clear"></div>