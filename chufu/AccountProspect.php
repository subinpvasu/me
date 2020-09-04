<?php
/*
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  AdWords API integration
 */
//namespace Google\Auth;
session_start();
use Google\Auth\OAuth2;
require_once './vendor/autoload.php';
require_once 'Credentials.php';
$_SESSION['turn'] = 0;


        class AccountProspect{
            public $prospect;
             public function __construct() {
             //get lost
                 
             }
                 public function authenticate(){
    $this->prospect = new OAuth2([
    'authorizationUri' => \Credentials::$AUTHORIZATION_URI,
    'tokenCredentialUri' => \Credentials::$TOKEN_CREDENTIAL_URI,
    'redirectUri' => \Credentials::$REDIRECT_URI,
    'clientId' => \Credentials::$CLIENT_ID,
    'clientSecret' => \Credentials::$CLIENT_SECRET,
    'scope' => \Credentials::$SCOPE
]);
    
        
            if (!isset($_GET['code'])) {
                $this->prospect->setState(sha1(openssl_random_pseudo_bytes(1024)));
  $_SESSION['oauth2state'] = $this->prospect->getState();
  $config = [
      'access_type' => 'offline',
      'approval_prompt' => 'force',
      
  ];
  header('Location: ' . $this->prospect->buildFullAuthorizationUri($config));
  exit;
}
elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
  unset($_SESSION['oauth2state']);
  exit('Invalid state.');
} else {
    
    if($_SESSION['turn'] == 0){
  $this->prospect->setCode($_GET['code']);
  $authToken = $this->prospect->fetchAuthToken();
  return $authToken;
    }
}
        }
        
        }