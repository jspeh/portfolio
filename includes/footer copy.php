<footer class="container-fluid full site-footer">
    <!-- <div class="row">
        <div class="col-lg-12">
            <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
        </div>
    </div> -->
    <!-- <div class="left">
        <a href="<?php echo home_url('/'); ?>"><img class="footer-logo" src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt=""></a>
    </div>
    <div class="right">
        
    </div> -->
    <div class="desktop hidden-xs hidden-sm">
<!--
        <div class="row address align-middle">
            <div class="col-md-12">

                <p class="text-right">2444 w 16th st chicago<br/>illinois 60608</p>
                <p class="text-right">+1 773 888 1156</p>

            </div>
        </div>
-->
        <div class="row">
            <div class="col-md-6">
          <img class="footer-logo" src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt=""> 
            </div>
            <div class="links">
                <div class="col-md-1 col-md-offset-2 text-right">
                    <p>Contact</p>
                </div>
                <div class="col-md-1 text-right">
                    <p>Dribbble</p>
                </div>
                <div class="col-md-1 text-right">
                    <p>Medium</p>
                </div>
                <div class="col-md-1 text-right">
                    <p>LinkedIn</p>
                </div>

            </div>
        </div>
    </div>
    <div class="mobile hidden-md hidden-lg">
        <div class="row align-middle">
            <img class="footer-logo" src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
        </div>
        <div class="row">
            <h4 class="text-center">HELLO@JONATHANSPEH.COM</h4>
            <p class="text-center">© 2017 Jonathan Speh. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>