<?php
/*
***************************
Curso: Tecnologia em Analise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Tecnicas de Programacao
Professor: Flores
Turma: ADS2A
Componentes:
 26013478-2 - Davi Ferreira da Costa
 26008617-2 - Fernando Cesar Cravo
 26008668-2 - Gabriel Eduardo Consorte
 26010149-2 - Jean Carlos 
 26007982-2 - Joao Gabriel Subtil 
Data: 19 de Setembro de 2026
Descritivo: 10.WHILE: Contar os digitos de um numero inteiro.
**************************
*/
$resultado = "";
if (isset($_POST["numero"])) {
    $numero = (int) $_POST["numero"];
    $temporario = abs($numero);
    $digitos = 0;
    if ($temporario == 0) {
        $digitos = 1;
    } else {
        while ($temporario > 0) {
            $temporario = (int) ($temporario / 10);
            $digitos++;
        }
    }
    $resultado = "O numero " . $numero . " tem " . $digitos . " digito(s).";
}
?>
<h3>Contador de digitos</h3>
<form method="post">
    <label>Digite um numero inteiro:</label>
    <input type="number" step="1" name="numero" required>
    <button type="submit">Contar digitos</button>
</form>
<p><?php echo htmlspecialchars($resultado, ENT_QUOTES, "UTF-8"); ?></p>
<?php

