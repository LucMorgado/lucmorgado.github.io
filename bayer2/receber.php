<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BAYER | RECEBER</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
	<link rel="stylesheet" type="text/css" href="1/style.css">
</head>
<body>
<div class="container">
	<header class="bgDark">
		<div class="card">		
			<div class="cover">
				<span class="material-symbols-outlined">person</span>
			</div>
			<div>
				<h2>Nome</h2>
				<h3>0140000</h3>
			</div>
		</div>
		<div class="menu" onclick="drop()">
			<span class="material-symbols-outlined">more_vert</span>
			
			<div id="dropmenu" class="bgDark" >
				<a class="txtCorBr" href="home.php">				
					<span class="material-symbols-outlined">home</span>INICIO
				</a>
				<a class="txtCorBr" href="index.php">				
					<span class="material-symbols-outlined">logout</span>SAIR
				</a>
			</div>
		</div>
	</header>
	<h1 class="bgDark">RECEBER</h1>
	<div class="telas">
		<div class="formCaixa">
			<label class="txtCorPr" for="">LEIA A MASTER</label>
			<input type="text" name="" autofocus onchange="receber(this)">
		</div>

		<div>
			<p id="msg"></p>
		</div>
	</div>
</div>


<script type="text/javascript" charset="utf-8" async defer>
	
	function receber(master){
		document.getElementById('msg').innerHTML = "ÚLTIMA MASTER LIDA " + master.value.toUpperCase();

		master.value = "";

	}
</script>
<script src="1/functions.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>