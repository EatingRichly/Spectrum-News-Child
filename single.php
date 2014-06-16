<?php get_header(); ?>
       
    <div id="content" class="col-full">
		<div id="main" class="col-left">
            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>
            
				<div <?php post_class(); ?>>

                    <h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                    
                    <p class="post-meta">
                    	<span class="post-category"><?php the_category(', ') ?></span> | 
                    	<span class="post-date"><?php the_time(get_option('date_format')); ?></span>
                    	<?php _e('by', 'woothemes') ?> <span class="post-author"><?php the_author_posts_link(); ?></span> | 
                    	<span class="comments"><?php comments_popup_link(__('0 Comments', 'woothemes'), __('1 Comment', 'woothemes'), __('% Comments', 'woothemes')); ?></span>
   	                    <?php edit_post_link( __('{ Edit }', 'woothemes'), '<span class="small">', '</span>' ); ?>
                    </p>
                    
                    <div class="entry">
                    	<?php 
                    	$video = woo_get_embed('embed',620,400);
                    	$image = woo_image('key=image&return=true');
                    	if(!empty($video)) { echo $video;}
                    	elseif ( get_option('woo_thumb_single') == "true" AND (!empty($image))) { woo_image('width='.get_option('woo_single_w').'&height='.get_option('woo_single_h').'&class=thumbnail '. get_option('woo_single_align')); }?>
                    	
                    	<?php the_content(); ?>
<hr style="width:80%" />
                      <em>Posts may contain affiliate links. If you purchase a product through an affiliate link, your costs will be the same but Eating Richly Even When You're Broke will receive a small commission. This helps us to cover some of the costs for this site. Thank you so much for your support!</em>
<div style="padding-top:20px;">
<?php// echo do_shortcode('[fbshare float="left"]'); ?>
<?php// echo do_shortcode('[stumbleupon float="left"]'); ?>
<?php// echo do_shortcode('[pinterest float="left"]'); ?> 
<?php// echo do_shortcode('[twitter float="left" style="horizontal"]'); ?> 
                    	
<div class='zl-recipe-link'> <a class='small-butn-link' href='javascript:void(0);' onmouseup='getZRecipe(this, "eatingrichly", ""); return false;' title='Add this recipe to your ZipList, where you can store all of your favorite web recipes in one place and easily add ingredients to your shopping list.'><span>Add this recipe to ZipList!</span></a> </div>
<div style="clear:both;"></div>
</div>
					</div>
										
					<?php the_tags('<p class="tags">Tags: ', ', ', '</p>'); ?>

					<?php woo_subscribe_connect(); ?>

                    <?php woo_postnav(); ?>
                    
                </div><!-- /.post -->
                
                <?php if (get_option('woo_ad_content') == 'true') {  include (TEMPLATEPATH . "/ads/content_ad.php"); } ?>
                
                <?php
                $comm = get_option('woo_comments'); if ( $comm == "post" || $comm == "both" ) : ?>
	                <?php comments_template('', true); ?>
                <?php endif; ?>
                                                    
			<?php endwhile; else: ?>
				<div class="post none">
				
					<h1 class="title"><?php _e('Nothing found', 'woothemes') ?></h1>
				
                	<div class="entry">
                		<p><?php _e('The page you trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'woothemes') ?></p>
                	</div>
                	                	
                </div><!-- /.post -->             
           	<?php endif; ?>  
        
		</div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>