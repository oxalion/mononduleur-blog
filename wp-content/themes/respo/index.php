<?php get_header(); ?>

<div id="core" class="container">
	<div class="row">
    
        <div class="eightcol">
	<h1>Dernières nouvelles de MonOnduleur.fr</h1>
        <?php if (get_option('themnific_slider_dis') <> "true") { ?>
              <?php get_template_part('/includes/sliders/flexslider');?>
        <?php } ?>
             
              <ul class="medpost">
    	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            
                          <li><?php get_template_part('/includes/post-types/medpost');?></li>
                            
		<?php endwhile; ?><!-- end post -->
                </ul><!-- end latest posts section-->
               
<div style="clear: both;"></div>




			<ul class="navigation">
			<li class="fl"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Articles plus anciens' ) ); ?></li>
			<li class="fr"><?php previous_posts_link( __( 'Articles plus récents <span class="meta-nav">&rarr;</span>' ) ); ?></li>
			</ul><!-- end navigation -->

		<?php else : ?>
			

			<h1>Désolé, aucun article ne correspond à vos critères.</h1>
		            <?php get_search_form(); ?>
            <br/>
	<?php endif; ?>

        </div><!-- end #core .eightcol-->

    
    
    
        <div class="fourcol last">
        
        		<?php get_sidebar(); ?>
        
        </div>
	</div><!--end #core .row-->

    
   <div style="clear: both;"></div>
</div><!--end #core-->


<?php get_footer(); ?>