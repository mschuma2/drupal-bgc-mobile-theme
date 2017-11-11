<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


	<?php if (render($content['body'])) { print render($content['body']);} ?>

	<?php if (render($content['field_data'])): ?> 
	<h2>Anhang</h2><?php print render($content['field_data']); ?>
	<?php endif; ?>

</div>


    
