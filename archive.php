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
            <?php
            if (is_category()):
                echo single_cat_title('', false) . 'の記事一覧';
            elseif (is_tag()):
                echo single_tag_title('', false) . 'の記事一覧';
            elseif (is_month()):
                echo get_the_time('Y年n月') . 'の記事一覧';
            elseif (is_search()):
                echo '「' . get_search_query() . '」の検索結果';
            else:
                echo '過去の記事一覧';
            endif;
            ?>
            <div class="pages">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'post'); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <?php get_template_part('template-parts/loop', 'not'); ?>
                <?php endif; ?>
            </div>
            <div class="nav-page">
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