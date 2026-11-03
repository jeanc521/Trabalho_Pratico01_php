<?php

/*
***************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
 26013478-2 - Davi Ferreira da Costa
 26008617-2 - Fernando Cesar Cravo
 26008668-2 - Gabriel Eduardo Consorte
 26010149-2 - Jean Carlos 
 26007982-2 - João Gabriel Subtil 
Data: 01 de Novembro de 2026
Descritivo: Solicitar uma senha até que a senha correta seja digitada.
******************************************************************************/

$senhaCorreta = "1234";
$senha = "";

do {
    if (isset($_POST["senha"])) {
        $senha = $_POST["senha"];

        if ($senha != $senhaCorreta) {
            echo "Senha incorreta. Tente novamente.<br>";
        }
    }

    break;
} while ($senha != $senhaCorreta);

if ($senha == $senhaCorreta) {
    echo "Senha correta. Acesso permitido!";
} else {
?>
    <form method="post">
        <label for="senha">Digite a senha:</label>
        <input type="password" id="senha" name="senha" required>
        <button type="submit">Entrar</button>
    </form>
<?php
}
?>
