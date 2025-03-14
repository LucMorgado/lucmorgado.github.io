<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilo.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Passion+One:wght@400;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
	<script src="saldo.js" type="text/javascript" charset="utf-8" async defer></script>
	<title>BUSCA</title>
</head>
<body>
<?php 
if(isset($_POST['saldo'])){
		//criar arquivo
		 $out = "const saldoGeral = [\n";


		$saldo = $_POST['saldo'];
		//echo $saldo;
		$linhas = explode("\n", $saldo);
		for($i = 0; $i < count($linhas); $i++){
			$titulo = explode("	", $linhas[0]);
			$dados = explode("	", $linhas[$i]);
			$out .= "{\n";
			for($j = 0; $j < count($dados); $j++){
				$out .= " '" . $titulo[$j] . "': '" . $dados[$j] . "'";
				if($j==count($dados)){
					$out .= "\n";
				}else{
					$out .= ", \n";
				}
			}

			$out .= "}, \n";

		}
		$out .= "]";


		$arquivo = fopen("saldo.js", "w");
		fwrite($arquivo, $out);
		fclose($arquivo);

		//ler
	//$arquivo = fopen("saldo.txt", "r");
	//$result = array();
	//while(! feof($arquivo)){
	//	$linha = explode("\n", fgets($arquivo));
	//}
	//fclose($arquivo);
	//print_r($result);



}
 ?>

	<div class="app">
		<h2>BUSCAR ZERO</h2>
		<header>
			<div class="info">
				<h1 id="codigo">00000</h1>
				<h4 id="descricao">Descrição do Produto</h4>
				<h2 id="picking">Picking do Produto</h2>
			</div>
			<div class="mapa">
				<div class="d0">
					<p class="tituloMapa">D0</p>
					<p class="valorMapa" id="valorMapaD0">10</p>
				</div>
				<div class="d1">
					<p class="tituloMapa">D1</p>
					<p class="valorMapa" id="valorMapaD1">10</p>
				</div>
				<div class="mapaTotal">
					<p class="tituloMapa">TOTAL</p>
					<p class="valorMapa" id="valorMapaTotal">20</p>
				</div>
			</div>
		</header>
		<div class="saldo">
			<table>
				<thead>
					<tr>
						<th>ENDEREÇO</th>
						<th>COD.LOC</th>
						<th>SALDO</th>
					</tr>
				</thead>
				<tbody id="listaSaldo">
					<tr><td colspan="3">DIGITE O CODIGO</td></tr>
				</tbody>
			</table>
		</div>
	</div>
	<footer id="teclado">
			<div class="tecladoLinha">
				<div class="tecla"><button onclick="teclado(this.value)" value="1">1</button></div>
				<div class="tecla"><button onclick="teclado(this.value)" value="2">2</button></div>
				<div class="tecla"><button onclick="teclado(this.value)" value="3">3</button></div>
			</div>
			<div class="tecladoLinha">
				<div class="tecla"><button onclick="teclado(this.value)" value="4">4</button></div>
				<div class="tecla"><button onclick="teclado(this.value)" value="5">5</button></div>
				<div class="tecla"><button onclick="teclado(this.value)" value="6">6</button></div>
			</div>
			<div class="tecladoLinha">
				<div class="tecla"><button onclick="teclado(this.value)" value="7">7</button></div>
				<div class="tecla"><button onclick="teclado(this.value)" value="8">8</button></div>
				<div class="tecla"><button onclick="teclado(this.value)" value="9">9</button></div>
			</div>
			<div class="tecladoLinha">
				<div class="tecla"><button id="apagar" onclick="apagar()" value="APAGAR"><span class="material-symbols-outlined">
backspace
</span></button></div>
				<div class="tecla"><button onclick="teclado(this.value)" value="0">0</button></div>
				<div class="tecla"><button id="buscar" onclick="buscar()" value="BUSCAR"><span class="material-symbols-outlined">
search
</span></button></div>
			</div>
		</footer>

<div id="atualizar">
	<form method="post" accept-charset="utf-8">
	<textarea name="saldo"></textarea>
	<button onclick="atualizar()">ATUALIZAR</button>
	</form>
</div>


<script>
	let codigo = document.getElementById('codigo');
	let d0 = document.getElementById('valorMapaD0');
	let d1 = document.getElementById('valorMapaD1');
	let total = document.getElementById('valorMapaTotal');
	let descricao = document.getElementById('descricao');
	let picking = document.getElementById('picking');
	let listaSaldo = document.getElementById('listaSaldo');

	const listaDeSaldo = [];

	apagar();
	function apagar(){
		codigo.innerHTML = "-";
		d0.innerHTML = "-";
		d1.innerHTML = "-";
		total.innerHTML = "-";
		descricao.innerHTML = "-";
		picking.innerHTML = "-";
		listaSaldo.innerHTML = '<tr><td style="text-align:center" colspan="3">DIGITE O CODIGO</td></tr>';

	}

	function teclado(valor){
		if(codigo.innerHTML == "-"){
			codigo.innerHTML = valor;
		}else{
			if(codigo.innerHTML.length >= 5){
				alert("CODIGO DEVE TER ATÉ 5 DIGITOS");
			}else{
			codigo.innerHTML += valor;	
			}
		}

		if(codigo.innerHTML == "0000"){
			document.getElementById('atualizar').style = "display:flex";
		}
	}

	function buscar(){
		if(codigo.innerHTML == "-") {
			alert("DIGITE O CODIGO!");
		}else{
			document.getElementById('listaSaldo').innerHTML = "";
			for(var i in saldoGeral){
				if(saldoGeral[i]['produto'] == codigo.innerHTML){
					document.getElementById('descricao').innerHTML = saldoGeral[i]['descricao'];
					document.getElementById('listaSaldo').innerHTML += 
						'<tr>' +
						  '<td>' + saldoGeral[i]['localizador'] +'</td>' + 
						  '<td></td>' + 
						  '<td>' + saldoGeral[i]['saldo'] +'</td>' + 
						'</tr>';
				}
			}
		}
	}

	function atualizar(){
		document.getElementById('atualizar').style = "display:none";
		document.getElementById('inputSaldo').value;
	}
</script>
</body>
</html>