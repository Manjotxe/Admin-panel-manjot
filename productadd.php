<?php
	include('common/connection.php');
	include('class/productphp.php');
	$ob=new admin3();
	if(!empty($_POST['save']))
	{
		$ob->edit();
	}
	if(!empty($_GET['eid']))
	{
		$ob->edit1($_GET['eid']);
		$a=$_GET['eid'];
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
				<p class="page">Product Manager</p>
				<div class="as">Add Product</div>
				
				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']?>" />
						<!--table3 goes here--!>
					<table>
						<td>  Select Product  </td>
							<td>
								<select name="catname"> 
									<option>&lt;select Category&gt;</option>
									<?php
										if(!empty($_GET['$a']))
										{
											$query="select  from category where id=$a";
										}
										else{
											$query="select * from category";
										}
										$result=mysqli_query($connect,$query);
										while($cat=mysqli_fetch_assoc($result))
										{
									?>
										<option value="<?php echo $cat['id']?>"><?php echo $cat['categoryname']?></option>
									<?php
										}
									?>
								</select>
							</td>
						<tr>
							<td> Product Name <input type="text" name="pname" value="<?php if(!empty($r['pname'])) echo $r['pname']?> "/></td>
						</tr>
						<tr>
							<td> Product description <input type="text"	name="pdescription" value="<?php if(!empty($r['pdescription'])) echo $r['pdescription']?> " /></td>
						</tr>
						<tr>
							<td> Product price	 <input type="text"	name="pprice" value="<?php if(!empty($r['pprice'])) echo $r['pprice']?> " /></td>
						</tr>
						<tr>
							<td> Product image	 <input type="file"	name="pimage" value="<?php if(!empty($r['pimage'])) echo $r['pimage']?> "  /></td>
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
