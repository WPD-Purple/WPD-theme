<?php
/*
Template Name: トップページ用01
*/
?>
<?php get_header(); ?>
    <div class="row">
        <div class="large-4 columns">
        	<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/1.jpg" alt=""></a>
        	<h4><a href="#">ハンモックのお席です</a></h4>
        	<p>客席はすべてハンモックとなっております。少し揺れながら、リラックスした時間をお過ごしください。 </p>
        </div>
        <div class="large-4 columns">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/2.jpg" alt=""></a>
        	<h4><a href="#">100種類以上のドリンク</a></h4>
         	<p>珈琲、紅茶からカクテルなどアルコール類もご準備しております。</p>
        </div>
        <div class="large-4 columns">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/3.jpg" alt=""></a>
        	<h4><a href="#">吉祥寺駅徒歩5分</a></h4>
        	<p>南側公園口より、徒歩5分。当店までの詳しい地図などはこちらを御覧ください。</p>
        </div>
    </div>

				<div class=" front-news">
		<div class="row">			
			<div class="large-12 columns">
        <h3>最新のお知らせ</h3>
					<div class="row">
              <?php query_posts('posts_per_page=8'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="large-3 columns">
              <div class="row">
              <div class="large-12 small-3 columns">
              <div class="thum">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              </div>          
              </div>
              <div class="large-12 small-9 columns">
                  <span class="date">
                  <?php the_time('Y/m/d'); ?>
                  </span><br>                  
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>              
                  <?php
                    $days=30;
                    $today=date('U'); $entry=get_the_time('U');
                    $diff1=date('U',($today - $entry))/86400;
                    if ($days > $diff1) {
                  echo '<span class="new">New!</span>';
                  }
                  ?>
                </div>
              </div>
              </div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
					</div>
				</div>
			</div> <!--  -->
		</div> <!--  -->
		<div class="front-sp">
			<div class="row">			 
        <div class="row">
  <div class="large-8 small-centered columns">
  <div class="row">
        <div class="large-6 columns">
          <div class="frame"></div>
        </div> <!--  -->  
        <div class="large-6 columns">
          <h2>みんなの来店を<br>
          待ってるワンッ！</h2>
          <p>たまに出勤する、店長のハナです。</p> 
        </div> <!--  -->
        </div>
        </div>
</div>
			</div> <!--  -->
		</div>


<?php get_footer(); ?>
