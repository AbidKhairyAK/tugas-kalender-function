<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<style rel="stylesheet" type="text/css">
			body {
				background: #eee;
				font-family: calibri;
			}
			.container {
				margin: 50px auto;
				padding: 10px;
				width: 280px;
				height: 343px;
				background: #333;
				border-radius: 20px;
				box-shadow: 0 0 2px #777;
			}
			.tanggal,.hari {
				float: left;
			}
			p,h2,h4 {
				margin: 0;
			}
			h2,.month {
				text-align: center;
				color: orange;
			}
			.month {
				border: 3px solid orange;
				border-radius: 10px;
				display: block;
				margin: 10px auto 0;
				font-weight: bolder;
				padding: 5px;
			}
			.month:hover {
				background: orange;
				color: #333;
			}
			.date span {
				display: inline-block;
				width: 40px;
				padding: 10px 0;
				text-align: center;
			}
			.date font {
				padding:5px;
				border-radius:10px;
			}
			.date span:hover font{
				color:orange;
				background:#333;
			}
			.hari,.tanggal {
				background: orange;
				border-radius: 10px;
			}
			.hari {
				margin: 10px 0;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h2>KALENDER</h2>
			<p class="month">Desember 2017</p>
			<div class="date">
				<?php
					$day = date("D",strtotime("2017-12-01"));
					$day_total = date("t",strtotime("2017-12-01"));
					$now = date("j",time());
					$week= array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
					
					function now1($now1a, $now1b){
						if ($now1a == $now1b){
							echo "color:orange;background:#333;";
						}
					}
					
					function br($br,$val,$ma){			
						if ($br == (date("D",strtotime("2017-12-$br")) == "$ma")){
							echo $val;
						}
					}
					
					function align($al){
						if ($al == 1){
							echo "<p style='text-align:right;'>";
						}
					}
					
					echo "<div class='hari'>";
					
					for ($lol=0;$lol<7;$lol++){
						if ($lol==6){
							echo "<span style='color:#eee;'><font>".$week[$lol]." </font></span>";
						} else {
							echo "<span><font>".$week[$lol]." </font></span>";
						}
					}
					
					echo "</div>";
					
					echo "<div class='tanggal'>";
					
					for ($i = 1; $i<=$day_total; $i++){
						align($i);
						br($i,"<p>","Mon");
						echo "<span style='";br($i,"color:#eee;","Sun");echo "'>";
						echo "<font style='";now1($i, $now);echo "'>";
						if ($i < 10){
							echo "0".$i." ";
						} else {
							echo $i." ";
						}
						echo "</font>";
						echo "</span>";
						br($i,"</p>","Sun");
					}
					
					echo "</div>";
				?>
			</div>
		</div>
	</body>
</html>