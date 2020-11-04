<?php
ob_start();
/*
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  AdWords API integration
 */
require_once 'Credentials.php';
require_once 'Advertising.php';

use Adwords\Advertising;
class Processor {
    protected $advertising;
    protected $debug = false;
    
    
    public function __construct()
    {   
        $arr = [
            'OAUTH2' => [
                'developerToken' => Credentials::$DEVELOPER_TOKEN,
                'clientId' => Credentials::$CLIENT_ID,
                'clientSecret' => Credentials::$CLIENT_SECRET,
                'refreshToken' => Credentials::$REFRESH_TOKEN,
            ]
        ];

        $this->advertising = new Advertising($arr,  Credentials::$MASTER_ID);
    }
    
    public function get_account_details($tokens)
    {
        $arr = [
            'OAUTH2' => [
                'developerToken' => Credentials::$DEVELOPER_TOKEN,
                'clientId' => Credentials::$CLIENT_ID,
                'clientSecret' => Credentials::$CLIENT_SECRET,
                'refreshToken' => $tokens['refresh_token'],
            ]
        ];

        $this->advertising = new Advertising($arr,  Credentials::$MASTER_ID);
        $accounts = $this->advertising->GetAccountDetails($this->advertising->createClient(Credentials::$MASTER_ID));
        echo $tokens['refresh_token'].'<br/>';
        echo '<pre>';
        print_r($accounts);
		exit();
        echo '</pre>';
        foreach ($accounts as $account)
        {   
            $this->advertising->GetAccountInfo($this->advertising->createClient($account), $account);
        }
    }
    public function get_active_account_details()
    {
        $arr = [
            'OAUTH2' => [
                'developerToken' => Credentials::$DEVELOPER_TOKEN,
                'clientId' => Credentials::$CLIENT_ID,
                'clientSecret' => Credentials::$CLIENT_SECRET,
                'refreshToken' => Credentials::$REFRESH_TOKEN,
            ]
        ];
        $this->advertising = new Advertising($arr,  Credentials::$MASTER_ID);
        return $this->advertising->GetAccountDetails($this->advertising->createClient(Credentials::$MASTER_ID));
    }
}

