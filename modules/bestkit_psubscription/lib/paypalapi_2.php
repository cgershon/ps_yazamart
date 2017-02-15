<?php	@session_start();
/*		https://developer.paypal.com/docs/classic/express-checkout/integration-guide/ECRecurringPayments/
 * https://www.paypal.com/il/webapps/mpp/paypal-fees?locale.x=he_IL
 * 2007-2013 PrestaShop
 * modifed YGPC  9/04/16  :  $_SESSION['billing_cycles']      from the input field whose is chosen by the client 
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 *         DISCLAIMER   *
 * *************************************** */
 /* Do not edit or add to this file if you wish to upgrade Prestashop to newer
 * versions in the future.
 * ****************************************************
 *
 *  @author     BEST-KIT.COM (contact@best-kit.com)
 *  @copyright  http://best-kit.com
 
 *  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */
 define( '_FORCE_PROFIL ' , false ); // ADDED YGPC
 define( '_ITEM_CATEGORY', 'Digital' );// ADDED
 define( '_Percent_PayPal_Fees ', '0.034'); // 3.4 %
 define( '_Recurrent_PayPal_Fees ', '1.2' ); // 1.2 shq 
 define( ' _Bank_Fees', '1.35' ); // 1.35 shq 
	
 
if ( !$_SESSION['billing_cycles'] )
      $_SESSION['billing_cycles'] = '4';
