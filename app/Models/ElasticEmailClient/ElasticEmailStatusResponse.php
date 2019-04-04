<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 21/03/2019
 * Time: 11:04
 */

namespace App\Models\ElasticEmailClient;

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
        private $clicked = [];
        /**
         * @var
         */
        private $clickedCount;
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
        private $abuseReportsCount;

        /**
         * @var
         */
        private $response;

        /**
         * @var
         */
        private $deliveryRate;

        /**
         * ElasticEmailStatusResponse constructor.
         * @param $transactionID
         * @param \App\Models\ElasticEmailApi\Email $email
         */
        public function __construct($transactionID,\App\Models\ElasticEmailApi\Email $email)
        {
            $this->transactionId = $transactionID;
            $response = $email->GetStatus($this->transactionId);
            $this->mapResponse($response);
        }


        //Recipients
        /**
         * @return int
         */
        public function getRecipientsCount()
        {
            return $this->recipientsCount;
        }


        //Abuse Reports
        /**
         * @return array
         */
        public function getAbuseReports()
        {
            return $this->abusereports;
        }

        /**
         * @return int
         */
        public function getAbuseReportsCount()
        {
            return $this->abuseReportsCount;
        }


        //Failed
        /**
         * @return int
         */
        public function getFailedCount()
        {
            return $this->failedCount;
        }

        /**
         * @return array
         */
        public function getFailed()
        {
            return $this->failed;
        }


        //Sent
        /**
         * @return int
         */
        public function getSentCount()
        {
            return $this->sentCount;
        }

        /**
         * @return array
         */
        public function getSent()
        {
            return $this->sent;
        }


        //Delivered
        /**
         * @return int
         */
        public function getDeliveredCount()
        {
            return $this->sentCount;
        }

        /**
         * @return array
         */
        public function getDelivered()
        {
            return $this->delivered;
        }


        //Opened
        /**
         * @return int
         */
        public function getOpenedCount()
        {
            return $this->openedCount;
        }

        /**
         * @return array
         */
        public function getOpened()
        {
            return $this->opened;
        }


        //Clicked
        /**
         * @return int
         */
        public function getClickedCount()
        {
            return $this->clickedCount;
        }

        /**
         * @return array
         */
        public function getClicked()
        {
            return $this->clicked;
        }


        //Unsubscribed
        /**
         * @return int
         */
        public function getUnsubscribedCount()
        {
            return $this->unsubscribedCount;
        }

        public function getUnsubscribed()
        {
            return $this->unsubscribed;
        }

        public function getResponse()
        {
            return $this->response;
        }

        private function divideFloat($a, $b, $precision=3) {
            $a*=pow(10, $precision);
            $result=(int)($a / $b);
            if (strlen($result)==$precision) return '0.' . $result;
            else return preg_replace('/(\d{' . $precision . '})$/', '.\1', $result);
        }

        public function getDeliveryRate()
        {
            return $this->deliveryRate;
        }


        /**
         * @param $jsonResponse
         */
        private function mapResponse($jsonResponse)
        {
            $this->response = json_decode(json_encode($jsonResponse), true);
            $this->recipientsCount = $this->response['recipientscount'];
            $this->failed = $this->response['failed'];
            $this->failedCount = $this->response['failedcount'];
            $this->sent = $this->response['sent'];
            $this->sentCount = $this->response['sentcount'];
            $this->delivered = $this->response['delivered'];
            $this->deliveredCount = $this->response['deliveredcount'];
            $this->opened = $this->response['opened'];
            $this->openedCount = $this->response['openedcount'];
            $this->clicked = $this->response['clicked'];
            $this->clickedCount = $this->response['clickedcount'];
            $this->unsubscribed = $this->response['unsubscribed'];
            $this->unsubscribedCount = $this->response['unsubscribedcount'];
            $this->abusereports = $this->response['abusereports'];
            $this->abuseReportsCount = $this->response['abusereportscount'];
            $this->deliveryRate = (float)$this->deliveredCount/(float)$this->recipientsCount;
        }
}
?>