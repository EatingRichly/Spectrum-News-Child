<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta property="og:site_name" content="EatingRichly.com" />

<meta name="readability-verification" content="vkbsy3e9WbsYyJa56J5h8NTf9SVLKznNKsZ5FMQP" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php $feedurl = get_option('woo_feed_url'); if ( $feedurl ) { echo $feedurl; } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );  ?>

<?php wp_head(); ?>
<?php woo_head(); ?>

<?php if ( !$paged && get_option('woo_featured') == "true" ) { ?>
<script type="text/javascript">
jQuery(window).load(function(){
    jQuery("#loopedSlider").loopedSlider({
    <?php
        $autoStart = 0;
        $slidespeed = 600;
        if ( get_option("woo_slider_auto") == "true" )
           $autoStart = get_option("woo_slider_interval") * 1000;
        else
           $autoStart = 0;
        if ( get_option("woo_slider_speed") <> "" )
            $slidespeed = get_option("woo_slider_speed") * 1000;
    ?>
        autoStart: <?php echo $autoStart; ?>,
        slidespeed: <?php echo $slidespeed; ?>,
        autoHeight: true
    });
});
</script>
<?php } ?>

    <?php include_once("analyticstracking.php") ?>

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160" />
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
<meta name="msapplication-TileColor" content="#ffc40d" />
<meta name="msapplication-TileImage" content="/mstile-144x144.png" />
<!-- End Favicons -->

</head>

<body <?php body_class(); ?>>

<?php woo_top(); ?>

<div id="wrapper">
<div id="background">

    <div id="top-nav" class="col-full">
        <?php
        if ( function_exists('has_nav_menu') && has_nav_menu('primary-menu') ) {
            wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) );
        } else {
        ?>
        <ul class="nav">
            <?php
            if ( get_option('woo_custom_nav_menu') == 'true' ) {
                if ( function_exists('woo_custom_navigation_output') )
                    woo_custom_navigation_output('name=Woo Menu 1&depth=6');

            } else { ?>



                <?php if ( is_home() OR is_front_page()) $highlight = "page_item current_page_item"; else $highlight = "page_item"; ?>
                <li class="<?php echo $highlight; ?>"><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'woothemes') ?></a></li>
                <?php wp_list_pages('sort_column=menu_order&depth=6&title_li=&exclude='.get_option('woo_pages_exclude')); ?>



           <?php } ?>
        </ul><!-- /#nav -->
        <?php } ?>

       <span class="nav-item-right">
       <a href="<?php $feedurl = get_option('woo_feed_url'); if ( $feedurl ) { echo $feedurl; } else { echo get_bloginfo_rss('rss2_url'); } ?>">
       <img src="http://eatingrichly.com/wp-content/uploads/2014/02/ico-rss.png" height="16" width="16" alt="RSS Feed" />
       </a>
       <a href="https://www.facebook.com/eatingrichly">
            <img src="http://eatingrichly.com/wp-content/uploads/2014/02/fb-2014-16x16.png" height="16" width="16" alt="Facebook" />
        </a>
        <a href="https://twitter.com/eatingrichly">
            <img src="http://eatingrichly.com/wp-content/uploads/2014/02/Twitter_logo_blue-16X13.png" height="13" width="16" alt="Twitter Feed" />
        </a>
        <a href="http://www.pinterest.com/EatingRichly/" style="padding-right:5px;">
            <img src="http://eatingrichly.com/wp-content/uploads/2014/02/Pinterest_Favicon-16x16.png" height="16" width="16" alt="Pinterest" />
        </a>
       </span>

<div class="ericssearchformintheheader">
    <form method="get" class="searchform" action="<?php bloginfo('url'); ?>" >
        <input style="position:relative;top: 2px;height:12px;" type="text" class="field s" name="s" value="<?php _e('Search...', 'woothemes') ?>" onfocus="if (this.value == '<?php _e('Search...', 'woothemes') ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Search...', 'woothemes') ?>';}" />
        <input style="background-color: #D9EDD9;height: 25px;position: relative;top: 4px;" type="submit" class="submit button" name="submit" value="<?php _e('Search', 'woothemes'); ?>" />
        <div class="fix"></div>
    </form>
</div><!--/ericssearchformintheheader-->

    </div><!-- /#top-nav -->



    <div id="header" class="col-full">
        <div id="logo">

        <?php if (get_option('woo_texttitle') <> "true") : $logo = get_option('woo_logo'); ?>
            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>">
                <div class="er-logo-hidpi"> </div>
            </a>
        <?php endif; ?>

        <?php if( is_singular() ) : ?>
            <span class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span>
        <?php else : ?>
            <h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php endif; ?>
            <span class="site-description"><?php bloginfo('description'); ?></span>

        </div><!-- /#logo -->



        <?php if (get_option('woo_ad_top') == 'true') { ?>
        <div id="topad">
            <?php // include (TEMPLATEPATH . "/ads/top_ad.php"); ?>
            <div style="float: left;background-color: white;width: 275px;height: 100px;font-size: 10pt;margin-top: 15px"><h3 style="color: #267026;text-align: center">Welcome to Eating Richly!</h3>  I’m Diana Johnson, a penny pinching cooking instructor and recipe developer who specializes in delicious, easy and healthy recipes on a shoestring budget.</div>
                <img style="padding-top:5px" src="http://eatingrichly.com/wp-content/uploads/2012/02/diana-headshot-1-tighter-125x125.png" width="125" height="125" alt="Diana Johnson" nopin = "nopin"/>
           </div><!-- /#topad -->
        <?php } ?>



    </div><!-- /#header -->



    <div id="main-nav" class="col-full">
        <?php
        if ( function_exists('has_nav_menu') && has_nav_menu('secondary-menu') ) {
            wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'nav', 'theme_location' => 'secondary-menu' ) );
        } else {
        ?>
        <ul class="nav">
            <?php
            if ( get_option('woo_custom_nav_menu') == 'true' ) {
                if ( function_exists('woo_custom_navigation_output') )
                    woo_custom_navigation_output('name=Woo Menu 2&depth=6');

            } else { ?>

                <?php if ( is_home() OR is_front_page()) $highlight = "page_item current_page_item"; else $highlight = "page_item"; ?>
                <li class="<?php echo $highlight; ?>"><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'woothemes') ?></a></li>
                <?php wp_list_categories('sort_column=menu_order&depth=6&title_li=&exclude='.get_option('woo_cats_exclude')); ?>

            <?php } ?>

        </ul><!-- /#nav -->
        <?php } ?>
    </div><!-- /#main-nav -->
