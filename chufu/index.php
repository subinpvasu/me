<?php

/* 
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  Author : SUBIN P VASU, Freelance Google AdWords API Developer - PHP
 *  Created On : 20 Mar, 2020 
 */


require_once 'AccountProspect.php';
require_once 'Processor.php';




        
            $oauth2 = new AccountProspect();
            $tokens = $oauth2->authenticate();
            $account = new Processor();
//            echo '<pre>';
//            print_r($tokens);
//            echo '</pre>';
            $accounts = $account->get_account_details($tokens);
//            $account->get_active_account_details();
            
