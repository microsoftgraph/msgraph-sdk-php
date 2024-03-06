<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DetectedApps;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\DetectedApps\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DetectedApps\Item\DetectedAppItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DetectedApp;
use Microsoft\Graph\Generated\Models\DetectedAppCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the detectedApps property of the microsoft.graph.deviceManagement entity.
*/
class DetectedAppsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the detectedApps property of the microsoft.graph.deviceManagement entity.
     * @param string $detectedAppId The unique identifier of detectedApp
     * @return DetectedAppItemRequestBuilder
    */
    public function byDetectedAppId(string $detectedAppId): DetectedAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['detectedApp%2Did'] = $detectedAppId;
        return new DetectedAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DetectedAppsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/detectedApps{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the detectedApp objects.
     * @param DetectedAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DetectedAppCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-detectedapp-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?DetectedAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DetectedAppCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new detectedApp object.
     * @param DetectedApp $body The request body
     * @param DetectedAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DetectedApp|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-detectedapp-create?view=graph-rest-1.0 Find more info here
    */
    public function post(DetectedApp $body, ?DetectedAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DetectedApp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the detectedApp objects.
     * @param DetectedAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DetectedAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new detectedApp object.
     * @param DetectedApp $body The request body
     * @param DetectedAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DetectedApp $body, ?DetectedAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/detectedApps';
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
     * @return DetectedAppsRequestBuilder
    */
    public function withUrl(string $rawUrl): DetectedAppsRequestBuilder {
        return new DetectedAppsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
