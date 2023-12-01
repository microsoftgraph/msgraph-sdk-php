<?php

namespace Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\Item\AppLogCollectionRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\Item\AppLogCollectionRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\Item\AppLogCollectionRequests\Item\AppLogCollectionRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AppLogCollectionRequest;
use Microsoft\Graph\Generated\Models\AppLogCollectionRequestCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the appLogCollectionRequests property of the microsoft.graph.mobileAppTroubleshootingEvent entity.
*/
class AppLogCollectionRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appLogCollectionRequests property of the microsoft.graph.mobileAppTroubleshootingEvent entity.
     * @param string $appLogCollectionRequestId The unique identifier of appLogCollectionRequest
     * @return AppLogCollectionRequestItemRequestBuilder
    */
    public function byAppLogCollectionRequestId(string $appLogCollectionRequestId): AppLogCollectionRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appLogCollectionRequest%2Did'] = $appLogCollectionRequestId;
        return new AppLogCollectionRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AppLogCollectionRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/mobileAppTroubleshootingEvents/{mobileAppTroubleshootingEvent%2Did}/appLogCollectionRequests{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the appLogCollectionRequest objects.
     * @param AppLogCollectionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AppLogCollectionRequestCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-applogcollectionrequest-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?AppLogCollectionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AppLogCollectionRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new appLogCollectionRequest object.
     * @param AppLogCollectionRequest $body The request body
     * @param AppLogCollectionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AppLogCollectionRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-applogcollectionrequest-create?view=graph-rest-1.0 Find more info here
    */
    public function post(AppLogCollectionRequest $body, ?AppLogCollectionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AppLogCollectionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the appLogCollectionRequest objects.
     * @param AppLogCollectionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AppLogCollectionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new appLogCollectionRequest object.
     * @param AppLogCollectionRequest $body The request body
     * @param AppLogCollectionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AppLogCollectionRequest $body, ?AppLogCollectionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AppLogCollectionRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): AppLogCollectionRequestsRequestBuilder {
        return new AppLogCollectionRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
