<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="container">
	<div class="row">
    
        <div class="eightcol">

		<div class="post">
        		<h2 class="leading"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <div class="entry">
                 <?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
                    <?php the_tags( '<p>' . __( 'Tags: ','themnific') . '', ', ', '</p>'); ?>
                 <?php comments_template(); ?>
                </div>
            </div>



	<?php endwhile; else: ?>

		<p><?php _e('Désolé, aucun article ne correspond à vos critères.','themnific');?>.</p>

	<?php endif; ?>

                <div style="clear: both;"></div>

        </div><!-- end #core .eightcol-->

    
    
    
        <div class="fourcol last">
        
        		<?php get_sidebar(); ?>
        
        </div>
	</div><!--end #core .row-->

    
   <div style="clear: both;"></div>
</div><!--end #core-->
<?php get_footer(); ?>