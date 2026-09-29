<article class="post" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
    <div class="post-image">
        <img src="<?php echo esc_url(get_theme_file_uri('./images/kaiko_degine.svg')); ?>" alt="">
        <div class="thumbnail">
            <?php if (has_post_thumbnail()):
                the_post_thumbnail('large');
            else: ?>
                <img src="<?php echo esc_url(get_theme_file_uri('./images/blog_kininarukigyou.png')); ?>" alt="">
            <?php endif; ?>
        </div>
        <img src="<?php echo esc_url(get_theme_file_uri('./images/kaiko_degine2.svg')); ?>" alt="">
    </div>
    <div class="post-text">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
    </div>
</article>