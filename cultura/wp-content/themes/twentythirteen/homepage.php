<?php
	/*
		Template Name: HomePage
	*/
	get_header();
?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

        <!-- exibi os posts na homepage -->
        <?php get_template_part('partials/home', 'destaques'); ?>

 		<!-- exibi a agenda cultural -->
 		<?php get_template_part('partials/home', 'agenda'); ?>      


<?php get_footer(); ?>
