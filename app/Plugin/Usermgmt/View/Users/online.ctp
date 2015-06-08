<?php

?>
<section id="headline">
    <div class="container">
      <h3>Usuarios Online</h3>
    </div>
</section>

<section class="container">
<div class="um-panel">
	<div class="um-panel-header">
		<span class="um-panel-title">
			<?php echo __('Online Users') ?>
		</span>
	</div>
	<div class="um-panel-content">
		<?php echo $this->element('Usermgmt.online_users'); ?>
	</div>
</div>
</section>