<?php //トップページ用 ?>
<?php get_header(); ?>

// トップページのみのウィジェット
<?php dynamic_sidebar('top_main_widget'); ?>

<?php get_template_part('list') ?>

<?php get_footer(); ?>