<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajibola Atoyebi</title>
    <?php $page = "home";
    include_once(__DIR__.'/../partials/links.php');
    include_once(__DIR__.'/../helpers.php') ?>
    <?php
    $slug = $_GET['slug'];
    $projects = json_decode(file_get_contents(__DIR__.'/../projects-data.json')) ?? [];
    $project = array_filter($projects, fn ($project) => $project->slug == $slug);
    $project = array_values($project)[0];
    if(empty($slug) || empty($project)){ ?>
       <script>
        window.location.href = '/projects';
       </script>
    <?php } ?>
</head>

<body class="bg-background">
    <?php include_once(__DIR__.'/../partials/navbar.php')  ?>
    <main class="py-[5vw] px-[10vw]">
        <p>
            <a href="/projects" class="text-primary">&lt;- back to projects</a>
        </p>
        <h2 class="font-raleway font-bold my-10 text-[30px]"><?= $project->name ?></h2>
        <section>
            <div class="grid grid-cols-2">
                <div class="col-span-full order-2 md:order-1 my-5 md:m-0 md:col-span-1">
                    <h3 class="font-raleway font-bold text-[20px]">Technologies used:</h3>
                    <ul class="list-none grid grid-cols-3 md:grid-cols-4 m-0">
                        <?php foreach ($project->tech as $technology) : ?>
                            <li><?= $technology ?></li>
                        <?php endforeach ?>
                    </ul>
                    <?php if ($project->github) { ?> <a href="<?= $project->github ?>" target="_blank" class="mr-2"><img src="/dist/images/github.svg" width="20px" alt="github"></a> <?php } ?>
                    <?php if ($project->url) { ?> <a href="<?= $project->url ?>" target="_blank" class="ml-2"><img src="/dist/images/link.svg" width="20px" alt="link"></a> <?php } ?>
                </div>
                <div style="background-image: url('<?= $project->coverImage ?>');" class="order-1 md:order-2 col-span-full md:col-span-1 min-h-[300px] bg-center bg-cover bg-no-repeat"></div>
            </div>
        </section>
        <section>
            <h3 class="font-raleway font-bold my-10 text-[20px]">Project Description</h3>
            <p>
                <?= empty($project->description) ? $project->shortDescription : $project->description ?>
            </p>
        </section>
        <section>
            <h3 class="font-raleway font-bold my-10 text-[20px]">Project Images</h3>
            <div class="grid grid-cols-2 gap-5">
                <?php foreach (array_slice($project->images, 1) as $image) : ?>
                    <div style="background-image:url('<?= $image ?>');" class="col-span-full md:col-span-1 min-h-[300px] bg-center bg-cover bg-no-repeat"></div>
                <?php endforeach ?>
            </div>
        </section>
    </main>
</body>

</html>