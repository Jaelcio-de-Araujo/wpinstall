<?php
require_once "Ftp.php";
use FtpConect\Ftp;
$dados = new Ftp();






if ($_POST and $_POST != 0) {
$dados -> conectFtp();
}
else
{
    echo "Erro digite dados  idiota";
}


