<?php if(!isset($_SESSION['username'])){ ?>
	<a href="signin"><button class='btn' style='float:right;'>Login</button></a> 
	<?php foreach($result as $row):?>
		<div class='well'>
			<h2><?=$row['title'];?></h2>
			<p><blockquote><?=substr($row['body'], 0, 100) . "...";?></blockquote></p>
			<a href="view_job?header=<?=$row['title'];?>&content=<?=$row['body'];?>
				&who=<?=$row['posted_by'];?>
				&time=<?=$row['time_posted'];?>">
				<button class='btn btn-success'>View Job</button>
			</a>
			<br/>
		</div>
<?php endforeach; } ?>

<?php if(isset($_SESSION['username'])){ ?>
	<a href="signout"><button class='btn' style='float:right;'>Logout</button></a>
	<a href="postJob"><button class='btn' style='float:right;'>Post Job</button></a>
	<?php foreach($result as $row):?>
		<div class='well'>
			<h2><?=$row['title'];?></h2>
			<p><blockquote><?=substr($row['body'], 0, 100) . "...";?></blockquote></p>
			<a href="view_job?header=<?=$row['title'];?>&content=<?=$row['body'];?>
				&who=<?=$row['posted_by'];?>
				&time=<?=$row['time_posted'];?>">
				<button class='btn btn-success'>View Job</button>
			</a>
			<br/>
		</div>
	<?php endforeach;
}?>