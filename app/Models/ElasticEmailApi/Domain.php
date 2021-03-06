<?php

namespace App\Models\ElasticEmailApi;

    class Domain extends \App\Models\ElasticEmailClient\ElasticRequest
{
    public function __construct(\App\Models\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Add new domain to account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @param \ElasticEmailEnums\TrackingType $trackingType
     * @param bool $setAsDefault
     */
    public function Add($domain, $trackingType = \ElasticEmailEnums\TrackingType::Http, $setAsDefault = false) {
        return $this->sendRequest('domain/add', array(
                    'domain' => $domain,
                    'trackingType' => $trackingType,
                    'setAsDefault' => $setAsDefault
        ));
    }

    /**
     * Deletes configured domain from account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     */
    public function EEDelete($domain) {
        return $this->sendRequest('domain/delete', array(
                    'domain' => $domain
        ));
    }

    /**
     * Lists all domains configured for this account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\DomainDetail>
     */
    public function EEList() {
        return $this->sendRequest('domain/list');
    }

    /**
     * Verification of email addres set for domain.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Default email sender, example: mail@yourdomain.com
     */
    public function SetDefault($domain) {
        return $this->sendRequest('domain/setdefault', array(
                    'domain' => $domain
        ));
    }

    /**
     * Verification of DKIM record for domain
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @return string
     */
    public function VerifyDkim($domain) {
        return $this->sendRequest('domain/verifydkim', array(
                    'domain' => $domain
        ));
    }

    /**
     * Verification of MX record for domain
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @return string
     */
    public function VerifyMX($domain) {
        return $this->sendRequest('domain/verifymx', array(
                    'domain' => $domain
        ));
    }

    /**
     * Verification of SPF record for domain
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @return \ElasticEmailEnums\ValidationStatus
     */
    public function VerifySpf($domain) {
        return $this->sendRequest('domain/verifyspf', array(
                    'domain' => $domain
        ));
    }

    /**
     * Verification of tracking CNAME record for domain
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @param \ElasticEmailEnums\TrackingType $trackingType
     * @return string
     */
    public function VerifyTracking($domain, $trackingType = \ElasticEmailEnums\TrackingType::Http) {
        return $this->sendRequest('domain/verifytracking', array(
                    'domain' => $domain,
                    'trackingType' => $trackingType
        ));
    }
}

?>
