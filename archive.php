<?php get_header();?>

<div class="container pt-5 pb-5">
<div class="row">
<div class="col-12 pb-10">

<h1><?php single_cat_title(); ?></h1>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="card mb-4">
<div class="card-body">    
<h3><?php the_title(); ?> </h3>

<?php if(has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid pt-4 pb-4">
<?php endif; ?>

<?php the_excerpt(); ?>
<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
</div>
</div>

<?php endwhile; endif;?>



</div>

</div>
</div>


<?php get_footer();?>