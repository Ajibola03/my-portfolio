<nav class="flex justify-between align-middle py-5 px-[5vw]">
    <div class="text-secondary">
        ajibola.atoyebi
    </div>
    <div class="!text-primary nav-items">
        <a href="/#about" class="<?= (isset($page) && $page == 'about') ? 'active' : '' ?>">About</a>
        <a href="/#projects" class="<?= (isset($page) && $page == 'project') ? 'active' : '' ?>">Projects</a>
        <a href="/#contact" class="<?= (isset($page) && $page == 'contact') ? 'active' : '' ?>">Contact</a>
    </div>
</nav>