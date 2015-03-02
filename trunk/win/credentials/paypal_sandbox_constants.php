<?php
/****************************************************
constants.php

This is the configuration file for the samples.This file
defines the parameters needed to make an API call.

PayPal includes the following API Signature for making API
calls to the PayPal sandbox:

API Username 	
API Password 	
API Signature 	

Called by CallerService.php.
****************************************************/

$SANDBOX = TRUE;

define('BUMPTOP_SECRET_DISCOUNT_CODE', '');
/**
# API user: The user that is identified as making the call. you can
# also use your own API username that you created on PayPal�s sandbox
# or the PayPal live site
*/

if ($SANDBOX)
	define('API_USERNAME', '');
else
	define('API_USERNAME', '');


if ($SANDBOX)
	define('PAYPAL_EMAIL', '');
else
	define('PAYPAL_EMAIL', '');


/**
# API_password: The password associated with the API user
# If you are using your own API username, enter the API password that
# was generated by PayPal below
# IMPORTANT - HAVING YOUR API PASSWORD INCLUDED IN THE MANNER IS NOT
# SECURE, AND ITS ONLY BEING SHOWN THIS WAY FOR TESTING PURPOSES
*/

if ($SANDBOX)
	define('API_PASSWORD', '');
else
	define('API_PASSWORD', '');

/**
# API_Signature:The Signature associated with the API user. which is generated by paypal.
*/

if ($SANDBOX)
	define('API_SIGNATURE', '');
else
	define('API_SIGNATURE', '');

/**
# Endpoint: this is the server URL which you have to connect for submitting your API request.
*/

if ($SANDBOX)
	define('API_ENDPOINT', 'https://api-3t.sandbox.paypal.com/nvp');
else
	define('API_ENDPOINT', 'https://api-3t.paypal.com/nvp');

/**
USE_PROXY: Set this variable to TRUE to route all the API requests through proxy.
like define('USE_PROXY',TRUE);
*/
define('USE_PROXY',FALSE);
/**
PROXY_HOST: Set the host name or the IP address of proxy server.
PROXY_PORT: Set proxy port.

PROXY_HOST and PROXY_PORT will be read only if USE_PROXY is set to TRUE
*/
define('PROXY_HOST', '127.0.0.1');
define('PROXY_PORT', '808');



/* Define the PayPal URL. This is the URL that the buyer is
   first sent to to authorize payment with their paypal account
   change the URL depending if you are testing on the sandbox
   or going to the live PayPal site
   For the sandbox, the URL is
   https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=
   For the live site, the URL is
   https://www.paypal.com/webscr&cmd=_express-checkout&token=
   */
if ($SANDBOX)
        define('PAYPAL_IPN_URL', 'ssl://www.sandbox.paypal.com');
else
        define('PAYPAL_IPN_URL', 'ssl://www.paypal.com');


if ($SANDBOX)
	define('PAYPAL_URL', 'https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=');
else
	define('PAYPAL_URL', 'https://www.paypal.com/webscr&cmd=_express-checkout&token=');

/**
# Version: this is the API version in the request.
# It is a mandatory parameter for each API request.
# The only supported value at this time is 2.3
*/

define('VERSION', '54.0');



?>