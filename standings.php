<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" media='screen and (min-width: 1050px)' type="text/css" href="maincss.css">
		<link rel="stylesheet" media='screen and (max-width:1049px) and (min-width:650px)' type="text/css" href="medcss.css">
		<link rel="stylesheet" media='screen and (max-width: 649px)' type="text/css" href="mobilecss.css">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<title>Standings - Hearth Gaming League</title>
		<script>
		//dummy standings table
		var standings=[
		["Bill1","12345","1"],
		["Harry2","12567","24"],
		["joey3","5543","3"],
		["hilary4","4452","34"],
		["Bill5","12345","1"],
		["Harry6","12567","24"],
		["joey7","5543","3"],
		["hilary8","4452","34"],
		["Bill9","12345","1"],
		["Harry10","12567","24"],
		["joey11","5543","3"],
		["hilary12","4452","34"]
		];
			function loadtable(){
				var table1=document.getElementById("table1");
				var table2=document.getElementById("table2");
				for (var i=0;i<standings.length/2;i++){
					table1.innerHTML+='<tr><td>'+standings[i][0]+'</td><td>'+standings[i][1]+'</td><td>('+standings[i][2]+' HGL Points)</td></tr>';
				}
				for (i;i<standings.length;i++){
					table2.innerHTML+='<tr><td>'+standings[i][0]+'</td><td>'+standings[i][1]+'</td><td>('+standings[i][2]+' HGL Points)</td></tr>';
				}
			}
		</script>
	</head>

	<body class="primary" onload="loadtable()">
		<div class="navbar">
			<div class="navleft">
				<p id="navhgl"> HEARTH GAMING LEAGUE</p>
			</div>
			<div class="navright">
				<ul class="mainnav">
					<div class="navitem">
						<li class="navlink"><a href="Landing.htm"> Home </a></li>
					</div>
					<div class="navdropdown">
						<li class="navlink"> <a href="league.html"> League </a> </li>
						<div class="navdropdowncontent">
							<li class="ddnavlink"> <a href="american-daily.html"> American Daily </a> </li>
							<li class="ddnavlink"> <a href="european-daily.html"> European Daily </a> </li>
							<li class="ddnavlink"> <a href="tournament-rules.html"> Tournament Rules </a> </li>
							<li class="ddnavlink"> <a href="league-rules.html"> League Rules </a> </li>
						</div>
					</div>
					<div class="navitem">
						<li class="navlinkpage"><a href="Standings.php"> Standings </a></li>
					</div>
					<div class="navitem">
						<li class="navlink"><a href="https://discord.gg/0g8EOzTgldefHfrs"> Discord </a></li>
					</div>
					<div class="navitem">
						<li class="navlink"> <a href="admins.html"> Admins </a> </li>
					</div>
					<div class="navitem">
						<li class="navlink"> <a href="contact.html"> Contact </a> </li>
					</div>
				</ul>
			</div>
		</div>
		<br>
		<br>
		<div class="maincontent">
				<br>
				<h2>March 2016 Standings </h2>
					<br>
					<div class="columnwrapper3">
						<div class="leftcolumn3">
							<table class="standingstable" id="table1">
							</table>
						</div>
						<div class="rightcolumn3">
							<table class="standingstable" id="table2">
							</table>
						</div>
					</div>
		</div>


		<div class= "socmedout">
			<div class="socmedwrap">

				<a class="socmed" href="https://twitter.com/HGL_Hearthstone"><img src="twittercircular.png"></a>
				<a class="socmed" href="https://www.facebook.com/Hearth-Gaming-League-932698540146863/"><img src="facebookcircular.png"></a>
				<a class="socmed" href="https://www.youtube.com/channel/UCT_U4LWlhPqrdklETOyWBbQ"><img src="youtubecircular.png"></a>
			</div>
		</div>


	</body>
</html>