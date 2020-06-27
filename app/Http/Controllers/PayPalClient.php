<?php

namespace App\Http\Controllers;


use PaypalPayoutsSDK\Core\PayPalHttpClient;
use PaypalPayoutsSDK\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
class PayPalClient
{
    /**
     * Returns PayPal HTTP client instance with environment that has access
     * credentials context. Use this instance to invoke PayPal APIs, provided the
     * credentials have access.
     */
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    /**
     * Set up and return PayPal PHP SDK environment with PayPal access credentials.
     * This sample uses SandboxEnvironment. In production, use LiveEnvironment.
     */
    public static function environment()
    {
        $clientId = "Ab576qDQ2pShVNyKJms7tcBoxaq_xofpmJq2vBpMWLS2jfRkwnyzHB7QO6yH12gbQQa7OU_NJudN6n4z";
$clientSecret = "EDCYQBhWefKcjvS_N26czclv5CzZTC9eF9CGsedOexQDb3K5Hd-M9YtomRosuNFuqfUbry5t-r2HP7gA";
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}
