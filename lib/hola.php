<?php
// Autor: Jordi Pozo <jpozoc@gmail.com>
// El nombre por defecto es Mundo
print "Introduce tu nombre";
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola {$nombre}\n";
