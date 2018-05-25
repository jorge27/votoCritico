<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/less" href="/css/homeStyles.less">
	@yield('lessStyles')	
	<script type="text/javascript" src="/js/less.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet"> 
</head>
<body>
	<nav></nav>
	<header>
		<div id="logo">&nbsp;</div>
		<div id="some"><li>Conoce a tus candidatos<br><span>y sus propuestas</span></li>
		</div>
		 
		<div class="w3-row w3-section" id="buscador">
  			<div class="w3-col" style="width:50px">
  				<i class="w3-xxlarge fa fa-search"></i>
  			</div>
    		<div class="w3-rest">
      			<input class="w3-input w3-border" name="first" type="text" placeholder="Candidato, ciudad o estado">
    		</div>
		</div>
	</header>

	@yield('content')

	<footer>
		<p>Voto Crítico</p> 
	</footer>
	<div id="background">
		<div id="cand1">
			
		</div>
		<div id="cand2">
			
		</div>
		<div id="cand3">
			
		</div>
		<div id="cand4">
			
		</div>
		<div id="cand5">
			
		</div>
	</div>
	@yield('scripts')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/mixins-scripts.js"></script>
</body>
</html>