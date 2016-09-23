<h3>SIGN IN</h3>
<div class='well' style='width:80%;'>

	<?php echo validation_errors(); ?>
	<?php //echo form_open('form'); ?>
	<form method='post' action='signin'>

	<div class="form-group">
		<label for="exampleInputEmail1">Username</label>
		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username"
		name="username" value="<?php echo set_value('username'); ?>" size="34" minlength="3" required>
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1"
		placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" 
		size="34" minlength="8" required>
	</div>

	<button type="submit" class="btn btn-success">Login</button>

	</form>
	<a href="signup"><button class='btn'>Signup Page</button></a>
</div>