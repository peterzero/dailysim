<?php
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <?php print $user_picture; ?>

    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>


    <h2 class="title-news"><?php echo $node->title;?></h2>
    <div class="content clearfix"<?php print $content_attributes; ?>>
        <?php
        // We hide the comments and links now so that we can render them later.
        print render($content['body']);
        ?>
    </div>

    <div class="clearfix">
        <?php if (!empty($content['links'])): ?>
            <div class="links"><?php print render($content['links']); ?></div>
        <?php endif; ?>
    </div>

</div>
