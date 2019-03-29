 <?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 25/03/2019
 * Time: 14:19
 */

use App\Http\Controllers\ElasticEmailStatusRequestController as EESRController;

$controller = new EESRController();

$response = $controller->index();

echo $response->getFailedCount();
