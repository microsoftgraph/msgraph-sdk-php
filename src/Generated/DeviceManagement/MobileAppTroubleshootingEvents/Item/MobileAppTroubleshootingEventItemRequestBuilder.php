<?php

namespace Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\Item\AppLogCollectionRequests\AppLogCollectionRequestsRequestBuilder;
use Microsoft\Graph\Generated\Models\MobileAppTroubleshootingEvent;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileAppTroubleshootingEvents property of the microsoft.graph.deviceManagement entity.
*/
class MobileAppTroubleshootingEventItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the appLogCollectionRequests property of the microsoft.graph.mobileAppTroubleshootingEvent entity.
    */
    public function appLogCollectionRequests(): AppLogCollectionRequestsRequestBuilder {
        return new AppLogCollectionRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MobileAppTroubleshootingEventItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/mobileAppTroubleshootingEvents/{mobileAppTroubleshootingEvent%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a mobileAppTroubleshootingEvent.
     * @param MobileAppTroubleshootingEventItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-mobileapptroubleshootingevent-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?MobileAppTroubleshootingEventItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the mobileAppTroubleshootingEvent object.
     * @param MobileAppTroubleshootingEventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileAppTroubleshootingEvent|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-mobileapptroubleshootingevent-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?MobileAppTroubleshootingEventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileAppTroubleshootingEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a mobileAppTroubleshootingEvent object.
     * @param MobileAppTroubleshootingEvent $body The request body
     * @param MobileAppTroubleshootingEventItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileAppTroubleshootingEvent|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-mobileapptroubleshootingevent-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(MobileAppTroubleshootingEvent $body, ?MobileAppTroubleshootingEventItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileAppTroubleshootingEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a mobileAppTroubleshootingEvent.
     * @param MobileAppTroubleshootingEventItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MobileAppTroubleshootingEventItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read properties and relationships of the mobileAppTroubleshootingEvent object.
     * @param MobileAppTroubleshootingEventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileAppTroubleshootingEventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a mobileAppTroubleshootingEvent object.
     * @param MobileAppTroubleshootingEvent $body The request body
     * @param MobileAppTroubleshootingEventItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MobileAppTroubleshootingEvent $body, ?MobileAppTroubleshootingEventItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MobileAppTroubleshootingEventItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MobileAppTroubleshootingEventItemRequestBuilder {
        return new MobileAppTroubleshootingEventItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
