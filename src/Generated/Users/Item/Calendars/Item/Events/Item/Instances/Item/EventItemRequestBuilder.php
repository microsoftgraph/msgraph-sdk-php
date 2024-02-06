<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Event;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\Accept\AcceptRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\Decline\DeclineRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\DismissReminder\DismissReminderRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\Forward\ForwardRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\SnoozeReminder\SnoozeReminderRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances\Item\TentativelyAccept\TentativelyAcceptRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the instances property of the microsoft.graph.event entity.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/calendars/{calendar%2Did}/events/{event%2Did}/instances/{event%2Did1}?endDateTime={endDateTime}&startDateTime={startDateTime}{&%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
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
     * The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return EventItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EventItemRequestBuilder {
        return new EventItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
