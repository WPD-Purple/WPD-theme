<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="breadcrumb">
      <div class="row">     
        <div class="large-12 columns">
          <span>
          <?php if ( class_exists( 'WP_SiteManager_bread_crumb' ) ) { WP_SiteManager_bread_crumb::bread_crumb( 'type=string' ); } ?>
          </span>
        </div> 
      </div> <!--  -->
    </div>
    <div class="row footer-widget">
      
      <div class="large-4 columns">
        <?php dynamic_sidebar('footer1'); ?>
      </div> 
    
      <div class="large-4 columns">
        <?php dynamic_sidebar('footer2'); ?>
      </div> 
    
      <div class="large-4 columns">      
        <?php dynamic_sidebar('footer3'); ?>
      </div> 
    
    </div> 

    <div class="row">
        <div class="large-12 columns">
      		<div class="site-info">
            <p>コピーライト</p>            
      			<?php do_action( '_s_credits' ); ?>
      			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
      			<span class="sep"> | </span>
      			<?php printf( __( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
      		</div><!-- .site-info -->
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>