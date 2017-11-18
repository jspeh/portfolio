<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the section tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/bst.css style the different formats in different ways.
*/
?>

    <div class="press-title-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/global/icon-divider-black.svg">
                        <h5>Featured</h5>
                    </span>
                    <h1>News + Press</h1>
                    <hr/>
                </div>
            </div>
        </div>
    </div>


    <?php if(have_posts()): while(have_posts()): the_post();?>

    <div class="container">
        <div class="row">
            <article role="article" id="post_<?php the_ID()?>" class="flex">
                <div class="col-sm-5 press-list-image">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <div class="col-sm-7 v-center">
                    <!-- <h4><?php the_category(', ') ?> - <?php the_time('m.d.Y') ?></h4> -->
                    <h4>Press - <?php the_time('m.d.Y') ?></h4>
                    <h1>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title()?>
                        </a>
                    </h1>
                </div>
            </article>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr/>
            </div>
        </div>
    </div>

    <?php endwhile; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <?php if ( function_exists('bst_pagination') ) { bst_pagination(); } else if ( is_paged() ) { ?>
                <?php 
                     $arrow_path = get_template_directory_uri() . '/img/global/icon-arrow-right-white.svg';
                ?>
                <ul class="pagination">
                    <li class="older">
                        <?php next_posts_link(__('VIEW MORE', 'bst') . '<img src="' . $arrow_path . '">') ?>
                    </li>
                    <li class="newer">
                        <?php previous_posts_link(__('Next', 'bst') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
                </ul>
                <?php } ?>

                <?php else: get_template_part('includes/loops/content', 'none'); endif; ?>

            </div>
        </div>
    </div>
