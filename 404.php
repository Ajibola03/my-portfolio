<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 | Page not Found</title>
    <?php include_once('partials/links.php') ?>
</head>

<body class="max-h-screen overflow-hidden bg-background">
    <nav class="flex justify-between align-middle py-5 px-[5vw]">
        <div class="text-secondary">
            ajibola.atoyebi
        </div>
        <div class="text-primary nav-items">

        </div>
    </nav>
    <div class="h-full p-2 flex flex-col text-center align-middle justify-center">
        <div class="text-center">
            <img src="/dist/images/404.png" class="inline-block w-[50%] md:w-[30%]" alt="404">
        </div>
        <h2 class="font-raleway font-[800] mt-[10px] text-[40px]">Oops!</h2>
        <p class="md:w-[40%] my-10 mx-auto">
            Seems you stumbled in here along the way. There is nothing to be scared of.
            Use the button below to go back to the homepage
        </p>
        <a href="/" class="btn-outline-secondary inline-block !w-[200px] mx-auto">
            Back to the homepage
        </a>
    </div>
</body>

</html>