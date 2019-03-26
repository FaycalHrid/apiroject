<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 25/03/2019
 * Time: 14:19
 */

require_once('../app/ElasticEmailClient/ElasticEmailStatusRequest.php');

$request = new ElasticEmailClient\ElasticEmailStatusRequest('4c0f0932-3fe0-0182-a032-cf3b2e19db36');

echo $request->getResponse()->getRecipientsCount();