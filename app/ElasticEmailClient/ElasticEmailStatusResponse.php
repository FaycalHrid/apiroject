<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 21/03/2019
 * Time: 11:04
 */



namespace ElasticEmailClient {



    /**
     * Class ElasticEmailStatusResponse
     * @package ElasticEmailClient
     */
    class ElasticEmailStatusResponse
    {
        /**
         * @var string
         */
        private $transactionId;
        /**
         * @var int
         */
        private $recipientsCount;
        /**
         * @var array
         */
        private $failed = [];
        /**
         * @var int
         */
        private $failedCount;
        /**
         * @var array
         */
        private $sent = [];
        /**
         * @var int
         */
        private $sentCount;
        /**
         * @var array
         */
        private $delivered = [];
        /**
         * @var int
         */
        private $deliveredCount;
        /**
         * @var array
         */
        private $opened = [];
        /**
         * @var int
         */
        private $openedCount;
        /**
         * @var array
         */
        private $unsubscribed = [];
        /**
         * @var int
         */
        private $unsubscribedCount;
        /**
         * @var array
         */
        private $abusereports = [];
        /**
         * @var int
         */
        private $abuseReportCount;

        /**
         * ElasticEmailStatusResponse constructor.
         * @param $transactionID
         * @param \ElasticEmailApi\Email $email
         */
        public function __construct($transactionID,\ElasticEmailApi\Email $email)
        {
            $this->transactionId = $transactionID;
            $response = $email->GetStatus($this->transactionId);
            $this->mapResponse($response);
        }

        /**
         * @return int
         */
        public function getRecipientsCount()
        {
            return $this->recipientsCount;
        }

        /**
         * @param $response
         */
        private function mapResponse($response)
        {
            $this->recipientsCount = $response->RecipientsCount;
            $this->failed = $response->Failed;
            $this->failedCount = $response->FailedCount;
            $this->sent = $response->Sent;
            $this->sentCount = $response->SentCount;
            $this->delivered = $response->Delivered;
            $this->deliveredCount = $response->DeliveredCount;
            $this->opened = $response->Opened;
            $this->openedCount = $response->OpenedCount;
            $this->unsubscribed = $response->Unsubscribed;
            $this->unsubscribedCount = $response->UnsubscribedCount;
            $this->abusereports = $response->AbuseReports;
            $this->abuseReportCount = $response->AbuseReportsCount;
        }

    }
}
?>