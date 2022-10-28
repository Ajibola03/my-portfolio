<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajibola Atoyebi</title>
    <?php $page = "home";
    $projects = json_decode(file_get_contents(__DIR__.'/projects-data.json', true)) ?? [];
    $favProjects = array_filter($projects, fn ($project) => $project->favorite);
    $otherProjects = array_filter($projects, fn ($project) => !$project->favorite);
    include_once(__DIR__.'/partials/links.php') ?>
</head>

<body class="bg-background">
    <?php include_once(__DIR__.'/partials/navbar.php')  ?>
    <section class="mx-[10vw] text-center md:text-left" id="projects">
        <h2 class="font-raleway font-bold my-10 text-[30px]">Projects</h2>
        <div>
            <?php $i = 1;
            foreach ($favProjects as $project) { ?>
                <div onclick="window.location.href = '/projects/view?slug=<?= $project->slug ?>'" class="cursor-pointer grid grid-cols-12 gap-5 my-[50px]">
                    <div class="md:order-<?= $i % 2 ? 1 : 2 ?> hidden col-span-full md:col-span-6 min-h-[300px] lg:inline-block bg-[url('<?= $project->coverImage ?>')] bg-center bg-cover bg-no-repeat"></div>
                    <div class="md:order-<?= $i % 2 ? 2 : 1 ?> col-span-full lg:col-span-6 text-right flex flex-col">
                        <p class="text-secondary">Featured Project</p>
                        <h3 class="font-raleway font-bold text-[20px]"><?= $project->name ?></h3>
                        <div class="lg:hidden col-span-full md:col-span-6 min-h-[300px] inline-block bg-[url('<?= $project->coverImage ?>')] bg-center bg-cover bg-no-repeat"></div>
                        <div class="bg-[#112240] grow p-6 my-5">
                            <?= $project->shortDescription ?>
                        </div>
                        <div class="flex flex-wrap justify-center md:justify-end gap-x-3 my-2 text-sm">
                            <?php foreach ($project->tech as $tech) { ?>
                                <span><?= $tech ?></span>
                            <?php } ?>
                        </div>
                        <div class="flex justify-center md:justify-end mt-3">
                            <?php if ($project->github) { ?> <a href="<?= $project->github ?>" target="_blank" class="mr-2"><img src="/dist/images/github.svg" width="80%" alt="github"></a> <?php } ?>
                            <?php if ($project->url) { ?> <a href="<?= $project->url ?>" target="_blank" class="ml-2"><img src="/dist/images/link.svg" width="80%" alt="link"></a> <?php } ?>
                        </div>
                    </div>
                </div>
            <?php $i++;
            } ?>
        </div>
    </section>
    <section class="mx-[10vw] text-center md:text-left mb-[50px]" id="more-projects">
        <h2 class="font-raleway font-bold text-center my-10 text-[30px]">Other Notable Projects</h2>
        <div class="grid grid-cols-12">
            <?php foreach ($otherProjects as $project) { ?>
                <div onclick="window.location.href = '/projects/view?slug=<?= $project->slug ?>'" class="cursor-pointer col-span-full md:col-span-4 h-[300px] my-5 md:m-0 md:p-5 flex flex-col">
                    <div class="bg-[#112240] p-2 shadow-xl">
                        <div class="flex justify-between">
                            <div class="mr-2"><img src="/dist/images/project.svg" width="20px" alt="project"></div>
                            <div class="flex">
                                <?php if ($project->github) { ?> <a target="_blank" href="<?= $project->github ?>" class="mx-2 inline"><img src="/dist/images/github.svg" width="15px" alt="github"></a> <?php } ?>
                                <?php if ($project->url) { ?> <a target="_blank" href="<?= $project->url ?>" class="mx-2 inline"><img src="/dist/images/link.svg" width="15px" alt="link"></a> <?php } ?>
                            </div>
                        </div>
                        <div class="my-2">
                            <h3 class="font-raleway font-bold text-[18px]"><?= $project->name ?></h3>
                            <p class="my-2">
                                <?= $project->shortDescription ?>
                            </p>
                        </div>
                        <div class="flex flex-wrap justify-center md:justify-start gap-x-3 my-2 text-sm">
                            <?php foreach ($project->tech as $tech) { ?>
                                <span><?= $tech ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <?php include_once(__DIR__.'/partials/footer.php')  ?>
</body>

</html>