<?php

namespace Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Event;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\Accept\AcceptRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\Decline\DeclineRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\DismissReminder\DismissReminderRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\Forward\ForwardRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\PermanentDelete\PermanentDeleteRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\SnoozeReminder\SnoozeReminderRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\Instances\Item\ExceptionOccurrences\Item\TentativelyAccept\TentativelyAcceptRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the exceptionOccurrences property of the microsoft.graph.event entity.
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
     * Provides operations to call the permanentDelete method.
    */
    public function permanentDelete(): PermanentDeleteRequestBuilder {
        return new PermanentDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/calendarView/{event%2Did}/instances/{event%2Did1}/exceptionOccurrences/{event%2Did2}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Contains the id property values of the event instances that are exceptions in a recurring series.Exceptions can differ from other occurrences in a recurring series, such as the subject, start or end times, or attendees. Exceptions don't include canceled occurrences.Returned only on $select and $expand in a GET operation that specifies the ID (seriesMasterId property value) of a series master event.
     * @param EventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Event|null>
     * @throws Exception
    */
    public function get(?EventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Event::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Contains the id property values of the event instances that are exceptions in a recurring series.Exceptions can differ from other occurrences in a recurring series, such as the subject, start or end times, or attendees. Exceptions don't include canceled occurrences.Returned only on $select and $expand in a GET operation that specifies the ID (seriesMasterId property value) of a series master event.
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
