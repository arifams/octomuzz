<html>

<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" media="screen and (max-width: 1025px)" href="styles/style-1024px.css">
	<link rel="stylesheet" media="screen and (max-width: 680px)" href="styles/style-680.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script async src="script/platform.js" charset="UTF-8"></script>
	<script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>

<div id="header">
	<div class="imgheader">
		<img src="img/logo_octomuzz.png" />
		<span><h2>music to save sea animals from slaughter</h2></span>
	</div>
	<nav>
		<ul class="topnav">
			<li><a href="index.html">Stop now!</a></li>
			<li><a href="about.html">We are a team</a></li>
			<li><a href="join.html">What you can do</a></li>

			<li class="icon">
			<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
			</li>
		</ul>
	</nav>
</div>

Welcome <?php echo $_POST["name"]; ?><br />
Your email address is: <?php echo $_POST["email"]; ?><br />
Your comments are: <?php echo $_POST["comments"]; ?>

</body>
</html>