/* ******************************************************************************************************** */      
class paypal_recurring
{
	protected function generatePaymentRequest($order, $addBillingFreq = false, $descOnly = false)
	{
		$_cart = new Cart($order->id_cart);
		$products = Db::getInstance()->executeS('
			SELECT * FROM `' . _DB_PREFIX_ . 'cart_product`
			WHERE `id_cart` = ' . $_cart->id . '
		');
		// ADDED YGPC FEES = First payment 
		$fees=	(int)urlencode( $this->paymentAmount ) * _Percent_PayPal_Fees +   $_SESSION['billing_cycles'] * _Recurrent_PayPal_Fees + _Bank_Fees;
		$request = '';
		$i = 0;	$cpt = 0;
	foreach ($products as $product) {
	if ($addBillingFreq || _FORCE_PROFIL ) 
      {
				$data = unserialize($product['bestkit_psubscription']);
				$period = new BestkitPsubscriptionPeriod($data['id_period'], Context::getContext()->language->id);

				$time = strtotime($data['start_date']);
				if ($time < time()) {
					$time = time();
				}

				$date = gmdate("Y-m-d\TH:i:s\Z", $time);
				if (date("Y-m-d", time()) == date("Y-m-d", $time)) {
					$date = date("Y-m-d\TH:i:s\Z", $time+24*60*60-1);
				}

				$request .= '&PROFILESTARTDATE=' . urlencode($date);
				$request .= '&BILLINGPERIOD=' . urlencode($period->billing_period);
				$request .= '&BILLINGFREQUENCY=' . urlencode($period->billing_freq);
			 // ADDED  YGPC 9/04/2016 
      	 	 if( (int)$_SESSION['billing_cycles']  > 0 ) 
      	    		{     
          				$request .= '&TOTALBILLINGCYCLES=' . urlencode( $_SESSION['billing_cycles']  );
         				$request .="&INITAMT=". (int) ( $this->paymentAmount / $_SESSION['billing_cycles'] ) ;   //.$fees;
			        } 
			 // Important fixing the amount of each cycle        	
				$request .= '&AMT=' .(int) ( urlencode( $this->paymentAmount ) / $_SESSION['billing_cycles']  ); 	// also added by YGPC not included in original script downloaded !
				$cpt ++;
				// End added 
		} // 	if ($addBillingFreq || _FORCE_PROFIL )

	if ($descOnly)
        {
			return $order->reference;
		}

			$desc = urlencode(Tools::substr(Product::getProductName($product['id_product'], $product['id_product_attribute']), 0, 120));
			$request .= '&L_BILLINGAGREEMENTDESCRIPTION0=' . $order->reference;
			$request .= '&PAYMENTREQUEST_' . $i . '_DESC=' . $order->reference;
			$request .= '&DESC=' . $order->reference;

			$request .= '&L_PAYMENTREQUEST_' . $i . '_NAME0=' . $desc;
			$request .= '&L_PAYMENTREQUEST_' . $i . '_AMT0=' . (int)$this->paymentAmount  ; // Total amount of the all cycles 
			//$request .= '&L_PAYMENTREQUEST_' . $i . '_QTY0=' . urlencode($product['quantity']);
	     //	$request .= '&L_PAYMENTREQUEST_0_ITEMCATEGORY0=' . _ITEM_CATEGORY; //  ADDED YGPC
		}     // end foreach
	//var_dump( 	$cpt ,' billing_cycles:  ', $_SESSION['billing_cycles'] , '<br/> request <br/>',	$request ); exit('End PayPal Api');
/*
&PROFILESTARTDATE=2016-08-24T21%3A29%3A54Z&BILLINGPERIOD=Month&BILLINGFREQUENCY=1&TOTALBILLINGCYCLES=2&INITAMT=25&AMT=25&L_BILLINGAGREEMENTDESCRIPTION0=SHDKXADKT
&PAYMENTREQUEST_0_DESC=SHDKXADKT&DESC=SHDKXADKT&L_PAYMENTREQUEST_0_NAME0=%D7%94%D7%9C%D7%95%D7%95%D7%90%D7%94100&L_PAYMENTREQUEST_0_AMT0=50" 

*/
//	var_dump(  	$request     ); exit;
		return $request;
	}
/* **************************************************************************************************************** */
	public function setExpressCheckout()
	{
		
	//	var_dump( 'setExpressCheckout',$this->order );exit;
		
		$nvpStr = 
		"&PAYMENTREQUEST_0_AMT=".(int)$this->paymentAmount   //   / $_SESSION['billing_cycles'] 
		."&ReturnUrl=".$this->returnURL
		."&CANCELURL=".$this->cancelURL
		."&PAYMENTREQUEST_0_PAYMENTACTION=".$this->paymentType
		."&PAYMENTREQUEST_0_CURRENCYCODE=".$this->currencyID
		.$this->generatePaymentRequest($this->order);

		$httpParsedResponseAr = $this->fn_setExpressCheckout('SetExpressCheckout', $nvpStr);

		if ("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) 
			|| "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])
		) {
			$token = urldecode($httpParsedResponseAr["TOKEN"]);
			$payPalURL = "https://www.paypal.com/cgi-bin/webscr&cmd=_express-checkout&token=$token";

			if("sandbox" === $this->environment || "beta-sandbox" === $this->environment) {
				$payPalURL = "https://www.".$this->environment.".paypal.com/cgi-bin/webscr&cmd=_express-checkout&token=$token";
			}

			header("Location: $payPalURL"); // redirect to paypal with parameters in $_POST 
			exit;
		} else  {
			$httpParsedResponseAr['order'] = $this->order;
			return $httpParsedResponseAr;
		}
	}

	public function getExpressCheckout()
	{
		if (!array_key_exists('token', $_REQUEST)) {
			exit('Paypal token is not received.');
		}

		$token = urlencode(htmlspecialchars($_REQUEST['token']));
		$nvpStr = "&TOKEN=$token";
		$httpParsedResponseAr = $this->fn_getExpressCheckout('GetExpressCheckoutDetails', $nvpStr);

		if ("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) 
			|| "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])
		) {
			$payerID = $httpParsedResponseAr['PAYERID'];
			return $this->doExpressCheckout($payerID, $token, $httpParsedResponseAr);
		} else  {
			return $httpParsedResponseAr;
		}
	}

	public function doExpressCheckout($payerID, $token, $payerData)
	{
		$nvpStr = 
		"&TOKEN=$token&PAYERID=$payerID&PAYMENTACTION=".(int)$this->paymentType
		."&PAYMENTREQUEST_0_AMT=".(int)$this->paymentAmount    // / $_SESSION['billing_cycles'] 
		."&PAYMENTREQUEST_0_CURRENCYCODE=".$this->currencyID
		."&PAYMENTREQUEST_0_NOTIFYURL=".$this->notify_url;

		$httpParsedResponseAr = $this->fn_doExpressCheckout('DoExpressCheckoutPayment', $nvpStr);
		
		if ("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) 
			|| "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])
		) {
			return $this->createRecurringPaymentsProfile($token, $payerData);
		} else  {
			return $httpParsedResponseAr;
		}
	}

	public function createRecurringPaymentsProfile($token, $payerData)
	{
		$token = $_REQUEST['token'];

		$nvpStr = 
		"&TOKEN=$token&AMT="   .(int)$this->paymentAmount                                     //   .( $this->paymentAmount/ $_SESSION['billing_cycles'] )
		."&CURRENCYCODE=".$this->currencyID
		."&DESC=".$this->generatePaymentRequest($this->order, false, true)
		.$this->generatePaymentRequest($this->order, true);

		$httpParsedResponseAr = $this->fn_createRecurringPaymentsProfile('CreateRecurringPaymentsProfile', $nvpStr);
		
		if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) 
			|| "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])
		) {
			return array_merge($payerData, $httpParsedResponseAr);
		} else  {
			return $httpParsedResponseAr;
		}
	}

	public function fn_createRecurringPaymentsProfile($methodName_, $nvpStr_)
	{
		$version = urlencode('104.0');

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->API_Endpoint);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		
		// NVPRequest for submitting to server
		$nvpreq = "METHOD=$methodName_&VERSION=$version&PWD="
		.$this->API_Password."&USER=".$this->API_UserName
		."&SIGNATURE=".$this->API_Signature."$nvpStr_";

		curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);
		
		// getting response from server
		$httpResponse = curl_exec($ch);
		
		if(!$httpResponse) {
			exit("$methodName_ failed: ".curl_error($ch).'('.curl_errno($ch).')');
		}
		
		// Extract the RefundTransaction response details
		$httpResponseAr = explode("&", $httpResponse);
		
		$httpParsedResponseAr = array();
		foreach ($httpResponseAr as $i => $value) {
			$tmpAr = explode("=", $value);
			if(sizeof($tmpAr) > 1) {
				$httpParsedResponseAr[$tmpAr[0]] = $tmpAr[1];
			}
		}
	
		if((0 == sizeof($httpParsedResponseAr)) || !array_key_exists('ACK', $httpParsedResponseAr)) {
			exit("Invalid HTTP Response for POST request($nvpreq) to $API_Endpoint.");
		}
	//var_dump($httpParsedResponseAr);exit;	
		return $httpParsedResponseAr;
