<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\BookingAppointment;
use Microsoft\Graph\Generated\Models\BookingAppointmentCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\Item\BookingAppointmentItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the calendarView property of the microsoft.graph.bookingBusiness entity.
*/
class CalendarViewRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.bookingBusiness entity.
     * @param string $bookingAppointmentId The unique identifier of bookingAppointment
     * @return BookingAppointmentItemRequestBuilder
    */
    public function byBookingAppointmentId(string $bookingAppointmentId): BookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment%2Did'] = $bookingAppointmentId;
        return new BookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CalendarViewRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/bookingBusinesses/{bookingBusiness%2Did}/calendarView?end={end}&start={start}{&%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The set of appointments of this business in a specified date range. Read-only. Nullable.
     * @param CalendarViewRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BookingAppointmentCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CalendarViewRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BookingAppointmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to calendarView for solutions
     * @param BookingAppointment $body The request body
     * @param CalendarViewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BookingAppointment|null>
     * @throws Exception
    */
    public function post(BookingAppointment $body, ?CalendarViewRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BookingAppointment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The set of appointments of this business in a specified date range. Read-only. Nullable.
     * @param CalendarViewRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CalendarViewRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to calendarView for solutions
     * @param BookingAppointment $body The request body
     * @param CalendarViewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BookingAppointment $body, ?CalendarViewRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/solutions/bookingBusinesses/{bookingBusiness%2Did}/calendarView';
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
     * @return CalendarViewRequestBuilder
    */
    public function withUrl(string $rawUrl): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
