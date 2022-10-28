<?php
if (strpos($_SERVER['HTTP_HOST'], 'test') !== false) {
    echo '<meta name="robots" content="noindex">';
}
?>
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="Ajibola Atoyebi">
<meta property="og:description" content="The portfolio of Ajibola Atoyebi">
<meta property="og:url" content="https://www.ajibola.dev/">
<meta property="og:site_name" content="Ajibola.dev">
<meta name="keywords" content="AJibola, Atoyebi, Favour, Favor, Ajibola Atoyebi, Ajibola.dev, software, mobile, freelancer, engineer, developer, Nigeria, yoruba, MERN, PHP, Ajibola03, ajibola.atoyebi">
<meta name="author" content="Ajibola Atoyebi">
<link rel="icon" type="image/x-icon" href="/dist/images/favicon.ico">
<link rel="stylesheet" href="/dist/css/main.css">
<link rel="stylesheet" href="/dist/css/animate.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<?php
if (strpos($_SERVER['HTTP_HOST'], 'test') === false) {
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') { ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MENZR8CRSZ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-MENZR8CRSZ');
        </script>
<?php } else {
        echo 'isLocal = true';
    }
}
?>