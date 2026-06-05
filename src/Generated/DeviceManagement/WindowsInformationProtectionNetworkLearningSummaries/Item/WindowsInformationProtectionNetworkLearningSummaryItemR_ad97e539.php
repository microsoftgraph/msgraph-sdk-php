<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WindowsInformationProtectionNetworkLearningSummary;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsInformationProtectionNetworkLearningSummaries property of the microsoft.graph.deviceManagement entity. Original name: WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilder
*/
class WindowsInformationProtectionNetworkLearningSummaryItemR_ad97e539 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WindowsInformationProtectionNetworkLearningSummaryItemR_ad97e539 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/windowsInformationProtectionNetworkLearningSummaries/{windowsInformationProtectionNetworkLearningSummary%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property windowsInformationProtectionNetworkLearningSummaries for deviceManagement
     * @param WindowsInformationProtectionNetworkLearningSummaryItemR_ab2482d2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WindowsInformationProtectionNetworkLearningSummaryItemR_ab2482d2 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The windows information protection network learning summaries.
     * @param WindowsInformationProtectionNetworkLearningSummaryItemR_21910a52|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsInformationProtectionNetworkLearningSummary|null>
     * @throws Exception
    */
    public function get(?WindowsInformationProtectionNetworkLearningSummaryItemR_21910a52 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsInformationProtectionNetworkLearningSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property windowsInformationProtectionNetworkLearningSummaries in deviceManagement
     * @param WindowsInformationProtectionNetworkLearningSummary $body The request body
     * @param WindowsInformationProtectionNetworkLearningSummaryItemR_79373e49|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsInformationProtectionNetworkLearningSummary|null>
     * @throws Exception
    */
    public function patch(WindowsInformationProtectionNetworkLearningSummary $body, ?WindowsInformationProtectionNetworkLearningSummaryItemR_79373e49 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsInformationProtectionNetworkLearningSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property windowsInformationProtectionNetworkLearningSummaries for deviceManagement
     * @param WindowsInformationProtectionNetworkLearningSummaryItemR_ab2482d2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsInformationProtectionNetworkLearningSummaryItemR_ab2482d2 $requestConfiguration = null): RequestInformation {
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
     * The windows information protection network learning summaries.
     * @param WindowsInformationProtectionNetworkLearningSummaryItemR_21910a52|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsInformationProtectionNetworkLearningSummaryItemR_21910a52 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property windowsInformationProtectionNetworkLearningSummaries in deviceManagement
     * @param WindowsInformationProtectionNetworkLearningSummary $body The request body
     * @param WindowsInformationProtectionNetworkLearningSummaryItemR_79373e49|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsInformationProtectionNetworkLearningSummary $body, ?WindowsInformationProtectionNetworkLearningSummaryItemR_79373e49 $requestConfiguration = null): RequestInformation {
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
     * @return WindowsInformationProtectionNetworkLearningSummaryItemR_ad97e539
    */
    public function withUrl(string $rawUrl): WindowsInformationProtectionNetworkLearningSummaryItemR_ad97e539 {
        return new WindowsInformationProtectionNetworkLearningSummaryItemR_ad97e539($rawUrl, $this->requestAdapter);
    }

}
