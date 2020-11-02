<?php
require './_app/config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title><?= $pg_title; ?></title>
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- [if lt IE 9]> 
            <script src="js/html5shiv.js"</script>
        <![endif]-->

        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.png"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/boot.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/gallery.prefixed.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/gallery.theme.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css"/>
        <link rel="stylesheet" href="_cdn/shadowbox/shadowbox.css"
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    </head>
    <body>
        <p class="j_back backtop">Topo</p>

        <!--Menu-->
        <header class="container main_header">
            <div class="content">
                <h1 class="fl-left fontzero main_logo">
                    <a title="<?= $pg_title; ?>" href="<?= HOME; ?>">
                        <?= $pg_title; ?>
                        
                    </a>
                </h1>

                <div class="mobile_action"></div>

                <ul class="main_menu">
                    <?php require REQUIRE_PATH . '/inc/main_menu.php'; ?>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

        <!--CONTEUDO-->
        <section class="container gallery autoplay items-3 ds-block">
            <h1 class="fontzero">Ultimas do Site:</h1>

            <div id="item-1" class="control-operator"></div>
            <div id="item-2" class="control-operator"></div>
            <div id="item-3" class="control-operator"></div>

            <picture class="item ds-block" style="margin: 0;">
                <source media="(min-width:1600px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=2000&h=600"/>
                <source media="(min-width:1366px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=1600&h=600"/>
                <source media="(min-width:1280px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=1366&h=400"/>
                <source media="(min-width:960px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=1280&h=600"/>
                <source media="(min-width:768px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=960&h=300"/>
                <source media="(min-width:480px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=800&h=300"/>
                <source media="(min-width:1px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=480&h=380"/>
                <img src="uploads/bac_servico.jpg"/>
            </picture>

            <picture class="item ds-block" style="margin: 0;">
                <source media="(min-width:1600px)" srcset="tim.php?src=uploads/bac_contato.jpg&w=2000&h=600"/>
                <source media="(min-width:1366px)" srcset="tim.php?src=uploads/bac_contato.jpg&w=1600&h=600"/>
                <source media="(min-width:1280px)" srcset="tim.php?src=uploads/bac_contato.jpg&w=1366&h=400"/>
                <source media="(min-width:960px)" srcset="tim.php?src=uploads/bac_contato.jpg&w=1280&h=600"/>
                <source media="(min-width:768px)" srcset="tim.php?src=uploads/bac_contato.jpg&w=960&h=300"/>
                <source media="(min-width:480px)" srcset="tim.php?src=uploads/bac_contato.jpg&w=800&h=300"/>
                <source media="(min-width:1px)" srcset="tim.php?src=uploads/bac_contato.jpg&w=480&h=380"/>
                <img src="uploads/bac_contato.jpg"/>
            </picture>

            <picture class="item ds-block" style="margin: 0;">
                <source media="(min-width:1600px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=2000&h=600"/>
                <source media="(min-width:1366px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=1600&h=600"/>
                <source media="(min-width:1280px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=1366&h=400"/>
                <source media="(min-width:960px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=1280&h=600"/>
                <source media="(min-width:768px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=960&h=300"/>
                <source media="(min-width:480px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=800&h=300"/>
                <source media="(min-width:1px)" srcset="tim.php?src=uploads/bac_servico.jpg&w=480&h=380"/>
                <img src="uploads/bac_servico.jpg"/>
            </picture>

            <div class="controls">
                <a href="#item-1" class="control-button">•</a>
                <a href="#item-2" class="control-button">•</a>
                <a href="#item-3" class="control-button">•</a>
            </div>    
            <div class="clear"></div>
        </section>
        
        <?php
        $Url[1] = (empty($Url[1]) ? NULL : $Url[1]);

        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/index.php';
        endif;
        ?>
        <!--CONTEUDO-->

        <footer class="container main_footer">
            <div class="content content-page">
                <h1 class="fontzero">Rodapé do Site</h1>
                <p>Copyright &copy 2017 - <?= date('Y'); ?> Criado por Cristovão Lira Braga | Manutenção Lira, Todos Os Direitos Reservados!</p>
                <div class="clear"></div>
            </div>
        </footer>

        <script src="_cdn/jquery.js"></script>
        <script src="_cdn/script.js"></script>
        <script src="_cdn/shadowbox/shadowbox.js"></script>
    </body>
</html>
