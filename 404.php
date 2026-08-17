<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<main id="content" class="site-main itsb-404">

	<section class="itsb-404-section">

		<!-- Background Decorations -->
		<div class="itsb-404-glow itsb-404-glow-one"></div>
		<div class="itsb-404-glow itsb-404-glow-two"></div>


		<div class="itsb-404-container">

			<!-- =================================================
			     LEFT CONTENT
			================================================= -->

			<div class="itsb-404-content">

				<div class="itsb-404-code">
					404
				</div>

				<div class="itsb-404-label">
					PAGE NOT FOUND
				</div>

				<h1>
					Looks like you've
					<span>taken a wrong turn.</span>
				</h1>

				<p>
					The page you're looking for doesn't exist,
					may have been moved, or the URL might be incorrect.
					Let's get you back on track.
				</p>


				<!-- Buttons -->

				<div class="itsb-404-actions">

					<a
						href="<?php echo esc_url( home_url( '/' ) ); ?>"
						class="itsb-404-primary"
					>
						<i class="fa-solid fa-house"></i>
						Back to Homepage
					</a>


					<a
						href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
						class="itsb-404-secondary"
					>
						View Services
						<i class="fa-solid fa-arrow-right"></i>
					</a>

				</div>


				<!-- Contact -->

				<div class="itsb-404-help">

					<span>
						Looking for something specific?
					</span>

					<a
						href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
					>
						Talk to me
						<i class="fa-solid fa-arrow-right"></i>
					</a>

				</div>

			</div>


			<!-- =================================================
			     RIGHT VISUAL
			================================================= -->

			<div class="itsb-404-visual">

				<div class="itsb-404-circle">

					<div class="itsb-404-inner-circle">
						<i class="fa-solid fa-link-slash"></i>
					</div>

				</div>

			</div>

		</div>

	</section>

</main>


<style>

/* =========================================================
   IT SUPPORT BEE
   404 PAGE
========================================================= */


/* =========================================================
   RESET / FULL WIDTH FIX
========================================================= */

body.error404 #content,
body.error404 .site-main,
body.error404 .itsb-404 {
	width: 100% !important;
	max-width: none !important;

	margin: 0 !important;

	padding: 0 !important;

	box-sizing: border-box;
}


/*
 * Prevent Hello Elementor from constraining
 * the 404 page inside its normal content width.
 */

body.error404 .site-main {
	position: relative;
}


/*
 * Full viewport width.
 *
 * The transform is useful if a parent theme
 * has centered the main content.
 */

body.error404 .itsb-404 {
	width: 100vw !important;
	max-width: 100vw !important;

	margin-left: 0 !important;
	margin-right: 0 !important;
}


/* =========================================================
   MAIN 404 SECTION
========================================================= */

.itsb-404-section {

	position: relative;

	display: flex;

	align-items: center;

	width: 100%;

	min-height: 650px;

	overflow: hidden;

	box-sizing: border-box;


	/* Main IT Support Bee gradient */

	background:
		radial-gradient(
			circle at 80% 20%,
			rgba(101, 42, 220, 0.55),
			transparent 32%
		),

		linear-gradient(
			120deg,
			#17004f,
			#2d058a
		);


	color: #ffffff;
}


/* =========================================================
   CONTENT CONTAINER
========================================================= */

.itsb-404-container {

	position: relative;

	display: grid;

	grid-template-columns:
		1.15fr 0.85fr;

	align-items: center;

	gap: 40px;

	width: min(
		1180px,
		calc(100% - 40px)
	);

	min-height: 650px;

	margin: 0 auto;

	z-index: 2;

	box-sizing: border-box;
}


/* =========================================================
   BACKGROUND DECORATIONS
========================================================= */

.itsb-404-glow {

	position: absolute;

	border-radius: 50%;

	pointer-events: none;

	z-index: 1;
}


/* Top-right rings */

.itsb-404-glow-one {

	width: 400px;

	height: 400px;

	right: -170px;

	top: -170px;

	border:
		1px solid
		rgba(255,255,255,.08);

	box-shadow:

		0 0 0 45px
		rgba(255,255,255,.015),

		0 0 0 90px
		rgba(255,255,255,.01);
}


/* Bottom-left glow */

.itsb-404-glow-two {

	width: 300px;

	height: 300px;

	left: -180px;

	bottom: -190px;

	background:
		rgba(112,35,240,.15);

	filter: blur(20px);
}


/* =========================================================
   LEFT CONTENT
========================================================= */

.itsb-404-content {

	position: relative;

	z-index: 5;

	padding: 70px 0;
}


/* =========================================================
   404 NUMBER
========================================================= */

.itsb-404-code {

	margin-bottom: 4px;

	color: #a8f000;

	font-size:
		clamp(90px, 12vw, 145px);

	font-weight: 900;

	line-height: .82;

	letter-spacing: -8px;
}


/* =========================================================
   LABEL
========================================================= */

.itsb-404-label {

	margin-bottom: 17px;

	color:
		rgba(255,255,255,.65);

	font-size: 9px;

	font-weight: 900;

	letter-spacing: 2px;

	text-transform: uppercase;
}


/* =========================================================
   HEADING
========================================================= */

.itsb-404-content h1 {

	max-width: 650px;

	margin: 0 0 18px;

	color: #ffffff;

	font-size:
		clamp(32px, 4vw, 48px);

	font-weight: 800;

	line-height: 1.08;

	letter-spacing: -1.5px;
}


