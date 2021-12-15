<?php
$nome = $_POST['nome'];
$senha = $_POST['pass'];
$idade = $_POST['idade'];
$telefone = $_POST['fone'];
$email = $_POST['endEmail'];
echo "Nome: " . $nome . "<br>";
echo "Senha: " . $senha . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Contato: " . $telefone . "<br>";
echo "Endereço de Email: " . $email . "<br>";
echo "<hr>";

$comidaPref = $_POST['comidaPref'];
echo $comidaPref;
echo "<hr>";

if (isset($_POST['redes'])) {
      echo "Redes de Computadores" . "<br>";
}
if (isset($_POST['javascript'])) {
      echo "Java Script" . "<br>";
}
if (isset($_POST['java'])) {
      echo "Programação em Java" . "<br>";
}
if (isset($_POST['arquitetura'])) {
      echo "Arquitetura e Manutenção de PC" . "<br>";
}
echo "<hr>";

$cars = $_POST['cars'];
if (!empty($cars) && $cars != "volvo" && $cars != "saab" && $cars != "opel" && $cars != "audi") {
      echo "Carro não selecionado";
} else {
      echo $cars;
}
echo "<hr>";

$nota = $_POST['nota_escala'];
echo $nota;
echo "<hr>";

$aniversario = $_POST['dia_ani'];
echo $aniversario;
echo "<hr>";

$hora_dormir = $_POST['mimiu'];
echo $hora_dormir;
echo "<hr>";
