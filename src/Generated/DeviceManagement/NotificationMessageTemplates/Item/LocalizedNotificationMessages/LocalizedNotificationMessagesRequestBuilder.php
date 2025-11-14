<?php

namespace Microsoft\Graph\Generated\DeviceManagement\NotificationMessageTemplates\Item\LocalizedNotificationMessages;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\NotificationMessageTemplates\Item\LocalizedNotificationMessages\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\NotificationMessageTemplates\Item\LocalizedNotificationMessages\Item\LocalizedNotificationMessageItemRequestBuilder;
use Microsoft\Graph\Generated\Models\LocalizedNotificationMessage;
use Microsoft\Graph\Generated\Models\LocalizedNotificationMessageCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the localizedNotificationMessages property of the microsoft.graph.notificationMessageTemplate entity.
*/
class LocalizedNotificationMessagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the localizedNotificationMessages property of the microsoft.graph.notificationMessageTemplate entity.
     * @param string $localizedNotificationMessageId The unique identifier of localizedNotificationMessage
     * @return LocalizedNotificationMessageItemRequestBuilder
    */
    public function byLocalizedNotificationMessageId(string $localizedNotificationMessageId): LocalizedNotificationMessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['localizedNotificationMessage%2Did'] = $localizedNotificationMessageId;
        return new LocalizedNotificationMessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LocalizedNotificationMessagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/notificationMessageTemplates/{notificationMessageTemplate%2Did}/localizedNotificationMessages{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of localized messages for this Notification Message Template.
     * @param LocalizedNotificationMessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LocalizedNotificationMessageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?LocalizedNotificationMessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LocalizedNotificationMessageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to localizedNotificationMessages for deviceManagement
     * @param LocalizedNotificationMessage $body The request body
     * @param LocalizedNotificationMessagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LocalizedNotificationMessage|null>
     * @throws Exception
    */
    public function post(LocalizedNotificationMessage $body, ?LocalizedNotificationMessagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LocalizedNotificationMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of localized messages for this Notification Message Template.
     * @param LocalizedNotificationMessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LocalizedNotificationMessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to localizedNotificationMessages for deviceManagement
     * @param LocalizedNotificationMessage $body The request body
     * @param LocalizedNotificationMessagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LocalizedNotificationMessage $body, ?LocalizedNotificationMessagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LocalizedNotificationMessagesRequestBuilder
    */
    public function withUrl(string $rawUrl): LocalizedNotificationMessagesRequestBuilder {
        return new LocalizedNotificationMessagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
