<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\Item\WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WindowsInformationProtectionNetworkLearningSummary;
use Microsoft\Graph\Generated\Models\WindowsInformationProtectionNetworkLearningSummaryCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsInformationProtectionNetworkLearningSummaries property of the microsoft.graph.deviceManagement entity.
*/
class WindowsInformationProtectionNetworkLearningSummariesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionNetworkLearningSummaries property of the microsoft.graph.deviceManagement entity.
     * @param string $windowsInformationProtectionNetworkLearningSummaryId The unique identifier of windowsInformationProtectionNetworkLearningSummary
     * @return WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder
    */
    public function byWindowsInformationProtectionNetworkLearningSummaryId(string $windowsInformationProtectionNetworkLearningSummaryId): WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionNetworkLearningSummary%2Did'] = $windowsInformationProtectionNetworkLearningSummaryId;
        return new WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsInformationProtectionNetworkLearningSummariesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/windowsInformationProtectionNetworkLearningSummaries{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the windowsInformationProtectionNetworkLearningSummary objects.
     * @param WindowsInformationProtectionNetworkLearningSummariesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsInformationProtectionNetworkLearningSummaryCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-wip-windowsinformationprotectionnetworklearningsummary-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?WindowsInformationProtectionNetworkLearningSummariesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsInformationProtectionNetworkLearningSummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new windowsInformationProtectionNetworkLearningSummary object.
     * @param WindowsInformationProtectionNetworkLearningSummary $body The request body
     * @param WindowsInformationProtectionNetworkLearningSummariesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsInformationProtectionNetworkLearningSummary|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-wip-windowsinformationprotectionnetworklearningsummary-create?view=graph-rest-1.0 Find more info here
    */
    public function post(WindowsInformationProtectionNetworkLearningSummary $body, ?WindowsInformationProtectionNetworkLearningSummariesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsInformationProtectionNetworkLearningSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the windowsInformationProtectionNetworkLearningSummary objects.
     * @param WindowsInformationProtectionNetworkLearningSummariesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsInformationProtectionNetworkLearningSummariesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new windowsInformationProtectionNetworkLearningSummary object.
     * @param WindowsInformationProtectionNetworkLearningSummary $body The request body
     * @param WindowsInformationProtectionNetworkLearningSummariesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WindowsInformationProtectionNetworkLearningSummary $body, ?WindowsInformationProtectionNetworkLearningSummariesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return WindowsInformationProtectionNetworkLearningSummariesRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsInformationProtectionNetworkLearningSummariesRequestBuilder {
        return new WindowsInformationProtectionNetworkLearningSummariesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
