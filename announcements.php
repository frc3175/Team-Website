<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<meta charset="UTF-8" />
		<title>Events</title>
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<script>
				$(document).ready(function() {
						if (navigator.userAgent.indexOf("Android") != -1 || navigator.userAgent.indexOf("iPhone") != -1 || navigator.userAgent.indexOf("iPad") != -1) {
								$("body").css("font-size","35px");
						}
				});

				/* THIS PREVENTS LOCAL TESTING! Uncomment when pushed to production if you so desire.
				if (location.protocol != 'https:') {
						location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
				}
				*/

				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-105323938-1', 'auto');
				ga('send', 'pageview');
		</script>

		<style type="text/css">
				#post {
					width: 350px;
				}

				#post_form {
					margin: 50px;
				    padding: 20px 15% 20px 15%;
				}

				h2 {
				    color: #2424c7;
				}
		</style>

		<link type="text/css" rel="stylesheet" href="css/default.css" />
</head>

<body>
		<div id="titlebar">
		<h1>University Liggett School<br /><i><a href="https://www.firstinspires.org/" target="_blank">FIRST</a> Robotics</i></h1>
		</div>

		<table id="navbar">
			<tbody>
				<tr>
					<td><a href="frc.html" data-ajax="false">FRC</a></td>
					<td><a href="ftc.html" data-ajax="false">FTC</a></td>
					<td><a href="fll.html" data-ajax="false">FLL</a></td>
					<td><a href="announcements.php" data-ajax="false">Announcements</a></td>
					<td><a href="sponsors.html" data-ajax="false">Sponsors</a></td>
					<td><a href="tutorials.html" data-ajax="false">Tutorials</a></td>
					<td><a href="contact.html" data-ajax="false">Contact</a></td>
				</tr>
			</tbody>
		</table>

		<div id="all">
				<div id="main" style="font-size: 20px;">
						<h2>Announcements</h2>
						<?php echo str_replace("\r\n", "<br />", file_get_contents("data.txt")); ?>
				</div>

				<div id="post_form">
					<h2>Post an Announcement</h2>
					<form action="admin.php" data-ajax="false" method="POST">
						Enter admin password:
						<input type="password" name="password" /><br/>
						Your Name:
						<textarea name="name"></textarea><br/>
						Announcement:
						<textarea name="content"></textarea><br/>
						Today's Date:
						<textarea name="date"></textarea><br/>
						<input type="submit" value="Submit" />
					</form>
				</div>

				<div>
						<input type="button" onclick="location.href='http://liggettrobotics.com';" value="Homepage" />
				</div>
		</div> <!-- all -->
</body>
</html>
