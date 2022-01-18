<?php 
    function firstthemes_post_meta(){
        // Translator %s Post date
        printf(
            esc_html__('Posted on %s', 'firstthemes'),
            '<a href="' . esc_url(get_permalink( )) . '"><time datetime="' . esc_attr(get_the_date('c')) .'">' . esc_html(get_the_date()). '</time></a>'
        );
        printf(
            // Translator %s Post Author
            esc_html__(' By %s','firstthemes'),
            '<a href="' . esc_url(get_author_posts_url( get_the_author_meta( 'ID' ))) . '">' . esc_html(get_the_author( )) . '</a>'
        );
    }
    function firstthemes_readmore_link(){
        echo '<a href="' .  esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
        // Translator %s Post title
        printf(
            wp_kses(
            __('Read More <span class="u-screen-reader-text">About %s</span>', 'firstthemes'),
            [
                'span' => [
                    'class' => []
                ]
            ]
        ),
            get_the_title()
        );
        echo '</a>';
    }
?>