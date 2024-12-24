
	
<?php
	$connect=mysqli_connect("localhost","root","","adminpamel") or die ("Connection Failed");
	class admin3
	{
		function edit()
	{
		global $connect;

		$catid = mysqli_real_escape_string($connect, $_POST['catname']);
		$pname = mysqli_real_escape_string($connect, $_POST['pname']);
		$pdescription = mysqli_real_escape_string($connect, $_POST['pdescription']);
		$pprice = mysqli_real_escape_string($connect, $_POST['pprice']);
		$imagename = $_FILES['pimage']['name'];
		$ptemp = $_FILES['pimage']['tmp_name'];
		$currenttime = round(microtime(true) * 1000);
		$extarr = explode(".", $imagename);
		$ext = $extarr[1];
		$fullfilename = $currenttime . "." . $ext;

		if (isset($_GET['eid'])) {
			$eid = mysqli_real_escape_string($connect, $_GET['eid']);

			$query = "UPDATE product 
                  SET category_id = '$catid', pname = '$pname', pdescription = '$pdescription', pprice = '$pprice', pimage = '$fullfilename' 
                  WHERE id = '$eid'";

			if (!empty($imagename)) {
				move_uploaded_file($ptemp, "uploadimage/" . $fullfilename);
			}
			$message = "Product updated";
		} else {
			$query = "INSERT INTO product (category_id, pname, pdescription, pprice, pimage) 
                  VALUES ('$catid', '$pname', '$pdescription', '$pprice', '$fullfilename')";
			move_uploaded_file($ptemp, "uploadimage/" . $fullfilename);
			$message = "Product inserted";  // Success message for insert
		}

		if (mysqli_query($connect, $query)) {
?>
			<script>
				alert("<?php echo $message; ?>");
			</script>
		<?php
		} else {
		?>
			<script>
				alert("Product Not inserted or updated. There was an error.");
			</script>
			<?php
		}
	}
		function edit1($id)
		{
			global $connect,$r;
				$query="select * from product where id=$id";
				$result=mysqli_query($connect,$query);
				$r=mysqli_fetch_assoc($result);
		}
		function show()
		{
			global $connect;
				if(!empty($_GET['s']))
				{
					$search=$_GET['s'];
					$query="select * from product where pname like '%$search%'";
				}
				else
				{
					$query="select * from product";
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
				$query="delete from product where id=$id";
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
