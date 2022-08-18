<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajibola Atoyebi</title>
    <?php $page = "home";
    include_once('partials/links.php') ?>
</head>

<body class="bg-background bg-[url('/dist/images/background.png')] bg-no-repeat">
    <?php include_once('partials/navbar.php') ?>
    <section class="m-[10vw] text-center md:text-left">
        <h1 class="font-raleway font-[700] text-[20px] md:text-[40px] lg:text-[50px] animate__animated animate__fadeInUp">
            Hello, I&apos;m <span class="text-secondary">Ajibola Atoyebi.</span> <br>
            A Full-Stack Web and Mobile Developer.
        </h1>
        <p class="w-full lg:w-1/2">
            I specialize in creating amazing digital experiences by combining excellent
            front-end development skills with a solid back-end structure.
        </p>
        <div class="btn-outline-secondary my-10 mx-auto md:mx-0">View my resume</div>
        <div class="flex justify-center md:justify-start align-middle">
            <a href="https://github.com/Ajibola03" target="_blank" class="mr-5"><img src="/dist/images/github.svg" alt="github"></a>
            <a href="https://twitter.com/AtoyebiAjibola" target="_blank" class="mx-5"><img src="/dist/images/twitter.svg" alt="twitter"></a>
            <a href="https://www.linkedin.com/in/ajibola-atoyebi-23b59b217/" target="_blank" class="mx-5"><img src="/dist/images/linkedin.svg" alt="linkedin"></a>
            <a href="mailto:ajibola03official@gmail.com" class="ml-5"><img src="/dist/images/email.svg" alt="email"></a>
        </div>
    </section>
    <section class="m-[10vw] py-5 text-center md:text-left" id="about">
        <h2 class="font-raleway font-bold my-10 text-[30px]">About Me</h2>
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-6 order-3 md:order-1">
                <p>
                    Hey there! My name is Ajibola. I am full-stack web and mobile developer
                    with over 3 years of professional experience. I enjoy coding, creating
                    beautiful digital experiences and getting things to work. I am a team player
                    with great communication skills and very passionate about learning new things
                    and technologies.
                </p>
                <p class="my-5">
                    I've worked with 2 companies so far and have acquired valuable skills and
                    knowledge from both. I am currently working with
                    <a href="https://www.10xv.xyz/" target="_blank">10X Ventures LLC</a>
                    as a full-stack developer.
                </p>
                <p>
                    Here are some of the technologies I&apos;ve been able to work with:
                </p>
                <div class="grid grid-cols-2 mt-5 md:grid-cols-5 text-left">
                    <div class="tech-item">HTML</div>
                    <div class="tech-item">Javascript</div>
                    <div class="tech-item">Typescript</div>
                    <div class="tech-item">PHP</div>
                    <div class="tech-item">Dart</div>
                    <div class="tech-item">MongoDB</div>
                    <div class="tech-item">CSS</div>
                    <div class="tech-item">React</div>
                    <div class="tech-item">Laravel</div>
                    <div class="tech-item">Flutter</div>
                    <div class="tech-item">Firestore</div>
                    <div class="tech-item">Tailwind</div>
                    <div class="tech-item">Bootstrap</div>
                    <div class="tech-item">Node.js</div>
                    <div class="tech-item">MySQL</div>
                    <div class="tech-item">PostgreSQL</div>
                    <div class="tech-item">Git</div>
                    <div class="tech-item">Paystack</div>
                    <div class="tech-item">Stripe</div>
                </div>
            </div>
            <div class="col-span-12 my-[10px] md:m-0 md:col-span-1 order-2"></div>
            <div class="col-span-12 md:col-span-3 order-1 md:order-3">
                <div class="relative profile-img inline-block w-[150px] h-[150px] md:w-[300px] md:h-[300px] bg-[url('/dist/images/profile.png')] bg-contain md:bg-cover bg-no-repeat bg-center">
                </div>
            </div>
            <div class="col-span-12 md:col-span-2 order-4">
            </div>
        </div>
    </section>
    <section class="m-[10vw] py-5 text-center md:text-left" id="projects">
        <h2 class="font-raleway font-bold my-10 text-[30px]">Some Things I&apos;ve Worked On</h2>
        <div>
            <div class="grid grid-cols-12 gap-5 my-[50px]">
                <div class="md:order-1 hidden col-span-full md:col-span-6 min-h-[300px] lg:inline-block bg-[url('/dist/images/projects/eduporch.png')] bg-center bg-cover bg-no-repeat"></div>
                <div class="md:order-2 col-span-full lg:col-span-6 text-right flex flex-col">
                    <p class="text-secondary">Featured Project</p>
                    <h3 class="font-raleway font-bold text-[20px]">EduPorch Website</h3>
                    <div class="lg:hidden col-span-full md:col-span-6 min-h-[300px] inline-block bg-[url('/dist/images/projects/eduporch.png')] bg-center bg-cover bg-no-repeat"></div>
                    <div class="bg-[#112240] grow p-6 my-5">
                        The website aims to explain the uses of <a href="https://eduporch.com/" target="_blank">EduPorch</a>
                        a product developed by <a href="https://www.alusofttechnologies.com/">AluSoft Technologies LTD</a>
                        and help the targeted customers register and manage their accounts without coming in contact with
                        the developers of the product, complete automation of the rigorous approach
                        used before to get users started.
                    </div>
                    <div class="flex flex-wrap justify-center md:justify-end gap-x-3 my-2 text-sm">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                        <span>Javascript</span>
                        <span>JQuery</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>Paystack</span>
                    </div>
                    <div class="flex justify-center md:justify-end mt-3">
                        <div class="mr-2"><img src="/dist/images/github.svg" width="80%" alt="github"></div>
                        <a href="https://eduporch.com" target="_blank" class="ml-2"><img src="/dist/images/link.svg" width="80%" alt="link"></a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 my-[50px]">
                <div class="md:order-2 hidden col-span-full md:col-span-6 min-h-[300px] lg:inline-block bg-[url('/dist/images/projects/fx.png')] bg-center bg-cover bg-no-repeat"></div>
                <div class="md:order-1 col-span-full lg:col-span-6 text-right flex flex-col">
                    <p class="text-secondary">Featured Project</p>
                    <h3 class="font-raleway font-bold text-[20px]">FirstX</h3>
                    <div class="lg:hidden col-span-full lg:col-span-6 min-h-[300px] inline-block bg-[url('/dist/images/projects/fx.png')] bg-center bg-cover bg-no-repeat"></div>
                    <div class="bg-[#112240] grow p-6 my-5">
                        FirstX is a SaaS platform from <a href="https://www.10xv.xyz/" target="_blank">10X Ventures</a>
                        that helps businesses gain their first "X" customers with intelligent
                        suggestions, corrections, and messaging algorithms to avoid messages being flagged as
                        spam or accounts as bots and so much more, all while simplifying the rigorous manual organic
                        outreach system. It uses Twitter via the Twitter API as the primary outreach channel.
                    </div>
                    <div class="flex flex-wrap justify-center md:justify-end gap-x-3 my-2 text-sm">
                        <span>React</span>
                        <span>TailwindCSS</span>
                        <span>Javascript</span>
                        <span>Typescript</span>
                        <span>PostgreSQL</span>
                        <span>Node.js</span>
                        <span>Blitz.js</span>
                        <span>Prisma</span>
                        <span>Stripe</span>
                    </div>
                    <div class="flex justify-center md:justify-end mt-3">
                        <div class="mr-2"><img src="/dist/images/github.svg" width="80%" alt="github"></div>
                        <a href="https://www.firstx.ai/" target="_blank" class="ml-2"><img src="/dist/images/link.svg" width="80%" alt="link"></a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 my-[50px]">
                <div class="md:order-1 hidden col-span-full md:col-span-6 min-h-[300px] lg:inline-block bg-[url('/dist/images/projects/sybg.png')] bg-center bg-cover bg-no-repeat"></div>
                <div class="md:order-2 col-span-full lg:col-span-6 text-right flex flex-col">
                    <p class="text-secondary">Featured Project</p>
                    <h3 class="font-raleway font-bold text-[20px]">SYBG</h3>
                    <div class="lg:hidden col-span-full md:col-span-6 min-h-[300px] inline-block bg-[url('/dist/images/projects/sybg.png')] bg-center bg-cover bg-no-repeat"></div>
                    <div class="bg-[#112240] grow p-6 my-5" contenteditable="true">
                        SYBG (Since You&apos;ve Been Gone) is another SaaS platform from
                        <a href="https://www.10xv.xyz/" target="_blank">10X Ventures</a> that offers website owners
                        a means to provide personalized product announcements delivered on-site, in-product, or via email.
                        No coding required.
                    </div>
                    <div class="flex flex-wrap justify-center md:justify-end gap-x-3 my-2 text-sm">
                        <span>React</span>
                        <span>TailwindCSS</span>
                        <span>Javascript</span>
                        <span>Typescript</span>
                        <span>PostgreSQL</span>
                        <span>Node.js</span>
                        <span>Blitz.js</span>
                        <span>Prisma</span>
                        <span>Stripe</span>
                    </div>
                    <div class="flex justify-center md:justify-end mt-3">
                        <div class="mr-2"><img src="/dist/images/github.svg" width="80%" alt="github"></div>
                        <a href="https://sybg.ai/home" target="_blank" class="ml-2"><img src="/dist/images/link.svg" width="80%" alt="link"></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="/projects" class="btn-outline-secondary inline-block my-10 mx-auto">See more projects</a>
    </section>
    <section class="m-[10vw] text-center" id="contact">
        <h2 class="font-raleway font-bold my-10 text-[30px]">Contact Me</h2>
        <p class="md:w-[40%] mx-auto">
            I&apos;m currently available for full-time or freelance opportunities.
            However, if you have a question or you just want to say hi,
            don&apos;t hesitate to contact me.
        </p>
        <a href="mailto:ajibola03official@gmail.com" class="btn-outline-secondary inline-block my-10 mx-auto">Get in touch</a>
        <div class="flex justify-center align-middle">
            <a href="https://github.com/Ajibola03" target="_blank" class="mr-5"><img class="cursor-pointer" src="/dist/images/github.svg" alt="github"></a>
            <a href="https://twitter.com/AtoyebiAjibola" target="_blank" class="mx-5"><img class="cursor-pointer" src="/dist/images/twitter.svg" alt="twitter"></a>
            <a href="https://www.linkedin.com/in/ajibola-atoyebi-23b59b217/" target="_blank" class="mx-5"><img class="cursor-pointer" src="/dist/images/linkedin.svg" alt="linkedin"></a>
            <a href="mailto:ajibola03official@gmail.com" class="ml-5"><img class="cursor-pointer" src="/dist/images/email.svg" alt="email"></a>
        </div>
    </section>
    <?php include_once('partials/footer.php')  ?>
</body>

</html>