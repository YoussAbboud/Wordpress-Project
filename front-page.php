<?php get_header();?>

<div class="cover-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
          

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
</ol>
<div class="carousel-inner">

  <div class="carousel-content">
    <h3>
    <h1 class="slogan col-sm-12 text-sm-left">Welcome to GNL</h1> <!-- wrap them into the translation handeling method (_e) -->
    
    </h3>
  </div>
  <div class="carousel-item active">
    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?> /img/valve.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?> /img/playstation.jpg" alt="Second slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?> /img/blizzard.jpg" alt="Third slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?> /img/origin.jpg" alt="Fourth slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?> /img/uplay.jpg" alt="Fifth slide">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

</div>
        </div>
        <div class="col-lg-3 mx-auto order-lg-3 align-self-center" style="backround-color: gray;">
          <div class="container">
            <div class="row">

              

                  <h3 style="font-family: 'Archivo black'">Not Registered:</h3>
                
                <div class="col-lg-6">
                  <input type="name" name="first" id="r-first" placeholder="First Name" style="font-family: 'Lato'">
                </div>
                <div class="col-lg-6">
                  <input type="name" name="last" id="r-last" placeholder="Last Name">
                </div>
                <div class="col-lg-12">
                  <input type="email" name="email" id="r-email" placeholder="Email address">
                </div>
                <div class="col-lg-12">
                  <input type="password" name="pass" id="r-password" placeholder="Password">
                </div>
                <div class="col-12">
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="button" id="register_btt">Register</button>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="container pt-5 pb-5">
<div class="row">
<div class="col-6 pb-10">

<h1><?php the_title(); ?></h1>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
       <?php the_content(); ?>

<?php endwhile; endif;?>



</div>

</div>
</div>


<?php get_footer();?>