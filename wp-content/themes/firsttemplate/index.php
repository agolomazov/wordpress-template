<?php get_header(); ?>
<div class="content-wrapper">
    <div class="content-main">

        <div class="content">
            <div id='slideshowHolder'>
                <img src="<?php echo bloginfo('template_url') ?>/images/img1.jpg" alt='' />
                <img src="<?php echo bloginfo('template_url') ?>/images/img1.jpg" alt='' />
                <img src="<?php echo bloginfo('template_url') ?>/images/img1.jpg" alt='' />
            </div>


            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

                <div class="articles">

                    <div class="articles-gen-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()):
                                    the_post_thumbnail();
                                  else:?>
                                <img src="<?php echo bloginfo('template_url'); ?>/images/noimg.jpg" alt="" />
                            <?php endif;?>
                        </a>
                    </div>
                    <div class="articles-head">
                        <span class="articles-date"><img src="<?php echo bloginfo('template_url') ?>/images/articles-autor.jpg" alt="admin" /> <span><?php the_author(); ?></span> - <?php the_time('M d, Y'); ?></span>
                        <span class="articles-comments"><img src="<?php echo bloginfo('template_url') ?>/images/articles-comment.jpg" alt="commets" />
                            <a href="#"><?php comments_number('пока нет комментариев', '1 комменатрий', '% комментариев'); ?></a>
                        </span>
                    </div>

                    <h1><a title="<?php printf( esc_attr__( '%s', 'striped' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a></h1>
                    <?php the_excerpt(); ?>

                    <p><a href="<?php the_permalink(); ?>">Читать далее</a></p>

                </div>

            <?php endwhile; ?>
            <?php endif; ?>




            <div class="pager">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>of</span>
                <a href="#">75</a>
                <a href="#" class="prev-next">Next</a>
            </div>

        </div>

        <?php get_sidebar(); ?>
    </div>

</div>
<?php get_footer(); ?>
