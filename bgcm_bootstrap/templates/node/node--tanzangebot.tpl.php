<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

	<?php if (render($content['field_gallery_img'])) { print render($content['field_gallery_img']);} ?>
	
	<table id="tanzangebot" class="table table-condensed">
		
		<?php if (render($content['field_time'])): ?> 
		<tr><th>Zeit</th><td><?php print render($content['field_time']); ?></td></tr>
		<?php endif; ?>

		<?php if (render($content['field_halle_angebot'])): ?> 
		<tr><th>Ort</th><td><?php print render($content['field_halle_angebot']); ?></td></tr>
		<?php endif; ?>

		<?php if (render($content['field_alter'])): ?> 
		<tr><th>Alter</th><td><?php print render($content['field_alter']); ?></td></tr>
		<?php endif; ?>

		<?php if (render($content['field_categorie'])): ?> 
		<tr><th>Kategorie</th><td><?php print render($content['field_categorie']); ?></td></tr>
		<?php endif; ?>

		<?php if (render($content['field_leistung'])): ?> 
		<tr><th>Leistungsstufe</th><td><?php print render($content['field_leistung']); ?></td></tr>
		<?php endif; ?>

		<?php if (render($content['field_trainer_ref'])): ?> 
		<tr><th>Trainer</th><td><?php print render($content['field_trainer_ref']) ?></td></tr>
		<?php endif; ?>

		<?php if (render($content['field_beitrag'])): ?> 
		<tr><th>Beitragssatz</th><td> <a href="<?php echo $GLOBALS['base_url'] ?>/content/mitgliedsbeiträge" target="_blank"><?php print render($content['field_beitrag']); ?></td></tr>
		<?php endif; ?>
	</table> 

	<?php if (render($content['body'])) { print render($content['body']);} ?>

	<?php if (render($content['field_data'])): ?> 
	<h2>Anhang</h2><?php print render($content['field_data']); ?>
	<?php endif; ?>

</div>


    