<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			font-family: sans-serif;
			background-color: #2c3e50;
		}
		.jogodavelha{
			font-size: 30px;
			margin-left: auto;
  			margin-right: auto;
  			margin-top: 5%;
  			text-align: center;
		}
		.jogodavelha td{
			width:60px;
			height:60px;	
		}
		.texto{
			text-align: center;
			margin: 2%;
			color:#ecf0f1;
		}
	</style>

</head>
<body>
	<h1 class="texto">JOGO DA VELHA</h1>
	<h3 class="texto" id="vez" >Sua vez</h3>		
	<table class="jogodavelha" border="1">
		<tr>
			<td id="linha1Coluna1" onclick="addX('linha1Coluna1',1)"> </td>
			<td id="linha1Coluna2" onclick="addX('linha1Coluna2',2)"> </td>
			<td id="linha1Coluna3" onclick="addX('linha1Coluna3',3)"> </td>
		</tr>
		<tr>
			<td id="linha2Coluna1" onclick="addX('linha2Coluna1',4)"></td>
			<td id="linha2Coluna2" onclick="addX('linha2Coluna2',5)"></td>
			<td id="linha2Coluna3" onclick="addX('linha2Coluna3',6)"></td>
		</tr>
		<tr>
			<td id="linha3Coluna1" onclick="addX('linha3Coluna1',7)"></td>
			<td id="linha3Coluna2" onclick="addX('linha3Coluna2',8)"></td>
			<td id="linha3Coluna3" onclick="addX('linha3Coluna3',9)"></td>
		</tr>
	</table>

</body>
<script type="text/javascript">
	var celulasOcupadas = [];
	var jogadaMaquina;
	var quadrantes = [
	"",
	"linha1Coluna1",
	"linha1Coluna2",
	"linha1Coluna3",
	"linha2Coluna1",
	"linha2Coluna2",
	"linha2Coluna3",
	"linha3Coluna1",
	"linha3Coluna2",
	"linha3Coluna3",

	];

	function addO(){
		if (celulasOcupadas.length < 8) {
			do{
				jogadaMaquina = Math.floor(Math.random()*10);
				console.log(jogadaMaquina ,quadrantes[jogadaMaquina]);
				var idQuadranteMaquina = quadrantes[jogadaMaquina]
			}while(celulasOcupadas.indexOf(jogadaMaquina) != -1 || jogadaMaquina==0);
			preencherQuadrante(idQuadranteMaquina,"o",jogadaMaquina);
			console.log("Tamanho array:",celulasOcupadas.length);
			document.getElementById("vez").innerHTML = "Sua vez";
		}
	}
	function addX(idCelula, nCelula){
		preencherQuadrante(idCelula,"x",nCelula)
		console.log(celulasOcupadas);
		document.getElementById("vez").innerHTML = "Vez do computador...";
		window.setTimeout(()=>{addO();}, 1000);
	}
	
	function preencherQuadrante(id,item,indicador){
		var elemento = document.getElementById(id);
		elemento.innerHTML = item;
		celulasOcupadas.push(indicador);
	}
	
	
</script>
</html>