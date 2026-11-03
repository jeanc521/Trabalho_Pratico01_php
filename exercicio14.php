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
Descritivo: Ler e imprimir números até que um número negativo seja informado.
******************************************************************************/

session_start();

if (!isset($_SESSION["numeros"])) {
    $_SESSION["numeros"] = [];
}

$numero = 0;
$finalizado = false;

do {
    if (isset($_POST["numero"])) {
        $numero = (int) $_POST["numero"];
        $_SESSION["numeros"][] = $numero;

        if ($numero < 0) {
            $finalizado = true;
        }
    }

    break;
} while ($numero >= 0);

echo "<h3>Números informados:</h3>";

foreach ($_SESSION["numeros"] as $valor) {
    echo $valor . "<br>";
}

if ($finalizado) {
    echo "<p>O número digitado é negativo. Programa encerrado.</p>";
    session_destroy();
} else {
?>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Enviar</button>
    </form>
<?php
}
?>
