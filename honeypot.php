<?php


/***********************************************************************************************************************
 *    _ (`-. ('-. .-.  ('-.        .-') _ .-') _     ('-.     .-')  _   .-')              ('-.   .-. .-')
 *  ( (OO  ( OO )  / ( OO ).-.   ( OO ) (  OO) )   ( OO ).-.( OO )( '.( OO )_           ( OO ).-\  ( OO )
 *  _.`     ,--. ,--. / . --. ,--./ ,--,'/     '._  / . --. (_)---\_,--.   ,--.,--.      / . --. /;-----.\
 * (__...--'|  | |  | | \-.  \|   \ |  |\|'--...__) | \-.  \/    _ ||   `.'   ||  |.-')  | \-.  \ | .-.  |
 * |  /  | |   .|  .-'-'  |  |    \|  | '--.  .--.-'-'  |  \  :` `.|         ||  | OO .-'-'  |  || '-' /_)
 * |  |_.' |       |\| |_.'  |  .     |/   |  |   \| |_.'  |'..`''.|  |'.'|  ||  |`-' |\| |_.'  || .-. `.
 * |  .___.|  .-.  | |  .-.  |  |\    |    |  |    |  .-.  .-._)   |  |   |  (|  '---.' |  .-.  || |  \  |
 * |  |    |  | |  | |  | |  |  | \   |    |  |    |  | |  \       |  |   |  ||      |  |  | |  || '--'  /
 * `--'    `--' `--' `--' `--`--'  `--'    `--'    `--' `--'`-----'`--'   `--'`------'  `--' `--'`------'
 ************************************************************************************************************************
 * @author N1nj4C0d3r
 * @improvements Hax0rlib implement POO <3
 * @version 2.0
 * @since 30/07/2017
 * @contact Telegram @hax0rlib @phantasmlab
 *************************/
class HoneyPot
{

    public $protocol;
    public $ip;
    public $port;
    public $agent;
    public $ref;
    public $hostname;
    public $location;

    public function __construct()
    {

        $this->protocol = $_SERVER['SERVER_PROTOCOL'];
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->port = $_SERVER['REMOTE_PORT'];
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->ref = $_SERVER['HTTP_REFERER'];
        $this->hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $this->location = file_get_contents('http://freegeoip.net/json/' . $_SERVER['REMOTE_ADDR']);
        echo "HoneyPot Start ....";

    }

    public function writeFile()
    {

        $fh = fopen('log.txt', 'a');
        fwrite($fh, 'IP: ' . "" . $this->$ip . "\n");
        fwrite($fh, 'Hostname: ' . "" . $this->$hostname . "\n");
        fwrite($fh, 'Porta: ' . "" . $this->$port . "\n");
        fwrite($fh, 'User Agent: ' . "" . $this->$agent . "\n");
        fwrite($fh, 'Location: ' . "" . $this->$location . "\n");
        fwrite($fh, 'HTTP Referer: ' . "" . $this->$ref . "\n\n");
        fclose($fh);

    }

    public function printPage()
    {

        $html = '<title>HONEYPOT !!!</title>
                <body style="background-color:black;">
                <div style="text-align: center;">
                <h1 style="color:red;">SCRIPTKIDDIE DETECT !!! </h1>
                <br>
                <img src="https://media.giphy.com/media/M4C0jeAkK12DK/giphy.gif">
                <br>
                <pre style="color:red;">Your information has been saved by admin !!! </pre>
                <br>
                <a href="http://www.shafou.com" target="_blank">you need help haxor ?</a>
                </div>
                </body>';
        echo $html;
    }

}

?>
