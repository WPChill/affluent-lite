<?php $query = new WP_Query('post_type=cpo_feature&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
<?php if($query->posts): ?>
<div id="features" class="features">
	<div class="container">		
		<?php cpotheme_block('home_features', 'features-heading'); ?>
		<div class="features-content">
			<?php cpotheme_grid($query->posts, 'element', 'feature', 2); ?>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php endif; wp_reset_postdata(); ?>