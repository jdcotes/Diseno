<!DOCTYPE HTML>
<html class = "no-js">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<center>
		<table>
	        <tr>
			<td>Marca: <input type = "text" runat = "server" id = "marca" value = "hola"></td>
			</tr>
			<tr>
			<td>Referencia: <input type = "text" id = "referencia" value = ""></td>
			</tr>
			<tr>
			<td>Modelo:  <input type = "text" id = "modelo" value = ""></td>
			</tr>
		</table>
		<input type="button" value = "Registrar Vehiculo" onclick = "Registrar();">
	</center>
	<script type="text/javascript">
		function Registrar(){
			var a = document.querySelector("#marca");
			var marca1 = marca.value;
			var b = document.querySelector("#referencia");
			var referencia1 = referencia.value;
			var c = document.querySelector("#modelo");
			var modelo1 = modelo.value;
			console.log(marca1);
			console.log(referencia1);
			console.log(modelo1);
			$.post("server/vivov.php",{mark: marca1,refrence: referencia1,model: modelo1}, function (respuesta){console.log(respuesta)});
		}
	</script>
</html>