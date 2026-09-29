<?php get_header(); ?>
<main>
    <section class="about">
        <div class="inner">
            <img class="about-pic" src="<?php echo esc_url(get_theme_file_uri('./images/kaiko_icon.svg')); ?>" alt="">
            <h4 class="about-title">ナオミ</h4>
            <dl>
                <div class="about-item">
                    <dt>所属</dt>
                    <dd>トライデントコンピュータ専門学校Webデザイン学科</dd>
                </div>
                <div class="about-item">
                    <dt>略歴</dt>
                    <dd>
                        2026年4月にトライデントコンピュータ専門学校に入学。一人前のクリエイターになるべく、HTML、CSSを中心にWebデザインを学んでいる。
                    </dd>
                </div>
            </dl>
        </div>
    </section>
    <section class="skill">
        <div class="inner">
            <h4 class="skill-title">Skill</h4>
            <dl class="skill-all">
                <div class="skill-item">
                    <dt>Illustrator</dt>
                    <dd>★★★☆☆</dd>
                </div>
                <div class="skill-item">
                    <dt>Photoshop</dt>
                    <dd>★★☆☆☆</dd>
                </div>
                <div class="skill-item">
                    <dt>HTML+CSS</dt>
                    <dd>★★★★☆</dd>
                </div>
                <div class="skill-item">
                    <dt>JavaScript</dt>
                    <dd>★☆☆☆☆</dd>
                </div>
            </dl>
        </div>
    </section>
</main>
<?php get_footer(); ?>