

$curl = curl_init();
//ENDEREÇO DA SUA IMPRESSORA

curl_setopt($curl,CURLOPT_URL,"http://10.2.8.108/printer/infotosave.htm");
//DADOS DE LOGIN
$username = "admin";
$password = "aaaaaa";
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//SAIDA DOS DADOS

$retorno = curl_exec($curl);
print $retorno;

