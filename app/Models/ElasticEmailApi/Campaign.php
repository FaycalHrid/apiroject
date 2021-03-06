<?php
namespace App\Models\ElasticEmailApi;

    class Campaign extends \App\Models\ElasticEmailClient\ElasticRequest
{
    public function __construct(\App\Models\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Adds a campaign to the queue for processing based on the configuration
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\Campaign $campaign Json representation of a campaign
     * @return int
     */
    public function Add($campaign) {
        return $this->sendRequest('campaign/add', array(
                    'campaign' => $campaign
        ));
    }

    /**
     * Copy selected campaign
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $channelID ID number of selected Channel.
     * @param string $newCampaignName
     * @return int
     */
    public function EECopy($channelID, $newCampaignName = null) {
        return $this->sendRequest('campaign/copy', array(
                    'channelID' => $channelID,
                    'newCampaignName' => $newCampaignName
        ));
    }

    /**
     * Delete selected campaign
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $channelID ID number of selected Channel.
     */
    public function EEDelete($channelID) {
        return $this->sendRequest('campaign/delete', array(
                    'channelID' => $channelID
        ));
    }

    /**
     * Export selected campaigns to chosen file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<int> $channelIDs List of campaign IDs used for processing
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function Export(array $channelIDs = array(), $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('campaign/export', array(
                    'channelIDs' => (count($channelIDs) === 0) ? null : join(';', $channelIDs),
                    'fileFormat' => $fileFormat,
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName
        ));
    }

    /**
     * List all of your campaigns
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $search Text fragment used for searching.
     * @param int $offset How many items should be loaded ahead.
     * @param int $limit Maximum of loaded items.
     * @return Array<\ElasticEmailEnums\CampaignChannel>
     */
    public function EEList($search = null, $offset = 0, $limit = 0) {
        return $this->sendRequest('campaign/list', array(
                    'search' => $search,
                    'offset' => $offset,
                    'limit' => $limit
        ));
    }

    /**
     * Updates a previously added campaign.  Only Active and Paused campaigns can be updated.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\Campaign $campaign Json representation of a campaign
     * @return int
     */
    public function Update($campaign) {
        return $this->sendRequest('campaign/update', array(
                    'campaign' => $campaign
        ));
    }
}

?>
