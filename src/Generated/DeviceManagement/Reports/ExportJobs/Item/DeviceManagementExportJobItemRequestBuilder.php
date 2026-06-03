<?php

namespace Microsoft\Graph\Generated\DeviceManagement\Reports\ExportJobs\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DeviceManagementExportJob;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the exportJobs property of the microsoft.graph.deviceManagementReports entity.
*/
class DeviceManagementExportJobItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceManagementExportJobItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/reports/exportJobs/{deviceManagementExportJob%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property exportJobs for deviceManagement
     * @param DeviceManagementExportJobItemRequestBuilderDeleteReques_9bd23106|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementExportJobItemRequestBuilderDeleteReques_9bd23106 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Entity representing a job to export a report.
     * @param DeviceManagementExportJobItemRequestBuilderGetRequestCo_6f349afe|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementExportJob|null>
     * @throws Exception
    */
    public function get(?DeviceManagementExportJobItemRequestBuilderGetRequestCo_6f349afe $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementExportJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property exportJobs in deviceManagement
     * @param DeviceManagementExportJob $body The request body
     * @param DeviceManagementExportJobItemRequestBuilderPatchRequest_74ee3728|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementExportJob|null>
     * @throws Exception
    */
    public function patch(DeviceManagementExportJob $body, ?DeviceManagementExportJobItemRequestBuilderPatchRequest_74ee3728 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementExportJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property exportJobs for deviceManagement
     * @param DeviceManagementExportJobItemRequestBuilderDeleteReques_9bd23106|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementExportJobItemRequestBuilderDeleteReques_9bd23106 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Entity representing a job to export a report.
     * @param DeviceManagementExportJobItemRequestBuilderGetRequestCo_6f349afe|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementExportJobItemRequestBuilderGetRequestCo_6f349afe $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update the navigation property exportJobs in deviceManagement
     * @param DeviceManagementExportJob $body The request body
     * @param DeviceManagementExportJobItemRequestBuilderPatchRequest_74ee3728|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementExportJob $body, ?DeviceManagementExportJobItemRequestBuilderPatchRequest_74ee3728 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DeviceManagementExportJobItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementExportJobItemRequestBuilder {
        return new DeviceManagementExportJobItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
