<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário 1</title>
</head>
<body>
  <h1>Formulário 1</h1>
    <form action="#" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" name="nome"><br>
		<label for="nome">CPF:</label>
		<input type="text" name="cpf"><br>
		<label for="nome">Nome:</label>
		<input type="email" name="email"><br>
		<br>

		<label for="cidades"> <strong>Selecione uma cidade:</strong></label>
		<select name="cidades" id="cities">
		<option value="João Pessoa">João Pessoa</option>
		<option value="Campina Grande">Campina Grande</option>
		<option value="Patos">Patos</option>
		<option value="Itabaiana">Itabaiana</option>
		</select>
		<br><br>

		<label for="cursos"> <strong>Selecione os cursos:</strong></label><br>
		<input type="checkbox" name="android">
		<label for="android">Android</label><br>
		<input type="checkbox" name="python">
		<label for="python">Python</label><br>
		<input type="checkbox" name="html-css">
		<label for="html-css">Html/Css</label><br>
		<input type="checkbox" name="javascript">
		<label for="javascript">Javascript</label><br><br>

		<label for=""> <strong>Selecione a faixa Etária de Idade:</strong></label><br>
		<input type="radio" name="faixa">
		<label for="">18 a 25</label><br>
		<input type="radio" name="faixa">
		<label for="">26 a 30</label><br>
		<input type="radio" name="faixa">
		<label for="">31 a 45</label><br>
		<input type="radio" name="faixa">
		<label for="">45 a 61</label><br><br>
		
		<input type="submit" value="Enviar">
		<input type="reset" value="Limpar">
	</form>
</body>
</html>