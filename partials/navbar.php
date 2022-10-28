<nav class="flex flex-col md:flex-row justify-between items-center align-middle py-5 px-[5vw]">
    <a href="/">
        <img src="/dist/images/logo.png" alt="logo" width="250px">
        <!-- <div class="text-secondary">
            ajibola.atoyebi
        </div> -->
    </a>
    <div class="!text-primary nav-items w-full flex justify-evenly md:inline-block md:w-[unset]">
        <a href="/#about" class="<?= (isset($page) && $page == 'about') ? 'active' : '' ?>">About</a>
        <a href="/projects" class="<?= (isset($page) && $page == 'project') ? 'active' : '' ?>">Projects</a>
        <a href="/#contact" class="<?= (isset($page) && $page == 'contact') ? 'active' : '' ?>">Contact</a>
    </div>
</nav>