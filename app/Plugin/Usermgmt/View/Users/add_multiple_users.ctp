<?php

?>
<style type="text/css">
	form {
		width:100%
	}
	input, textarea,select {
		font-size: 100%;
	}
</style>
<script type="text/javascript">
	$(function(){
		$('.usercheckall').change(function() {
			if ($(this).is(':checked')) {
				$(".usercheck").prop("checked", true);
			} else {
				$(".usercheck").prop("checked", false);
			}
		});
		if($.fn.chosen) {
			$(".ugroup").chosen();
		}
	});
</script>
<section id="headline">
    <div class="container">
      <h3>Agregar Multiples Usuarios</h3>
    </div>
</section>

<section class="container">
<div class="um-panel">
	<div class="um-panel-header">
		<span class="um-panel-title">
			<?php echo __('Add Multiple Users' , true) ?>
		</span>
		<span class="um-panel-title-right">
			<?php echo $this->Html->link(__('Back', true), array('action'=>'uploadCsv'));?>
		</span>
	</div>
	<div class="um-panel-content" >
		<?php echo $this->element('Usermgmt.ajax_validation', array('formId' => 'addMultipleUserForm', 'submitButtonId' => 'addMultipleUserSubmitBtn')); ?>
		<?php echo $this->Form->create('User', array('id'=>'addMultipleUserForm', 'class'=>'form-horizontal')); ?>
		<div style='padding:15px'><strong><?php echo __('Please Note: unchecked row will not save in database.');?></strong></div>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th><?php echo $this->Form->input('Select.all', array('type'=>'checkbox', 'label' => false, 'hiddenField' => false, 'class'=>'usercheckall', 'autocomplete'=>'off')); ?></th>
				<th><?php echo __('User Group');?></th>
				<th><?php echo __('First Name');?></th>
				<th><?php echo __('Last Name');?></th>
				<th><?php echo __('Username');?></th>
				<th><?php echo __('Email');?></th>
				<th><?php echo __('Password');?></th>
				<th><?php echo __('Gender');?></th>
				<th><?php echo __('Birthday');?></th>
				<th><?php echo __('Location');?></th>
				<th><?php echo __('Marital Status');?></th>
				<th><?php echo __('Cellphone');?></th>
				<th><?php echo __('Web Page');?></th>
			</tr>
<?php   $i = 0;
		$total_users = 0;
		if(!empty($this->request->data['User'])) {
			$total_users = count($this->request->data['User']);
		}
		for($c=0; $c<$total_users; $c++) {
			$rowCheck = true;
			?>
			<tr>
				<td style='text-align:center'>
				<?php echo $this->Form->input("usercheck.".$i ,array('type'=>'checkbox', 'label' => false, 'hiddenField' => false, 'class'=>'usercheck', 'autocomplete'=>'off')); ?>
				</td>
				<td><?php echo $this->Form->input('User.'.$i.'.user_group_id', array('type' => 'select', 'options'=>$userGroups, 'multiple' => true, 'label'=>false, 'div'=>false, 'data-placeholder'=>'Select Group(s)', 'class'=>'ugroup', 'style'=>'width:100px')); ?></td>
				<td><?php echo $this->Form->input('User.'.$i.'.first_name', array('type'=>'text', 'div'=>false, 'label'=>false, 'style'=>'width:100px'));?></td>
				<td><?php echo $this->Form->input('User.'.$i.'.last_name', array('type'=>'text', 'div'=>false, 'label'=>false, 'style'=>'width:100px'));?></td>
				<td><?php echo $this->Form->input('User.'.$i.'.username', array('type'=>'text', 'div'=>false, 'label'=>false, 'style'=>'width:100px'));?></td>
				<td><?php echo $this->Form->input('User.'.$i.'.email', array('type'=>'text', 'div'=>false, 'label'=>false, 'style'=>'width:200px'));?></td>
				<td><?php echo $this->Form->input('User.'.$i.'.password', array('type'=>'text', 'div'=>false, 'label'=>false, 'type'=>'text', 'style'=>'width:100px'));?></td>
				<td><?php echo $this->Form->input('UserDetail.'.$i.'.gender', array('type' => 'select', 'options'=>$gender, 'label'=>false, 'div'=>false, 'style'=>'width:85px')); ?></td>
				<td><?php echo $this->Form->input('UserDetail.'.$i.'.bday', array('type'=>'text', 'div'=>false, 'label'=>false, 'style'=>'width:80px', 'class'=>'datepicker'));?></td>
				<td><?php echo $this->Form->input('UserDetail.'.$i.'.location', array('type'=>'text', 'div'=>false, 'label'=>false, 'style'=>'width:50px'));?></td>
				<td><?php echo $this->Form->input('UserDetail.'.$i.'.marital_status', array('type' => 'select', 'options'=>$marital, 'label'=>false, 'div'=>false, 'style'=>'width:85px')); ?></td>
				<td><?php echo $this->Form->input('UserDetail.'.$i.'.cellphone', array('type'=>'text', 'div'=>false, 'label'=>false, 'style'=>'width:100px'));?></td>
				<td><?php echo $this->Form->input('UserDetail.'.$i.'.web_page', array('type'=>'text', 'div'=>false, 'label'=>false));?></td>
			</tr>

<?php   $i++; }
		?>
		</table>
		<div class="um-button-row">
			<?php echo $this->Form->Submit('Add Users', array('class'=>'btn btn-primary', 'id'=>'addMultipleUserSubmitBtn')); ?>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
</section>