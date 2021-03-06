<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="about">


	<div class="container-fluid article-offset">
		<div class="row">

			<div class="article-offset_img col-md-6 col-xs-12 noPadding">

				<div class="row">

					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="600" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_tree.jpg">
					</div>
					<div class="col-md-6 col-xs-12 noPadding">
						<img data-delay="300" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_pig.jpg">
					</div>
					<!-- <div class="videoWrapper col-md-12 col-xs-12 noPadding">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/VeRJPIjpKYM?modestbranding=1&autohide=1&showinfo=0&controls=2&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				 -->
					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="1500" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_chicken.jpg">
					</div>
					<div class="col-md-6 col-xs-12 noPadding">
						<img data-delay="300" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_egg.jpg">
					</div>
					
					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="600" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_tool.jpg">
					</div>

					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="600" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_wood.jpg">
					</div>
					
				</div>

				
			</div>

			<article class="col-md-6 col-xs-12">
                <div class="article-offset_heading">
                    <h2 class="article-title"><?php echo get_field('top_title'); ?></h2>
                </div>

                <div class="videoWrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VeRJPIjpKYM?modestbranding=1&autohide=1&showinfo=0&controls=2&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>

                <?php echo get_field('top_content'); ?>

                <?php /**
				<div class="article-offset_heading">
					<h2 class="article-title">Grown organic &amp; natural from the ground up in Franklin, Waiuku</h2>
				</div>

				<div class="videoWrapper">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/VeRJPIjpKYM?modestbranding=1&autohide=1&showinfo=0&controls=2&rel=0" frameborder="0" allowfullscreen></iframe>
				</div>

				<p>Nature &amp; Fresh's 12 acre organic orchard is situated in the Franklin suburb of Waiuku. With 700 peak age macadamia trees, over 150 feijoa trees, 100 chestnut trees, and 400 Manuka trees, we are diverse yet focused on our greatest prize: the macadamia.</p>
				<p>We have a strong organic approach, which includes the way we raise and utilise our animals. Over 100 chickens, ducks and geese roam the farm, keeping the number of insects and weeds in the soil to a minimum. Also among the Nature & Fresh family are sheep and pigs, who eat the macadamia nuts that have fallen to the ground. This keeps the farm tidy in a cheap and environmentally friendly way while maintaining healthy animals and a positive, natural cycle.</p>
				*/?>
			</article>

		</div>
	</div>




	<div class="container-fluid article-offset">
		<div class="row">

			<article class="col-md-6 col-xs-12">
                <h2 class="article-title"><?php echo get_field('bottom_title'); ?></h2>


                <?php echo get_field('bottom_content'); ?>

                <?php /**
				<h2 class="article-title">We're all about growing the perfect macadamia nuts</h2>
				

				<p>Our farm is spray-free and we try our best not to use machines or pesticides in our orchard. Instead, we use natural fertilizers such as Agrissentials Rok Solid and comfrey. We use comfrey as a liquid fertilizer on our trees for the nutrients and minerals it brings up from deep in the ground.</p>
				<p>We are out on the farm daily picking the macadamia nuts which are then husked and dried for eight weeks. The cracked nuts are baked at a low temperature then vacuum packed to preserve that fresh, original macadamia taste that we love. From growing to harvesting, drying and packaging, you can enjoy natural quality foods that have been grown and prepared with care.</p>
				<p>With more products to come, it is an exciting time for everyone at Nature &amp; Fresh! Stay tuned to our website for more updates and information as we continue to work on bringing you more of the fresh, natural taste you love.
				</p>
                */ ?>
			</article>

			<div class="article-offset_img col-md-6 col-xs-12 noPadding">
				<div class="row">
					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="1800" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_nutontree.jpg">
					</div>
					<div class="col-md-6 col-xs-12 noPadding">
						<img data-delay="300" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_nuthand1.jpg">
					</div>
					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="600" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_nutselect.jpg">
					</div>
					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="600" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_nutfilter.jpg">
					</div>

					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="1500" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_nutstir.jpg">
					</div>
					

					<div class="col-md-6 col-xs-12 noPadding hidden-xs">
						<img data-delay="1500" class="lazy-load" data-src="<?php echo get_template_directory_uri(); ?>/images/pages/about_nutbag.jpg">
					</div>
				</div>

				
			</div>

		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

