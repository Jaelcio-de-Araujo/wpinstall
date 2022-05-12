<?php
namespace FtpConect;
class Ftp
{
    //Method  ftp conect
    public function conectFtp()
    {
        //Get ftp values
        $ftp_data['ftp'] = array(
        'host'=>$_POST['host'], 
        'user'=>$_POST['user'],
        'pass'=>$_POST['pass']);

        $server = $ftp_data['ftp']['host'];

        // set up a connection or die
        $conn_id = ftp_connect($server) or die("Couldn't connect to $server");

        //try ftp login
        if (@ftp_login($conn_id, $ftp_data['ftp']['user'], $ftp_data['ftp']['pass'])) 
        {
            echo "Connectado ao ftp\n";
        } else {
            echo "Erro ao tentar conectar ao ftp\n";
        }
        // close the connection
        ftp_close($conn_id);      
        }

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