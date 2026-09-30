<?php get_header(); ?>
<main>
    <section class="mainvisual">
        <div class="inner">
            <h2>かいこのぶろぐ</h2>
        </div>
    </section>
    <section class="main-blog">
        <div class="inner">
            <h5><?php the_title(); ?></h5>
            <div class="main-contents">
                <div class="uplord">
                    <p>公開日 ーーー</p>
                    <p>ーーー <time datetime="<?php echo the_date('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                </div>
                <div class="update">
                    <p>更新日 ーーー</p>
                    <p>ーーー <time datetime="<?php echo get_the_modified_date('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                </div>
                <?php if (has_post_thumbnail()):
                    the_post_thumbnail('large');
                else: ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('./images/hurikaeri_blog.jpg')); ?>" alt="">
                <?php endif; ?>
                <div class="main-sentence">
                    <?php the_content(); ?>
                    <!---
                    <h6>挨拶</h6>
                    <p>皆さん、こんにちは。ナオミです。今回は、「気になるWeb制作会社」がテーマということで、私が現在興味を持っているWeb制作会社について書いていこうと思います。</p>
                    <h6>株式会社ラクー</h6>
                    <p>株式会社ラクーは、主に中小企業向けのホームページ制作を取り扱っている、名古屋市を拠点とするWeb制作会社です。
                        「お客様が輝くために、最高のITをよりラクーに!」という考えのもと、IT初心者の方でもうまくITを導入して活用し、成長ができるよう親切・丁寧なサポートを徹底しており、Web制作にあたって事前調査による競合との差別化から完成後の成長戦略の提案まで手厚い補助を行っています。
                    </p>
                    <h6>ホームページ制作の流れ</h6>
                    <p>1.ホームページのお問い合わせフォーム・資料請求または電話にて連絡<br />
                        2.ホームページを作成する目的や要望を共有<br />
                        3.目的達成のための提案、明朗な見積もり金額を提示<br />
                        4.提案内容に了承後、正式に契約<br />
                        5.取材や打ち合わせで具体的なイメージを固める<br />
                        6.要望を聞きつつTOPページをデザイン<br />
                        7.TOPページのデザインを元にして内部ページをデザイン<br />
                        8.ホームページとして表示するための構築作業<br />
                        9.オープン前に最終確認<br />
                        10.ホームページの公開<br />
                        11.定期的な更新・修正などアフターサポート</p>
                    <h6>最後に</h6>
                    <p>ここまで私の気になったWeb制作会社を紹介してみましたが、どうでしたでしょうか。あくまで業界にあまり詳しくない私の紹介ですが、少しでも皆さんの参考になれば幸いです。</p>
                    --->
                </div>
            </div>
            <div class="post-info">
                <ul>
                    <li class="post-category">Category: <?php the_category(' / '); ?></li>
                    <li class="post-tag">Tag: <?php the_tags('', ' / '); ?></li>
                </ul>
            </div>
            <div class="btnback">
                <ul>
                    <?php if (get_previous_post()): ?>
                        <li><?php previous_post_link('%link', '次の記事へ'); ?></li>
                    <?php endif; ?>
                    <?php if (get_next_post()): ?>
                        <li><?php next_post_link('%link', '前の記事へ'); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="post-comments">
                <?php
                // コメントが開いているか、コメントが1件以上ある場合に表示
                if (comments_open() || get_comments_number()):
                    comments_template();
                endif;
                ?>
            </div>
        </div>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>