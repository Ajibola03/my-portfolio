<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Atoyebi Ajibola | Software Developer</title>
	<meta name="robots" content="noindex, nofollow">
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="dist/images/icon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="dist/css/main.css">
	<link rel="stylesheet" href="dist/css/animate.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
	<?php if($_SESSION['mail_sent']) { ?>
		<div class="alert flash alert-success m-2 animate__animated animate__backInDown" style="position: fixed; right: 0%; z-index: 10000" role="alert">
			Mail sent successfully!
		</div>
		<script>
			setTimeout(() => {
				$('.flash').removeClass('animate__backInDown').addClass('animate__backOutUp')
			}, 3000)
		</script>
	<?php $_SESSION['mail_sent'] = false; } ?>
	<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
	<!-- ======= Header ======= -->
	<header id="header" class="d-flex flex-column justify-content-center">
		<!-- nav-menu -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
					</li>
					<li class="nav-item">
						<a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
					</li>
					</li>
					<li class="nav-item">
						<a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- .nav-menu -->

	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex flex-column justify-content-center mb-3">
		<div class="container py-5 my-5" data-aos="zoom-in" data-aos-delay="100">
			<h1>Atoyebi Ajibola</h1>
			<p>I'm a <span>Developer</span></p>
			<div class="social-links py-2">
				<a href="https://twitter.com/AtoyebiAjibola?s=09" target="_blank" class="twitter"><i class="fab icon fa-twitter"></i></a>
				<a href="https://github.com/Ajibola03" target="_blank" class="github"><i class="fab icon fa-github"></i></a>
				<a href="https://gitlab.com/Ajibola03" class="gitlab" target="_blank"><i class="fab icon fa-gitlab"></i></a>
			</div>
		</div>
	</section>
	<!-- End Hero -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>About</h2>
					<p>I am a developer with full stack web and cross-platform mobile development skill with professional level of mastery in languages and technologies such as php, javascript, flutter, laravel, node.js, express, sql and mongodb</p>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<img src="dist/images/pexels-drew-williams-3098620-min.jpg" class="img-fluid" alt="">
					</div>
					<div class="col-lg-8 pt-4 pt-lg-0 content">
						<h3>Full-stack Web Developer &amp; Cross platform Mobile Developer (Android & iOS).</h3>
						<p class="fst-italic">
							Professional web developer with 3 years experience.
						</p>
						<div class="row">
							<div class="col-lg-6">
								<ul>
									<li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>18</span></li>
									<li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+2347083490591</span></li>
									<li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>S.S.C.E</span></li>
									<li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
									<li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Ibadan, Nigeria</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End About Section -->

		<!-- ======= Skills Section ======= -->
		<section id="skills" class="skills section-bg my-2">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Skills</h2>
					<p>Here are some of my languages and my proficiency with them.</p>
				</div>

				<div class="row skills-content">

					<div class="col-lg-6">

						<div class="px-2 pb-2" style="background:#E9ECEF">
							<span class="skill">HTML <i class="val">100%</i></span>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="border-radius: none !important; width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>

						<div class="px-2 pb-2" style="background:#E9ECEF">
							<span class="skill">CSS <i class="val">90%</i></span>
							<div class="progress bg-dark">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="border-radius: none !important; width: 90%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>

						<div class="px-2 pb-2" style="background:#E9ECEF">
							<span class="skill">Javascript <i class="val">100%</i></span>
							<div class="progress bg-dark">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="border-radius: none !important; width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="px-2 pb-2" style="background:#E9ECEF">
							<span class="skill">PHP <i class="val">80%</i></span>
							<div class="progress bg-dark">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="border-radius: none !important; width: 80%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>

						<div class="px-2 pb-2" style="background:#E9ECEF">
							<span class="skill">NodeJs <i class="val">80%</i></span>
							<div class="progress bg-dark">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="border-radius: none !important; width: 80%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>

						<div class="px-2 pb-2" style="background:#E9ECEF">
							<span class="skill">SQL <i class="val">80%</i></span>
							<div class="progress bg-dark">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="border-radius: none !important; width: 80%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</section><!-- End Skills Section -->

		<!-- ======= Resume Section ======= -->
		<section id="resume" class="resume my-3">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Resume</h2>
					<p>Information about my education, previous jobs and internship programs.</p>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<h3 class="resume-title">Summary</h3>
						<div class="resume-item pb-0">
							<h4>Atoyebi Ajibola</h4>
							<p><em>I am a pro web developer with 3 years experience in the field and with my skills in the use of Git (GitLab and GitHub) and experience with PHP, Node.js and Express would like to take up any of your software development tasks.</em></p>
							<ul>
								<li>Address: 18, Joy Estate Gbelu Iyana Agbala, Oyo state, Ibadan.</li>
								<li>07083490591</li>
							</ul>
						</div>

						<h3 class="resume-title">Education</h3>
						<div class="resume-item">
							<h4>Bachelor of Science (Geology)</h4>
							<h5>Ongoing</h5>
							<p><em>Obafemi Awolowo University, Ile-Ife, Nigeria</em></p>
							<!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
						</div>
						<div class="resume-item">
							<h4>S.S.C.E</h4>
							<h5>2013-2019</h5>
							<p><em>King's International College, Moniya, Ibadan, Nigeria</em></p>
							<!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
						</div>
					</div>
					<div class="col-lg-6">
						<h3 class="resume-title">Internship Experience</h3>
						<div class="resume-item">
							<h4>Zuri Internship Program (HNGi8 x !14G)</h4>
							<h5>2021</h5>
							<p><em><a href="https://internship.zuri.team/">Zuri Website</a></em></p>
							<p><a href="https://internship.zuri.team/"><img src="dist/images/zuri-logo.svg" alt="zuri logo"></a></p>
							<ul>
								<li>8 weeks Program.</li>
								<li>Remote. </li>
								<li>Work individually and in groups over a series of 8 stages.</li>
								<li>Several Tracks/Stacks Available.</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Resume Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact my-5">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
				</div>

				<div class="row mt-1">

					<div class="col-lg-4">
						<div class="info">
							<div class="address">
								<i class="bi bi-geo-alt"></i>
								<h4>Location:</h4>
								<p>Address: 18, Joy Estate Gbelu Iyana Agbala, Oyo state, Ibadan.</p>
							</div>

							<div class="email">
								<i class="bi bi-envelope"></i>
								<h4>Email:</h4>
								<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bed7d0d8d1fedbc6dfd3ced2db90ddd1d3">[email&#160;protected]</a></p>
							</div>

							<div class="phone">
								<i class="bi bi-phone"></i>
								<h4>Call:</h4>
								<p>07083490591</p>
							</div>

						</div>

					</div>

					<div class="col-lg-8 my-5 mt-lg-0">

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
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="text-center p-5" style="background-color: #e9ecef;">
		<div class="container">
			<h3>Atoyebi Ajibola</h3>
			<p>Full-stack Web and Mobile Developer</p>
			<div class="social-links">
				<a href="https://twitter.com/AtoyebiAjibola?s=09" target="_blank" class="twitter"><i class="fab icon fa-twitter"></i></a>
				<a href="https://github.com/Ajibola03" target="_blank" class="github"><i class="fab icon fa-github"></i></a>
				<a href="https://gitlab.com/Ajibola03" class="gitlab" target="_blank"><i class="fab icon fa-gitlab"></i></a>
			</div>
			<div class="copyright">
				&copy; Copyright <?= date('Y') ?> <strong><span>MyResume</span></strong>. All Rights Reserved
			</div>
		</div>
	</footer><!-- End Footer -->

	<!-- Vendor JS Files -->
	<script src="vendors/bootstrap/dependencies/jquery-3.4.1.js"></script>
	<script src="vendors/bootstrap/dependencies/popper.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="dist/js/main.js"></script>
</body>

</html>