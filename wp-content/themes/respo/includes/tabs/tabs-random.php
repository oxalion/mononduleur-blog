<?php $posts = get_posts('orderby=rand&numberposts=4'); foreach($posts as $post) { ?>
        <div class="tab-post">
        
			<a href="<?php the_permalink() ?>" rel="" title="<?php the_title_attribute(); ?>">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
				<img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=40&amp;h=40" alt="<?php the_title(); ?>" /></a>

                    <h4><a href="<?php the_permalink(); ?>"><?php 
					// short_title($after, $length)
					echo short_title('...', 8); 
					?></a></h4>
		          	<small><?php the_time('M j, y') ?> &bull; <?php the_category(', ') ?></small>
		</div>	
<?php } ?>