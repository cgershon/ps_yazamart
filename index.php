<?php @session_start();// very important 
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
//echo dirname(__FILE__) ; exit;
/*
ob_start(); 
system("ipconfig /all"); 
$mycom=ob_get_contents(); 
ob_clean(); 
$findme = "physique"; 
$pmac = strpos($mycom, $findme); 
$mac=substr($mycom,($pmac+36),17); 
echo $mac; exit;



///////////////////////////////////////////////////////////////////////////
bon c'est unbe technique d'ancien mais si tu as l'adresse ip de la machine et que tu veux l'adresse mac, tu fais: 
ping <adresse ip de la machine> au boup de 2 3 ping tu stoppes 
et tu lances un arp -a et tu auras l'adresse mac correspondante. 

Tu dois pouvoir lancer des commandes avec php donc tu devrai t'en sortir. 
*/
if( $_SERVER['SERVER_NAME'] == 'www.boutique.konim.biz' ) 
   {
   	header('Location: boutique.konim.biz');
   }
//echo dirname(__FILE__) ; exit;
require(dirname(__FILE__).'/config/config.inc.php');
Dispatcher::getInstance()->dispatch();
