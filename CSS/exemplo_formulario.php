<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo de Formulário</title>
</head>
<body>
	<h1>Exemplo de Formulário</h1>
	<form name="filme" method="get" action="enviado.php">
	<h3>O que você achou do site?</h3>
	<input type="radio" name="opnião" value="muitoB"/>Muito Bom
	<input type="radio" name="opnião" value="bom"/>Bom
	<input type="radio" name="opnião" value="regular"/>Regular
	<input type="radio" name="opnião" value="lixo"/>Um lixo
	<h3>Qual a seção que você mais gostou?</h3>
	<select name="cartaz">
		<option> Em Cartaz </option>
		<option> Trilha Sonora </option>
		<option> Galeria de Fotos </option>
		<option> Bilheteria </option>
		<option> Outra </option>
	</select>
	Outra: <input type="text" name="outra" size="30" maxlength="20">
	<h3>Digite seus comentários no espaço abaixo:</h3>
	<textarea name="msg" cols="50" rows="8">
	</textarea>
	<h3>Diga-nos como entrar em contato com você:</h3>
	Nome:  <input type="text" name="nome" size="40" maxlength="30"><br>
	E-mail:<input type="text" name="email" size="40" maxlength="30"><br>
	Fone:  <input type="text" name="fone" size="40" maxlength="30"><br>
	FAX:   <input type="text" name="fax" size="40" maxlength="30"><br>
	<br>
	<input type="checkbox" name="novidade" value="termo"/>
	Quero receber as novidades do site por e-mail<br/><br/>
	<input type="submit" name="Enviar" value="Enviar Dados">
	<input type="reset" name="Limpar"  value="Limpar Formulário">
</form>
</body>
</html>
