<?php
function get_action_buttons($local){
	$class = '';
	$class_col = '';

	if ($local == 'top'){

		$class = 'master-button';	
		$class_col = '-lg-6';


	} else if ($local =='bottom'){
		
		$class_col = '-6';
		$show_mobile = ' d-none d-lg-inline-block';

	}
	?>
	<div class="action-content">
		
		<div class="row m-auto">
			<div class="col<?php echo $class_col ?> text-center py-2 px-0">
				<a href="<?php the_field('primary_btn_url') ?>" class="button <?php echo $class . $show_mobile?> filled" target="_blank">
					<h3><?php the_field('primary_btn_title')?></h3>					
				</a>
				<?php if ($local == 'bottom'){ ?>
					<a href="<?php the_field('mobile_primary_btn_url') ?>" class="button <?php echo $class . ' d-inline-block d-lg-none'?> filled" target="_blank">
						<h3><?php the_field('mobile_primary_btn_title') ?></h3>					
					</a>
				<?php } ?>
			</div>
			<div class="col<?php echo $class_col ?> text-center py-2 px-0">
				<a href="<?php the_field('secondary_btn_url') ?>" class="button <?php echo $class . $show_mobile?>" target="_blank">
					<h3><?php the_field('secondary_btn_title') ?></h3>
				</a>
				<?php if ($local == 'bottom'){ ?>
					<a href="<?php the_field('mobile_secondary_btn_url') ?>" class="button <?php echo $class . ' d-inline-block d-lg-none '?>" target="_blank">
						<h3><?php the_field('mobile_secondary_btn_title') ?></h3>					
					</a>
				<?php } ?>
			</div>
		</div>
	</div>

	<?php
}