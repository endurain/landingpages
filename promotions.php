<?php
/**
 *Template Name: Promotions
 *Author: Endurain
 *Version: 1.2
 *Wit Digital 4.3.19
 */

 ?>

<style>
.coupon-fullwidth img {
	height:100%;
	width:100%;
}
.coupon-fullwidth {
	display: inline-flex;
	border: 2px dashed #0082ca;
	width: 100%;
	margin: 1em 0;
	height: 435px;
}
.coupon-fullwidth hr {
	background-color: rgba(0, 85, 166, 1);
	height: 2px;
	width: 124px;
	margin-left: auto;
	margin-right: auto;
}
.coupon-col-2, .coupon-col-1 {
	width: 50%;
}
.coupon-content {
	text-align: center;
  padding: 3em 6em 0;
}
.coupon-content p {
	margin:0;
}
.coupon-fullwidth h1, .coupon-fullwidth h2 {
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
.fw-coupon-bottom img {
	height: 57px;
	width: auto;
}
.specials-bottom {
	display: inline-flex;
	text-align: center;
	margin-top: 12px;
}
.fw-coupon-bottom p {
	font-size: 9px;
	line-height: 11px;
	text-align: left;
	padding: 0 2em;
}
@media only screen and (max-width: 768px) {
	.fw-coupon-bottom {
    margin: auto;
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
	.fw-coupon-bottom, .specials-bottom {
    display: block!important;
	}
	.coupon-col-1, .coupon-col-2 {
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
			  <div class="specials-wrapper">
			    <div class"fw-coupon-top">
			      <h1>Specials</h1>
			      <p>some text will go here</p>
			    </div>
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
							<?php while ( have_rows('promotions_coupon_small') ) : the_row(); ?>
								<div class="sm-coupon-content">
									<h1><?php the_sub_field('sm_coupon_h1_text'); ?></h1>
									<h3><?php the_sub_field('sm_coupon_h3_text'); ?></h3>
										<hr>
									<p>Call Us Today!</p>
									<h2><?php echo $phone ?></h2>
								</div>
								<div class="fw-coupon-bottom">
									<img src="<?php echo $logo ?>" />
									<p><?php the_sub_field('expiration_text');?></p>
								</div>
							<?php
						endwhile;
						endif; ?>
					</div>
				</div>
		</div>
		</div>
<?php get_footer(); ?>
