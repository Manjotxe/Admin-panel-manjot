<?php
	include('common/connection.php');
	include('class/pagephp.php');
	$ob=new admin1();
	if(!empty($_POST['save']))
	{
		$name=$_POST['name'];
		$content=$_POST['content'];
		$status="";
		$ob->status();
		$ob->edit();
		
	}
	if(!empty($_GET['eid']))
			{
				$a = $ob->edit1($_GET['eid']);
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
				<p class="page">Page Manager</p>
				<div class="as">Add Page</div>
				<div class="table2">
				<form method="post">
					<input type="hidden" name="editid" value="<?php if(!empty($a['id'])) echo $a['id']?>" />
						<!--table3 goes here--!>
					<table class="table" border="1">
						<tr>
							<td>Name <input type="text"	name="name" value="<?php if(!empty($a['name'])) echo $a['name']?>" /></td>
						</tr>
						<tr>
							<td class="image"><img class="logo12" src="images/logo1.png"/><p>Content</p>
							<input class="text" type="text" name="content" value="<?php if(!empty($a['content'])) echo $a['content']?>" /></td>
						</tr>
						<tr>
							<td>Status <?php if(!empty($a['status']) && $a['status']==1) { ?><input checked type="checkbox" name="status"/> <?php } else{?> <input  type="checkbox" name="status"/><?php } ?></td>
						</tr>
					</table>
					<!--table3 ends here--!>
						<input class="save" type="submit" name="save" value="save"/>
						<input class="cancel" type="button" value="Cancel"/>
						</form>
				</div>
			</div>
					<!--innercontainer3 ends here--!>
		</div>
				<!--maincontainer2 ends here--!>
			<div class="last"></div>
	</body>
</html>