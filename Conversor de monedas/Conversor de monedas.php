<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
	<HEAD>
		<TITLE>Conversor de monedas</TITLE>

		<META http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<STYLE type="text/css">
			#caja {
				position:relative;
				margin: auto;
				width: 800px;
				height: 500px;
				border: 3px solid black;
				background-color: blue;
				}
			#cajatitulo {
				position:relative;
				top: 20px;
				margin: auto;
				width: 700px;
				height: 90px;
				text-align: center;
				vertical-align: middle;
				background-color: white;
				border: 3px solid black;
				}
			#cajacalculadora {
				position:relative;
				top: 30px;
				padding: 20px;
				margin: auto;
				width: 700px;
				height: 280px;
				text-align: center;
				vertical-align: middle;
				background-color: white;
				border: 3px solid black;
				}
			#euros {
				position:relative;
				margin: auto;
				padding-left: 50px;
				float: left;
				width: 200px;
				height: 90px;
				text-align: center;
				vertical-align: middle;
				}
			#pesetas {
				position:relative;
				margin: auto;
				float: left;
				width: 200px;
				height: 90px;
				text-align: center;
				vertical-align: middle;
				}
			#flechas {
				position:relative;
				padding-top: 10px;
				margin: auto;
				float: left;
				width: 200px;
				height: 90px;
				text-align: center;
				vertical-align: middle;
				}
			#resultado {
				position:relative;
				top: -50px;
				margin: auto;
				width: 600px;
				height: 90px;
				text-align: center;
				vertical-align: middle;
				}
			#inputresultado {
				border: 2px solid black;
				text-align: center;
				border-radius: 20px;
				padding: 10px;
				}
			#inputeuros {
				border: 2px solid black;
				text-align: center;
				}
			#inputpesetas {
				border: 2px solid black;
				text-align: center;
				}
		</STYLE>

		<SCRIPT type="text/javascript">

			function calculareuros() {
				var factor = 166.38
				var euros = document.getElementById('inputeuros').value
				var pesetas = document.getElementById('inputpesetas').value
				var valoreuro = pesetas / factor +" Euros";
				//alert (valoreuro)
				document.getElementById('inputresultado').defaultValue=valoreuro
				}

			function calcularpesetas() {
				var factor = 166.38
				var euros = document.getElementById('inputeuros').value
				var pesetas = document.getElementById('inputpesetas').value
				var valorpesetas = euros * factor+" Pesetas";
				//alert (valorpeseta)
				document.getElementById('inputresultado').defaultValue=valorpesetas
				}

		</SCRIPT>
	</HEAD>

	<BODY>
		<DIV id="caja">
			<DIV id="cajatitulo">
				<H1>Conversor de Euros - Pesetas</H1>

			</DIV>

			<DIV id="cajacalculadora">
				<DIV id="euros">
					Euros
					<BR>
					<INPUT id="inputeuros" type="text">
				</DIV>

				<DIV id="flechas">
						<IMG alt="flecha derecha" src="./images/flechadrch.png" onclick="calcularpesetas()">
					<BR>
						<IMG alt="flecha izquierda" src="./images/flechaizq.png" OnClick="calculareuros()">
				</DIV>

				<DIV id="pesetas">
					Pesetas
					<BR>
					<INPUT id="inputpesetas" type="text">
				</DIV>


			</DIV>

			<DIV id="resultado">
					Resultado de la conversión:
					<BR>
					<INPUT id="inputresultado" type="text" size="60">
				</DIV>
		</DIV>
	</BODY>
</HTML>
