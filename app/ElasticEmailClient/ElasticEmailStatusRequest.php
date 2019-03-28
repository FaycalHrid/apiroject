<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 21/03/2019
 * Time: 09:40
 */

namespace App\ElasticEmailClient;


    /**
     * Class ElasticEmailStatusRequest
     * @package ElasticEmailClient
     */


    class ElasticEmailStatusRequest
    {
        /**
         * @var \App\ElasticEmailClient\ElasticClient
         */
        private $elasticClient = null;

        /**
         * @var \App\ElasticEmailClient\ApiConfiguration
         */
        private $apiConfig = null;

        /**
         * @var \App\ElasticEmailClient\ElasticEmailStatusResponse
         */
        private $elasticResponse = null;

        /**
         * ElasticEmailStatusRequest constructor.
         * @param $transactionID
         * @param $params
         */

        public function __construct($transactionID,$params)
        {
            $this->apiConfig = new ApiConfiguration($params);
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




