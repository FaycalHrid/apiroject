<?php

namespace App\Models\ElasticEmailApi;

    class Export extends \App\Models\ElasticEmailClient\ElasticRequest
{
    public function __construct(\App\Models\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Check the current status of the export.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicExportID ID of the exported file
     * @return \ElasticEmailEnums\ExportStatus
     */
    public function CheckStatus($publicExportID) {
        return $this->sendRequest('export/checkstatus', array(
                    'publicExportID' => $publicExportID
        ));
    }

    /**
     * Summary of export type counts.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\ExportTypeCounts
     */
    public function CountByType() {
        return $this->sendRequest('export/countbytype');
    }

    /**
     * Delete the specified export.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicExportID ID of the exported file
     */
    public function EEDelete($publicExportID) {
        return $this->sendRequest('export/delete', array(
                    'publicExportID' => $publicExportID
        ));
    }

    /**
     * Returns a list of all exported data.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @return Array<\ElasticEmailEnums\Export>
     */
    public function EEList($limit = 0, $offset = 0) {
        return $this->sendRequest('export/list', array(
                    'limit' => $limit,
                    'offset' => $offset
        ));
    }
}

?>
