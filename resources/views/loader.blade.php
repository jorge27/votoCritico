<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Voto Crítico</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Lato" rel="stylesheet"> 
	<style type="text/css">
	html, body{
		font-family: 'Lato', sans-serif;
		margin: 0;
		padding: 0;
		width: 100%;
		height: 100vh;
		background-color: rgba(220,210,220,0.8)
	}
	#load{
		position: relative;
		top: 30%;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}

	@keyframes circles{
		0% {position: relative; width: 100%; height: 100%; opacity: 1;}
		50% {position: relative; width: 200%; height: 200%; opacity: 0;}
		100% {position: relative; width: 100%; height: 100%; opacity: 1;}
	}

	#orange{
		animation: circles 2s -6s ease infinite;
	}
	#blue{
		animation: circles 2s -4.5s ease infinite;
	}
	#red{
		animation: circles 2s -3s ease infinite;
	}
	#green{
		animation: circles 2s -1.5s ease infinite;
	}
	#logo{
		position: relative;
		top: 10%;
		left: 40%;
		max-width: 50%;
		text-decoration: none;
		list-style: none;
		font-size: 42px;
	}
	#logo > li{
		position: relative;
		line-height: 0.7;
	}
	#logo > li > span{
		color: white;
	}
	</style>
</head>
<body>
	<div id="logo">
		<li>&nbsp;&nbsp;&nbsp;&nbsp;<strong>voto</strong><br>critico<span>.org</span></li><br>
		<li><span style="left: -100px; position: relative;">Entra | Conoce | Decide</span></li>
	</div>
	<div id="load">
		<svg width="220" height="210">
			<circle id="orange" cx="100" cy="40" r="40" fill="orange" />
			<circle id="blue" cx="160" cy="100" r="60" fill="blue" />
			<circle id="red" cx="40" cy="110" r="40" fill="red" />
			<circle id="green" cx="90" cy="160" r="50" fill="green" />
		</svg>
	</div>
</body>
</html>