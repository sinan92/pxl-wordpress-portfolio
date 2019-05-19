<?php
/*
Template Name: MixItUp template
*/
?>

<?php get_header(); ?>

<div class="wrapper section medium-padding">
										
	<div class="section-inner">
	
		<div class="content full-width">

            <div class="controls">
                <!-- Get a list of all categories in the database, excluding those not assigned to posts -->

                <?php
                $all_categories = get_categories(array(
                    'hide_empty' => true,
                    'exclude' => 1
                ));
                ?>

                <!-- Iterate through each category -->

                <a href="#!" id="show-all" style="float: right;">Show all</a>
                <?php foreach($all_categories as $category): ?>
                    <!-- Output control button markup, setting the data-filter attribute as the category "slug" -->

                    <a href="#!" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            </div>

            <div class="container">
                <?php
                    $posts = new WP_Query(array('category__not_in' => 1));
                ?>
                <?php while($posts->have_posts()){ ?>

                    <!-- For each post, construct a space-seperated list of its category "slugs" to function as class names -->
                    <!-- e.g. "web-design ux-design typography" -->

                    <?php
                    $posts->the_post();
                    $categories = get_the_category();
                    $slugs = wp_list_pluck($categories, 'slug');
                    $class_names = join(' ', $slugs);
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                    ?>

                    <!-- Output markup for each post, including the post's "permalink", and the list of category "slugs" -->
                    <div class="item mix<?php if ($class_names) { echo ' ' . $class_names;} ?>">
                        <a href="<?php the_permalink(); ?>">
                            <!-- Post content -->
                            <?php the_post_thumbnail() ?>
                        </a>
                    </div>
                <?php } ?>

            </div>
		
			<div class="clear"></div>
			
		</div><!-- .content -->
				
		<div class="clear"></div>
	
	</div><!-- .section-inner -->

</div><!-- .wrapper -->

    <script>
        var mixer = mixitup('.container');

        jQuery("#show-all").on("click", function () {
            mixer.show();
        });
    </script>
<?php get_footer(); ?>