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
Data: 01 de Novembro de 2026
Descritivo: Criar um menu usando do-while.
******************************************************************************/

$opcao = 0;

do {
    echo "1. Iniciar<br>";
    echo "2. Parar<br>";
    echo "3. Sair<br>";

    if (isset($_POST["opcao"])) {
        $opcao = (int) $_POST["opcao"];

        if ($opcao == 1) {
            echo "Programa iniciado.<br>";
        } elseif ($opcao == 2) {
            echo "Programa parado.<br>";
        } elseif ($opcao == 3) {
            echo "Saindo do programa.<br>";
        } else {
            echo "Opção inválida.<br>";
        }
    }

    break;
} while ($opcao != 3);

if ($opcao != 3) {
?>
    <form method="post">
        <label for="opcao">Escolha uma opção:</label>
        <input type="number" id="opcao" name="opcao" required>
        <button type="submit">Confirmar</button>
    </form>
<?php
}
?>
