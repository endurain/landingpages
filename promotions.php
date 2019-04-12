<?php
/**
 *Template Name: Promotions
 *Author: Endurain
 *Version: 1.2
 *Wit Digital 4.3.19
 */
 ?>

<style>
.specials-wrapper h3 {
	text-transform: capitalize;
	font-weight: 500;
}
.coupon-fullwidth img {
	height:100%;
	width:100%;
}
.coupon-fullwidth {
	display: inline-flex;
	border: 2px dashed rgba(10, 106, 219, 1);
	width: 100%;
	margin: 1em 0;
	height: 435px;
}

.coupon-fullwidth hr,
.sm-coupon-content hr {
	background-color: rgba(10, 106, 219, 1);
	height: 2px;
	width: 124px;
	margin-left: auto;
	margin-right: auto;
}
.coupon-col-2, .coupon-col-1, .bot-col-1,
	.bot-col-2 {
	width: 50%;
}
.coupon-content {
	text-align: center;
  padding: 3em 6em 0;
}
.sm-coupon-content {
	width: 100%;
	text-align: center;
	border: 2px dashed #0082ca;
  margin-top: 2em;
}
.sm-coupon-wrapper {
	display: flex;
	flex-flow: wrap;
}
.coupon-content p {
	margin:0;
}
.coupon-fullwidth h1, .coupon-fullwidth h2,
 	.sm-coupon-content h1, .sm-coupon-content h2 {
	color: rgba(10, 106, 219, 1);
}
.coupon-fullwidth h1 {
	font-size: 38px;
	margin-top: 0;
}
.coupon-fullwidth h2 {
	font-size: 26px;
	margin-top: 0;
}
.fw-coupon-bottom {
	display: inline-flex;
	align-items: flex-end;
	margin: 8em 1em 0;
}
.sm-coupon-bottom {
	display: flex;
  align-items: flex-end;
  margin: 0em 1em 0;
  justify-content: space-between;
}
.fw-coupon-bottom img {
	height: 57px;
	width: auto;
}
.sm-coupon-bottom img {
  height: 39px;
  width: auto;
}
.specials-bottom {
	display: inline-flex;
	text-align: center;
	margin-top: 12px;
}
.fw-coupon-bottom p,
	.sm-coupon-bottom p {
	font-size: 9px;
	line-height: 11px;
	text-align: left;
	padding: 0 2em;
}
.sm-coupon-spacer {
	width: 50%;
	padding: 0 2em 0 0;
}
.specials-bottom .bot-col-2 {
	background: -moz-linear-gradient(left, rgba(30,87,153,1) 49%,
		rgba(32,124,202,1) 68%, rgba(32,124,202,1) 68%, rgba(32,124,202,1) 68%,
		rgba(32,124,202,1) 68%, rgba(41,137,216,1) 100%, rgba(125,185,232,1) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(left, rgba(30,87,153,1) 49%,
		rgba(32,124,202,1) 68%,rgba(32,124,202,1) 68%,rgba(32,124,202,1) 68%,
		rgba(32,124,202,1) 68%,rgba(41,137,216,1) 100%,rgba(125,185,232,1) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to right, rgba(30,87,153,1) 49%,
		rgba(32,124,202,1) 68%,rgba(32,124,202,1) 68%,rgba(32,124,202,1) 68%,
		rgba(32,124,202,1) 68%,rgba(41,137,216,1) 100%,rgba(125,185,232,1) 100%);
}
.specials-bottom h1, .specials-bottom h3, .specials-bottom h4 {
	color: #fff;
	text-transform: none;
}
.spec-bottom-text {
	padding: 3em 11em;
}
.spec-bottom-text h4 {
  font-weight: 400;
  line-height: 31px;
}
/* balances small coupons in their container */
.sm-coupon-spacer:nth-child(even) {
	padding-right: unset;
}
@media only screen and (max-width: 768px) {
  .click-to-call-wrapper {
    padding: 2em 4em;
  }
  .click-to-call {
    border: 1px solid #fff;
    border-radius: 9px;
  }
  .click-to-call h3 {
    margin: 21px;
  }
	.spec-bottom-text {
    padding: 1em 1em;
}
	.sm-coupon-spacer {
    width: unset;
    padding: unset;
}
	.fw-coupon-bottom {
    margin: auto;
    text-align: center;
	}
	.fw-coupon-bottom p,
	 .sm-coupon-bottom p {
		text-align: center;
	}
	.coupon-fullwidth img {
		height: unset;
	}
	.coupon-col-2 img {
		margin-top:0!important;
		margin-bottom:0!important;
	}
	.specials-bottom {
		padding:unset!important;
	}
	.fw-coupon-bottom img {
		width:55%!important;
	}
	.fw-coupon-bottom, .specials-bottom,
	 	.sm-coupon-wrapper, .sm-coupon-bottom {
    display: block!important;
	}
	.coupon-col-1, .coupon-col-2, .sm-coupon-content,
		.bot-col-1, .bot-col-2 {
		width:100%!important;
	}
	.coupon-fullwidth {
		display:block!important;
		height: unset;
	}
}
</style>

<?php get_header(); ?>

<body id="page" <?php body_class(); ?>>
	<div id="wrapper">
		<?php include(TEMPLATEPATH . '/banner.php'); ?>
		<?php include(TEMPLATEPATH . '/mobile-nav.php'); ?>
  <div class="clearboth"></div>
		<?php include(TEMPLATEPATH . '/page-interior-header.php'); ?>
		<div id="content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
					<?php include(TEMPLATEPATH . '/breadcrumbs.php'); ?>
					 <section id="content" role="main">

						 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

								<?php endwhile; else: ?>

						 <?php endif; ?>
					 </section><!-- end #content -->
					</div><!--end.col-md-8-->
				  <div class="specials-wrapper">
				    <div class="fw-coupon-wrapper">
							<?php
								if( have_rows('promotions_coupon_fullwidth') ): ?>

								<?php while ( have_rows('promotions_coupon_fullwidth') ) : the_row(); ?>
									<div class="coupon-fullwidth">
										<div class="coupon-col-1">
					          	<div class="coupon-content">
												<h1><?php the_sub_field('coupon_h1_text'); ?></h1>
												<h3><?php the_sub_field('coupon_h3_text'); ?></h3>
													<hr>
												<p><?php the_sub_field('estimate_text'); ?></p>
												<br>
												<p><?php the_sub_field('coupon_tag_line'); ?></p>
												<h2><?php echo $phone ?></h2>
											</div>
											<div class="fw-coupon-bottom">
					              <img src="<?php echo $logo ?>" />
					              <p><?php the_sub_field('expiration_text');?></p>
					            </div>
										</div>
										<div class="coupon-col-2">
						          <img src="<?php the_sub_field('coupon_image'); ?>" />
						        </div>
									</div>
									<?php
								endwhile;
								endif; ?>
				    </div>
						<div class="sm-coupon-wrapper">
							<?php if( have_rows('promotions_coupon_small') ): ?>
								<?php while ( have_rows('promotions_coupon_small') ) : the_row();

                  $tagline = get_sub_field('sm_coupon_tag_line');


                  ?>

									<div class="sm-coupon-spacer">
										<div class="sm-coupon-content">
											<h1><?php the_sub_field('sm_coupon_h1_text'); ?></h1>
											<h3><?php the_sub_field('sm_coupon_h3_text'); ?></h3>

                        <?php

                            if( !empty($tagline) ) { ?>

                              <p><?php echo $tagline; ?></p>

                            <?php } else { ?>

                              <div style="height: 15px;">&nbsp</div>

                            <?php } ?>

												<hr>

											<p>Call Us Today!</p>
											<h2><?php echo $phone ?></h2>
											<div class="sm-coupon-bottom">
												<img src="<?php echo $logo ?>" />
												<p><?php the_sub_field('sm_expiration_text');?></p>
											</div>
										</div>
									</div>
								<?php
							endwhile;
							endif; ?>
						</div>
						<div class="specials-bottom-wrapper">
							<div class="specials-bottom">
								<div class="bot-col-1">
									<img src="<?php the_field('promotions_bottom_page'); ?>" />
								</div>
								<div class="bot-col-2">
									<div class="spec-bottom-text">
										<h1>We're ready to help!</h1>
										<h4>Call us now and mention any of these offers for instant savings!</h4>
										<div class="click-to-call-wrapper">
                      <div class="click-to-call">
											<a style="text-decoration: none;" href="tel:19737288900">
												<h3>
													<img src="/wp-content/uploads/2018/12/icon_phone_white.png" />
												 		<?php echo $phone ?>
											  </h3>
										  </a>
										</div>
                   </div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
<?php get_footer(); ?>
