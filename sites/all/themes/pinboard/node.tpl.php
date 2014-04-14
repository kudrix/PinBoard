<div id="node-<?php print $node->nid; ?>" class="nodeall <?php print $classes; ?>"<?php print $attributes; ?>>

  <?php if ($display_submitted): ?>
  <?php print $user_picture; ?>
  <?php endif; ?>  

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h4<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h4>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>

</div>
