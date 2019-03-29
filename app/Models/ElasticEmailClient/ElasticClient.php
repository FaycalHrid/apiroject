<?php
namespace ElasticEmailClient;

use App\Models\ElasticEmailApi\AccessToken as AccessToken;
use App\Models\ElasticEmailApi\Account as Account;
use App\Models\ElasticEmailApi\Campaign as Campaign;
use App\Models\ElasticEmailApi\Channel as Channel;
use App\Models\ElasticEmailApi\Contact as Contact;
use App\Models\ElasticEmailApi\Domain as Domain;
use App\Models\ElasticEmailApi\Email as Email;
use App\Models\ElasticEmailApi\Export as Export;
use App\Models\ElasticEmailApi\File as File;
use App\Models\ElasticEmailApi\EEList as EEList;
use App\Models\ElasticEmailApi\Log as Log;
use App\Models\ElasticEmailApi\Segment as Segment;
use App\Models\ElasticEmailApi\SMS as SMS;
use App\Models\ElasticEmailApi\Survey as Survey;
use App\Models\ElasticEmailApi\Template as Template;

    class ElasticClient
    {
        /**
         * ElasticClient constructor.
         * @param \ElasticEmailClient\ApiConfiguration $apiConfiguration
         */

        public function __construct(ApiConfiguration $apiConfiguration)
        {
            $this->AccessToken= new \ElasticEmailApi\AccessToken($apiConfiguration);
            $this->Account= new \ElasticEmailApi\Account($apiConfiguration);
            $this->Campaign= new \ElasticEmailApi\Campaign($apiConfiguration);
            $this->Channel= new \ElasticEmailApi\Channel($apiConfiguration);
            $this->Contact= new \ElasticEmailApi\Contact($apiConfiguration);
            $this->Domain= new \ElasticEmailApi\Domain($apiConfiguration);
            $this->Email= new \ElasticEmailApi\Email($apiConfiguration);
            $this->Export= new \ElasticEmailApi\Export($apiConfiguration);
            $this->File= new \ElasticEmailApi\File($apiConfiguration);
            $this->EEList= new \ElasticEmailApi\EEList($apiConfiguration);
            $this->Log= new \ElasticEmailApi\Log($apiConfiguration);
            $this->Segment= new \ElasticEmailApi\Segment($apiConfiguration);
            $this->SMS= new \ElasticEmailApi\SMS($apiConfiguration);
            $this->Survey= new \ElasticEmailApi\Survey($apiConfiguration);
            $this->Template= new \ElasticEmailApi\Template($apiConfiguration);
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