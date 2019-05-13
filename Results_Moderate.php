<?php /* Template Name: Results Moderate */

get_header();?>

<body id="page" <?php body_class('mmm'); ?>>
	<h1 class="mainLandingPageTitle"><?php the_field('main_label'); ?></h1>
<div id="wrapper">
		<div id="content-wrapper">
			<div class="int-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="top-content">
								<div class="ccm-col-1">
									<h1>STEP 1: </h1>
									<h3>REVIEW YOUR RESULTS</h3>
								</div>
								<div class="ccm-col-2">
									<img src="<?php echo get_stylesheet_directory_uri();
										?>/images/arrow_dark teal.png" alt="Wit Dark Arrow" width="" height="" />
								</div>
							</div>
								<?php the_field('header_text'); ?>
								<?php the_field('you_have_some_work_to_do'); ?>
								<div class="nextSteps">
									<?php the_field('next_steps'); ?>
								</div>
						</div><!--end col-md-8-->
						<div class="col-md-4">
							<div class="sidebar-top-content">
								<h1>STEP 2: </h1>
								<h3>FILL OUT THE FORM</h3>
							</div>
							<section id="sidebar" class="resultsSidebar" role="main">
						     <div class="freecall-wrapper">
			            	<div class="fcw-headerlandingpage">
			            		Get your FREE, 25-minute, no commitment call.
			            	</div>
			            	<div class="fcw-info">
				            	<div class="fcw-text">
				            		<div class="fcwt-titlelaningpage"></div>
													Our goal is to help you make a decision that is
													best for your business and goals (even if for some reason
													that isn't us).
				            	</div>
			            	<div class="fcw-form" style="padding-top: .8em;">
			            		<?php echo FrmFormsController::show_form(34, $key = 'orcad', $title=false, $description=false); ?>
	            		</div>
	            	</div><!--fcw-info-->
			        </div><!--.freecall-wrapper-->
					</section><!-- end.sidebar -->
				</div><!--end col-md-4-->
			</div><!--end row-->
		</div><!--end container-->
	</div><!--end.interior-content-->
</div><!--end content-wrapper-->

		<?php get_footer();?>

<style>
.ccm-col-2 {
	width: 30%;
}
.top-content {
	display: flex;
	justify-content: space-between;
}
.top-content img {
	transform: rotate(45deg);
	width: auto;
	height: 141px;
}
.col-md-8 .top-content h3 {
	margin:0 0 67px;
}
.fcw-headerlandingpage {
	background-color: rgba(0, 71, 82, 1);
	color: white;
	padding: .5em;
	font-size: 1.5em;
	font-weight: 500;
}
.fcwt-titlelaningpage {
	padding: .5em;
	font-style: bold;
}
.mainLandingPageTitle {
	text-align: center;
	background-color: rgba(0, 71, 82, 1);
	color: white !important;
	padding: 30px 0px 30px 0px;
	margin-top: none!important;
}
.speedometer {
	margin-bottom: 4em;
}
.resultsSidebar {
	margin-top: 3.5em;
}
.nextSteps ul {
  list-style: none!important;
  padding: 0;
}
.nextSteps li {
	background-image: url(/wp-content/uploads/2018/09/icon_check_copy.png);
	 padding: .2em 2.4em 1em;
	 margin: 1em 0em;
	 list-style: none;
	 background-repeat: no-repeat;
}
li:before {
  float: left;
  margin-left: -1.3em; /* same as padding-left set on li */
  width: 1.3em; /* same as padding-left set on li */
}
@media only screen and (max-width : 1000px) {
	.top-content img {
		display: none;
	}
}
@media only screen and (max-device-width : 480px) {
		.top-content {
			display: block;
		}
		.page-id-4676 {
			text-align: center;
		}
		.int-content {
			padding: 0!important;
		}
		.top-content h1, h3 {
			text-align: center;
		}
}


</style>
