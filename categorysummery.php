<?php
		include('common/connection.php');
		include('class/catphp.php');
		$ob=new admin2();
		if(!empty($_GET['did']))
		{
			$ob->delete1();
		}
		if(!empty($_GET['s']))
		{
			$ob->show();
		}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/1.css"/>
	</head>
	<body>
		<?php include('common/header.php');?>
		<div class="main3">
			<div class="inner3">
				<ul class="inner5">
					<?php include('common/list.php');?>
				</ul>
			</div>
			<div class="inner4">
				<p class="a">Category Manager</p>
				<p class="b">This section display the list of category</p>
				<p class="c"><a href="">Click Here </a>to create <a href="">New Category</a></p>
				<form>
				<table class="d">
					<tr>
						<td>Search By category Name:</td>
						<td><input type="text" name="s"/></td>
						<td><input class="e" type="submit" value="Search"/></td>
					</tr>
				</table>
				</form>
				<p class="f">Page 1 of 2,showing 10 records out of 13 total,starting on record 1,ending on 10</p>
				<table class="h" width="680px"  border="1px" style="border-collapse:collapse;">
						<tr class="g">
							<th>Id</th>
							<th>Category Name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php 
						$results=$ob->show();
						foreach($results as $row)
						{
						?>
						<tr class="abc">
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['categoryname']?></td>
							<td><a href="categoryadd.php?eid=<?php echo $row['id']?>"><img src="images/todo.png"></a></td>
							<td><a href="categorysummery.php?did=<?php echo $row['id']?>">Delete</a></td>
						</tr>
						<?php } ?>
					</table>
			</div>
		</div>
			<div class="last"></div>
	</body>
</html>