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
Descritivo: 7.WHILE: Pedir para adivinhar o numero 7 ate acertar.
**************************
*/
session_start();
if (!isset($_SESSION["tentativas_adivinhar"])) {
    $_SESSION["tentativas_adivinhar"] = 0;
}
$mensagem = "";
if (isset($_POST["palpite"])) {
    $palpite = (int) $_POST["palpite"];
    $_SESSION["tentativas_adivinhar"]++;
    if ($palpite === 7) {
        $mensagem = "Acertou! O numero era 7. Tentativas: " . $_SESSION["tentativas_adivinhar"];
        $_SESSION["tentativas_adivinhar"] = 0;
    } else {
        $mensagem = "Ainda nao! Tente novamente.";
    }
}
?>
<h3>Jogo de adivinhacao</h3>
<p>Digite palpites ate acertar o numero secreto.</p>
<form method="post">
    <label>Seu palpite:</label>
    <input type="number" name="palpite" required>
    <button type="submit">Tentar</button>
</form>
<p><?php echo htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8"); ?></p>
<?php

