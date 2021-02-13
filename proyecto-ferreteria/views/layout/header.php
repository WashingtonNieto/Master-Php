<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title> Tienda de Camisetas</title>
        <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
    </head>
    <body>
        <div id="container">
            <!-- Cabecera -->
            <header id="header">
                <div id="logo">
                    <img src="<?=base_url?>assets/img/ferreteria.png" alt="Ferreteria logo">
                    <a href="<?=base_url?>">
                        Ferretería XYZ
                    </a>
                </div>
            </header>

            <!-- Menu -->
            <?php $categorias = utils::showCategorias(); ?>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="<?=base_url?>">Inicio</a>
                    </li>
                    <?php while($cat = $categorias->fetch_object()): ?>
                        <li>
                            <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                        </li>
                    <?php endwhile; ?>
                
                </ul>

            </nav>
            <div id="content">
