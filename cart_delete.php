<?php
	include 'includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM addtocart WHERE cart_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully deleted\");
					window.location.href = \"cart.php\"
				</script>";
	}
	else {

		echo "incorrect";
	}
?>