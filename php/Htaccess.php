<?php
namespace FtpConect;

class Htaccess
{
    public function makeHtaccess()
    {   
    $text =
    "##### LOCAWEB - NAO REMOVER #####\nAddHandler php74-script .php\nsuPHP_ConfigPath /home/wpinstallenergia1/\n##### LOCAWEB - NAO REMOVER #####";
    trim("$text");
        
        //Creat php.ini  file
        $phpIni = fopen(".htaccess", 'x+')or die("Erro ao criar/gravar arquivo");
        
        //Writing in php.ini file
        fwrite($phpIni, $text);
        fclose($phpIni);
    }
}