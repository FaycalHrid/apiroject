<?php

namespace App\Models\ElasticEmailApi;

    class Survey extends \App\Models\ElasticEmailClient\ElasticRequest
{
    public function __construct(\App\Models\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Adds a new survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\Survey $survey Json representation of a survey
     * @return \ElasticEmailEnums\Survey
     */
    public function Add($survey) {
        return $this->sendRequest('survey/add', array(
                    'survey' => $survey
        ));
    }

    /**
     * Deletes the survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     */
    public function EEDelete($publicSurveyID) {
        return $this->sendRequest('survey/delete', array(
                    'publicSurveyID' => $publicSurveyID
        ));
    }

    /**
     * Export given survey's data to provided format
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     * @param string $fileName Name of your file.
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function Export($publicSurveyID, $fileName, $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None) {
        return $this->sendRequest('survey/export', array(
                    'publicSurveyID' => $publicSurveyID,
                    'fileName' => $fileName,
                    'fileFormat' => $fileFormat,
                    'compressionFormat' => $compressionFormat
        ));
    }

    /**
     * Shows all your existing surveys
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param bool $loadSteps
     * @return Array<\ElasticEmailEnums\Survey>
     */
    public function EEList($loadSteps = false) {
        return $this->sendRequest('survey/list', array(
                    'loadSteps' => $loadSteps
        ));
    }

    /**
     * Load specific Survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     * @return \ElasticEmailEnums\Survey
     */
    public function LoadContent($publicSurveyID) {
        return $this->sendRequest('survey/loadcontent', array(
                    'publicSurveyID' => $publicSurveyID
        ));
    }

    /**
     * Get list of personal answers for the specific survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     * @return Array<\ElasticEmailEnums\SurveyResultInfo>
     */
    public function LoadResponseList($publicSurveyID) {
        return $this->sendRequest('survey/loadresponselist', array(
                    'publicSurveyID' => $publicSurveyID
        ));
    }

    /**
     * Get general results of the specific survey
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicSurveyID Survey identifier
     * @return \ElasticEmailEnums\SurveyResultsSummaryInfo
     */
    public function LoadResults($publicSurveyID) {
        return $this->sendRequest('survey/loadresults', array(
                    'publicSurveyID' => $publicSurveyID
        ));
    }

    /**
     * Update the survey information
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\Survey $survey Json representation of a survey
     * @return \ElasticEmailEnums\Survey
     */
    public function Update($survey) {
        return $this->sendRequest('survey/update', array(
                    'survey' => $survey
        ));
    }
}

?>
