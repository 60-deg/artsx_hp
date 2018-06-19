<?php
/**
 * Template part for displaying home widgets area.
 * @package Teletype
 */
?>

<?php if ( is_active_sidebar( 'home-widgets2' ) ) { ?>
<section id="home-widgets2" class="text-left">
<?php
	if ( get_theme_mod( 'section-widgets2-title' ) || get_theme_mod( 'section-widgets2-subtitle' ) ) {
?>
		<div class="section-title center">
               			<h2><?php echo esc_html( get_theme_mod( 'section-widgets2-title' ) ); ?></h2>
               			<p><?php echo esc_html( get_theme_mod( 'section-widgets2-subtitle' ) ); ?></p>
		</div>
<?php
	}
?>
		<div class="row">
			<?php dynamic_sidebar( 'home-widgets2' ); ?>
		</div><!-- .row -->

</section>
<?php } ?>