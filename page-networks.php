<?php get_header();?>

<div class="container" style="margin-top: 50px;">
<div class="row">
<div class="col-12">

<?php 
// wp-query to get all published posts without pagination
$allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $allPostsWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
</ul>
     <?php wp_reset_postdata(); ?>
 <?php else : ?>
    <p><?php _e( 'There no posts to display.' ); ?></p>
<?php endif; ?>



</div>
</div>
</div>




<?php get_footer();?>