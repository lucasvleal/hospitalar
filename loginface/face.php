<?php 
require_once'../lib/Facebook/autoload.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$fb = new Facebook\Facebook([
	'app_id' => '373516053189770',
	'app_secret' => 'bb5a26f97a41bee766511923d1a5e1ee',
	'default_graph_version' => 'v3.2'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/hospitalar/hospitalar/view/acesso.php");

try{
	$acessToken = $helper->getAccessToken();
	if(isset($acessToken)){
		$_SESSION['acess_token'] = (string)$acessToken;

		header("Location:index.php");
	}
} catch(Exception $exc){
	echo $exc->getTraceAsString();
}

if(isset($_SESSION['acess_token'])){
	try{
		$fb->setDefaultAccessToken($_SESSION['acess_token']);
		$res = $fb->get('/me?locale=en_US&fields=name,email,picture');
		$user = $res->getGraphUser(); 
		$_SESSION['nome'] = $user->getField('name');
		} catch (Exception $exc){ echo $exc->getTraceAsString();}
} 
?>