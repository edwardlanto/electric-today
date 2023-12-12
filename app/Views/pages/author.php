<?php echo $this->extend('layouts/default'); ?>
<?php echo $this->section('content'); ?>
<div class="td-main-content-wrap">
    <div class="td-container">
        <div class="td-crumb-container">
            <div class="entry-crumbs">
                <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a title="" class="entry-crumb" itemprop="url" href="https://www.electricity-today.com/"><span itemprop="title">Home</span></a>
                </span>
                <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i>
                <span class="td-bred-no-url-last" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <meta itemprop="title" content="Authors" />
                    <meta itemprop="url" />Authors
                </span>
                <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i>
                <span class="td-bred-no-url-last" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <meta itemprop="title" content=<?= 'Posts by' . $name ?> />
                    <meta itemprop="url" />Posts by <?= $name ?>
                </span>
            </div>
        </div>
        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content">
                <div class="td-ss-main-content">
                    <div class="td-page-header">
                        <h1 class="entry-title td-page-title">
                            <span>
                                <?= $name ?></span>
                        </h1>
                    </div>

                    <div class="author-box-wrap td-author-page">
                        <img
                            alt=""
                            src="https://secure.gravatar.com/avatar/a53869c1da21e47872132ffd2503ee49?s=96&amp;d=mm&amp;r=g"
                            srcset="https://secure.gravatar.com/avatar/a53869c1da21e47872132ffd2503ee49?s=192&amp;d=mm&amp;r=g 2x"
                            class="avatar avatar-96 photo"
                            height="96"
                            width="96"
                        />
                        <div class="desc">
                            <div class="td-author-counters">
                                <span class="td-author-post-count"> <?= count($posts) ?> POSTS </span>

                                <span class="td-author-comments-count"> <?= $total_comment_count ?> COMMENTS </span>
                            </div>

                            <div class="td-author-social"></div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="td-block-row">
                        <div class="td-block-span6">
                            <?php foreach($posts as $p):?>
                                <div class="td_module_1 td_module_wrap td-animation-stack">
                                <div class="td-module-image">
                                    <div class="td-module-thumb">
                                        <a
                                            href="https://www.electricity-today.com/electrical-substation/high-voltage-test-equipment/a-primer-on-the-codes-and-standards-governing-battery-safety-and-compliance"
                                            rel="bookmark"
                                            title="A Primer on the Codes and Standards Governing Battery Safety and Compliance"
                                        >
                                            <img
                                                style="width:324px; height:160px"
                                                class="entry-thumb td-animation-stack-type0-2"
                                                src=<?= $p['image']; ?>
                                                alt="magazine_may_june_2023_article_5"
                                                title="A Primer on the Codes and Standards Governing Battery Safety and Compliance"
                                            />
                                        </a>
                                    </div>
                                </div>
                                <h3 class="entry-title td-module-title">
                                    <a
                                        href="https://www.electricity-today.com/electrical-substation/high-voltage-test-equipment/a-primer-on-the-codes-and-standards-governing-battery-safety-and-compliance"
                                        rel="bookmark"
                                        title="A Primer on the Codes and Standards Governing Battery Safety and Compliance"
                                    >
                                        <?= $p['title'] ?>
                                    </a>
                                </h3>
                                <div class="td-module-meta-info">
                                    <div class="td-post-author-name"><a href="https://www.electricity-today.com/author/jeff-donato">Jeff Donato</a></div>
                                    <div class="td-module-comments">
                                        <a href="https://www.electricity-today.com/electrical-substation/high-voltage-test-equipment/a-primer-on-the-codes-and-standards-governing-battery-safety-and-compliance#respond">0</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                        <!-- ./td-block-span6 -->
                    </div>
                    <!--./row-fluid-->
                </div>
            </div>
            <?php echo $this->include('templates/sidebars/post_type_sidebar'); ?>
        </div>
        <!-- /.td-pb-row -->
    </div>
    <!-- /.td-container -->
</div>

<?php echo $this->endSection(); ?>