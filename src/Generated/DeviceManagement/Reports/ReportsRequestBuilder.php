<?php

namespace Microsoft\Graph\Generated\DeviceManagement\Reports;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceManagement\Reports\ExportJobs\ExportJobsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetCachedReport\GetCachedReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetCompliancePolicyNonComplianceReport\GetCompliancePolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetCompliancePolicyNonComplianceSummaryReport\GetCompliancePolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetComplianceSettingNonComplianceReport\GetComplianceSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetConfigurationPolicyNonComplianceReport\GetConfigurationPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetConfigurationPolicyNonComplianceSummaryReport\GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetConfigurationSettingNonComplianceReport\GetConfigurationSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetDeviceManagementIntentPerSettingContributingProfiles\GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetDeviceManagementIntentSettingsReport\GetDeviceManagementIntentSettingsReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetDeviceNonComplianceReport\GetDeviceNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetDevicesWithoutCompliancePolicyReport\GetDevicesWithoutCompliancePolicyReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetHistoricalReport\GetHistoricalReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetNoncompliantDevicesAndSettingsReport\GetNoncompliantDevicesAndSettingsReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetPolicyNonComplianceMetadata\GetPolicyNonComplianceMetadataRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetPolicyNonComplianceReport\GetPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetPolicyNonComplianceSummaryReport\GetPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetReportFilters\GetReportFiltersRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\GetSettingNonComplianceReport\GetSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceManagementReports;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reports property of the microsoft.graph.deviceManagement entity.
*/
class ReportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the exportJobs property of the microsoft.graph.deviceManagementReports entity.
    */
    public function exportJobs(): ExportJobsRequestBuilder {
        return new ExportJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCachedReport method.
    */
    public function getCachedReport(): GetCachedReportRequestBuilder {
        return new GetCachedReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceReport method.
    */
    public function getCompliancePolicyNonComplianceReport(): GetCompliancePolicyNonComplianceReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceSummaryReport method.
    */
    public function getCompliancePolicyNonComplianceSummaryReport(): GetCompliancePolicyNonComplianceSummaryReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingNonComplianceReport method.
    */
    public function getComplianceSettingNonComplianceReport(): GetComplianceSettingNonComplianceReportRequestBuilder {
        return new GetComplianceSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceReport method.
    */
    public function getConfigurationPolicyNonComplianceReport(): GetConfigurationPolicyNonComplianceReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceSummaryReport method.
    */
    public function getConfigurationPolicyNonComplianceSummaryReport(): GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingNonComplianceReport method.
    */
    public function getConfigurationSettingNonComplianceReport(): GetConfigurationSettingNonComplianceReportRequestBuilder {
        return new GetConfigurationSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentPerSettingContributingProfiles method.
    */
    public function getDeviceManagementIntentPerSettingContributingProfiles(): GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder {
        return new GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentSettingsReport method.
    */
    public function getDeviceManagementIntentSettingsReport(): GetDeviceManagementIntentSettingsReportRequestBuilder {
        return new GetDeviceManagementIntentSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceNonComplianceReport method.
    */
    public function getDeviceNonComplianceReport(): GetDeviceNonComplianceReportRequestBuilder {
        return new GetDeviceNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicesWithoutCompliancePolicyReport method.
    */
    public function getDevicesWithoutCompliancePolicyReport(): GetDevicesWithoutCompliancePolicyReportRequestBuilder {
        return new GetDevicesWithoutCompliancePolicyReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getHistoricalReport method.
    */
    public function getHistoricalReport(): GetHistoricalReportRequestBuilder {
        return new GetHistoricalReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNoncompliantDevicesAndSettingsReport method.
    */
    public function getNoncompliantDevicesAndSettingsReport(): GetNoncompliantDevicesAndSettingsReportRequestBuilder {
        return new GetNoncompliantDevicesAndSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceMetadata method.
    */
    public function getPolicyNonComplianceMetadata(): GetPolicyNonComplianceMetadataRequestBuilder {
        return new GetPolicyNonComplianceMetadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceReport method.
    */
    public function getPolicyNonComplianceReport(): GetPolicyNonComplianceReportRequestBuilder {
        return new GetPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceSummaryReport method.
    */
    public function getPolicyNonComplianceSummaryReport(): GetPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getReportFilters method.
    */
    public function getReportFilters(): GetReportFiltersRequestBuilder {
        return new GetReportFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSettingNonComplianceReport method.
    */
    public function getSettingNonComplianceReport(): GetSettingNonComplianceReportRequestBuilder {
        return new GetSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/reports{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Read properties and relationships of the deviceManagementReports object.
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/intune-reporting-devicemanagementreports-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementReports::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the properties of a deviceManagementReports object.
     * @param DeviceManagementReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/intune-reporting-devicemanagementreports-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DeviceManagementReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementReports::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * Read properties and relationships of the deviceManagementReports object.
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Update the properties of a deviceManagementReports object.
     * @param DeviceManagementReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ReportsRequestBuilder
    */
    public function withUrl(string $rawUrl): ReportsRequestBuilder {
        return new ReportsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