/*
int(1) string(18) " billing_cycles: " string(1) "2" string(19) "
request 
" string(301) "&PROFILESTARTDATE=2016-08-24T20%3A34%3A46Z&BILLINGPERIOD=Month&BILLINGFREQUENCY=1&TOTALBILLINGCYCLES=2&INITAMT=50&AMT=50&L_BILLINGAGREEMENTDESCRIPTION0=MEEMZBHRZ&PAYMENTREQUEST_0_DESC=MEEMZBHRZ&DESC=MEEMZBHRZ
&L_PAYMENTREQUEST_0_NAME0=%D7%94%D7%9C%D7%95%D7%95%D7%90%D7%94100&L_PAYMENTREQUEST_0_AMT0=100" array(7) { ["PROFILEID"]=> string(16) "I%2d9KSBVRTAXLF8"
 ["PROFILESTATUS"]=> string(14) "PendingProfile" ["TIMESTAMP"]=> string(28) "2016%2d08%2d23T17%3a34%3a49Z" ["CORRELATIONID"]=> string(13) "193a00e6b10d3" ["ACK"]=> string(7) "Success" 
 ["VERSION"]=> string(7) "104%2e0" ["BUILD"]=> string(6) "000000" }
-----------------------------------------------------------------------------------------------------------
int(1) string(18) " billing_cycles: " string(1) "2" string(19) "
request 
" string(301) "&PROFILESTARTDATE=2016-08-24T21%3A12%3A25Z&BILLINGPERIOD=Month&BILLINGFREQUENCY=1&TOTALBILLINGCYCLES=2&INITAMT=50&AMT=50&L_BILLINGAGREEMENTDESCRIPTION0=PLDXZFZOL&PAYMENTREQUEST_0_DESC=PLDXZFZOL&DESC=PLDXZFZOL
&L_PAYMENTREQUEST_0_NAME0=%D7%94%D7%9C%D7%95%D7%95%D7%90%D7%94100&L_PAYMENTREQUEST_0_AMT0=100" array(7) { ["PROFILEID"]=> string(16) "I%2dPNWEMS957AYW"
 ["PROFILESTATUS"]=> string(14) "PendingProfile" ["TIMESTAMP"]=> string(28) "2016%2d08%2d23T18%3a12%3a28Z" ["CORRELATIONID"]=> string(13) "616c682f48d72" ["ACK"]=> string(7) "Success"
  ["VERSION"]=> string(7) "104%2e0" ["BUILD"]=> string(6) "000000" }
*/		
	}
	
	public function fn_setExpressCheckout($methodName_, $nvpStr_)
	{
		$version = urlencode('104.0');
		
		// Set the curl parameters.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->API_Endpoint);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		
		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		
		// Set the API operation, version, and API signature in the request.
		$nvpreq = "METHOD=$methodName_&VERSION=$version&PWD=".$this->API_Password
		."&USER=".$this->API_UserName
		."&SIGNATURE="
		.$this->API_Signature."$nvpStr_&L_BILLINGTYPE0=RecurringPayments";

		curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);

		$httpResponse = curl_exec($ch);
		
		if(!$httpResponse) {
			exit("$methodName_ failed: ".curl_error($ch).'('.curl_errno($ch).')');
		}
		
		// Extract the response details.
		$httpResponseAr = explode("&", $httpResponse);
		
		$httpParsedResponseAr = array();
		foreach ($httpResponseAr as $i => $value) {
			$tmpAr = explode("=", $value);
			if(sizeof($tmpAr) > 1) {
				$httpParsedResponseAr[$tmpAr[0]] = $tmpAr[1];
			}
		}
		
		if((0 == sizeof($httpParsedResponseAr)) || !array_key_exists('ACK', $httpParsedResponseAr)) {
			exit("Invalid HTTP Response for POST request($nvpreq) to $API_Endpoint.");
		}
	
		return $httpParsedResponseAr;
	}
	
	public function fn_getExpressCheckout($methodName_, $nvpStr_)
	{
		$version = urlencode('104.0');
		
		// Set the curl parameters.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->API_Endpoint);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		
		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);

		$nvpreq = "METHOD=$methodName_&VERSION=$version&PWD=".$this->API_Password
		."&USER=".$this->API_UserName
		."&SIGNATURE=".$this->API_Signature
		."$nvpStr_&L_BILLINGTYPE0=RecurringPayments&L_BILLINGAGREEMENTDESCRIPTION0="
		.$this->generatePaymentRequest($this->order, false, true);
		
		// Set the request as a POST FIELD for curl.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);
		
		// Get response from the server.
		$httpResponse = curl_exec($ch);
		
		if(!$httpResponse) {
			exit('$methodName_ failed: '.curl_error($ch).'('.curl_errno($ch).')');
		}
		
		// Extract the response details.
		$httpResponseAr = explode("&", $httpResponse);
		
		$httpParsedResponseAr = array();
		foreach ($httpResponseAr as $i => $value) {
			$tmpAr = explode("=", $value);
			if(sizeof($tmpAr) > 1) {
				$httpParsedResponseAr[$tmpAr[0]] = $tmpAr[1];
			}
		}
		
		if((0 == sizeof($httpParsedResponseAr)) || !array_key_exists('ACK', $httpParsedResponseAr)) {
			exit("Invalid HTTP Response for POST request($nvpreq) to $API_Endpoint.");
		}
	
		return $httpParsedResponseAr;
	}
	
	public function fn_doExpressCheckout($methodName_, $nvpStr_)
	{
		$version = urlencode('104.0');
		
		// setting the curl parameters.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->API_Endpoint);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		
		// Set the curl parameters.
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		
		// Set the API operation, version, and API signature in the request.
		$nvpreq = "METHOD=$methodName_&VERSION=$version&PWD=".$this->API_Password
		."&USER=".$this->API_UserName
		."&SIGNATURE=".$this->API_Signature
		."$nvpStr_&L_BILLINGTYPE0=RecurringPayments&L_BILLINGAGREEMENTDESCRIPTION0="
		.$this->generatePaymentRequest($this->order, false, true);
		
		// Set the request as a POST FIELD for curl.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);
		
		// Get response from the server.
		$httpResponse = curl_exec($ch);
		
		if (!$httpResponse) {
			exit('$methodName_ failed: '.curl_error($ch).'('.curl_errno($ch).')');
		}
		
		// Extract the response details.
		$httpResponseAr = explode("&", $httpResponse);
		
		$httpParsedResponseAr = array();
		foreach ($httpResponseAr as $i => $value) {
			$tmpAr = explode("=", $value);
			if (sizeof($tmpAr) > 1) {
				$httpParsedResponseAr[$tmpAr[0]] = $tmpAr[1];
			}
		}
		
		if ((0 == sizeof($httpParsedResponseAr)) || !array_key_exists('ACK', $httpParsedResponseAr)) {
			exit("Invalid HTTP Response for POST request($nvpreq) to $API_Endpoint.");
		}
		
		return $httpParsedResponseAr;
	}
}
