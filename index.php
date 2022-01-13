<?php get_header(); ?>

<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post(); ?>
            <h2>
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h2>
            <div>
                <?php firstthemes_post_meta(); ?>
            </div>
            <div>
                <?php the_excerpt(); ?>

                <?php firstthemes_readmore_link(); ?>

            </div>
        <?php } ?>
        <?php the_posts_pagination(); ?>
    <?php } else { ?>
        // <p><?php  _e('Sorry, No Posts Matched Criteria', 'firstthemes'); ?></p>
<?php } ?>

<?php get_footer(); ?>
