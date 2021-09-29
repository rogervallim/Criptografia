<?php
// Variável com a senha guardada
$senha = "mypassword";
echo $senha;
echo "<br>";
$criptografada = base64_encode($senha);

echo $criptografada; // Exibe: bXlwYXNzd29yZA==
echo "<br>";
?>
Para decodificar, use base64_decode():
<?php
// Variável com a senha guardada
$senha = "mypassword";
$criptografada = base64_encode($senha);
echo $criptografada; // Exibe: bXlwYXNzd29yZA==
echo "<br>";
echo base64_decode($criptografada); // Exibe: "mypassword"
echo "<br>";
?>
md5:
<?php
// Variável com a senha guardada
echo "<br>";
$senha = "mypassword";
$criptografada = md5($senha);
echo $criptografada; // Exibe: 34819d7beeabb9260a5c854bc85b3e44
?>

