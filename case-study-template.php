<style>
.cs-service-icons {
	display:flex;
	text-align: center;
}
.cs-icons-column {
	padding:4em;
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
  top: 15%;
	z-index: 10;
}
.the-results-top-inner {
	width: 47%;
	padding: 3em 2em 1em;
}
.the-results-top {
	display: flex;
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
}
#caseStudy .int-content {
	padding: unset;
	color: #fff;
}
#caseStudy .cs-company-info img {
	/* position: absolute;
	top: 0px;
	left: 0px;
	z-index: -1;
	width: 100%;
	height: 800px; */
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
	background-image: url(..images/larry_sons_team.jpg);
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
.cs-company-info-inner-wrapper {

}

.cs-company-info-inner-wrapper:after {
	background: linear-gradient(172deg, rgba(0, 0, 0, 0) 79.8%, rgba(255, 255, 255, 1) 80%);
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
}
.cs-percent-band {
	background: -webkit-linear-gradient(-45deg, rgba(0,71,82,1) 0%,rgba(12,203,207,1) 100%);
	display: flex;
	width: 100vw;
  position: relative;
  margin-left: -50vw;
  height: 500px;
  margin-top: 100px;
  left: 50%;
}
.percent-col-1 {
	width: 50%;
  text-align: center;
  padding: 5em 2em 2em;
}
.percent-col-2 {
	width: 50%;
	text-align:left;
	padding: 5em;
}
.percent-col-2 h2 {
	text-transform: lowercase;
	color: #fff!important;
}
.cs-company-info {
	height: 800px;
	padding: 5em;
	position: relative;
	z-index: 20;

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
										<li><?php echo $year; ?> ------- <?php echo $orgcall; ?></li>
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
				<section class="row">
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
					<h2>[Play recording button/text here]</h2>
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
			</div><!--end container-->
		<!-- </div><!--end.interior-content-->
	</div><!--end content-wrapper-->
</div><!--end wrapper-->

<?php get_footer();?>
