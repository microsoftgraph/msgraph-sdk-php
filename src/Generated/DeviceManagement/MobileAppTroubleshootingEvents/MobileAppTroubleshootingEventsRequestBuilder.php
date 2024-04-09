<?php

namespace Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\Item\MobileAppTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Generated\Models\MobileAppTroubleshootingEvent;
use Microsoft\Graph\Generated\Models\MobileAppTroubleshootingEventCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileAppTroubleshootingEvents property of the microsoft.graph.deviceManagement entity.
*/
class MobileAppTroubleshootingEventsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppTroubleshootingEvents property of the microsoft.graph.deviceManagement entity.
     * @param string $mobileAppTroubleshootingEventId The unique identifier of mobileAppTroubleshootingEvent
     * @return MobileAppTroubleshootingEventItemRequestBuilder
    */
    public function byMobileAppTroubleshootingEventId(string $mobileAppTroubleshootingEventId): MobileAppTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppTroubleshootingEvent%2Did'] = $mobileAppTroubleshootingEventId;
        return new MobileAppTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MobileAppTroubleshootingEventsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/mobileAppTroubleshootingEvents{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the mobileAppTroubleshootingEvent objects.
     * @param MobileAppTroubleshootingEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileAppTroubleshootingEventCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-mobileapptroubleshootingevent-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?MobileAppTroubleshootingEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileAppTroubleshootingEventCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new mobileAppTroubleshootingEvent object.
     * @param MobileAppTroubleshootingEvent $body The request body
     * @param MobileAppTroubleshootingEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileAppTroubleshootingEvent|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-mobileapptroubleshootingevent-create?view=graph-rest-1.0 Find more info here
    */
    public function post(MobileAppTroubleshootingEvent $body, ?MobileAppTroubleshootingEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileAppTroubleshootingEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the mobileAppTroubleshootingEvent objects.
     * @param MobileAppTroubleshootingEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileAppTroubleshootingEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new mobileAppTroubleshootingEvent object.
     * @param MobileAppTroubleshootingEvent $body The request body
     * @param MobileAppTroubleshootingEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MobileAppTroubleshootingEvent $body, ?MobileAppTroubleshootingEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MobileAppTroubleshootingEventsRequestBuilder
    */
    public function withUrl(string $rawUrl): MobileAppTroubleshootingEventsRequestBuilder {
        return new MobileAppTroubleshootingEventsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
