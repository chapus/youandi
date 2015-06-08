<?php

?>
<section id="headline">
    <div class="container">
      <h3>Grupos</h3>
    </div>
</section>

<section class="container">
<div class="um-panel">
	<div class="um-panel-header">
		<span class="um-panel-title">
			<?php echo __('All Groups') ?>
		</span>
		<span class="um-panel-title-right">
			<?php echo $this->Html->link(__('Add Group', true), array('action'=>'addGroup'));?>
		</span>
	</div>
	<div class="um-panel-content">
		<?php echo $this->element('Usermgmt.all_groups'); ?>
	</div>
</div>
</section>