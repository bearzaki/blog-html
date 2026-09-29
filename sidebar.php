<section class="search-post">
    <div class="inner">
        <h3>Search</h3>
        <?php get_search_form(); ?>
    </div>
</section>
<div class="cat-arc">
    <section class="category">
        <div class="inner">
            <h3>Category</h3>
            <ul class="side-list">
                <?php wp_list_categories(
                    array(
                        'title_li' => '',
                        'show_count' => 1
                    )
                ); ?>
            </ul>
        </div>
    </section>
    <section class="archive">
        <div class="inner">
            <h3>Aechive</h3>
            <ul class="side-list">
                <?php wp_get_archives(
                    array(
                        'show_post_count' => 1,
                    )
                ); ?>
            </ul>
        </div>
    </section>
</div>
<section class="profile">
    <div class="inner">
        <h3>Profile</h3>
        <div class="prof-img">
            <img src="<?php echo esc_url(get_theme_file_uri('./images/kaiko_icon.svg')); ?>" alt="">
            <div class="prof-text">
                <h4>ナオミ</h4>
                <p>トライデントコンピュータ専門学校<br />Webデザイン学科
                    <br />
                    <br />読書と散歩が趣味
                </p>
            </div>
        </div>
    </div>
</section>