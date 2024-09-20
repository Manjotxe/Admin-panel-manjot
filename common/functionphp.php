<?php
	class admin1
	{
		function delete1()
		{
			
			
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
?>