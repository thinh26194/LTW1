<!DOCTYPE html>
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
?>
<html>

    <head>
        <title>abundance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/511.css" rel="stylesheet" type="text/css" />


        <script src="js/bootstrap.min.js" ></script>

        <script src="js/swiper.min.js"></script>
<!--        <script src="js/swiper.js"></script>-->

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/511.less', 'css/511.css');
        ?>

    </head>

    <body>
        <?php include $dir_block . '/511-content.php'; ?>

        <script>
            var mySwiper = new Swiper('.swiper-container', {
                autoplay: {
                    display: 2000,
                },
                loop: true,
                slidesPerView: 6,
                spaceBetween: 10,
                // init: false,
//                pagination: {
//                    el: '.swiper-pagination',
//                    clickable: true,
//                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                    991: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    360: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    }
                }
            });
        </script>
    </body>
</html>