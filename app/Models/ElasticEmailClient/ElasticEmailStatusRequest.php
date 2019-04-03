<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 21/03/2019
 * Time: 09:40
 */

namespace App\Models\ElasticEmailClient;

    /**
     * Class ElasticEmailStatusRequest
     * @package ElasticEmailClient
     */

    include 'ElasticClient.php';
    include 'ElasticEmailStatusResponse.php';
    include 'ApiConfiguration.php';

    class ElasticEmailStatusRequest
     {
        /**
         * @var \App\Models\ElasticEmailClient\ElasticClient
         */
        private $elasticClient = null;

        /**
         * @var \App\Models\ElasticEmailClient\ApiConfiguration
         */
        private $apiConfig = null;

        /**
         * @var \App\Models\ElasticEmailClient\ElasticEmailStatusResponse
         */
        private $elasticResponse = null;

        /**
         * ElasticEmailStatusRequest constructor.
         * @param $transactionID
         * @param $params
         */
        public function __construct($transactionID)
        {
            $this->apiConfig = new ApiConfiguration();
            $this->elasticClient = new ElasticClient($this->apiConfig);
            $this->elasticResponse = new ElasticEmailStatusResponse($transactionID, $this->elasticClient->Email);
        }

        /**
         * @return ElasticEmailStatusResponse
         */
        public function getResponse()
        {
            return $this->elasticResponse;
        }
     }




