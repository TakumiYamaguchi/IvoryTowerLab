<?php
/*
Template Name: TOP
*/
?>
<?php get_header(); ?>
<main class="main">
    <section id="mv">
        <div class="mv__inner">
            <img class="mv-img" src="<?php echo get_template_directory_uri(); ?>/img/Ivory_Tower_Top_Logo.png"
                alt="ivorytower_lab">
            <img class="mv-title" src="<?php echo get_template_directory_uri(); ?>/img/Ivory_Tower_Labrtory.png"
                alt="ivorytower_lab">
        </div>
    </section>
    <section id="about-this-site">
        <div class="about-this-site__inner">
            <h2 class="section-title">About This Site</h2>
            <div class="about-this-site__contents">
                <p class="about-this-site__text">Ivory Tower Laboratoryはwebエンジニア兼サウンドデザイナー山口拓己のポートフォリオサイトです。
                    一人黙々と作業をすることの多いwebエンジニア、サウンドデザインというワークスタイルに、かつ日々新たな技術やアイデアを追い求めたいたい。そういう想いから
                    「Ivory Tower Laboratory」という名前を名付けました。</p>
            </div>
        </div>
    </section>
    <section id="about-me">
        <div class="about-me__inner">
            <h2 class="section-title">About Me</h2>
            <div class="about-me-contents">
                <img class="about-me-contents_img" src=" <?php echo get_template_directory_uri(); ?>/img/face.png"
                    alt="ivorytower_lab">
                <p class="about-me-contents_txt">
                    Ivory Tower
                    Laboratory所長の山口です。20代の初めにダンスミュージックに出会い、クラブ等へ足を運ぶようになり、その後はバックパッカーとしてアジアやヨーロッパを旅するうちに自分でも音楽を作ってみたいと思い始め、DAWを使いダンスミュージックを作り始めて今日まで10年以上、主にCubase、Logicを使いダンスミュージックを作ってきました。
                </p>
            </div>
        </div>
    </section>
    <section id="works">
        <div class="works__inner">
            <h2 class="section-title">Works</h2>
            <div class="works-contents">
                <article class="works-item">
                    <a class="works_item__link" href="http://engress.ivorytowerlab.jp/wp/">
                        <img class="works_item__link_img"
                            src="<?php echo get_template_directory_uri(); ?>/img/engrees.png" alt="engrees">
                        <div class="works-item-txt">
                            <h3 class="works-item-txt__title">コーディング教材。<br>コーディング、Wordpressオリジナルテーマ作成</h3>
                            <p class="works-item-txt__heading">[使用技術]</p>
                            <ul class="works-item-txt__list">
                                <li class="works-item-txt__list_item">wordpress</li>
                                <li class="works-item-txt__list_item">Sass</li>
                                <li class="works-item-txt__list_item">gulp</li>
                                <li class="works-item-txt__list_item">Vue.js</li>
                            </ul>
                        </div>
                    </a>
                </article>
                <article class="works-item">
                    <a class="works_item__link" href="http://satousetubi.ivorytowerlab.jp/">
                        <img class="works_item__link_img"
                            src="<?php echo get_template_directory_uri(); ?>/img/satousetubi.png" alt="engrees">
                        <div class="works-item-txt">
                            <h3 class="works-item-txt__title">コーディング、模写、Wordpressオリジナルテーマ作成</h3>
                            <p class="works-item-txt__heading">[使用技術]</p>
                            <ul class="works-item-txt__list">
                                <li class="works-item-txt__list_item">wordpress</li>
                                <li class="works-item-txt__list_item">Sass</li>
                                <li class="works-item-txt__list_item">gulp</li>
                                <li class="works-item-txt__list_item">jQuery</li>
                                <li class="works-item-txt__list_item">※Basic認証 ID:test PW:test</li>
                            </ul>
                        </div>
                    </a>
                </article>
                <article class="works-item">
                    <a class="works_item__link" href="http://amagi.ivorytowerlab.jp/">
                        <img class="works_item__link_img"
                            src="<?php echo get_template_directory_uri(); ?>/img/amagi.png" alt="engrees">
                        <div class="works-item-txt">
                            <h3 class="works-item-txt__title">コーディング、模写、Wordpressオリジナルテーマ作成</h3>
                            <p class="works-item-txt__heading">[使用技術]</p>
                            <ul class="works-item-txt__list">
                                <li class="works-item-txt__list_item">wordpress</li>
                                <li class="works-item-txt__list_item">Sass</li>
                                <li class="works-item-txt__list_item">gulp</li>
                                <li class="works-item-txt__list_item">jQuery</li>
                                <li class="works-item-txt__list_item">※Basic認証 ID:test PW:test</li>
                            </ul>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact__inner">
            <h2 class="section-title">contact</h2>
            <ul class="contact-head">
                <li class="contact-head__item"><span class="contact-head__item_current">入力</span></li>
                <li class="contact-head__item"><span>確認</span></li>
                <li class="contact-head__item"><span>送信</span></li>
            </ul>
            <form action="">
                <table class="contact-body">
                    <tbody>
                        <tr class="input-item">
                            <th class="input-item__inner">
                                <p class="input-item__inner_title">会社名</p>
                                <span class="input-item__inner_req">必須</span>
                            </th>
                            <td class="input-info">
                                <input class="input-info__txt" type="text" name="company-name" placeholder="例）株式会社ABC">
                            </td>
                        </tr>
                        <tr class="input-item">
                            <th class="input-item__inner">
                                <p class="input-item__inner_title">担当者名（漢字）</p>
                                <span class="input-item__inner_req">必須</span>
                            </th>
                            <td class="input-info">
                                <input class="input-info__txt" name="pic" type="text" placeholder="例）山田太郎">
                            </td>
                        </tr>
                        <tr class="input-item">
                            <th class="input-item__inner">
                                <p class="input-item__inner_title">担当者名(カタカナ)
                                </p>
                                <span class="input-item__inner_req">必須</span>
                            </th>
                            <td class="input-info">
                                <input class="input-info__txt" type="text" name="pic-kana" placeholder="例）ヤマダタロウ">
                            </td>
                        </tr>
                        <tr class="input-item">
                            <th class="input-item__inner">
                                <p class="input-item__inner_title">メールアドレス</p>
                                <span class="input-item__inner_req">必須</span>
                            </th>
                            <td class="input-info">
                                <input class="input-info__txt" name="email" type=" text" placeholder="例）abc@sample.com">
                            </td>
                        </tr>
                        <tr class="input-item">
                            <th class="input-item__inner">
                                <p class="input-item__inner_title">電話番号</p>
                            </th>
                            <td class="input-info">
                                <input class="input-info__txt" name="tel" type="text" placeholder="例）012-345-678">
                            </td>
                        </tr>
                        <tr class="input-item">
                            <th class="input-item__inner">
                                <p class="input-item__inner_title">お問い合わせ内容</p>
                                <span class="input-item__inner_req">必須</span>
                            </th>
                            <td class="input-info">
                                <textarea cols="30" rows="5" name="msg"
                                    class="input-info__txt input-info__textarea"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="submit">
                    <button type="submit__button" value="確認する" class="submit__button">
                        <span>確認する</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php
get_footer();