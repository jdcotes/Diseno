<!DOCTYPE HTML>
<html class = "no-js">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<center>
		<table>
	        <tr>
			<td>Marca: <input type = "text" id = "marca" value = "hola"></td>
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
			var marca = marca.value;
			var b = document.querySelector("#referencia");
			var referencia = reerencia.value;
			var c = document.querySelector("#modelo");
			var modelo = modelo.value;
			console.log(marca);
			console.log(referencia);
			console.log(modelo); 
		}
	</script>
</html>