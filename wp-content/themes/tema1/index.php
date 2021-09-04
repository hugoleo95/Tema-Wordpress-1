<?php get_header(); ?>
 
   

 
    <div class="body">
    	


   
       <section class="feat">

            <div class="container">
            	<h4>Testimonials</h4>
                <div class="row features">
                    <?php 
                    $args = array(
                        'posts_per_page' =>3,
                        'category_name' => 'Testimonios'
                    );
                    $testimonios= new WP_Query($args);
                    while ($testimonios->have_posts()): $testimonios ->the_post();

                    ?>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="100ms">
                         <!-- si la imagen tiene clases seria the_post_thumbnail( 'post-thumbnails', array( 'class' => 'nombre clase' ) ); -->
                        <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                } ?>
                       <!-- <img src="img/blog_1.png"> -->
                       
                        <p><?php the_content() ?></p>
                    </div>

                    <?php
                    endWhile; wp_reset_postdata();

                     ?>
                    <!--
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                       <img src="img/blog_2.png">
                       
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/blog_3.png">
                       
                        <p>Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum.</p>
                    </div>-->
                </div>
            </div>
        </section>

        <section class="testimonio">
       <div class="testimony-section">
       	
       </div>
      <div class="container">
        <div class="row ftco-animate justify-content-center">
        	
          <div class="col-md-12 col-lg-11">
          	<div class="py-md-5">
                
	          	<div class="heading-section ftco-animate">
	          		<span class="subheading">FEATURED</span>
                    <?php dynamic_sidebar('blog_widget') ?>

			         <!--
			          <div class="col-md-6 col-lg-6">
                         <h2>This is a simple heading</h2>
			           <div class="text">
	                    <p class="mb-4">This should ideally be a featured blog post. But don't let me tell you what to do <a href="#">youaremail@domain.com</a> will be a link.</p>
	                  </div>
	              </div>-->

			        </div> 
                </div>

<?php 
                    $args = array(
                        'posts_per_page' =>1,
                        'category_name' => 'Blog'
                    );
                    $testimonios= new WP_Query($args);
                    while ($testimonios->have_posts()): $testimonios ->the_post();

                    ?>

			    	<div class="py-md-5">
	          	<div class="heading-section ftco-animate">
	          		<span class="subheading">BLOG</span>
			          <h4 class=""><?php the_title() ?></h4>
			        </div>
	            <div class="carousel-testimony ftco-animate">
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                	<div class="row">
	                	<div class="col-xl-8 col-md-6 col-lg-3 text-left">
	                  <div class="text">
	                    <p class="mb-4"><?php echo get_the_content(); ?><a href="#" class="enlace">Read More...</a></p>
	                  </div>
	              </div>
	             <div class="col-xl-4 col-md-6 col-lg-3 text-right">
<div class="primary-white-button2">
                    <a href="#" class="scroll-link" data-id="about">See more</a>
                </div>
       </div>       
	              </div>
       
	                  <div class="d-flex">
		                  <div class="">
                            <?php echo the_post_thumbnail('', array( 'class' => 'user-img')); ?>
                              <!-- si la imagen tiene clases seria the_post_thumbnail( 'post-thumbnails', array( 'class' => 'nombre clase' ) ); -->
                       
                       <!-- <img src="img/blog_1.png"> -->
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name"><?php the_author() ?></p>
		                    <span class="position"><?php
                            remove_filter ('the_excerpt','wpautop');
                             the_excerpt() ?></span>
		                  </div>
		                </div>
	                </div>
                           </div>
          </div>
      </div>

 <?php
                    endWhile; wp_reset_postdata();

                     ?>



	              </div>
	            
	            </div>
	          </div>
          </div>
        </div>
      </div>
    </section>

  


   <?php get_footer(); ?>



   
