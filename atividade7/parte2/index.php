<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário 5</title>
</head>

<body>
    <form action="teste.php" method="POST">
        Nome:<input type="text" name="name"/><br>
        Email:<input type="email" name="email"/><br>
        Telefone:<input type="number" name="telefone"/><br><br>
        Endereço:<br>
        <ul>
            <li>Rua/Av.: <input type="text" name="rua"/></li>
            <li>Bairro: <input type="text" name="bairro"/></li>
            <li>Cidade: <input type="text" name="cidade"/></li>
            <li>Estado: <input type="text" name="estado"/></li>
            <li>CEP: <input type="text" name="cep"/></li>
        </ul>
    
        <textarea name="textarea" cols="30" rows="10">Descrição do problema</textarea><br>
        <a href="#" name="linkdovideo">Link do vídeo</a>
    </form>

</body>
</html>