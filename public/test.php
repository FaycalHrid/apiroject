<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 25/03/2019
 * Time: 14:19
 */

require_once('../app/ElasticEmailClient/ElasticEmailStatusRequest.php');

$params = array('apiKey'=>'74b2e950-d5d8-4126-ad13-27f897aea6ed','apiUrl'=>'https://api.elasticemail.com/v2/');

$request = new ElasticEmailClient\ElasticEmailStatusRequest('4c0f0932-3fe0-0182-a032-cf3b2e19db36',$params);

echo $request->getResponse()->getRecipientsCount();