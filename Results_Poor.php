<?php /* Template Name: Results Poor */

get_header();?>

<body id="page" <?php body_class('mmm'); ?>>
	<h1 class="mainLandingPageTitle"><?php the_field('main_label'); ?></h1>
	<div id="wrapper">
<div id="content-wrapper">
		<div class="int-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="center-content-mobile">
								<h1>STEP 1: </h1>
								<h3>REVIEW YOUR RESULTS</h3>
								<div class="speedometer">
									<img src="<?php the_field('speedometer'); ?>" alt="" />
								</div>
								<h3>YOU HAVE SOME WORK TO DO.</h3>
								<?php the_field('you_have_some_work_to_do'); ?>
								<div class="nextSteps">
									<?php the_field('next_steps'); ?>
								</div>
								<div>
									<p style="padding-bottom: 1em;">for your full results and checklist, request to join our Facebook group.</p>
								</div>
								<div class="joinNowButton">
									<a href="https://www.facebook.com/groups/HomeServiceMarketing/" style="text-decoration: none!important;">
										<div id="fbJoinNow" class="joinNowText" style="color: rgba(0, 71, 82, 1);">
											<img class="fbIcon" src="/wp-content/uploads/2018/09/icon_facebook-3x.png">
											JOIN NOW
										</div>
									</a>
								</div>
							</div>
						</div><!--end col-md-8-->
						<div class="col-md-4">
							<div class="center-content-mobile">
								<h1>STEP 2: </h1>
								<h3 id="joinFaceBookGroup">JOIN THE FACEBOOK GROUP</h3>
							</div>
							<section id="sidebar" class="resultsSidebar" role="main">
						     <div class="facebook-wrapper">
			            	<div class="facebook-header">
											<p>Join the Home Service Marketing Facebook Group and
												connect with 260+ other like-minded entrepreneurs in
												the local service industry to talk about marketing,
												creating success, and scaling their businesses.
			            		</p>
			            	<div class="sidebarTestimonial">
											<img class="sidebarImage" src="/wp-content/uploads/2018/09/fb_testimonial_headshots_1-3x.png">
											<div class="testimonialContent">
												<p class="testimonialText">This groups regular live videos are packed with value
													for my business!
												</p>
												<p style="text-align: -webkit-right;">- Adam F.</p>
											</div>
											<img class="sidebarImage" src="/wp-content/uploads/2018/09/fb_testimonial_headshots_2-3x.png">
										<div class="testimonialContent">
											<p class="testimonialText">
												I can't even begin to tell you the value this group offers.
												You have curated members you've brought home service
												marketers together, and the group has focus. I get so much
												value out of this group and I thank you for your time
												and effort.
											</p>
											<p style="text-align: -webkit-right;">- Katie S.</p>
										</div>
				            	<div class="joinNowButton">
												<a href="https://www.facebook.com/groups/HomeServiceMarketing/" style="text-decoration: none!important;">
													<div id="fbJoinNow" class="joinNowText" style="color: rgba(0, 71, 82, 1);">
														<img class="fbIcon" src="/wp-content/uploads/2018/09/icon_facebook-3x.png">
														JOIN NOW
													</div>
												</a>
				            	</div>
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

.mainLandingPageTitle {
	text-align: center;
	background-color: rgba(0, 71, 82, 1);
	color: white !important;
	padding: 30px 0px 30px 0px;
	margin-top: none!important;
}
.speedometer {
	margin-top: 4em;
	margin-bottom: 4em;
}
.resultsSidebar, .facebook-wrapper,
.facebook-header {
	background-color: rgb(242, 244, 249)!important;
	margin-top: 3.5em;
	width: 380px;
}
#joinFaceBookGroup {
	width: max-content;
}
.facebook-header {
	padding: 25px;
}
.sidebarTestimonial {
	display: inline-block!important;
}
.testimonialContent {
	padding: 15px;
	margin-left: 25%;
	text-align: left;
}
.testimonialText {
	background-image: url("/wp-content/uploads/2018/09/icon_quotation_copy-3x.png");
	background-repeat: no-repeat;
	background-size: 39px 28px;
	padding-left: 1.75em;
	padding-top: .8em;
}
.fbIcon {
	height: 20px;
	width: 20px;
	margin-right: 15px;
	margin-bottom: 3px;
}
.sidebarImage {
	height: 80px;
	width: 80px;
	float: left;
	margin-top: 15px;
}
.joinNowButton {
	border-color: inherit;
	border: 1px solid;
	width: 160px;
	height: 35px;
	margin: 0% 25% 20%;
	text-align: center;
	padding-top: 6px;
	cursor: pointer;
}
.joinNowButton:hover {
	background-color: rgba(0, 211, 216, 1);
	border: 2px solid rgba(0, 211, 216, 1);
	text-decoration: none!important;
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

@media only screen and (min-device-width : 320px) and
	(max-device-width : 480px) {
		.int-content {
			padding: 0!important;
		 }
		.center-content-mobile h1, h3 {
			text-align: center;
		}
}

</style>
