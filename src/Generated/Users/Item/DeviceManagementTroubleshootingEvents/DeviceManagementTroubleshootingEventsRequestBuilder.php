<?php

namespace Microsoft\Graph\Generated\Users\Item\DeviceManagementTroubleshootingEvents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DeviceManagementTroubleshootingEvent;
use Microsoft\Graph\Generated\Models\DeviceManagementTroubleshootingEventCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\DeviceManagementTroubleshootingEvents\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DeviceManagementTroubleshootingEvents\Item\DeviceManagementTroubleshootingEventItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceManagementTroubleshootingEvents property of the microsoft.graph.user entity.
*/
class DeviceManagementTroubleshootingEventsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceManagementTroubleshootingEvents property of the microsoft.graph.user entity.
     * @param string $deviceManagementTroubleshootingEventId The unique identifier of deviceManagementTroubleshootingEvent
     * @return DeviceManagementTroubleshootingEventItemRequestBuilder
    */
    public function byDeviceManagementTroubleshootingEventId(string $deviceManagementTroubleshootingEventId): DeviceManagementTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTroubleshootingEvent%2Did'] = $deviceManagementTroubleshootingEventId;
        return new DeviceManagementTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceManagementTroubleshootingEventsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/deviceManagementTroubleshootingEvents{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of troubleshooting events for this user.
     * @param DeviceManagementTroubleshootingEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementTroubleshootingEventCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceManagementTroubleshootingEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementTroubleshootingEventCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceManagementTroubleshootingEvents for users
     * @param DeviceManagementTroubleshootingEvent $body The request body
     * @param DeviceManagementTroubleshootingEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementTroubleshootingEvent|null>
     * @throws Exception
    */
    public function post(DeviceManagementTroubleshootingEvent $body, ?DeviceManagementTroubleshootingEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementTroubleshootingEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of troubleshooting events for this user.
     * @param DeviceManagementTroubleshootingEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementTroubleshootingEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceManagementTroubleshootingEvents for users
     * @param DeviceManagementTroubleshootingEvent $body The request body
     * @param DeviceManagementTroubleshootingEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementTroubleshootingEvent $body, ?DeviceManagementTroubleshootingEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementTroubleshootingEventsRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementTroubleshootingEventsRequestBuilder {
        return new DeviceManagementTroubleshootingEventsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
