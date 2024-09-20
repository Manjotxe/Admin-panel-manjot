<?php
	include('common/connection.php');
	if(!empty($_POST['save']))
	{
		$cname=$_POST['categoryname'];
		if(!empty($_POST['editid']))
		{
			$id=$_POST['editid'];
			$query="update category set  categoryname='$cname' where id='$id'";
		}
		else
		{
			$query="insert into category (categoryname) values('$cname')";
		}
		if(mysqli_query($connect,$query))
		{
			?>
			<script>
				alert("Category inserted");
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Category Not inserted");
			</script>
			<?php
		}
	}
	if(!empty($_GET['eid']))
	{
		$id=$_GET['eid'];
		$query="select * from category where id=$id";
		$result=mysqli_query($connect,$query);
		$r=mysqli_fetch_assoc($result);
		
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/style2.css"/>
	<body>
		<!--maincontainer goes here--!>
		<?php include('common/header.php');?>
		
		<!--maincontainer ends here--!>
		<!--maincontainer2 goes here--!>
		<div class="maincontainer3">
				<!--innercontainer2 goes here--!>
			<div class="left">
				<?php include('common/list.php');?>
			</div>
				<!--innercontainer2 ends here--!>
				<!--innercontainer3 goes here--!>
			<div class="right">
				<p class="page">Category Manager</p>
				<div class="as">Add category</div>
				
				<form method="post">
					<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']?>" />
						<!--table3 goes here--!>
					<table>
						<td>  Select Product  </td>
							<td>
								<select>
									<option>&lt;select category&gt;</option>
								</select>
							</td>
						<tr>
							<td> Category Name <input type="text"	name="categoryname" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" /></td>
						</tr>
					</table>
					<!--table3 ends here--!>
						<input class="save" type="submit" name="save" value="save"/>
						<input class="cancel" type="button" value="Cancel"/>
						</form>
				
			</div>
					<!--innercontainer3 ends here--!>
		</div>
				<!--maincontainer2 ends here--!>
			<div class="last"></div>
	</body>
</html>