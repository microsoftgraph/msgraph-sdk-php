<?php

namespace Microsoft\Graph\Generated\DeviceManagement\Reports;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceManagement\Reports\ExportJobs\ExportJobsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\ExportJobs\Item\DeviceManagementExportJobItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetCachedReport\MicrosoftGraphGetCachedReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyNonComplianceReport\MicrosoftGraphGetCompliancePolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReport\MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetComplianceSettingNonComplianceReport\MicrosoftGraphGetComplianceSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyNonComplianceReport\MicrosoftGraphGetConfigurationPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReport\MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationSettingNonComplianceReport\MicrosoftGraphGetConfigurationSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfiles\MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceManagementIntentSettingsReport\MicrosoftGraphGetDeviceManagementIntentSettingsReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceNonComplianceReport\MicrosoftGraphGetDeviceNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetDevicesWithoutCompliancePolicyReport\MicrosoftGraphGetDevicesWithoutCompliancePolicyReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetHistoricalReport\MicrosoftGraphGetHistoricalReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetNoncompliantDevicesAndSettingsReport\MicrosoftGraphGetNoncompliantDevicesAndSettingsReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceMetadata\MicrosoftGraphGetPolicyNonComplianceMetadataRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceReport\MicrosoftGraphGetPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceSummaryReport\MicrosoftGraphGetPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetReportFilters\MicrosoftGraphGetReportFiltersRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\Reports\MicrosoftGraphGetSettingNonComplianceReport\MicrosoftGraphGetSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceManagementReports;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the reports property of the microsoft.graph.deviceManagement entity.
*/
class ReportsRequestBuilder 
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
    public function microsoftGraphGetCachedReport(): MicrosoftGraphGetCachedReportRequestBuilder {
        return new MicrosoftGraphGetCachedReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceReport method.
    */
    public function microsoftGraphGetCompliancePolicyNonComplianceReport(): MicrosoftGraphGetCompliancePolicyNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetCompliancePolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetCompliancePolicyNonComplianceSummaryReport(): MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingNonComplianceReport method.
    */
    public function microsoftGraphGetComplianceSettingNonComplianceReport(): MicrosoftGraphGetComplianceSettingNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetComplianceSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceReport method.
    */
    public function microsoftGraphGetConfigurationPolicyNonComplianceReport(): MicrosoftGraphGetConfigurationPolicyNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetConfigurationPolicyNonComplianceSummaryReport(): MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingNonComplianceReport method.
    */
    public function microsoftGraphGetConfigurationSettingNonComplianceReport(): MicrosoftGraphGetConfigurationSettingNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentPerSettingContributingProfiles method.
    */
    public function microsoftGraphGetDeviceManagementIntentPerSettingContributingProfiles(): MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder {
        return new MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentSettingsReport method.
    */
    public function microsoftGraphGetDeviceManagementIntentSettingsReport(): MicrosoftGraphGetDeviceManagementIntentSettingsReportRequestBuilder {
        return new MicrosoftGraphGetDeviceManagementIntentSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceNonComplianceReport method.
    */
    public function microsoftGraphGetDeviceNonComplianceReport(): MicrosoftGraphGetDeviceNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetDeviceNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicesWithoutCompliancePolicyReport method.
    */
    public function microsoftGraphGetDevicesWithoutCompliancePolicyReport(): MicrosoftGraphGetDevicesWithoutCompliancePolicyReportRequestBuilder {
        return new MicrosoftGraphGetDevicesWithoutCompliancePolicyReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getHistoricalReport method.
    */
    public function microsoftGraphGetHistoricalReport(): MicrosoftGraphGetHistoricalReportRequestBuilder {
        return new MicrosoftGraphGetHistoricalReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNoncompliantDevicesAndSettingsReport method.
    */
    public function microsoftGraphGetNoncompliantDevicesAndSettingsReport(): MicrosoftGraphGetNoncompliantDevicesAndSettingsReportRequestBuilder {
        return new MicrosoftGraphGetNoncompliantDevicesAndSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceMetadata method.
    */
    public function microsoftGraphGetPolicyNonComplianceMetadata(): MicrosoftGraphGetPolicyNonComplianceMetadataRequestBuilder {
        return new MicrosoftGraphGetPolicyNonComplianceMetadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceReport method.
    */
    public function microsoftGraphGetPolicyNonComplianceReport(): MicrosoftGraphGetPolicyNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetPolicyNonComplianceSummaryReport(): MicrosoftGraphGetPolicyNonComplianceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getReportFilters method.
    */
    public function microsoftGraphGetReportFilters(): MicrosoftGraphGetReportFiltersRequestBuilder {
        return new MicrosoftGraphGetReportFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSettingNonComplianceReport method.
    */
    public function microsoftGraphGetSettingNonComplianceReport(): MicrosoftGraphGetSettingNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/reports{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
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
     * Provides operations to manage the exportJobs property of the microsoft.graph.deviceManagementReports entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementExportJobItemRequestBuilder
    */
    public function exportJobsById(string $id): DeviceManagementExportJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementExportJob%2Did'] = $id;
        return new DeviceManagementExportJobItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Reports singleton
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
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
     * Update the navigation property reports in deviceManagement
     * @param DeviceManagementReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
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
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Reports singleton
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * @param DeviceManagementReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
