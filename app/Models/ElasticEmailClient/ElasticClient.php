<?php
namespace App\Models\ElasticEmailClient;

    use \App\Models\ElasticEmailApi\AccessToken as AccessToken;

    class ElasticClient
    {
        /**
         * ElasticClient constructor.
         * @param \App\Models\ElasticEmailClient\ApiConfiguration $apiConfiguration
         */

        public function __construct(ApiConfiguration $apiConfiguration)
        {
            $this->AccessToken= new AccessToken($apiConfiguration);
            $this->Account= new \App\Models\ElasticEmailApi\Account($apiConfiguration);
            $this->Campaign= new \App\Models\ElasticEmailApi\Campaign($apiConfiguration);
            $this->Channel= new \App\Models\ElasticEmailApi\Channel($apiConfiguration);
            $this->Contact= new \App\Models\ElasticEmailApi\Contact($apiConfiguration);
            $this->Domain= new \App\Models\ElasticEmailApi\Domain($apiConfiguration);
            $this->Email= new \App\Models\ElasticEmailApi\Email($apiConfiguration);
            $this->Export= new \App\Models\ElasticEmailApi\Export($apiConfiguration);
            $this->File= new \App\Models\ElasticEmailApi\File($apiConfiguration);
            $this->EEList= new \App\Models\ElasticEmailApi\EEList($apiConfiguration);
            $this->Log= new \App\Models\ElasticEmailApi\Log($apiConfiguration);
            $this->Segment= new \App\Models\ElasticEmailApi\Segment($apiConfiguration);
            $this->SMS= new \App\Models\ElasticEmailApi\SMS($apiConfiguration);
            $this->Survey= new \App\Models\ElasticEmailApi\Survey($apiConfiguration);
            $this->Template= new \App\Models\ElasticEmailApi\Template($apiConfiguration);
        }

        public $AccessToken;
        public $Account;
        public $Campaign;
        public $Channel;
        public $Contact;
        public $Domain;
        public $Email;
        public $Export;
        public $File;
        public $EEList;
        public $Log;
        public $Segment;
        public $SMS;
        public $Survey;
        public $Template;

}
