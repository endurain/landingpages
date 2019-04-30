<style>
.cs-service-icons {
	display:flex;
	text-align: center;
}
.cs-icons-column {
	padding:4em 4em 4em 0;
}
.identifying-needs {
	padding: 3em 2em;
}
.identifying-needs-inner {
	padding:4em;
}
.identifying-needs-inner p {
	padding-right: 46%;
  word-break: break-word;
}
.identifying-needs-top, .our-solution-top {
	display: flex;
}
.our-solution-top img {
	height:418px;
}
.identifying-needs-top img {
	height: 450px;
  transform: rotate(-10deg);
}
.sharkfin-laptop img {
	height: 566px;
  position: absolute;
  right: 8%;
  top: 6%;
	z-index: 10;
}
.the-results-top-inner {
	width: 53%;
	padding: 3em 2em 1em;
}
.the-results-top {
	display: flex;
	align-items: flex-start;
}
.the-results-top h1, .identifying-needs h1,
.our-solution h1 {
	text-transform: uppercase;
	font-size: 58px;
	margin:0;
}
.the-results-top img {
	width: 150px;
	height: auto;
  padding-top: 58px;
}
#caseStudy .int-content {
	padding: unset;
	color: #fff;
}
#caseStudy .cs-company-info h1 {
	margin:0;
	color:#fff;
	font-size:68px;
}
#caseStudy .cs-company-info h5, .cs-icons-column h2 {
	color: #fff;
}
.cs-company-info-wrapper {
	background-image: url(images/larry_sons_team.jpg);
	background-size: cover;
	position: relative;
	/* background: red; */
}
.cs-company-info-wrapper:before {
	background: linear-gradient(-90deg, rgba(0, 0, 0, 0) 0%, rgba(20, 23, 24, 0.79) 100%);
	position: absolute;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	content: '';
	z-index: 10;
}
.cs-company-info-inner-wrapper:after {
	background: linear-gradient(172.5deg, rgba(0, 0, 0, 0) 76.8%, rgba(255, 255, 255, 1) 77%);
	position: absolute;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	content: '';
	z-index: 10;
}
.cs-vid {
	padding: 5em 0;
	text-align: center;
}
.cs-percent-band {
	background: -webkit-linear-gradient(-45deg, rgba(0,71,82,1) 0%,rgba(12,203,207,1) 100%);
	display: flex;
	width: 100vw;
  position: relative;
  margin-left: -50vw;
  height: 500px;
  left: 50%;
}
.percent-col-1 {
	width: 40%;
  text-align: center;
  padding: 5em 2em 2em;
}
.percent-col-2 {
	width: 60%;
	text-align:left;
	padding: 5em;
}
.percent-col-2 h2 {
	text-transform: lowercase;
	color: #fff!important;
	font-family: 'ProximaNova-Regular'!important;
	font-weight: 100!important;
	line-height: 1.5em;

}
.cs-company-info {
	height: 800px;
	padding: 5em;
	position: relative;
	z-index: 20;
}
.the-yearly-results ul {
  list-style: none!important;
  padding: 0;
}
/*create custom wit dot*/
.yearly-organic-calls li:before {
	content: ' \25CF';
  font-size: 45px;
	color: rgba(0, 211, 216, 1);
}
.yearly-organic-calls li {
	display: inline-flex;
	align-items: center;
}
.yearly-organic-calls li hr {
	width: 50px;
  margin: 0 32px;
	border-color: rgb(151, 144, 144);
}
.spec-yr {
	font-size: 34px;
  margin: 8px 8px 0;
  font-weight: 900;
  color: #000;
  font-family: 'Bicyclette';
}
.spec-call {
	margin: 0 0 0px;
}
/*place emphasis on last li item*/
.the-yearly-results ul:last-child {
	font-size: 25px;
  color: #000;
}
.cs-testimonial {
	background-color:#fff;
	width: 100vw;
	position: relative;
	margin-left: -50vw;
	height: 650px;
	margin-top: 100px;
	left: 50%;
}
.cs-test-inner {
  padding: 2em 4em;
}
.cs-test-inner h1 {
	line-height: 56px;
  font-size: 45px;
	color:#000;
}
.cs-test-inner p {
	font-size: 19px;
	line-height: 29px;
	color:#000;
}
.cs-test-inner h3 {
	text-align: right;
	text-transform: capitalize;
	color: #000;
	font-weight: 100!important;
}
.dom-srv-area {
	background-color: rgba(0, 211, 216, 1);
	width: 100vw;
  position: relative;
  margin-left: -50vw;
  height: 500px;
  left: 50%;
}
.dom-srv-area-inner {
	text-align: center;
  padding: 1em 15em;
}
.dom-srv-area h1, .dom-srv-area h3 {
	color: rgba(4, 77, 79, 1);
}
.dom-srv-area h1 {
	font-size: 67px;
}
.cs-test-inner:after {
  background: linear-gradient(185.5deg, rgba(0, 0, 0, 0) 70.8%, rgba(0, 211, 216, 1) 71%);
	position: absolute;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	content: '';
	z-index: 10;
}
.ttu-cta {
	border: 4px solid rgba(4, 77, 79, 1);
	margin: 45px 450px;
}
.ttu-cta:hover {
	border: 4px solid #FFAD00;
}
.ttu-cta h2 {
	margin-top:11px;
}
.dom-srv-area-inner a:hover {
	text-decoration: none!important;
}
</style>

