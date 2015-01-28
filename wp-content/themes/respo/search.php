<?php get_header(); ?>
<div id="core" class="container">
	<div class="row">
    
        <div class="eightcol">
              <h2>Résultats de votre recherche</h2>
		<?php if (have_posts()) : ?>
              <ul class="medpost">
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

                <div class="post">
                <h3>Aie !</h3>
                    <p class="center">Désolé, mais vous cherchez quelque chose qui n'est pas ici.</p>
                    <?php get_search_form(); ?>
                    <?php wp_tag_cloud('smallest=8&largest=36&'); ?>
                    </div>

		<?php endif; ?>
        </div><!-- end #core .eightcol-->

    
    
    
        <div class="fourcol last">
        
        		<?php get_sidebar(); ?>
        
        </div>
	</div><!--end #core .row-->

    
   <div style="clear: both;"></div>
</div><!--end #core-->
<?php get_footer(); ?>