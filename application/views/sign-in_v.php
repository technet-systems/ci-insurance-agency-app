<?php echo validation_errors(); ?>
<?php echo $this->session->flashdata('error'); ?>
<?php echo form_open(); ?>
<?php echo form_label('E-mail'); ?>
<?php echo form_input('us_email'); ?>
<?php echo form_label('Password'); ?>
<?php echo form_password('us_pass'); ?>
<?php echo form_submit('submit', 'OK'); ?>
<?php echo form_close(); ?>
