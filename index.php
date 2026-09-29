<?php get_header(); ?>
<main>
    <section class="mainvisual">
        <div class="inner">
            <h2>かいこのぶろぐ</h2>
        </div>
    </section>
    <section class="Blog">
        <div class="inner">
            <h3>BLOG</h3>
            <div class="pages">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'post'); ?>
                <?php endwhile;
                endif; ?>
                <!---
                <article class="post">
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
                <article class="post">
                    <div class="post-image">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/kaiko_2degine.svg')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/blog_kininarukigyou.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/kaiko_2degine2.svg')); ?>" alt="">
                    </div>
                    <div class="post-text">
                        <h4><a href="single.html">気になるWeb制作会社</a></h4>
                        <p><a href="single.html">挨拶<br />
                                皆さん、こんにちは。ナオミです。今<br />
                                回は、「気になるWeb制作会社」が<br />
                                テーマということで、私が現在興味を<br />
                                持っているWeb制作会社について書い<br />
                                ていこうと思います。<br />
                                株式会社ラクー<br />
                                株式会社ラクーは、主に中小企業向け<br />
                                のホームページ制作を取り扱ってい…</a></p>
                    </div>
                </article>
                <article class="post">
                    <div class="post-image">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/kaiko_3degine.svg')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/blog_kininarukigyou.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/kaiko_3degine2.svg')); ?>" alt="">
                    </div>
                    <div class="post-text">
                        <h4><a href="single.html">気になるWeb制作会社</a></h4>
                        <p><a href="single.html">挨拶<br />
                                皆さん、こんにちは。ナオミです。今<br />
                                回は、「気になるWeb制作会社」が<br />
                                テーマということで、私が現在興味を<br />
                                持っているWeb制作会社について書い<br />
                                ていこうと思います。<br />
                                株式会社ラクー<br />
                                株式会社ラクーは、主に中小企業向け<br />
                                のホームページ制作を取り扱ってい…</a></p>
                    </div>
                </article>
                --->
            </div>
            <div class="nav-page">
                <!--- <ul>
                    <li><a href="#" class="btn1">1</a></li>
                    <li><a href="#" class="btn2">2</a></li>
                    <li><a href="#" class="btnnext">&gt;</a></li>
                </ul> --->
                <?php
                $arg = array(
                    'prev_text' => '<',
                    'next_text' => '>',
                    'type' => 'list',
                    'mid_size' => 1
                );
                the_posts_pagination($arg); ?>
            </div>
        </div>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>