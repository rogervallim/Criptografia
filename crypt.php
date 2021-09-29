<?php
 
$senha = 'ola mundo';
$custo = '08';
$salt = 'Cf1f11ePArKlBJomM0F6aJ';
 
// Gera um hash baseado em bcrypt
$hash = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');
echo $hash;
echo "<br>";
echo $senha;
echo "<br>";
echo $custo;
echo "<br>";
echo $salt;
echo "<br>";
?>