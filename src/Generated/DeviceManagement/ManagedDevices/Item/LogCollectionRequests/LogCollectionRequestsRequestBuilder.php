<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\LogCollectionRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\LogCollectionRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\LogCollectionRequests\Item\DeviceLogCollectionResponseItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceLogCollectionResponse;
use Microsoft\Graph\Generated\Models\DeviceLogCollectionResponseCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the logCollectionRequests property of the microsoft.graph.managedDevice entity.
*/
class LogCollectionRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the logCollectionRequests property of the microsoft.graph.managedDevice entity.
     * @param string $deviceLogCollectionResponseId The unique identifier of deviceLogCollectionResponse
     * @return DeviceLogCollectionResponseItemRequestBuilder
    */
    public function byDeviceLogCollectionResponseId(string $deviceLogCollectionResponseId): DeviceLogCollectionResponseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceLogCollectionResponse%2Did'] = $deviceLogCollectionResponseId;
        return new DeviceLogCollectionResponseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LogCollectionRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/managedDevices/{managedDevice%2Did}/logCollectionRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List of log collection requests
     * @param LogCollectionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceLogCollectionResponseCollectionResponse|null>
     * @throws Exception
    */
    public function get(?LogCollectionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceLogCollectionResponseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to logCollectionRequests for deviceManagement
     * @param DeviceLogCollectionResponse $body The request body
     * @param LogCollectionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceLogCollectionResponse|null>
     * @throws Exception
    */
    public function post(DeviceLogCollectionResponse $body, ?LogCollectionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceLogCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List of log collection requests
     * @param LogCollectionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LogCollectionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to logCollectionRequests for deviceManagement
     * @param DeviceLogCollectionResponse $body The request body
     * @param LogCollectionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceLogCollectionResponse $body, ?LogCollectionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LogCollectionRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): LogCollectionRequestsRequestBuilder {
        return new LogCollectionRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
