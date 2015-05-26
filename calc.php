<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sem título</title>
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script type="text/javascript">

function botao( num )
{
	
var salvo = document.calc.visor.value;
 document.calc.visor.value = salvo + num;
}
function reset( num )
{
var salvo = document.calc.visor.value;
 document.calc.visor.value = salvo;
}
function resultado( nem )
{
var res = document.calc.visor.value;
nem= parseFloat = eval (res);


 document.calc.visor.value = res +'='+ nem;
}
</script>


<style type="text/css">
table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	text-align: center;
	
}
input[type=button]{
	width:62px; height:38px; font-family:Verdana, Geneva, sans-serif; font-size:24px; text-align:center;}
	input[type=text]{
		width:260px; height:33px; 	 font-family:Verdana, Geneva, sans-serif; font-size:24px; text-align: left;}
</style>

</head>

<body>
<center>
<form name="calc">
<table width="118">
  <tr>
    <td colspan="4" align="center"><input name="visor" type="text" size="16" ></td>
  </tr>
  <tr>
    <td align="center"><input type="button" value="7" onClick="botao(value);"></td>
    <td  align="center"><input type="button" value="8" onClick="botao(value);"></td>
    <td  align="center"><input type="button" value="9" onClick="botao(value);"></td>
    <td  align="center"><input type="button" value="-" onClick="botao(value);"></td>
  </tr>
  <tr>
    <td align="center"><input type="button" value="4" onClick="botao(value);"></td>
    <td align="center"><input type="button" value="5" onClick="botao(value);"></td>
    <td align="center"><input type="button" value="6" onClick="botao(value);"></td>
    <td align="center"><input type="button" value="+" onClick="botao(value);"></td>
  </tr>
  <tr>
    <td align="center"><input type="button" value="1" onClick="botao(value);"></td>
    <td align="center"><input type="button" value="2" onClick="botao(value);"></td>
    <td align="center"><input type="button" value="3" onClick="botao(value);"></td>
    <td align="center"><input type="button" value="*" onClick="botao(value);"></td>
  </tr>
  <tr>
    <td align="center"><input type="button" value="=" onClick="resultado();"></td>
    <td align="center"><input type="button" value="0" onClick="botao(value);"></td>
    <td align="center"><input type="button" value="C" onClick="reset();"></td>
    <td align="center"><input type="button" value="/" onClick="botao(value);"></td>
  </tr>
</table>
</form>
</center>
</body>
</html>