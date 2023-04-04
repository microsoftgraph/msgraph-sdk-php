<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BookingAppointmentItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var BookingAppointmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BookingAppointmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BookingAppointmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BookingAppointmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BookingAppointmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BookingAppointmentItemRequestBuilderGetQueryParameters.
     * @param string|null $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @param string|null $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @return BookingAppointmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $end = null, ?array $expand = null, ?array $select = null, ?string $start = null): BookingAppointmentItemRequestBuilderGetQueryParameters {
        return new BookingAppointmentItemRequestBuilderGetQueryParameters($end, $expand, $select, $start);
    }

}
