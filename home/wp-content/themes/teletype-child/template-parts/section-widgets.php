<?php
/**
 * Template part for displaying home widgets area.
 * @package Teletype
 */
?>

<?php if ( is_active_sidebar( 'home-widgets' ) ) { ?>
<section id="home-widgets" class="text-left">
<?php
	if ( get_theme_mod( 'section-widgets-title' ) || get_theme_mod( 'section-widgets-subtitle' ) ) {
?>
		<div class="section-title center"><?php 
			if ( get_theme_mod( 'section-widgets-title' )=="Upcoming Events" ){ ?>
				<a href="http://arts-x.sakura.ne.jp/upcoming-events/"><h2> <?php echo esc_html( get_theme_mod( 'section-widgets-title' ) ) ?> </h2></a>;
			<?php }else{ ?>
				<h2><a href="http://arts-x.sakura.ne.jp/"><?php esc_html( get_theme_mod( 'section-widgets-title' ) ) ?></a></h2>;
			<?php 
				} 
			?>
               			<!-- <h2><?php //echo esc_html( get_theme_mod( 'section-widgets-title' ) ); ?></h2> -->
               			<p><?php echo esc_html( get_theme_mod( 'section-widgets-subtitle' ) ); ?></p>
		</div>
<?php
	}
?>
		<div class="row">
			<?php dynamic_sidebar( 'home-widgets' ); ?>
		</div><!-- .row -->

</section>
<?php } ?>