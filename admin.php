<!DOCTYPE html>
<?php
	// PUT YOUR PASSWORD AFTER THE == in QUOTATIONS!
	if (isset($_POST["password"]) && $_POST["password"] == ""){
		echo "Comment added.";
		echo '<script>location.href="./announcements.php"</script>';
		$file_data = file_get_contents("data.txt");
		$myfile = fopen("data.txt", "w") or die("Unable to open file!");
		$thingstoadd = $_POST["name"]."<br />"."<br />".$_POST["content"]."<br />"."<br />".$_POST["date"]."<hr />"."<br />".$file_data;
		fseek($thingstoadd, 0);
		fwrite($myfile, $thingstoadd."\n"."<br />");
		fclose($myfile);
	} else{
		echo "Wrong password";
	}
?>
