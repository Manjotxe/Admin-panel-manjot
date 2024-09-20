<?php
		include('common/connection.php');
		$ob=new admin();
		if(!empty($_POST['save']))
		{
			$username=$_POST['un'];
			$password=$_POST['pw'];
			$ob->login();
		}
?>	
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/loginstyle.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<!--main container goes here -->
		<?php include('common/header.php');?>
		<!--main container ends here-->
		<!--main container1 goes here-->
		
		<!--main container1 ends here-->
		<!--main container2 goes here-->
		<div class="maincontainer2">
		<form method="post">
			<table class="logintable">
				<tr>
					<th colspan="2">login</th>
				</tr>
				<tr>
					<td><i class="fa-solid fa-user"></i> Username</td>
					<td><input type="text" name="un"/></td>
				</tr>
				<tr>
					<td> <div style="float:left;padding-left:1px;"></div><i class="fa-solid fa-key"></i> Password</td>
					<td><input type="Password" name="pw"/></td>
				</tr>
				<tr>
					<td></td>
					<td ><input type="submit" name="save" value="Login"/></td>
				</tr>
			</table>
			</form>
		</div>
		<!--main container2 ends here-->
		<!--main container3 goes here-->
		<div class="footer"></div>
		<!--main container3 ends here-->
		
	</body>
	</body>
</html>
