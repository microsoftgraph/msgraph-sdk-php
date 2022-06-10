<?php

namespace Microsoft\Graph\DeviceManagement\Reports;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\DeviceManagement\Reports\ExportJobs\ExportJobsRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\ExportJobs\Item\DeviceManagementExportJobItemRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetCachedReport\GetCachedReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetCompliancePolicyNonComplianceReport\GetCompliancePolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetCompliancePolicyNonComplianceSummaryReport\GetCompliancePolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetComplianceSettingNonComplianceReport\GetComplianceSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetConfigurationPolicyNonComplianceReport\GetConfigurationPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetConfigurationPolicyNonComplianceSummaryReport\GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetConfigurationSettingNonComplianceReport\GetConfigurationSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetDeviceManagementIntentPerSettingContributingProfiles\GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetDeviceManagementIntentSettingsReport\GetDeviceManagementIntentSettingsReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetDeviceNonComplianceReport\GetDeviceNonComplianceReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetHistoricalReport\GetHistoricalReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetPolicyNonComplianceMetadata\GetPolicyNonComplianceMetadataRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetPolicyNonComplianceReport\GetPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetPolicyNonComplianceSummaryReport\GetPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetReportFilters\GetReportFiltersRequestBuilder;
use Microsoft\Graph\DeviceManagement\Reports\GetSettingNonComplianceReport\GetSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Models\DeviceManagementReports;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ReportsRequestBuilder 
{
    /**
     * The exportJobs property
    */
    public function exportJobs(): ExportJobsRequestBuilder {
        return new ExportJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCachedReport property
    */
    public function getCachedReport(): GetCachedReportRequestBuilder {
        return new GetCachedReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCompliancePolicyNonComplianceReport property
    */
    public function getCompliancePolicyNonComplianceReport(): GetCompliancePolicyNonComplianceReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCompliancePolicyNonComplianceSummaryReport property
    */
    public function getCompliancePolicyNonComplianceSummaryReport(): GetCompliancePolicyNonComplianceSummaryReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getComplianceSettingNonComplianceReport property
    */
    public function getComplianceSettingNonComplianceReport(): GetComplianceSettingNonComplianceReportRequestBuilder {
        return new GetComplianceSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationPolicyNonComplianceReport property
    */
    public function getConfigurationPolicyNonComplianceReport(): GetConfigurationPolicyNonComplianceReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationPolicyNonComplianceSummaryReport property
    */
    public function getConfigurationPolicyNonComplianceSummaryReport(): GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationSettingNonComplianceReport property
    */
    public function getConfigurationSettingNonComplianceReport(): GetConfigurationSettingNonComplianceReportRequestBuilder {
        return new GetConfigurationSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceManagementIntentPerSettingContributingProfiles property
    */
    public function getDeviceManagementIntentPerSettingContributingProfiles(): GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder {
        return new GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceManagementIntentSettingsReport property
    */
    public function getDeviceManagementIntentSettingsReport(): GetDeviceManagementIntentSettingsReportRequestBuilder {
        return new GetDeviceManagementIntentSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceNonComplianceReport property
    */
    public function getDeviceNonComplianceReport(): GetDeviceNonComplianceReportRequestBuilder {
        return new GetDeviceNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getHistoricalReport property
    */
    public function getHistoricalReport(): GetHistoricalReportRequestBuilder {
        return new GetHistoricalReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getPolicyNonComplianceMetadata property
    */
    public function getPolicyNonComplianceMetadata(): GetPolicyNonComplianceMetadataRequestBuilder {
        return new GetPolicyNonComplianceMetadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getPolicyNonComplianceReport property
    */
    public function getPolicyNonComplianceReport(): GetPolicyNonComplianceReportRequestBuilder {
        return new GetPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getPolicyNonComplianceSummaryReport property
    */
    public function getPolicyNonComplianceSummaryReport(): GetPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getReportFilters property
    */
    public function getReportFilters(): GetReportFiltersRequestBuilder {
        return new GetReportFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getSettingNonComplianceReport property
    */
    public function getSettingNonComplianceReport(): GetSettingNonComplianceReportRequestBuilder {
        return new GetSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/reports{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Reports singleton
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property reports in deviceManagement
     * @param DeviceManagementReports $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceManagementReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceManagement.reports.exportJobs.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementExportJobItemRequestBuilder
    */
    public function exportJobsById(string $id): DeviceManagementExportJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementExportJob%2Did'] = $id;
        return new DeviceManagementExportJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Reports singleton
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(DeviceManagementReports::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property reports in deviceManagement
     * @param DeviceManagementReports $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceManagementReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
