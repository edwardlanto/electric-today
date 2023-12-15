<?php if ($full == true): ?>

        <div class="td_module_2 td_module_wrap td-animation-stack">
            <div class="td-module-image">
                <div class="td-module-thumb">
                    <a href=<?= "electrical-substation/high-voltage-test-equipment/" . $post['slug'] ?> rel="bookmark" 
                    title="<?= $post['title'] ?>">
                    <img width="324" height="160" class="entry-thumb td-animation-stack-type0-2" src=<?= $post['image'] ?>  alt="" title=<?= $post['image'] ?> ></a>
                </div>
            </div>
            <h3 class="entry-title td-module-title"><a href=<?= "electrical-substation/high-voltage-test-equipment/" . $post['slug'] ?> rel="bookmark" title="Hydrogen Monitoring in the Transformer Headspace Compared to Traditional In-Oil Monitoring">Hydrogen Monitoring in the Transformer Headspace Compared to Traditional In-Oil Monitoring</a></h3>
            <div class="td-module-meta-info">
            <div class="td-post-author-name"><a href="https://www.electricity-today.com/author/chris-rutledge"><?= $post['author_name'] ?></a></div>
                <div class="td-module-comments">
                    <a href=<?= "electrical-substation/high-voltage-test-equipment/" . $post['slug'] . "#"  . "respond" ?>><?= $post['comment_count'] ?></a>
                </div>
            </div>
            <div class="td-excerpt"><?= $post['excerpt'] ?></div>
        </div>
<?php else: ?>
            <div class="td_module_6 td_module_wrap td-animation-stack">
                <div class="td-module-thumb">
                    <a href="electrical-substation/high-voltage-test-equipment/grounding-transformers-explained" rel="bookmark" title="Grounding Transformers Explained">
                        <img width="100" height="70" class="entry-thumb td-animation-stack-type0-1" src=<?= $post['image'] ?> alt="" title="Grounding Transformers Explained"></a>
                </div>
                <div class="item-details">
                    <h3 class="entry-title td-module-title">
                        <a href="electrical-substation/high-voltage-test-equipment/grounding-transformers-explained" rel="bookmark" title="Grounding Transformers Explained">
                            <?= $post['title'] ?>
                        </a>
                    </h3>           
                    <div class="td-module-meta-info"></div>
                </div>
            </div>
<?php endif; ?>