/* Lime highlighted line */

.itsb-404-content h1 span {

	display: block;

	color: #a8f000;
}


/* =========================================================
   DESCRIPTION
========================================================= */

.itsb-404-content > p {

	max-width: 560px;

	margin: 0 0 30px;

	color:
		rgba(255,255,255,.68);

	font-size: 12px;

	line-height: 1.85;
}


/* =========================================================
   ACTION BUTTONS
========================================================= */

.itsb-404-actions {

	display: flex;

	align-items: center;

	gap: 10px;

	margin-bottom: 30px;
}


.itsb-404-primary,
.itsb-404-secondary {

	display: inline-flex;

	align-items: center;

	justify-content: center;

	gap: 9px;

	min-height: 46px;

	padding:
		0 20px;

	border-radius: 7px;

	font-size: 9px;

	font-weight: 900;

	line-height: 1;

	text-decoration: none;

	text-transform: uppercase;

	transition:
		transform .2s ease,
		background .2s ease,
		border-color .2s ease,
		color .2s ease;
}


/* Primary */

.itsb-404-primary {

	background: #a8f000;

	color: #111111;
}


.itsb-404-primary:hover {

	transform: translateY(-2px);

	background: #b5ff16;

	color: #111111;
}


/* Secondary */

.itsb-404-secondary {

	border:
		1px solid
		rgba(255,255,255,.25);

	background:
		rgba(255,255,255,.05);

	color: #ffffff;
}


.itsb-404-secondary:hover {

	transform: translateY(-2px);

	border-color: #a8f000;

	background:
		rgba(168,240,0,.05);

	color: #a8f000;
}


/* =========================================================
   CONTACT HELP
========================================================= */

.itsb-404-help {

	display: flex;

	align-items: center;

	gap: 8px;

	color:
		rgba(255,255,255,.45);

	font-size: 9px;
}


.itsb-404-help a {

	display: inline-flex;

	align-items: center;

	gap: 5px;

	color: #ffffff;

	font-weight: 700;

	text-decoration: none;

	transition: color .2s ease;
}


.itsb-404-help a:hover {

	color: #a8f000;
}


.itsb-404-help i {

	font-size: 7px;
}


/* =========================================================
   RIGHT VISUAL
========================================================= */

.itsb-404-visual {

	position: relative;

	display: flex;

	align-items: center;

	justify-content: center;

	min-height: 500px;

	z-index: 3;
}


/* =========================================================
   OUTER CIRCLE
========================================================= */

.itsb-404-circle {

	position: relative;

	display: flex;

	align-items: center;

	justify-content: center;

	width: 360px;

	height: 360px;

	border:
		1px solid
		rgba(255,255,255,.10);

	border-radius: 50%;

	background:

		radial-gradient(
			circle,

			rgba(112,35,240,.30),

			rgba(45,5,138,.05) 65%,

			transparent 70%
		);

	box-shadow:

		0 0 0 35px
		rgba(255,255,255,.015),

		0 0 0 70px
		rgba(255,255,255,.01);
}


/* =========================================================
   INNER DASHED RING
========================================================= */

.itsb-404-circle::before {

	content: "";

	position: absolute;

	width: 285px;

	height: 285px;

	border:
		1px dashed
		rgba(168,240,0,.22);

	border-radius: 50%;
}


/* Outer ring */

.itsb-404-circle::after {

	content: "";

	position: absolute;

	width: 440px;

	height: 440px;

	border:
		1px solid
		rgba(255,255,255,.045);

	border-radius: 50%;
}


/* =========================================================
   ICON CIRCLE
========================================================= */

.itsb-404-inner-circle {

	position: relative;

	display: flex;

	align-items: center;

	justify-content: center;

	width: 120px;

	height: 120px;

	border-radius: 50%;

	background:
		linear-gradient(
			135deg,
			#ffffff,
			#f1edf7
		);

	color: #2d058a;

	font-size: 34px;

	box-shadow:
		0 20px 50px
		rgba(0,0,0,.20);

	z-index: 5;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

	.itsb-404-section {

		min-height: auto;
	}


	.itsb-404-container {

		grid-template-columns: 1fr;

		min-height: auto;

		padding: 65px 0;
	}


	.itsb-404-content {

		padding: 0;
	}


	.itsb-404-visual {

		position: absolute;

		right: -110px;

		bottom: -90px;

		min-height: auto;

		opacity: .35;

		z-index: 1;
	}


	.itsb-404-circle {

		width: 320px;

		height: 320px;
	}

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

	.itsb-404-container {

		width:
			calc(100% - 30px);

		padding: 55px 0;
	}


	.itsb-404-code {

		font-size: 90px;

		letter-spacing: -5px;
	}


	.itsb-404-content h1 {

		font-size: 34px;

		letter-spacing: -1px;
	}


	.itsb-404-content > p {

		font-size: 11px;
	}


	.itsb-404-actions {

		flex-direction: column;

		align-items: stretch;
	}


	.itsb-404-primary,
	.itsb-404-secondary {

		width: 100%;
	}


	.itsb-404-help {

		flex-wrap: wrap;
	}


	.itsb-404-visual {

		right: -180px;

		opacity: .22;
	}

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

	.itsb-404-container {

		width:
			calc(100% - 24px);
	}


	.itsb-404-content h1 {

		font-size: 30px;
	}


	.itsb-404-code {

		font-size: 78px;
	}

}

</style>