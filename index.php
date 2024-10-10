<?php
if (isset($_GET['nome']) && isset($_GET['idade'])) {
  $nome = htmlspecialchars($_GET['nome']);
  $idade = htmlspecialchars($_GET['idade']);
echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
} else {
  echo "Os dados não foram enviados corretamente.";
}
?>
