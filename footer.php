<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the .container and #content divs and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yith-proteo
 */

global $post;
?>
<?php echo yith_proteo_get_sidebar_position() ? '</div>' : ''; ?>
</div><!-- .container -->
</div><!-- #content -->
</div><!-- #page -->

<?php
// hide site footer if meta value enabled.
if ( function_exists( 'wc' ) && is_shop() ) {
	$hide_footer = get_post_meta( wc_get_page_id( 'shop' ), 'yith_proteo_remove_header_and_footer', true );
} elseif ( is_home() ) {
	$hide_footer = get_post_meta( get_option( 'page_for_posts' ), 'yith_proteo_remove_header_and_footer', true );
} else {
	$hide_footer = $post ? get_post_meta( $post->ID, 'yith_proteo_remove_header_and_footer', true ) : 'off';
}

if ( 'on' !== $hide_footer ) :
	?>
<footer id="main-footer" class="site-footer">
        <div class="container-fluid footer-custom">
            <div class="container">
                <div class="row footer-row">

                    <div class="col-lg-3 d-none d-lg-flex footer-logo">
                        <a href="#"><img src="https://angelakopoulos.com/maroukas/wp-content/uploads/svg/Marouka_logo_vertical.svg" height="76px"></a>
                    </div>
                    <div class="col-lg-12 d-lg-none d-xs-flex footer-logo">
                        <a href="#"><img src="https://angelakopoulos.com/maroukas/wp-content/uploads/svg/Marouka-footer-logo-mobile.svg" height="78px"></a>
                    </div>
                    <div class="col-lg-2 col-md-12 footer-icons">
                        <ul class="social-icons">
                        <li><a href="#"><img src="https://angelakopoulos.com/maroukas/wp-content/uploads/svg/icons/Facebook.svg" height="30px" class="icon-face"></a></li>
                        <li><a href="#"><img src="https://angelakopoulos.com/maroukas/wp-content/uploads/svg/icons/instagram.svg" height="30px" class="icon-insta"></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 d-none d-lg-flex footer-menu-div">
						<ul class="footer-menu-list footer-menu-1">
							<? 
							$footer1 = wp_get_nav_menu_items( 'footer-menu-1' );
							foreach ( $footer1 as $navItem ) {
								echo '<li><a class="footer-menu-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.
                                strtoupper($navItem->title).'</a></li>';
							}
							?>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-none d-lg-flex footer-menu-div">
                        <ul class="footer-menu-list footer-menu-2">
							<? 
							$footer2 = wp_get_nav_menu_items( 'footer-menu-2' );
							foreach ( $footer2 as $navItem ) {
								echo '<li><a class="footer-menu-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.strtoupper($navItem->title).'</a></li>';
							}
							?>
                        </ul>
                    </div>
                    <div class="col-lg-2 d-none d-lg-flex footer-menu-div">
						<ul class="footer-menu-list footer-menu-3">
							<? 
							$footer3 = wp_get_nav_menu_items( 'footer-menu-3' );
							foreach ( $footer3 as $navItem ) {
								echo '<li><a class="footer-menu-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.strtoupper($navItem->title).'</a></li>';
							}
							?>
                        </ul>
                    </div>
                    <div class="col-12 justify-content-center d-md-flex d-lg-none">
						<ul class="footer-menu-list footer-mobile-menu">
							<? 
                            $footer1 = wp_get_nav_menu_items( 'footer-menu-1' );
							foreach ( $footer1 as $navItem ) {
								echo '<li><a class="footer-menu-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.strtoupper($navItem->title).'</a></li>';
							}
                            $footer2 = wp_get_nav_menu_items( 'footer-menu-2' );
                            foreach ( $footer2 as $navItem ) {
                                echo '<li><a class="footer-menu-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.strtoupper($navItem->title).'</a></li>';
                            }
                            $footer3 = wp_get_nav_menu_items( 'footer-menu-3' );
							foreach ( $footer3 as $navItem ) {
								echo '<li><a class="footer-menu-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.strtoupper($navItem->title).'</a></li>';
							}
							?>
                        </ul>
                    </div>
                </div>   
            </div>
        </div>
        <div class="container-fluid footer-custom-info">
            <div class="container">
                <div class="row footer-row-info align-items-center">
                    <div class="col-12 d-flex d-lg-none justify-content-around mobile-footer-info-links ">
                        <?
                        $mobilefooter = wp_get_nav_menu_items( 'footer-menu-4' );
						echo '<a class="footer-info" href="'.$mobilefooter[0]->url.'" title="'.$mobilefooter[0]->title.'">'.$mobilefooter[0]->title.'</a>';
                        echo '<a class="footer-info ml-auto" href="'.$mobilefooter[1]->url.'" title="'.$mobilefooter[1]->title.'">'.$mobilefooter[1]->title.'</a>';
                        ?>
                    </div>
                    <div class="col-lg-5 col-12 footer-info-copyright">
                        <span class="footer-info">© <? echo date("Y"); ?> Marouka</span>  
                    </div>
                    <div class="col-2 d-none d-xl-block">
                        <? 
						$footer4 = wp_get_nav_menu_items( 'footer-menu-4' );
						echo '<a class="footer-info" href="'.$footer4[0]->url.'" title="'.$footer4[0]->title.'">'.$footer4[0]->title.'</a>';
						?>

                    </div>
                    <div class="col-5 d-none d-xl-block">
                        <?	
                        echo '<a class="footer-info" href="'.$footer4[1]->url.'" title="'.$footer4[1]->title.'">'.$footer4[1]->title.'</a>';
						?>
                    </div>
                    <div class="col-7 d-none d-lg-block d-xl-none">
                        <?
                        $mobilefooter = wp_get_nav_menu_items( 'footer-menu-4' );
						echo '<a class="footer-info mr-5" href="'.$mobilefooter[0]->url.'" title="'.$mobilefooter[0]->title.'">'.$mobilefooter[0]->title.'</a>';
                        echo '<a class="footer-info ml-auto" href="'.$mobilefooter[1]->url.'" title="'.$mobilefooter[1]->title.'">'.$mobilefooter[1]->title.'</a>';
                        ?>
                    </div>
                    
                    

                </div><!-- .site-info -->
            </div>
        </div>
    </footer><!-- #colophon -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
