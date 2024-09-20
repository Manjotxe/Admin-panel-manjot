
	
<?php
	$connect=mysqli_connect("localhost","root","","adminpamel") or die ("Connection Failed");
	class admin2
	{
		function edit1()
		{
			global $connect,$r;
			if(!empty($_GET['eid']))
			{
				$id=$_GET['eid'];
				$query="select * from category where id=$id";
				$result=mysqli_query($connect,$query);
				$r=mysqli_fetch_assoc($result);
			}
		}
		function edit()
		{
			global $connect;
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
				echo "record inserted";
			}
			else{
				echo "record not inserted";
				}
		}
		function show()
		{
			global $connect;
				if(!empty($_GET['s']))
				{
					$search=$_GET['s'];	
					$query="select * from category where categoryname like '%$search%'";
				}
				else
				{
					$query="select * from category";
				}
				$result= mysqli_query($connect,$query);
				while($row = mysqli_fetch_assoc($result))
				{
					$data[]=$row;
				}
				return($data);
		}
		function delete1()
		{
			global $connect;
			if(!empty($_GET['did']))
			{
				$id=$_GET['did'];
				$query="delete from category where id=$id";
				if(mysqli_query($connect,$query))
				{
					?>
						<script>
							alert("record Deleted");
						</script>
					<?php
				}
				else
				{
					?>
						<script>
							alert("record  not Deleted");
						</script>
					<?php
				}
			}
		}
	}
?>