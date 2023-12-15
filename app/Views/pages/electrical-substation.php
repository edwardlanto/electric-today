<?php echo $this->extend('layouts/default'); ?>
<?php echo $this->section('content'); ?>
<?php
    $uri = urlencode(current_url(true));
?>
<div class="td-container td-post-template-default">
    <div class="td-crumb-container">
        <div class="entry-crumbs">
            <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="" class="entry-crumb" itemprop="url" href="https://www.electricity-today.com/"><span itemprop="title">Home</span></a>
            </span>
            <i class="fa-solid fa-angle-right"></i>
            <?php 
                foreach($categories as $c):
                    echo "<span itemscope='' itemtype='http://data-vocabulary.org/Breadcrumb'>
                                <a title='View all posts in " . $c["title"] . "' class='entry-crumb' itemprop='url' href='https://www.electricity-today.com/category/" . $c['slug'] . "'>
                                    <span itemprop='title'>" . $c['title'] . "</span>
                                </a>
                            </span>
                            <i class='fa-solid fa-angle-right'></i>";
                endforeach
            ?>

            <span class="td-bred-no-url-last" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <meta itemprop="title" content="Case Study:  Rapid Changes in Bushing Health" />
                <meta itemprop="url" content="https://www.electricity-today.com/electrical-substation/high-voltage-test-equipment/case-study-rapid-changes-in-bushing-health" />Case Study: Rapid Changes in Bushing Health
            </span>
        </div>
    </div>

    <div class="td-pb-row">
        <div class="td-pb-span8 td-main-content" role="main">
            <div class="td-ss-main-content">
                <article
                    id="post-5895"
                    class="post-5895 post type-post status-publish format-standard has-post-thumbnail hentry category-case-study category-news category-news-news category-substation-automation category-substation-technologies category-high-voltage-test-equipment category-td-automation category-utility-automation-monitoring"
                    itemscope=""
                    itemtype="https://schema.org/Article"
                >
                    <div class="td-post-header">
                        <ul class="td-category">
                            <?php
                                foreach ($tags as $tag):
                                    echo  '<li class="entry-category"><a href=' . 'https://www.electricity-today.com/category/' . $tag['slug'] . '>' . $tag['title'] . '</a></li>';
                                endforeach
                            ?>
                        </ul>
                        <header class="td-post-title">
                            <h1 class="entry-title"><?= $title ?></h1>

                            <div class="td-module-meta-info">
                                <div class="td-post-author-name">By <a href=<?= (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' . "author/" . $author_slug ?>><?= $author_name ?></a></div>
                                <div class="td-post-comments">
                                    <a href=<?= "https://www.electricity-today.com/electrical-substation/high-voltage-test-equipment/case-study-rapid-changes-in-bushing-health#respond"?> class="box-flex box-items-center">
                                    <i class="fa-solid fa-comment" style="margin-right:5px"></i><span id="comment-count"><?= count($comments) ?></span></a>
                                </div>
                                <div class="td-post-views box-flex box-align-center"><i class="fa-solid fa-eye" style="margin-right:5px"></i><span class="td-nr-views-5895"><?= $view_count ?></span></div>
                            </div>
                        </header>
                    </div>

                    <div class="td-post-sharing td-post-sharing-top">
                        <div class="td-default-sharing">
                            <a
                                class="td-social-sharing-buttons td-social-facebook"
                                href=<?= "http://www.facebook.com/sharer.php?u=" . $uri ?>
                                onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                            >
                            <i class="fa-brands fa-facebook-f"></i>
                                <div class="td-social-but-text">Share on Facebook</div>
                            </a>
                            <a
                                class="td-social-sharing-buttons td-social-twitter"
                                href=<?= "https://twitter.com/intent/tweet?text=" . urlencode($title) . "&amp;url=" . $uri ?>
                            >
                            <i class="fa-brands fa-twitter"></i>
                                <div class="td-social-but-text">Tweet on Twitter</div>
                            </a>
                            <a
                                class="td-social-sharing-buttons td-social-google"
                                href=<?= "http://plus.google.com/share?url=" . $uri ?>
                                onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                            >
                            <i class="fa-brands fa-google-plus-g"></i>
                            </a>
                            <a
                                class="td-social-sharing-buttons td-social-pinterest"
                                href=<?= "http://pinterest.com/pin/create/button/?url=" . $uri ?>
                                onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                            >
                            <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                            <a
                                class="td-social-sharing-buttons td-social-whatsapp"
                                href=<?"whatsapp://send?text=" . urlencode($title) .  "-" . $uri ?>
                            >
                                <i class="td-icon-whatsapp"></i>
                            </a>
                        </div>
                    </div>

                    <div class="td-post-content">
                        <div class="td-post-featured-image">
                            <a href="https://www.electricity-today.com/wp-content/uploads/magazine_may_june_2023_article_1.jpg" data-caption="" class="td-modal-image">
                                <img
                                    width="420"
                                    height="236"
                                    class="entry-thumb td-animation-stack-type0-1"
                                    src=<?= $image ?>
                                    alt="<?= $title ?>"
                                    title="<?= $title ?>"
                                />
                            </a>
                        </div>
                        <?= $content ?>
                    </div>

                    <div>
                        <div class="td-post-source-tags"></div>

                        <div class="td-post-sharing td-post-sharing-bottom td-with-like">
                            <span class="td-post-share-title">SHARE</span>
                            <div class="td-default-sharing">
                                <a
                                    class="td-social-sharing-buttons td-social-facebook"
                                    href=<?= "http://www.facebook.com/sharer.php?u=" . $uri ?>
                                    onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                                >
                                <i class="fa-brands fa-facebook-f"></i>
                                    <div class="td-social-but-text">Facebook</div>
                                </a>
                                <a
                                    class="td-social-sharing-buttons td-social-twitter"
                                    href=<?= "https://twitter.com/intent/tweet?text=" . urlencode($title) . "&amp;url=" . $uri ?>
                                >
                                <i class="fa-brands fa-twitter"></i>
                                    <div class="td-social-but-text">Twitter</div>
                                </a>
                                <a
                                    class="td-social-sharing-buttons td-social-google"
                                    href=<?= "http://plus.google.com/share?url=" . $uri ?>
                                    onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                                >
                                <i class="fa-brands fa-google-plus-g"></i>
                                </a>
                                <a
                                    class="td-social-sharing-buttons td-social-pinterest"
                                    href=<?= "http://pinterest.com/pin/create/button/?url=" . $uri ?>
                                    onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                                >
                                <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                                <a
                                    class="td-social-sharing-buttons td-social-whatsapp"
                                    href=<?"whatsapp://send?text=" . urlencode($title) .  "-" . $uri ?>
                                >
                                    <i class="td-icon-whatsapp"></i>
                                </a>
                            </div>
                            <div class="td-classic-sharing">
                                <ul>
                                    <li class="td-classic-facebook">
                                        <iframe
                                            frameborder="0"
                                            src="https://www.facebook.com/plugins/like.php?href=https://www.electricity-today.com/electrical-substation/high-voltage-test-equipment/case-study-rapid-changes-in-bushing-health&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21"
                                            style="border: none; overflow: hidden; width: 105px; height: 21px; background-color: transparent;"
                                        ></iframe>
                                    </li>
                                    <li class="td-classic-twitter">
                                        <iframe
                                            id="twitter-widget-0"
                                            scrolling="no"
                                            frameborder="0"
                                            allowtransparency="true"
                                            allowfullscreen="true"
                                            class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
                                            style="position: static; visibility: visible; width: 66px; height: 20px;"
                                            title="X Post Button"
                                            src="https://platform.twitter.com/widgets/tweet_button.2f70fb173b9000da126c79afe2098f02.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fwww.electricity-today.com%2Felectrical-substation%2Fhigh-voltage-test-equipment%2Fcase-study-rapid-changes-in-bushing-health&amp;size=m&amp;text=Case%20Study%3A%20%20Rapid%20Changes%20in%20Bushing%20Health&amp;time=1702332452394&amp;type=share&amp;url=" . $uri 
                                            data-url=<?= $uri ?>
                                        ></iframe>
                                        <script>
                                            !(function (d, s, id) {
                                                var js,
                                                    fjs = d.getElementsByTagName(s)[0];
                                                if (!d.getElementById(id)) {
                                                    js = d.createElement(s);
                                                    js.id = id;
                                                    js.src = "//platform.twitter.com/widgets.js";
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }
                                            })(document, "script", "twitter-wjs");
                                        </script>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="td-block-row td-post-next-prev">
                            <div class="td-block-span6 td-post-prev-post">
                                <div class="td-post-next-prev-content">
                                    <span>Previous article</span>
                                    <a href="https://www.electricity-today.com/uncategorized/hydrogen-monitoring-in-the-transformer-headspace-compared-to-traditional-in-oil-monitoring">
                                        Hydrogen Monitoring in the Transformer Headspace Compared to Traditional In-Oil Monitoring
                                    </a>
                                </div>
                            </div>
                            <div class="td-next-prev-separator"></div>
                            <div class="td-block-span6 td-post-next-post">
                                <div class="td-post-next-prev-content">
                                    <span>Next article</span>
                                    <a href="https://www.electricity-today.com/electrical-substation/high-voltage-test-equipment/latest-power-outage-statistics-and-causes-tracker">Latest Power Outage Statistics and Causes Tracker</a>
                                </div>
                            </div>
                        </div>
                        <div class="author-box-wrap">
                            <a href="https://www.electricity-today.com/author/www-dynamicratings-com">
                                <img
                                    alt=""
                                    src="https://secure.gravatar.com/avatar/1b26c92456f7b2a7b8be0e9d4dfa2884?s=96&amp;d=mm&amp;r=g"
                                    srcset="https://secure.gravatar.com/avatar/1b26c92456f7b2a7b8be0e9d4dfa2884?s=192&amp;d=mm&amp;r=g 2x"
                                    class="avatar avatar-96 photo td-animation-stack-type0-1"
                                    height="96"
                                    width="96"
                                />
                            </a>
                            <div class="desc">
                                <div class="td-author-name vcard author">
                                    <span class="fn"><a href=<?= (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' . "author/" . $author_slug ?>><?= $author_name ?></a></span>
                                </div>
                                <div class="td-author-description"></div>
                                <div class="td-author-social"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <span style="display: none;" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><meta itemprop="name" content="www.dynamicratings.com" /></span>
                        <meta itemprop="datePublished" content="2023-07-13T14:40:43+00:00" /><meta itemprop="dateModified" content="2023-07-13T14:41:30+00:00" />
                        <meta
                            itemscope=""
                            itemprop="mainEntityOfPage"
                            itemtype="https://schema.org/WebPage"
                            itemid="https://www.electricity-today.com/electrical-substation/high-voltage-test-equipment/case-study-rapid-changes-in-bushing-health"
                        />
                        <span style="display: none;" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                            <span style="display: none;" itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                                <meta itemprop="url" content="https://www.electricity-today.com/wp-content/uploads/et-online-magazine-300x74.jpg" />
                            </span>
                            <meta itemprop="name" content="Electricity Today T&amp;D Magazine" />
                        </span>
                        <meta itemprop="headline " content="Case Study:  Rapid Changes in Bushing Health" />
                        <span style="display: none;" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url" content="https://www.electricity-today.com/wp-content/uploads/magazine_may_june_2023_article_1.jpg" /><meta itemprop="width" content="420" /><meta itemprop="height" content="236" />
                        </span>
                    </div>
                </article>
                <!-- /.post -->

                <script>
                    var block_td_uid_34_6577881ce8fc9 = new tdBlock();
                    block_td_uid_34_6577881ce8fc9.id = "td_uid_34_6577881ce8fc9";
                    block_td_uid_34_6577881ce8fc9.atts =
                        '{"limit":3,"ajax_pagination":"next_prev","live_filter":"cur_post_same_categories","td_ajax_filter_type":"td_custom_related","class":"td_uid_34_6577881ce8fc9_rand","td_column_number":3,"live_filter_cur_post_id":5895,"live_filter_cur_post_author":"121"}';
                    block_td_uid_34_6577881ce8fc9.td_column_number = "3";
                    block_td_uid_34_6577881ce8fc9.block_type = "td_block_related_posts";
                    block_td_uid_34_6577881ce8fc9.post_count = "3";
                    block_td_uid_34_6577881ce8fc9.found_posts = "183";
                    block_td_uid_34_6577881ce8fc9.header_color = "";
                    block_td_uid_34_6577881ce8fc9.ajax_pagination_infinite_stop = "";
                    block_td_uid_34_6577881ce8fc9.max_num_pages = "61";
                    tdBlocksArray.push(block_td_uid_34_6577881ce8fc9);
                </script>
                <div class="td_block_wrap td_block_related_posts td_uid_34_6577881ce8fc9_rand td_with_ajax_pagination td-pb-border-top">
                    <h4 class="td-related-title">
                        <a id="td_uid_35_6577881cea589" class="td-related-left td-cur-simple-item" data-td_filter_value="" data-td_block_id="td_uid_34_6577881ce8fc9" href="#">RELATED ARTICLES</a>
                        <a id="td_uid_36_6577881cea5d1" class="td-related-right" data-td_filter_value="td_related_more_from_author" data-td_block_id="td_uid_34_6577881ce8fc9" href="#">MORE FROM AUTHOR</a>
                    </h4>
                    <div id="td_uid_34_6577881ce8fc9" class="td_block_inner">
                        <div class="td-related-row">
                            <div class="td-related-span4">
                                <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="https://www.electricity-today.com/news/line-leakage-testing-is-it-right-for-your-application" rel="bookmark" title="Line Leakage Testing: Is It Right For Your Application">
                                                <img
                                                    width="218"
                                                    height="150"
                                                    class="entry-thumb td-animation-stack-type0-1"
                                                    src="https://www.electricity-today.com/wp-content/uploads/4-20-218x150.jpg"
                                                    alt="magazine_sep_oct_2023_article_4"
                                                    title="Line Leakage Testing: Is It Right For Your Application"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="entry-title td-module-title">
                                            <a href="https://www.electricity-today.com/news/line-leakage-testing-is-it-right-for-your-application" rel="bookmark" title="Line Leakage Testing: Is It Right For Your Application">
                                                Line Leakage Testing: Is It Right For Your Application
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- ./td-related-span4 -->

                            <div class="td-related-span4">
                                <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="https://www.electricity-today.com/news/dielectric-voltage-testing-standard-methods" rel="bookmark" title="Dielectric Voltage Testing – Standard Methods">
                                                <img
                                                    width="218"
                                                    height="150"
                                                    class="entry-thumb td-animation-stack-type0-1"
                                                    src="https://www.electricity-today.com/wp-content/uploads/3-24-218x150.jpg"
                                                    alt="magazine_sep_oct_2023_article_3"
                                                    title="Dielectric Voltage Testing – Standard Methods"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="entry-title td-module-title">
                                            <a href="https://www.electricity-today.com/news/dielectric-voltage-testing-standard-methods" rel="bookmark" title="Dielectric Voltage Testing – Standard Methods">
                                                Dielectric Voltage Testing – Standard Methods
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- ./td-related-span4 -->

                            <div class="td-related-span4">
                                <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="https://www.electricity-today.com/news/ground-tester-section-criteria" rel="bookmark" title="Ground Tester Section Criteria">
                                                <img
                                                    width="218"
                                                    height="132"
                                                    class="entry-thumb td-animation-stack-type0-1"
                                                    src="https://www.electricity-today.com/wp-content/uploads/2-24-218x132.jpg"
                                                    alt="magazine_sep_oct_2023_article_2"
                                                    title="Ground Tester Section Criteria"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="entry-title td-module-title">
                                            <a href="https://www.electricity-today.com/news/ground-tester-section-criteria" rel="bookmark" title="Ground Tester Section Criteria">Ground Tester Section Criteria</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- ./td-related-span4 -->
                        </div>
                        <!--./row-fluid-->
                    </div>
                    <div class="td-next-prev-wrap">
                        <a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_34_6577881ce8fc9" data-td_block_id="td_uid_34_6577881ce8fc9"><i class="fa-solid fa-angle-left"></i></a>
                        <a href="#" class="td-ajax-next-page" id="next-page-td_uid_34_6577881ce8fc9" data-td_block_id="td_uid_34_6577881ce8fc9"><i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                    <div id="comment-container" <?= count($comments) > 0 ? '' : 'hidden' ?> >
                        <div class="td-comments-title-wrap">
                            <h4 class="block-title"><span>COMMENTS</span></h4>
                        </div>
                        <?php foreach($comments as $c): ?>
                            <div style="margin-bottom:15px;" class="author-box-wrap">
                                <span><?= $c['content']?></span><br/>
                                <small><?= $c['created_at'] ?></small>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div id="no-comment-container">
                    <div class="comments" <?= count($comments) == 0 ? '' : 'hidden' ?>>
                        <div class="td-comments-title-wrap">
                            <h4 class="block-title"><span>NO COMMENTS</span></h4>
                        </div>
                    </div>
                    </div>
                <form name="comment-form" data-post=<?= $post_id ?> id="comment-form" onsubmit="return false">
                    <textarea required name="content" placeholder="Write your comment here, must be atleast 5 characters" minlength="5" pattern="[a-zA-Z0-9-]"></textarea>
                    <input type="submit" value="Comment" /> 
                </form>
                <br />
            </div>
        </div>
        <?php echo $this->include('templates/sidebars/post_type_sidebar'); ?>
        <script>
            function fun_redirect(magazine) {
                var loc = "http://online.electricity-today.com/doc/electricity-today/" + magazine;
                //window.location.href=('http://www.electricityforum2.com/authenticate/login.php?dec='+loc);
                window.location.href = loc;
            }
            function fun_redirect2018(magazine) {
                var loc = "https://online.electricity-today.com/electricity-today/" + magazine;
                //window.location.href=('http://www.electricityforum2.com/authenticate/login.php?dec='+loc);
                window.location.href = loc;
            }
            function fun_redirect_loc(magazine) {
                var loc = "http://www.electricity-today.com/downloads/" + magazine;

                if (history.length == 1) {
                    window.location.replace(loc);
                    //return false;
                } else {
                    window.location.href = loc;
                }
            }
            if (document.getElementById("a_dig_mag") && document.getElementById("a_dig_mag").id != "") {
                document.getElementById("a_dig_mag").onclick();
            }
            if (document.getElementById("a_dig_mag_loc") && document.getElementById("a_dig_mag_loc").id != "") {
                document.getElementById("a_dig_mag_loc").onclick();
            }
        </script>
        <script type="text/javascript">
            // Comment Form
            jQuery(document).ready(function() {

                function sanitizeString(input) {
                    const specialCharRegex = /[<>]/g;
                    const sanitizedInput = input.replace(specialCharRegex, '');
                    return sanitizedInput;
                }

                jQuery('#comment-form').on('submit', function(e) {
                    e.preventDefault()
                    const santizedContent = sanitizeString(jQuery('textarea[name="content"]').val());
                    jQuery.ajax({
                        type: 'POST',
                        url: '/api/comment/create',
                        dataType: "json",
                        data: {
                            'post': jQuery('#comment-form').attr('data-post'),
                            'content':  santizedContent
                        },
                        success: function (res) {
                            var currentDate = new Date();
                            var year = currentDate.getFullYear();
                            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
                            var day = ('0' + currentDate.getDate()).slice(-2);
                            var hours = ('0' + currentDate.getHours()).slice(-2);
                            var minutes = ('0' + currentDate.getMinutes()).slice(-2);
                            var seconds = ('0' + currentDate.getSeconds()).slice(-2);
                            var dateTimeString = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                            jQuery('#comment-count').text(parseInt(jQuery('#comment-count').text()) + 1)
                            jQuery('#comment-container').removeAttr('hidden', true)
                            jQuery('#no-comment-container').attr('hidden', true)
                            jQuery('#comment-container').append(`<div style="margin-bottom:15px;" class="author-box-wrap">
                                <span>${santizedContent}</span><br>
                                <small>${dateTimeString}</small>
                            </div>`)
                            jQuery('#comment-form')[0].reset();

                        },
                        fail: function(e) {
                            alert(e.message)
                        }
                    });
                })
            })

        </script>
    </div>
    <!-- /.td-pb-row -->
</div>

<?php echo $this->endSection(); ?>