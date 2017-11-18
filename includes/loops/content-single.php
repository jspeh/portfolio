<?php
/*
The Single Posts Loop
=====================
*/
?>
    <div class="sidebar-accent hidden-xs hidden-sm">
        <img src="<?php echo get_template_directory_uri() ?>/img/sidebar-accent.svg" alt="Accent">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="press-single-wrapper press-padding-top">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
                        <header>
                            <span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/global/icon-divider-black.svg">
                                <!-- <h4><?php the_category(', ') ?> - <?php the_time('m.d.Y') ?></h4></span> -->
                                <h4>Press - <?php the_time('m.d.Y') ?></h4></span>
                            <h1><?php the_title()?></h1>
                        </header>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-sm-12 no-padding">
                <div class="press-single-wrapper">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="press-single-wrapper body">
                    <article>
                        <?php the_content()?>
                        <hr>
                        <div class="next-article-wrapper">

                            <h5 class="text-center">NEXT ARTICLE</h5>
                            <?php 
                            if (strlen(get_next_post()->post_title) > 0) {
                                next_post_link('%link');
                            } else {
                                 previous_post_link('%link');
                            } ?>
                            <?php # wp_link_pages(); ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-right.svg" alt="Press Link">
                        </div>
                    </article>
                    <?php # comments_template('/includes/loops/comments.php'); ?>
                    <?php endwhile; ?>
                    <?php else: get_template_part('includes/loops/content', 'none'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
