<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Event;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Accept\AcceptRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Decline\DeclineRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\DismissReminder\DismissReminderRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Forward\ForwardRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\InstancesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\SnoozeReminder\SnoozeReminderRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\TentativelyAccept\TentativelyAcceptRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the events property of the microsoft.graph.calendar entity.
*/
class EventItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the accept method.
    */
    public function accept(): AcceptRequestBuilder {
        return new AcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.event entity.
    */
    public function attachments(): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendar property of the microsoft.graph.event entity.
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancel method.
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the decline method.
    */
    public function decline(): DeclineRequestBuilder {
        return new DeclineRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dismissReminder method.
    */
    public function dismissReminder(): DismissReminderRequestBuilder {
        return new DismissReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.event entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the forward method.
    */
    public function forward(): ForwardRequestBuilder {
        return new ForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the instances property of the microsoft.graph.event entity.
    */
    public function instances(): InstancesRequestBuilder {
        return new InstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the snoozeReminder method.
    */
    public function snoozeReminder(): SnoozeReminderRequestBuilder {
        return new SnoozeReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tentativelyAccept method.
    */
    public function tentativelyAccept(): TentativelyAcceptRequestBuilder {
        return new TentativelyAcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EventItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/calendars/{calendar%2Did}/events/{event%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property events for users
     * @param EventItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EventItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The events in the calendar. Navigation property. Read-only.
     * @param EventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Event|null>
     * @throws Exception
    */
    public function get(?EventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Event::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update an event object. This API is available in the following national cloud deployments.
     * @param Event $body The request body
     * @param EventItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Event|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/group-update-event?view=graph-rest-1.0 Find more info here
    */
    public function patch(Event $body, ?EventItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Event::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property events for users
     * @param EventItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EventItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The events in the calendar. Navigation property. Read-only.
     * @param EventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update an event object. This API is available in the following national cloud deployments.
     * @param Event $body The request body
     * @param EventItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Event $body, ?EventItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EventItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EventItemRequestBuilder {
        return new EventItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
