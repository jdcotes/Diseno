<!DOCTYPE HTML>
<html class = "no-js">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<center>
		<section id="formulario">
			<table>
		        <tr>
				<td>Marca: <input type = "text" runat = "server" id = "marca" ></td>
				</tr>
				<tr>
				<td>Referencia: <input type = "text" id = "referencia" ></td>
				</tr>
				<tr>
				<td>Modelo:  <input type = "text" id = "modelo" ></td>
				</tr>
			</table>
			<input type="button" value = "Registrar Vehiculo" onclick = "Registrar();">
		</section>
		<section id = "Mensaje" style = "display: none">
			<p>Registro realizado con éxito</p>
		</section>
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
			$.post("server/vivov.php",{mark: marca1,refrence: referencia1,model: modelo1}, function (respuesta){

		    	var y = document.querySelector("#formulario");
    			y.setAttribute("style","display:none");
    			var zz = document.querySelector("#Mensaje");
    			zz.setAttribute("style","display: inline");

			});
		}
	</script>
</html>