<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<!-- print first picture from the node's gallery -->
<img typeof="foaf:Image" src="<?php echo $GLOBALS['base_url'] ?>/sites/default/files/<?php print render($node->field_img_gallery['und'][0]['filename']); ?>" alt=""/>

<?php print render($node->body['de'][0]['safe_value']); ?>







    