<h3>SIGN UP</h3>
<div class='well' style='width:80%;'>
	<?php //echo form_open('form'); ?>

	<form method='post' action='signup'>

	<div class="form-group">
		<label for="exampleInputEmail1">Username</label>
		<?php echo form_error('username'); ?>
		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username"
		name="username" value="<?php echo set_value('username'); ?>" size="34" minlength="3" required>
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<?php echo form_error('password'); ?>
		<input type="password" class="form-control" id="exampleInputPassword1"
		placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" 
		size="34" minlength="8" required>
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">Confirm Password</label>
		<?php echo form_error('passconf'); ?>
		<input type="password" class="form-control" id="exampleInputPassword1"
		placeholder="Confirm Password" name="passconf" value="<?php echo set_value('password'); ?>" 
		size="34" minlength="8" required>
	</div>

	<button type="submit" class="btn btn-success">create account</button>

	</form>
	<a href="signin"><button class='btn'>Login Page</button></a>
</div>