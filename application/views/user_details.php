<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
</head>
<body>
			<h2><?php echo $page_header?></h2>

			<?php

			foreach ($user as $object) {
				echo $object->first_name ;
			}



			?>

</body>
</html>