<?php if(!isset($_SESSION['username'])){ header('Location: signin'); }

if(isset($_SESSION['username'])){ ?>
	<a href="signout"><button class='btn' style='float:right;'>Logout</button></a>
	<h3>POST A JOB</h3>
	<div name='container_div' class='well' style='width:80%;'>
		<?php echo validation_errors(); ?>
		<?php //echo form_open('form'); ?>

		<form name='post_form' method='post' action='registerJob'>
			
		<h5>Title</h5>
		<input type="text" name="title" value="<?php echo set_value('title'); ?>" size="34" minlength="2" required>

		<h5>Body</h5>
		<textarea name="body" cols='35' rows='15' value="" required><?php echo set_value('body'); ?></textarea>
		<small name='small_text'>
		<br><label name="posted_by">You're posting as: 
			<b><?php echo ucfirst($_SESSION['username']); //Capitalize 1st letter ?></b>
		</label>
		<br><label name="time_posted">
			<b><?php 
				$local_time = date('h:ma', time())  . ' on ' . date('M d 20y', time());
				echo $local_time; 
			?></b>
			<!--{{time_posted | date:"h:mma 'on' MMM d, y"}}
			<?php //echo "<script type='text/javascript'>Date.now();></script>" ?>-->
		</label>
		<br><br>
		</small>
		<div><input type="submit" value="Publish Job" /></div>

		</form>
	</div>
<?php } ?>