<?php
		
	class ad
	{
		function delete1()
		{
			$connect=mysqli_connect("localhost","root","","adminpamel") or die ("Connection Failed");
			if(!empty($_GET['did']))
			{
				$id=$_GET['did'];
				$query="delete from category where id=$id";
					if(mysqli_query($connect,$query))
				{
					echo ("record  Deleted");
				}
				else
				{
					echo ("record not Deleted");
				}
			}
		}
	}
?>