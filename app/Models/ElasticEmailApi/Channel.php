<?php

    namespace App\Models\ElasticEmailApi;
        /**
 * SMTP and HTTP API channels for grouping email delivery.
 */
class Channel extends \App\Models\ElasticEmailClient\ElasticRequest
{
    public function __construct(\App\Models\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Manually add a channel to your account to group email
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name Descriptive name of the channel
     * @return string
     */
    public function Add($name) {
        return $this->sendRequest('channel/add', array(
                    'name' => $name
        ));
    }

    /**
     * Delete the channel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name The name of the channel to delete.
     */
    public function EEDelete($name) {
        return $this->sendRequest('channel/delete', array(
                    'name' => $name
        ));
    }

    /**
     * Export selected channels to chosen file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $channelNames List of channel names used for processing
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function Export($channelNames, $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('channel/export', array(
                    'channelNames' => (count($channelNames) === 0) ? null : join(';', $channelNames),
                    'fileFormat' => $fileFormat,
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName
        ));
    }

    /**
     * Lists your channels
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @return Array<\ElasticEmailEnums\Channel>
     */
    public function EEList($limit = 0, $offset = 0) {
        return $this->sendRequest('channel/list', array(
                    'limit' => $limit,
                    'offset' => $offset
        ));
    }

    /**
     * Rename an existing channel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name The name of the channel to update.
     * @param string $newName The new name for the channel.
     * @return string
     */
    public function Update($name, $newName) {
        return $this->sendRequest('channel/update', array(
                    'name' => $name,
                    'newName' => $newName
        ));
    }
    }

?>
