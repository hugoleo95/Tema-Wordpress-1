 <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                   
                    <div class="col-xl-6 col-md-6 col-lg-3 text-left">
                        <div class="footer_widget">
                            <h3>
                                    
                            </h3>
                           

                        </div>
                    </div>
                   <div class="col-xl-6 col-lg-9" id="navbar">
                         <?php wp_nav_menu(array(

                                'theme_location' =>'menu_footer',
                                'container' => 'div',
                                'container_class' =>'footer_widget',
                                'items_wrap' => ' <ul>%3$s</ul>',
                                'menu_class' => 'nav-item'
                                )); ?>
                

                    </div>
                 
                </div>
            </div>
        </div>
       
    </footer>
     </div>
      <?php wp_footer(); ?>

      </body>

</html>