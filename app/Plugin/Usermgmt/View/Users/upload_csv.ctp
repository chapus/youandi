<?php

?>
<style type="text/css">
	ol.instructions li {
		margin-bottom:10px;
	}
</style>
<section id="headline">
    <div class="container">
      <h3>Agregar Multiples Usuarios CSV</h3>
    </div>
</section>

<section class="container">
<div class="um-panel">
	<div class="um-panel-header">
		<span class="um-panel-title">
			<?php echo __('Add Multiple Users') ?>
		</span>
		<span class="um-panel-title-right">
			<?php echo $this->Html->link(__('Back', true), array('action'=>'index'));?>
		</span>
	</div>
	<div class="um-panel-content">
		<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'type' => 'file')); ?>
		<div class="um-form-row control-group">
			<label class="control-label required"><?php echo __('Select csv file');?></label>
			<div class="controls">
				<?php echo $this->Form->input('csv_file', array('label'=>false, 'div'=>false, 'type' => 'file')); ?>
				<?php echo $this->Form->Submit('Upload', array('class'=>'btn btn-primary', 'div'=>false)); ?>
			</div>
		</div>
		<?php echo $this->Form->end(); ?>
		<div style="margin-left:20px;">
			<strong style = "margin-left:5px;"><?php echo __('Instructions for CSV file');?></strong>
			<br/>
			<ol class='instructions'>
				<li><?php  echo __('First line should be table fields name')?></li>
				<li><?php echo __('You can add one or more than one users')?></li>
				<li><?php echo __('leave blank for empty values')?></li>
				<li>
					<?php echo __('For user group id field value should be in following')?>
					<?php   foreach($userGroups as $key=>$val) {
								echo "<br/><strong>For ".$val." set ".$key."</strong>";
							} ?>
				</li>
				<li><?php echo __('For multiple groups set group ids comma separated without space for e.g. 1,2')?></li>
				<li>
					<?php echo __('For gender field value should be in following')?>
					<?php   foreach($gender as $key=>$val) {
								echo "<br/><strong>".$key."</strong>";
							} ?>
				</li>
				<li>
					<?php echo __('For marital status field value should be in following')?>
					<?php   foreach($marital as $key=>$val) {
								echo "<br/><strong>".$key."</strong>";
							} ?>
				</li>
				<li><?php echo __('For Birthday date format should be either 1999-01-25 or 25-01-1999')?></li>
				<li><a href='<?php echo SITE_URL.'usermgmt/files/sample_multiple_users.csv'?>' target='_blank'>Sample CSV File</a> for multiple users</li>
			</ol>
		</div>
	</div>
</div>
</section>