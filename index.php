<?php
define("DS", DIRECTORY_SEPARATOR);
/** variable declarations and error-prone logic here */
$prev_works = array_diff(scandir(__DIR__ . DS . "dist" . DS . "images" . DS . "portfolio"), ['..', '.']);
$exp_yrs = date_diff(date_create('2019-03-12'), date_create(date('Y')))->y;
$categories = ['personal', 'official'];
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Atoyebi Ajibola | Full-Stack Developer</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <link href="dist/images/icon.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

    <link href="dist/css/A.common-css,,_bootstrap.css+common-css,,_ionico.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <style>
        .btn-primary,
        .btn-primary:active,
        .btn-primary:hover {
            color: #fff;
            background-color: #ffad01;
            border-color: #ffad01;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="heading-wrapper">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="info">
                            <i class="icon fa fa-map-marker-alt"></i>
                            <div class="right-area">
                                <h5>18 Joy Estate, Gbelu Iyana Agbala</h5>
                                <h5>Oyo state, Ibadan.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="info">
                            <i class="icon fa fa-phone-alt"></i>
                            <div class="right-area">
                                <h5>07083490591</h5>
                                <h6>MON - FRI,8AM - 7PM</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="info">
                            <i class="icon fa fa-envelope"></i>
                            <div class="right-area">
                                <h5>ajibola03official@gmail.com</h5>
                                <h6>REPLY IN 24 HOURS</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-lg-2"></div>
                <div class="col-md-10 col-lg-8">
                    <div class="intro">
                        <div class="profile-img">
                            <img src="dist/images/profile.jpg" alt="">
                        </div>
                        <h2><b>Atoyebi Ajibola</b></h2>
                        <h4 class="font-yellow">Full Stack Developer</h4>
                        <ul class="information margin-tb-30">
                            <li><b>BORN : </b>May 21, 2003</li>
                            <li><b>EMAIL : </b>ajibola03official@gmail.com</li>
                            <li><b>MARITAL STATUS : </b>Single</li>
                        </ul>
                        <ul class="social-icons">
                            <li><a href="https://twitter.com/AtoyebiAjibola?s=09" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://github.com/Ajibola03" target="_blank"><i class="fab fa-github"></i></a></li>
                            <li><a href="https://gitlab.com/Ajibola03" target="_blank"><i class="fab fa-gitlab"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>Portfolio</b></h3>
                        <h6 class="font-lite-black"><b>MY WORK</b></h6>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="portfolioFilter clearfix margin-b-80">
                        <!-- Images of my past projects.-->
                        <a style="cursor: pointer;" data-filter="all" class="current shuffle-toggle"><b>ALL</b></a>
                        <?php foreach ($categories as $value) { ?>
                            <a style="cursor: pointer;" data-filter="<?= $value ?>" class="shuffle-toggle"><b><?= strtoupper($value) ?></b></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-1 my-sizer-element"></div>
            <div class="row my-shuffle">
                <?php foreach ($prev_works as $file) {
                    $split = explode('-', $file);
                    $category = explode('.', end($split))[0];
                ?>
                    <div class="p-item web-design" data-groups="[&quot;<?= $category ?>&quot;]">
                        <a><img src="dist/images/portfolio/<?= $file ?>" alt="" data-pagespeed-url-hash="162059638"></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="about-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>About me</b></h3>
                        <h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
                    </div>
                </div>
                <div class="col-sm-8">
                    <p class="margin-b-50">I am a developer with full stack web and cross-platform
                        mobile development skill, with professional level and mastery in languages and
                        technologies such as php, javascript, flutter, laravel, node.js, express,
                        sql and mongodb</p>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".97">
                                    <div></div>
                                    <h6 class="progress-title">HTML5 & CSS3</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".95">
                                    <div></div>
                                    <h6 class="progress-title">NODE & EXPRESS</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".93">
                                    <div></div>
                                    <h6 class="progress-title">SQL & MONGODB</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50">
                                <div class="radial-progress" data-prog-percent=".96">
                                    <div></div>
                                    <h6 class="progress-title">PHP & LARAVEL</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="experience-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>Work Experience</b></h3>
                        <h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="experience margin-b-50">
                        <h4><b>Zuri Internship Program (HNGi8 x !14G)</b></h4>
                        <h5 class="font-yellow"><b>BACKEND DEVELOPER</b></h5>
                        <h6 class="margin-t-10">AUGUST 2021 - PRESENT</h6>
                        <p class="font-semi-white margin-tb-30">
                            <a href="https://internship.zuri.team/"><img src="dist/images/zuri-logo.svg" alt="zuri logo"></a><br>
                            The Zuri Internship program is a remote internship that enables you
                            learn and improve your skills by working on real-world projects. Here is a link
                            to find out more about the program <a href="https://internship.zuri.team/">here</a>.
                        </p>
                        <ul class="list margin-b-30">
                            <li>8 weeks Program.</li>
                            <li>Remote. </li>
                            <li>Work individually and in groups over a series of 8 stages.</li>
                            <li>Several Tracks/Stacks Available.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="education-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>Education</b></h3>
                        <h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="education-wrapper">
                        <div class="education margin-b-50">
                            <h4><b style="text-transform: uppercase;">Bachelor of Science (Geology)</b></h4>
                            <h5 class="font-yellow"><b style="text-transform: uppercase;">Obafemi Awolowo University, Ile-Ife, Nigeria</b></h5>
                            <h6 class="font-lite-black margin-t-10" style="text-transform: uppercase;">ONGOING</h6>
                            <p class="margin-tb-30">
                                Obafemi Awolowo University (OAU) is a federal government owned university located
                                in the ancient city of Ile-Ife, Osun State, Nigeria. The university was founded
                                in 1961 and classes commenced in October 1962 as the University of Ife by the regional
                                government of Western Nigeria, led by late chief Samuel Ladoke Akintola, and was
                                renamed Obafemi Awolowo University on 12 May 1987 in honour of Chief Obafemi Awolowo
                                (1909–1987), first premier of the Western Region of Nigeria.
                            </p>
                        </div>
                        <div class="education margin-b-50">
                            <h4><b style="text-transform: uppercase;">S.S.C.E</b></h4>
                            <h5 class="font-yellow"><b style="text-transform: uppercase;">King's International College, Moniya, Ibadan, Nigeria</b></h5>
                            <h6 class="font-lite-black margin-t-10" style="text-transform: uppercase;">2013-2019</h6>
                            <p class="margin-tb-30">
                                King’s International College (KIC) is a government-approved, co-educational institution. It is a private
                                institution that accommodates both day and boarding students. KIC is situated on 35 acres of land,
                                15 kilometers from Ibadan, Oyo State.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="education-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>Contact</b></h3>
                        <h6 class="font-lite-black"><b></b></h6>
                    </div>
                </div>
                <div class="col-sm-8 my-3">
                    <form action="controllers/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-section" id="counter">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="counter margin-b-30">
                        <h1 class="title"><b><span class="counter-value" data-duration="400" data-count="15">0</span></b></h1>
                        <h5 class="desc"><b>Languages & Technologies</b></h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="counter margin-b-30">
                        <h1 class="title"><b><span class="counter-value" data-duration="1400" data-count="10">0</span></b></h1>
                        <h5 class="desc"><b>Project Completed</b></h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="counter margin-b-30">
                        <h1 class="title"><b><span class="counter-value" data-duration="700" data-count="<?= $exp_yrs ?>">0</span></b></h1>
                        <h5 class="desc"><b>Years of Experience</b></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p class="copyright">Copyright &copy; <?php echo date('Y'); ?> All rights reserved</p>
    </footer>

    <script src="dist/js/jquery-3.2.1.min.js"></script>
    <script src="dist/js/tether.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <script src="dist/js/isotope.js"></script>
    <script src="vendors/shufflejs/dist/shuffle.js"></script>
    <script>
        var Shuffle = window.Shuffle;
        var jQuery = window.jQuery;
        var myShuffle = new Shuffle(document.querySelector('.my-shuffle'), {
            itemSelector: '.p-item',
            sizer: '.my-sizer-element',
            buffer: 1,
        });
        jQuery('.shuffle-toggle').on('click', function(evt) {
            $('.shuffle-toggle').removeClass('current');
            var input = $(evt.currentTarget);
            input.addClass('current');
            var val = input.attr("data-filter");
            myShuffle.filter(val);
        });
    </script>

    <script>
        eval(mod_pagespeed_c1zmmXJ4$R);
    </script>
    <script>
        eval(mod_pagespeed_yu8C2OtpiI);
    </script>
    <script>
        eval(mod_pagespeed_RxhYnZjBKa);
    </script>
    <script>
        eval(mod_pagespeed_FiXB1FkK3F);
    </script>
    <script>
        eval(mod_pagespeed_2srAC6686o);
    </script>
</body>

</html>