<?php

//Template Name: Case Study
//Author: Endurain
//Wit Digital 3.20.19

get_header();?>

<body id="caseStudy" <?php body_class('mmm'); ?>>
	<div id="wrapper">
    <?php include(TEMPLATEPATH . '/banner.php'); ?>
    <?php include(TEMPLATEPATH . '/mobile-nav.php'); ?>
	<div id="content-wrapper">
		<!-- <div class="int-content"> -->
			<div class="cs-company-info-wrapper">
					<div class="cs-company-info-inner-wrapper">
						<div class="cs-company-info">
							<h1><?php echo get_field('company_name'); ?></h1>
							<h5>Plumbing Heating Cooling Drain</h5>
							<div class="cs-service-icons">
								<div class="cs-icons-column">
									<img src="<?php echo get_stylesheet_directory_uri();
										?>/images/icon_home_service.svg" style="height:74px;" alt="home service" />
									<h2>INDUSTRY</h2>
									<h5>Home Serivce</h5>
								</div>
								<div class="cs-icons-column">
									<img src="<?php echo get_stylesheet_directory_uri();
										?>/images/icon_seo.svg" style="height:74px;" alt="seo icon" />
									<h2>SERVICES</h2>
									<h5>SEO</h5>
								</div>
							</div>
					</div>
			 </div>
		 </div>
			<div class="sharkfin-laptop">
				<img src="<?php echo get_stylesheet_directory_uri();
					?>/images/larrysons_mockup_laptop.png" alt="Mockukp Laptop" />
			</div>
			<div class="container">
				<section class="row">
					<div class="the-results-top">
						<img src="<?php echo get_stylesheet_directory_uri();
							?>/images/icon_results.svg" alt="results icon" />
						<div class="the-results-top-inner">
							<h1>The Results</h1>
							<p><?php echo get_field('results_top_content'); ?></p>
								<div class="the-yearly-results">

									<?php while( have_rows('yearly_results') ): the_row();
										$year = get_sub_field('year');
										$orgcall = get_sub_field('organic_calls');
									?>
									 <ul class="yearly-organic-calls">
										<li>
											<p class="spec-yr"><?php echo $year; ?></p>
												<hr>
											<p class="spec-call"><?php echo $orgcall; ?></p>
										</li>
									 </ul>
									<?php endwhile; ?>

								</div>
						</div>
					</div>
				</section><!--end row-->
				<section class="row">
					<div class="identifying-needs">
						<div class="identifying-needs-top">
							<img src="<?php echo get_stylesheet_directory_uri();
								?>/images/Larry_sonsiPhone_mockup2.png" alt="mockukp iphone" />
							<div class="identifying-needs-inner">
								<h1>identifying Needs</h1>
								<p><?php echo get_field('identifying_needs_content'); ?></p>
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="our-solution">
						<div class="our-solution-top">
							<div class="our-solution-inner">
								<h1>Our Solution</h1>
								<p><?php echo get_field('our_solution_content'); ?></p>
							</div>
							<img src="<?php echo get_stylesheet_directory_uri();
								?>/images/larrysons_mockup_laptop_2.png" alt="mockukp laptop" />
						</div>
					</div>
				</section>
				<section class="cs-vid">
					<img src="<?php echo get_stylesheet_directory_uri();
						?>/images/elk_construction_mockup_2.png" />
					<h2>PLAY RECORDING
						<a>
							<img
								src="<?php echo get_stylesheet_directory_uri();
								?>/images/icon_play.svg" alt="" width="" height="" />
						</a>
					</h2>
				</section>
				<section class="cs-percent-band">
					<div class="percent-col-1">
						<img src="<?php echo get_stylesheet_directory_uri();
							?>/images/icon_devices.svg" height="254px" />
						<!-- add animated text here -->
						<h1 style="color:#fff;font-size:70px;">32% INCREASE</p>
					</div>
					<div class="percent-col-2">
						<h2><?php echo get_field('increase_band_content'); ?></h2>
					</div>
				</section>
				<section class="cs-testimonial">
					<div class="cs-test-inner">
						<h1>We All have had the vendor that promises to be different and help
								our business get to the next level but rarely does that happen...
								until now.
						</h1>
						<p>I partnered up with Stephen to remodel our web site and grow our
							site traffic. So his team totally revamped the site with 70-80% traffic
							increase. Great new right....but the best part is his team, the attention
							and followup on projects is exactly what I and most of us need. A big
							thank you to the whole Wit Digital team for a huge bump in traffic and
							doing what you said you were going to do, when you said you were going
							to do it.
						</p>
						<h3>-Eric Corbett, Owner of Larry & Sons Inc.</h3>
					</div>
				</section>
				<section class="dom-srv-area">
					<div class="dom-srv-area-inner">
						<h3>Sick of mediocrity?</h3>
						<h1>You can dominate your service area</h1>
						<a href="">
							<div class="ttu-cta">
								<h2>Talk to us</h2>
							</div>
						</a>
					</div>
				</section>
			</div><!--end container-->
		<!-- </div><!--end.interior-content-->
	</div><!--end content-wrapper-->
</div><!--end wrapper-->

<?php get_footer();?>
