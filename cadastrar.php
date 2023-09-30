<?php
require "conexao.php";
require "aviao.php";
require "RepositorioAviao.php";
$repAviao = new RepositorioAviao();

$aviao1 = new aviao("Cmpaerea","cdp ","velomax","autonomia","modelo");

$repAviao->cadastrar($banco,$aviao);

?>