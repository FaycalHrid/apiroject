<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 01/04/2019
 * Time: 11:33
 */

include '../app/Models/ElasticEmailClient/ElasticEmailStatusRequest.php';

$request = new \ElasticEmailClient\ElasticEmailStatusRequest('4c0f0932-3fe0-0182-a032-cf3b2e19db36');

echo $request->getResponse()->getFailedCount();