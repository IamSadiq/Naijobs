<?php if(!isset($_SESSION['username'])){ ?>
	<a href="signin"><button class='btn' style='float:right;'>Login</button></a> 
	<div class='well'>
		<h2><?=$_GET['header'];?></h2>
		<p><blockquote><?=$_GET['content'];?></blockquote></p>
		<small>
			<span>Posted by: <b><?=$_GET['who'];?></b></span><br>
			<span><?=$_GET['time'];?></span>
		</small><br/><br/>
		<a href="#"><button class='btn btn-success'>Apply</button></a>
	</div>
<?php }

if(isset($_SESSION['username'])){ 
?>
	<a href="signout"><button class='btn' style='float:right;'>Logout</button></a> 
	<div class='well'>
		<h2><?=$_GET['header'];?></h2>
		<p><blockquote><?=$_GET['content'];?></blockquote></p>
		<small>
			<span>Posted by: <b><?=$_GET['who'];?></b></span><br>
			<span><?=$_GET['time'];?></span>
		</small><br/><br/>
		<a href="#"><button class='btn btn-success'>Apply</button></a>
	</div>
<?php } ?>