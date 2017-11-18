<div class="case-wrapper">
    
    <div class="case-hero">
        <div class="sidebar-accent hidden-xs hidden-sm">
        <img src="<?php echo get_template_directory_uri() ?>/img/sidebar-accent.svg" alt="Accent">
        </div>
        <div class="hero-text reveal1">
            <span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/global/icon-divider-black.svg" alt="Divider">
                <h5><?php the_field('case_type'); ?></h5>
            </span>
            <h1><?php the_field('case_title'); ?></h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-sm-12 no-padding">
                    <?php if( get_field('image_featured') ): ?><img class="case-fullwidth-image" src="<?php the_field('image_featured'); ?>" /><?php endif; ?>
            </div>
        </div>
    </div>
    
   
    
    <div class="case-content">
        <div class="case-text reveal1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <h3><?php the_field('case_background_title'); ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <p><?php the_field('case_text'); ?></p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                       <hr>
                    </div>
                </div>

            </div>
        </div>
        <div class="case-image">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php if( get_field('image_one') ): ?><img class="img-responsive center-block" src="<?php the_field('image_one'); ?>" /><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="case-text reveal1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <h3>Component-based design</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <p>Design efforts focused on creating an immersive content-rich experience combining interactive elements, dramatic colors, bold typography, and plenty of white space. Leveraging a component-based UI approach allowed for an extensive library of design components that served as a point of reference for stakeholders, designers, and developers facilitating a consistent experience across devices.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                       <hr>
                    </div>
                </div>

            </div>
        </div>

        
        <div class="case-image">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php if( get_field('image_one') ): ?><img class="img-responsive center-block" src="<?php the_field('image_two'); ?>" /><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="case-text reveal1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <h3>Contribution</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <p>As Director of User Experience, I led a core team of designers and developers navigating the creative process from start to finish. My Initial efforts focused on understanding core business objectives, conducting extensive user research and stakeholder interviews, and the creation of a strategic vision and roadmap outlining the experience. This was followed by wireframing, interactive prototypes, and iterative design aimed at validating assumptions and gathering feedback on visual concepts. As a proponent of design-driven development, I aided in the development of front-end components aligning designers and developers to ensure the delivery of a user-centric site.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                       <hr>
                    </div>
                </div>

            </div>
        </div>
        
        
        
        
        
        
    </div><!--END CASE CONTENT-->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="case-next body">
                    <article>
                        <hr>
                        <div class="case-next-wrapper">

                            
                            <h5 class="text-center">NEXT CASE STUDY</h5>
                            <?php $link = get_field('next_case_link'); if( $link ): ?><a href="<?php echo $link; ?>"><span><?php the_field('next_case_link_title'); ?></span></a><?php endif; ?>
                                                       
                            
                            
                           <img class="img-arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-right.svg" alt="Case Link">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
               
    
</div><!--END CASE WRAPPER-->





 
