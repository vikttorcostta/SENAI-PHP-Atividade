<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="interface.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" placeholder="informe um nome" alt="Campo para informar o nome da pessoa">
        <br>
        <label for="codigo">Código: </label>
        <input type="number" name="codigo" placeholder="informe um código" alt="código da pessoa">
        <br>
        <label for="altura">Altura: </label>
        <input type="number" name="altura" placeholder="informe uma altura" alt="altura da pessoa">
        <br>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" placeholder="informe uma idade" alt="idade da pessoa">
        <br>
        <label for="nascimento">Nascimento: </label>
        <input type="date" name="nascimento" placeholder="informe a data de nascimento" alt="data de nascimento">
        <br>
        <label for="escolaridade">Escolaridade: </label>
        <input type="radio" name="escolaridade" value="Médio Técnio">Médio Técnico
        <input type="radio" name="escolaridade" value="Superior">Superior
        <!-- 
        Campos de informação da conta.
        -->
        <fieldset>
            <legend>Conta:</legend>
            <br>
            <label for="codigoBanco">Código do banco: </label>
            <input type="number" name="codigoBanco" placeholder="informe um código" alt="código do banco">
            <br>
            <label for="agencia">Agencia: </label>
            <input type="number" name="agencia" placeholder="informe uma agencia" alt="agencia do banco">
            <br>
            <label for="dataCriacao">Data de criação: </label>
            <input type="date" name="dataCriacao" alt="data de criacao da conta">
            <br>
            <label for="senha">Data de criação: </label>
            <input type="password" name="senha" placeholder="informe um senha" alt="senha da conta">
            <br>
            <label for="saldo">Saldo: </label>
            <input type="number" name="saldo" placeholder="saldo inicial" alt="saldo inicial da conta">
            <br>
            <label for="cancelado">Cancelado: </label>
            <select name="cancelado">
                <option value="0">Inativo</option>
                <option value="1">Ativo</option>
            </select>


        </fieldset>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>