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