
<?php $query = new WP_Query('post_type=cpo_service&order=ASC&orderby=menu_order&meta_key=service_featured&meta_value=1&numberposts=-1&posts_per_page=-1'); ?>
<?php if($query->posts): $feature_count = 0; ?>
<div id="services" class="services">
	<div class="container">
		<?php cpotheme_block('home_services', 'section-heading heading'); ?>
		<?php cpotheme_grid($query->posts, 'element', 'service', 3, array('class' => 'column-narrow column-early')); ?>

<center><form action="/donate">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form></center>
<center><p>All donations are tax-deductible.</p></center>

	</div>
</div>
<?php endif; ?>

