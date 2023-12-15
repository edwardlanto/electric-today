<?php echo $this->extend('layouts/default'); ?>
<?php echo $this->section('content'); ?>
<div class="td-main-content-wrap">
    <div class="td-container">
        <div class="td-crumb-container">
            <div class="entry-crumbs">
                <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a title="" class="entry-crumb" itemprop="url" href="https://www.electricity-today.com/"><span itemprop="title">Home</span></a>
                </span>
                <i class="fa-solid fa-angle-right"></i>
                <span class="td-bred-no-url-last" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <meta itemprop="title" content="Authors" />
                    <meta itemprop="url" />Authors
                </span>
                <i class="fa-solid fa-angle-right"></i>
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
                        <?php
                            if ($avatar == NULL):
                        ?>
                         <img
                            alt=""
                            src="https://secure.gravatar.com/avatar/a53869c1da21e47872132ffd2503ee49?s=96&amp;d=mm&amp;r=g"
                            srcset="https://secure.gravatar.com/avatar/a53869c1da21e47872132ffd2503ee49?s=192&amp;d=mm&amp;r=g 2x"
                            class="avatar avatar-96 photo"
                            height="96"
                            width="96"
                        />
                        <?php else: ?>
                            <img
                            alt=""
                            src=<?= $avatar ?>
                            srcset="<?= $avatar ?> 2x"
                            class="avatar avatar-96 photo"
                            height="96"
                            width="96"
                            />
                        <?php endif ?>
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
                                            href=<?= "electrical-substation/high-voltage-test-equipment/" . $p['slug'] ?>
                                            rel="bookmark"
                                            title=<?= $p['title']; ?>
                                        >
                                            <img
                                                style="width:324px; height:160px"
                                                class="entry-thumb td-animation-stack-type0-2"
                                                src=<?= $p['image']; ?>
                                                alt=<?= $p['title']; ?>
                                                title=<?= $p['title']; ?>
                                            />
                                        </a>
                                    </div>
                                </div>
                                <h3 class="entry-title td-module-title">
                                    <a
                                        href=<?= "electrical-substation/high-voltage-test-equipment/" . $p['slug'] ?>
                                        rel="bookmark"
                                        title=<?= $p['title']; ?>
                                    >
                                        <?= $p['title'] ?>
                                    </a>
                                </h3>
                                <div class="td-module-meta-info">
                                    <div class="td-post-author-name"><a href="/author/jeff-donato">Jeff Donato</a></div>
                                    <div class="td-module-comments">
                                        <a href="<?= "electrical-substation/high-voltage-test-equipment/" . $p['slug'] ?>#respond">0</a>
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