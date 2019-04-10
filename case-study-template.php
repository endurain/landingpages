<style>
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
  top: 28%;
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
#caseStudy .cs-company-info h5 {
	color: #fff;
}
.cs-company-info-wrapper {
	background: url('https://loremflickr.com/1320/1240');
	background-size: cover;
	position: relative;
	/* background: red; */
}
.cs-company-info-wrapper:before {
/* -webkit-linear-gradient(-90deg, rgba(0, 0, 0, 0) 0%, rgba(20, 23, 24, 0.79) 100%);
background-image: -moz-linear-gradient(-90deg, rgba(0, 0, 0, 0) 0%, rgba(20, 23, 24, 0.79) 100%);
background-image: -o-linear-gradient(-90deg, rgba(0, 0, 0, 0) 0%, rgba(20, 23, 24, 0.79) 100%); */
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
.cs-company-info {
	height: 800px;
	padding: 5em;
	position: relative;
	z-index: 20;

}
</style>

<?php

//Template Name: Case Study
//Author: Zac Sanders
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
							<!-- icons to go here -->
							<!-- followed by company description -->
						</div>
					<!-- <img src="<?php echo get_stylesheet_directory_uri();
						?>/images/larry_sons_team.jpg" alt="Larry&Sons Team" /> -->
					</div>
			 </div>
		 </div>
			<div class="sharkfin-laptop">
				<img src="<?php echo get_stylesheet_directory_uri();
					?>/images/larrysons_mockup_laptop.png" alt="Mockukp Laptop" />
			</div>
			<div class="container">
				<div class="row">
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
				</div><!--end row-->
				<div class="row">
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
				</div><!--end row-->
				<div class="row">
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
				</div><!--end row-->
			</div><!--end container-->
		<!-- </div><!--end.interior-content-->
	</div><!--end content-wrapper-->
</div><!--end wrapper-->

<?php get_footer();?>
