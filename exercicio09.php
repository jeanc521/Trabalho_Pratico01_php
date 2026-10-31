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
Descritivo: 9.WHILE: Ler numeros ate digitar 0 e mostrar a soma.
**************************
*/
session_start();
if (!isset($_SESSION["numeros_soma"])) {
    $_SESSION["numeros_soma"] = [];
}
$mensagem = "";
if (isset($_POST["numero"])) {
    $numero = (int) $_POST["numero"];
    if ($numero === 0) {
        $soma = 0;
        $i = 0;
        while ($i < count($_SESSION["numeros_soma"])) {
            $soma += $_SESSION["numeros_soma"][$i];
            $i++;
        }
        $mensagem = "Soma dos numeros digitados = " . $soma;
        $_SESSION["numeros_soma"] = [];
    } else {
        $_SESSION["numeros_soma"][] = $numero;
        $mensagem = "Numero registrado. Digite outro ou 0 para finalizar.";
    }
}
?>
<h3>Soma ate digitar zero</h3>
<p>Digite numeros inteiros. Ao digitar 0, a soma sera exibida.</p>
<form method="post">
    <label>Numero:</label>
    <input type="number" name="numero" required>
    <button type="submit">Enviar</button>
</form>
<p><?php echo htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8"); ?></p>
<?php
