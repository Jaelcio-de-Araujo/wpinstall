<?php
require_once "Ftp.php";
use FtpConect\Ftp;
$dados = new Ftp();
//checking empty value.

if ($_POST and $_POST != 0) {
$dados -> conectFtp();
$dados -> makePhpini();
}
else
{
    echo "Erro digite dados  idiota";
}


