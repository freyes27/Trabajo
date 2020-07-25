<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>Validacion de datos</title>

<style>

	#tabla_formu{

		border:1px solid hsla(211,41%,15%,1.00);

		margin: auto;

		background-color: aliceblue;

	}	

	#cve{

		float: right;

		margin-top: -46px;

		width: 1px;

	}

	#cv{

		width: 15px;

	}

	td{

		width: 50px;

	}

	.class{

		width: 0px;

	}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>

	

	function comprobar_datos(){

		var rutc=$("#rut").val();

		var cve=$("#cv").val();

		var array=[rutc];

		

			var pri=array[0][0]*3;

        	var seg=array[0][1]*2;

     		var ter=array[0][2]*7;

     		var cua=array[0][3]*6;

     		var qui=array[0][4]*5;

     		var sex=array[0][5]*4;

     		var sep=array[0][6]*3;

     		var oct=array[0][7]*2;

			

			var suma= pri+seg+ter+cua+qui+sex+sep+oct;

			var resto=suma/11;

			var multi=Math.trunc(resto)*11;

			var total=suma-multi;

			var final=11-total;

			if(final==10){var dv='K';}

			else if(final==11){ var dv=0;}

			else{dv=final;}

				

		

		if( rutc.length<8 || rutc.length>8) {

  			alert("El rut no es valido");

			

		}	

		else if(cve!=dv){

			

			alert("El digito verficador es erroneo");

			return false;

		

		}

		else{

			alert("El Rut : "+rutc+" - "+cve+" es valido");

		

		}

		

		

	}

</script>

</head>



<body>

<form id="form_datos">

<table id="tabla_formu">

	

	<tr>

		<td align="center">Rut: <input type="text" id="rut" placeholder="sin puntos ni guion"/></td>

		

	</tr>	

	

	<tr id="cve">

		<td>CV<input type="text" id="cv" /></td>

	</tr>	

	<tr>

		<td class="otro"><input type="button" id="enviar" value="ENVIAR" onClick="comprobar_datos()"/></td>

		<td class="otro"><input type="reset" id="borrar" value="BORRAR"/></td>

	</tr>	

</table>

</form>

</body>

</html>
