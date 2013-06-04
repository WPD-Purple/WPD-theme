<?php
/*
Template Name: トップページ用02
*/
?>
<?php get_header(); ?>
		<div class="row">			
			<div class="large-9 columns">
        <div class="news01">
          <h3>最新のお知らせ</h3>
              <?php query_posts('posts_per_page=4'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="row">
              <div class="large-4 columns">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              </div> 
              <div class="large-8 columns">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                  <span class="date">
                  <?php the_time('Y/m/d'); ?>
                  </span>
                </div>    

              </div>     
                  <?php
                    $days=30;
                    $today=date('U'); $entry=get_the_time('U');
                    $diff1=date('U',($today - $entry))/86400;
                    if ($days > $diff1) {
                  echo '<span class="new">New!</span>';
                  }
                  ?>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          <div class="news02">
            <h3>注目のお知らせ</h3>  
            <ul class="no-bullet">
              <?php query_posts('posts_per_page=10'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li>              
                  <span class="date">
                  <?php the_time('Y/m/d'); ?>
                  </span>
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                  <?php
                    $days=30;
                    $today=date('U'); $entry=get_the_time('U');
                    $diff1=date('U',($today - $entry))/86400;
                    if ($days > $diff1) {
                  echo '<span class="new">New!</span>';
                  }
                  ?>
              </li>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </ul>
          </div>
				</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
