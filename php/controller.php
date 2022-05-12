<?php
require_once "Ftp.php";
use FtpConect\Ftp;
$dados = new Ftp();
//checking empty value.

if ($_POST and $_POST != 0) {

//Conecting FTP
$dados -> conectFtp();

//Creat .htaccess File
$dados -> makeHtaccess();
}
else
{
    echo "Erro digite dados de acesso";
}


